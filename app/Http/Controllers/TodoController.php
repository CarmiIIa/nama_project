<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.++
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('dashboard.login');
    }

    public function register()
    {
        return view('dashboard.register');
    }

    public function inputRegister(Request $request) 
    {
        //testing hasil input 
        //dd($request->all());

        $request->validate([
            'email' => 'required',
            'name' => 'required|min:4|max:50',
            'username' => 'required|min:4|max:8',
            'password' => 'required',
        ]);
        //tambah data ke db bagian table user 
        // User::create($request->all());
        User::create([
            'email' => $request->email,
            'name' => $request->name, 
            'username' => $request->username, 
            'password' => Hash::make($request->password),
        ]);
        //apabila berhasil, bakal diarahin ke halaman login dengan pesan success 
        return redirect('/')->with('success', 'Berhasil membuat akun!');
    }

        public function auth(Request $request)
        {
            $request->validate([
                'username' => 'required|exists:users, username',
                'password' => 'required',
            ],
            [
                'username.exists' => 'Username ini tidak tersedia'
            ]);

            $user = $request->only('username', 'password');
            if (Auth::attempt ($user)) {
                return redirect()->route('todo.index');
            } else {
                return redirect('/')->with('fall', "Gagal login, periksa dan coba lagi");
            }
        }


    public function index()
    {
        //menampilkan halaman awal, semua data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan halaman input form tambah data
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mengirim data ke database (data baru) / menambahkan data baru ke db
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //menampilkan satu data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //menampilkan form edit data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //mengubah data di database
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //menghapus data diri database
    }
}
