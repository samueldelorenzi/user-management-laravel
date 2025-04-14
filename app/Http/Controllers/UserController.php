<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       $users = User::orderByDesc('id')->get();

       // carregar view
       return view('users.index', ["users" => $users]);
   }
   public function list(){
       $users = User::orderByDesc('id')->get();
       return view ('users.list', ["users" => $users]);
   }
   public function show(User $user) {
        return view('users.show', ["user" => $user]);
   }
   public function create() {
       return view('users.create');
   }
   public function store(UserRequest $request) {
        $request->validated();

       User::create([
           "name" => $request->name,
           "email" => $request->email,
           "password" => $request->password
       ]);

       return redirect()->route('user.list')->with("success", "Usuário criado com sucesso!");
   }
   public function edit(User $user)
   {
       return view('users.edit', ["user" => $user]);
   }
   public function update(UserRequest $request, User $user){
       $request->validated();
       $user->update([
           "name" => $request->name,
           "email" => $request->email,
           "password" => $request->password
       ]);

       return redirect()->route('user.show', ["user" => $user->id])->with("success", "Usuário atualizado com sucesso!");
   }
   public function destroy(User $user){
       $user->delete();
       return redirect()->route('user.list', ["user" => $user->id])->with("success", "Usuário excluído com sucesso!");
   }
}
