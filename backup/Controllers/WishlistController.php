<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Repositories\WishlistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WishlistController extends AppBaseController
{
    /** @var  WishlistRepository */
    private $wishlistRepository;
    private $data = '';

    public function __construct(WishlistRepository $wishlistRepo)
    {
        $this->wishlistRepository = $wishlistRepo;
    }

    public function campaignSave(CreateWishlistRequest $request)
    {
        try{
            $input = $request->all();
            $wishlist = $this->wishlistRepository->create($input);

            return response()->json(array('message' => 'success' ), 200);
        }catch(\Throwable $e){
            return response()->json(array('message' => $e->getMessage()), 200);
        }
    }

    /**
     * Display a listing of the Wishlist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $wishlists = $this->wishlistRepository->all();

        return view('admin.wishlists.index')
            ->with('wishlists', $wishlists);
    }

    /**
     * Show the form for creating a new Wishlist.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.wishlists.create');
    }

    /**
     * Store a newly created Wishlist in storage.
     *
     * @param CreateWishlistRequest $request
     *
     * @return Response
     */
    public function store(CreateWishlistRequest $request)
    {
        $input = $request->all();

        $wishlist = $this->wishlistRepository->create($input);

        Flash::success('Wishlist saved successfully.');

        return redirect(route('wishlists.index'));
    }

    /**
     * Display the specified Wishlist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if($this->data_check($id)){
            return view('admin.wishlists.show')->with('wishlist', $this->data);
        }else{
            return redirect(route('wishlists.index'));
        }
    }

    /**
     * Show the form for editing the specified Wishlist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if($this->data_check($id)){
            return view('admin.wishlists.edit')->with('wishlist', $this->data);
        }else{
            return redirect(route('wishlists.index'));
        }
    }

    /**
     * Update the specified Wishlist in storage.
     *
     * @param int $id
     * @param UpdateWishlistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWishlistRequest $request)
    {
        $this->data_check($id);

        $wishlist = $this->wishlistRepository->update($request->all(), $id);

        Flash::success('Wishlist updated successfully.');

        return redirect(route('wishlists.index'));
    }

    /**
     * Remove the specified Wishlist from storage.
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

        $this->wishlistRepository->delete($id);

        Flash::success('Wishlist deleted successfully.');

        return redirect(route('admin.wishlists.index'));
    }
    
    protected function data_check($id){
        if ($this->wishlistRepository->find($id)) {
            $this->data = $this->wishlistRepository->find($id);
            return true;
        }else{
            Flash::error('Wishlist not found');
            return false;
        }
    }
}
