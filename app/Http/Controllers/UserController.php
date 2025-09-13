<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\PasswordUpdateRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{


    public function index(){
        $users = User::orderByDesc('id')->paginate(2);

        return view('users.index',['users'=>$users]);
    }

    public function show(User $user){

        return view('users.show', ['user' => $user]);
    }

    public function  create() {
        return view('users.create');
    }

    public function store(UserRequest $request){

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            return redirect()->route('user.show', $user->id)->with('success', 'Usuário cadastrado com sucesso');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'Usuário não cadastrado com sucesso');
        }
    }

    public function edit(User $user){
        return view('users.edit',['user' => $user]);
    }


    public function updatePassword(PasswordUpdateRequest $request, User $user)
    {
    
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'A senha atual não confere.']);
        }

        if(Hash::check($request->password,$user->password)){
            return back()->withErrors(['password' => 'A nova senha não pode ser igual à senha atual.']);
        }

        $user->update([
            'password' => $request->password,
        ]);

        return redirect()->route('user.show',['user' => $user->id])->with('success', 'Senha atualizada com sucesso!');
    }

    public function update(UserRequest $request, User $user){

        try {
            $data = [
            'name'  => $request->name,
            'email' => $request->email,
            ];

       
            if ($request->filled('password')) {
            $data['password'] = $request->password; 
            }


            $user->update($data);


            return redirect()->route('user.show',['user' => $user->id] )->with('success', 'usuário editado com sucesso!');

        } catch (Exception $e) {
            return back()->withInput()->with('error','Usuário não encontrado!');
        }

    }

    public function editPassword(User $user)
    {
        return view('users.edit-password', ['user' => $user]);
    }

    public function destroy(User $user){

        try{
            $user->delete();

            return redirect()->route('user.index')->with('success','Usuario deletado com sucesso!');
        }
        catch(Exception $e){
            return redirect()->route('user.index')->with('error','Usuario não deletado!');
        }
    }

}
