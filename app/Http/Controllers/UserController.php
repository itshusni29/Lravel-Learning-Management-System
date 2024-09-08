<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('pages.users.index', compact('users')); // Pass users to the view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.create'); // Display form for creating a user
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'section' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'date_of_join' => 'required|date',
            'date_of_birth' => 'required|date',
            'sex' => 'required|string|in:male,female', // Ensure sex is validated as a string
        ]);

        // Hash password before saving
        $password = Hash::make($request->password);

        // Save the user with role 'user'
        User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'section' => $request->section,
            'department' => $request->department,
            'division' => $request->division,
            'date_of_join' => $request->date_of_join,
            'occupation' => $request->occupation,
            'roles' => 'user',  // Directly assign 'user' role
            'date_of_birth' => $request->date_of_birth,
            'sex' => $request->sex, // Directly assign sex
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages.users.show', compact('user')); // Show a single user
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages.users.edit', compact('user')); // Show form for editing user
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validasi data, tetapi tidak memaksa input untuk kolom yang tidak diubah
        $request->validate([
            'nik' => 'required|unique:users,nik,' . $user->id,
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'section' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'date_of_join' => 'nullable|date', // Kolom ini tidak wajib diisi
            'date_of_birth' => 'nullable|date', // Kolom ini tidak wajib diisi
            'sex' => 'nullable|string|in:male,female,other', // Kolom ini tidak wajib diisi
            'password' => 'nullable|confirmed|min:8', // Password hanya diubah jika ada input
        ]);

        $data = $request->except(['password']);

        // Jika ada password baru, hash dan tambahkan ke $data
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // Perbarui data pengguna
        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
