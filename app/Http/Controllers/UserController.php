<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\CampaignReport;
use App\Models\Zakat;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Auth;
use Flash;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;
    private $data = '';

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

    public function index(Request $request)
    {
        $role = !is_null($request->input('role')) ? $request->input('role') : 'member' ;
        $users = $this->userRepository->all(['role' => $role]);
        $users = $users->where('role',$role);

        return view('admin.users.index')
            ->with('users', $users)
            ->with('role', $role);
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
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.users.show')->with('user', $this->data);
        }else{
            return redirect(route('users.index'));
        }
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.users.edit')->with('user', $this->data);
        }else{
            return redirect(route('users.index'));
        }
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $this->data_check($id);
        $data = User::find($id);
        $input = $request->all();

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
        $input['password'] = $data->password;
        $user = $this->userRepository->update($input, $id);

        Flash::success('Data berhasil diubah');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {

        $this->data_check($id);

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
    
    protected function data_check($id){
        if ($this->userRepository->find($id)) {
            $this->data = $this->userRepository->find($id);
            return true;
        }else{
            Flash::error('User not found');
            return false;
        }
    }
}
