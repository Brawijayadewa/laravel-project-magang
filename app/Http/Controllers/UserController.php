<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Repositories\AttachmentRepository;
use Illuminate\Http\Request;
use App\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userRepository, $attachmentRepository;

    public function __construct(UserRepository $userRepository, AttachmentRepository $attachmentRepository)
    {
        $this->userRepository = $userRepository;  
        $this->attachmentRepository = $attachmentRepository;  
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

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|max:255',
            'retype_password' => 'required|string|min:8|same:password|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|max:2046',
        ]);

        $input = $request->except('image');
        $input['password'] = Hash::make($request->password);
        $input['created_by'] = auth()->user()->id;
        $input['updated_by'] = auth()->user()->id;

        $user = User::create($input);

        if($request->hasFile('image'))
        {
            $this->attachmentRepository->create([
                'module' => User::$table_name,
                'name' => $request->username,
                'module_id' => $user->id,
                'image' => $request->image,
                'created_by' => $input['created_by'],
                'updated_by' => $input['updated_by'],
            ]);
        }

        return redirect()->route('user.index')->with('success', 'User successfully added');;
    }

    public function edit($id)
    {
        $param = [
            'get_by_id' => $id,
            'join_attachment' => true,
        ];
        $user = $this->userRepository->getData($param)
            ->select(
                'user.*', 
                DB::raw('attachment.url as url')
            )->first();
        $roles = User::$roles;

        return view('layouts.back.admin.user.edit', compact('roles', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|string|min:8|max:255',
            'retype_password' => 'nullable|string|min:8|same:password|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|max:2046',
        ]);

        $input = $request->except('image');
        $user = User::find($id);
        if($request->password)
        {
            $input['password'] = Hash::make($request->password);
        }
        else
        {
            $input['password'] = $user->password;
        }
        $input['created_by'] = auth()->user()->id;
        $input['updated_by'] = auth()->user()->id;

        $user->update($input);

        if($request->hasFile('image'))
        {
            $this->attachmentRepository->update([
                'module' => User::$table_name,
                'name' => $request->username,
                'module_id' => $user->id,
                'image' => $request->image,
                'created_by' => $input['created_by'],
                'updated_by' => $input['updated_by'],
            ]);
        }

        return redirect()->route('user.index')->with('success', 'User successfully updated');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->attachmentRepository->delete([
            'module' => User::$table_name,
            'module_id' => $user->id,
        ]);
        
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User successfully deleted'
        ], 200);
    }
}
