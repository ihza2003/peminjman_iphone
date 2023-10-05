<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// mengambil data dari model yang memiliki file user
use app\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        // ini akan berisi array data user semua
        $users = User::all();


        return view("users.index", ['users' => $users]);
    }

    public function tambah()
    {
        // users mkasukdnya dalam folder view ada volder users yang isinya tambah
        return view("users.tambah");
    }

    public function lihat()
    {
        // users mkasukdnya dalam folder view ada volder users yang isinya tambah
        return view("users.lihat");
    }

    public function update()
    {
        // users mkasukdnya dalam folder view ada volder users yang isinya tambah
        return view("users.update");
    }

    public function hapus()
    {
        // users mkasukdnya dalam folder view ada volder users yang isinya tambah
        return view("users.hapus");
    }
}
