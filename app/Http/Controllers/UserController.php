<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
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
        activity()->withoutLogs(function () use ($request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'user_access' => 'nullable|array',
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
        });
        return redirect()->route('adduser')->with('success', 'Pengguna Berhasil Ditambahkan!');
    }
    public function edit(User $user)
    {
        $user->user_access = explode(',', $user->user_access);
        return view('admin.edituser', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        activity()->withoutLogs(function () use ($request, $user) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable',
            'user_access' => 'nullable|array',
        ]);

        $validatedData['user_access'] = implode(',', $validatedData['user_access']);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->update($validatedData);
        });
        return redirect()->route('listuser')->with('success1', 'Data pengguna berhasil diperbarui.');
    }
    public function deleteUser($id)
    {
        activity()->withoutLogs(function () use ($id) {
            $user = User::find($id);
            if ($user) {
                $user->delete();
            }
        });
        return redirect()->route('listuser')->with('success', 'Pengguna Berhasil Dihapus!');
            
    }

}
