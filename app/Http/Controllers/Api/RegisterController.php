<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;
use function dd;
use function redirect;
use function view;

class RegisterController extends Controller
{
    public function index(){
        return view('app');
    }

    /**
     * @throws \Exception
     */
    public function store(Request $request){

        $request->only([
            'name',
            'email',
            'password'
        ]);

         $validador = $this->validate($request, [
             'name' => 'required|max:255',
             'email' => 'required|email|max:255',
             'password' => 'required|min:6'
         ]);

         $validador['password'] = bcrypt($validador['password']);


//        if ($validador->fails()) {
//             return redirect('/fail')
//                 ->withInput()
//                 ->withErrors($validador);
//         }

         $user = new User;
         $user->name = $request['name'];
         $user->email = $request['email'];
         $user->password = $request['password'];
         //$user->admin = $request->admin;


        $user->save();
        Auth::login($user);

        return redirect('/')->with('success', 'Usuário criado.');

    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request){
        $request->only([
            'name',
            'psswd'
        ]);

        $attributes=\request()->validate([
            'name'=> 'required',
            'password'=>'required'
        ]);

        if(\auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/')->with('success', 'Welcome back');
        }
        throw ValidationException::withMessages([
            'name' => 'Credenciais não puderam ser comprovadas'
        ]);
    }


    public function show(int $id) {
        $user = User::find($id);


        return view('user-show', [
            'user' => $user
        ]);
    }

    public function destroy(User $user) {
        $user->delete();
        echo "user, excluido";
        return redirect('/');
    }
}
