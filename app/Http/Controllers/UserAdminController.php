<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserAdminController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;    
    }

    public function index() 
    {
        return view('layouts.back.super_admin.user_admin.index');
    }

    public function getUser()
    {
        $param = [];
        $param['get_by_role'] = 'admin';
        $user = $this->userRepository->getData($param)->get();

        return response()->json([
            'message' => 'All user admin',
            'user' => $user,
        ], 200);
    }
}
