<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser()
    {
        $users = new UserRepository();
        return $users->getUser();
    }
}
