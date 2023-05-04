<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('users.index', compact('user')); 
    }

    public function new()
    {
        return view('users.store');
    }

    public function store(UserRequest $request)
    {
        $userData = $request->all();

        $request->validated();

        $userData['password'] = bcrypt($userData['password']);

        $user = new User();
        $user->create($userData);

        flash('Usuário Atualizado com sucesso')->success();
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $userData = $request->all();

        $request->validated();

        if($userData['password']) {
            $userData['password'] = bcrypt($userData['password']);
        }

        $user = User::findOrfail($id);
        $user->update($userData);

        flash('Usuário Atualizado com sucesso')->success();
        return redirect()->route('users.edit', ['cor' => $id]);
    }

    public function delete($id)
    {

        $user = User::findOrfail($id);
        $user->delete();

        flash('Usuário removido com sucesso')->success();
        return redirect()->route('users.index');
    }
}
