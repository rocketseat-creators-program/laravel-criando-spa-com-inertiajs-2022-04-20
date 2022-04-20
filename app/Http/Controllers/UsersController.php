<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return view('users.index', compact('users'));
        return Inertia::render('Users/Index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(UserCreateRequest $request)
    {
        $dados = $request->validated();
        $dados['password'] = Hash::make($dados['password']);
        User::create($dados);

        return redirect('/');
    }
}
