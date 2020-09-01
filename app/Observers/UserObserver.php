<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->photo = 'images/user-default.jpg';
        $user->bg_cover = 'images/bg-cover-default.jpg';
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        // if(substr($user->photo, 0, 7) != 'images/'){
        //     $user->photo = 'images/'.date('ymdHis').'-'.$user->photo;
        // }
        // if(substr($user->bg_cover, 0, 7) != 'images/'){
        //     $user->bg_cover = 'images/'.date('ymdHis').'-'.$user->bg_cover;
        // }
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
