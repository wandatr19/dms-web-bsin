<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function create()
    {
        $folders = Folder::all();
        return view('admin.adduser', compact('folders'));
    }
    public function index()
    {
        $users = User::all();
        $folders = Folder::all();
        return view('admin.listuser', [
            'users' => $users,
            'folders' => $folders
        ]);
    }
    public function store(Request $request)
    {
        activity()->withoutLogs(function () use ($request) {
            // $validatedData = Validator::make($request->all(), [
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email', // Menambahkan aturan unique untuk email
                'role' => 'required',
                'user_access' => 'nullable|array',
                'password' => 'required',
                'department' => 'required',
            ]);

            // Cek apakah validasi email gagal
            // if ($validatedData->fails()) {
            //     return redirect()->back()->withInput()->withErrors(['email' => 'Email sudah terdaftar.']); // Mengirim pesan error ke view
            // }
        
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
        $folders = Folder::all();
        return view('admin.edituser', [
            'user' => $user,
            'folders' => $folders
        ]);
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

            if (!empty($validatedData['user_access'])) {
                $validatedData['user_access'] = implode(',', $validatedData['user_access']);
            } else {
                $validatedData['user_access'] = ''; // Assign an empty string if user_access is empty
            }

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
