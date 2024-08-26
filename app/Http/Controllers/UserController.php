<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;    
    }

    public function index() 
    {
        return view('layouts.back.admin.user.index');
    }

    public function getUser()
    {
        $user = $this->userRepository->getData()->get();

        return response()->json([
            'message' => 'All user',
            'user' => $user,
        ], 200);
    }

    public function create()
    {
        $roles = User::$roles;

        return view('layouts.back.admin.user.create', compact('roles'));
    }
}
