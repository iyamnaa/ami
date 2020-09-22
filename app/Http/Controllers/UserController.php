<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\CampaignReport;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Zakat;
use App\Models\User;
use App\Repositories\UserRepository;
use Auth;
use Flash;
use Illuminate\Http\Request;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }


    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function front(Request $request)
    {
        $user = User::where('username', $request->username)->get()->first->id;
        if(!is_null($user)){
            $campaigns = Campaign::where('user_id', $user->id)->get();
            $donations = Donation::where('user_id', $user->id)->get();
            $reports = CampaignReport::where('user_id', $user->id)->get();
            $zakats = Zakat::where('user_id', $user->id)->get();
            return view('users.profile', [
                                        'user' => $user,
                                        'campaigns' => $campaigns,
                                        'donations' => $donations,
                                        'reports' => $reports,
                                        'zakats' => $zakats
                                    ]);
        }else{
            return redirect('/');
        }
    }

    public function profilEdit(Request $request){
        $user = User::where('username', $request->username)->get()->first->id;
        if(!is_null($user)){
            $id = $user->id;
            if(Auth::id() == $id){
                if($this->data_check($id)){
                    return view('users.edit')->with('user', $user);
                }else{
                    return redirect(route('users.index'));
                }
            }else{
                Flash::success('Terjadi Kesalahan.');
                return redirect(route('index'));
            }
        }else{
            return redirect('/');
        }
    }


    public function profilUpdate($id, UpdateUserRequest $request)
    {
        $this->data_check($id);
        $data = User::find($id);
        $input = $request->all();
        $input['role'] = $data->role;

        if($request->hasFile('form_photo')){
            $photo = $request->file('form_photo');
            $filename = date('ymdHis').'-'.$photo->getClientOriginalName();
            $location = public_path('/images/' . $filename);
            $photo->move(public_path(). '/images/', $filename);
            $input['photo'] = 'images/'.$filename;

            if(is_file(public_path().'/'.$data->photo)){
                unlink(public_path().'/'.$data->photo);
            }
        }else if($request->file('form_photo') == null){
            $input['photo'] = $data->photo;
        }else{
            $input['photo'] = 'images/user-default.jpg';
        }

        if($request->hasFile('form_bg_cover')){
            $cover = $request->file('form_bg_cover');
            $filename = date('ymdHis').'-'.$cover->getClientOriginalName();
            $location = public_path('/images/' . $filename);
            $cover->move(public_path(). '/images/', $filename);
            $input['bg_cover'] = 'images/'.$filename;

            if(is_file(public_path().'/'.$data->bg_cover)){
                unlink(public_path().'/'.$data->bg_cover);
            }
        }else if($request->file('form_bg_cover') == null){
            $input['bg_cover'] = $data->bg_cover;
        }else{
            $input['bg_cover'] = 'images/user-cover-default.jpg';
        }

        $input['email'] = $data->email;
        $input['role'] = $data->role;
        $input['password'] = $data->password;
        $user = $this->userRepository->update($input, $id);

        Flash::success('Data berhasil diubah');

        return redirect(url('profil/'.$input['username']));
    }

    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
