<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getUser()
    {
        $user = User::find(2);
        $profile = $user->profile;

        dump($profile);
    }

}
