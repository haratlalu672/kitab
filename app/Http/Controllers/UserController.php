<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.list', [
            'judul' => 'List User',
        ]);
    }

    public function server()
    {
        return Datatables::of(User::get())->make(true);
    }
}
