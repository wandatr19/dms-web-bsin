<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    protected $data;
    public function __construct()
    {
        $this->data = new User();
    }
    //
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
            // 'user_access' => 'required',
            'password' => 'required',
            'department' => 'required',

        ]);
        // $user_access = implode(',', $request->input('user_access'));

        $this->data->name = $validatedData['name'];
        $this->data->email = $validatedData['email'];
        $this->data->role = $validatedData['role'];
        $this->data->department = $validatedData['department'];
        $this->data->password = bcrypt($validatedData['password']);

        $this->data->setRememberToken(Str::random(60));
        // $this->data->user_acess = $request->input('user_access');
        $this->data->save();

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
