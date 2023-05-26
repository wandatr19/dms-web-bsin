<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    // protected $data;
    // public function __construct()
    // {
    //     $this->data = new User();
    // }
    public function create()
    {
        return view('admin.adduser');
    }
    public function index()
    {
        $users = User::all();
        return view('admin.listuser', ['users' => $users]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'user_access' => 'required|array',
            'password' => 'required',
            'department' => 'required',

        ]);

        $data = new User();
        $data->name = $validatedData['name'];
        $data->email = $validatedData['email'];
        $data->role = $validatedData['role'];
        $data->user_access  = implode(',', $validatedData['user_access'] ?? []);
        $data->department = $validatedData['department'];
        $data->password = Hash::make($validatedData['password']);
        $data->remember_token = Str::random(60);
        $data->save();

        foreach ($validatedData['user_access'] as $value) {
            $data->userAccess()->create(['value' => $value]);
        }

        
        return redirect()->route('adduser')->with('success', 'Pengguna Berhasil Ditambahkan!');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            // Tindakan lain setelah penghapusan data
            return redirect()->route('listuser')->with('success', 'Pengguna Berhasil Dihapus!');
        }
    }
}
