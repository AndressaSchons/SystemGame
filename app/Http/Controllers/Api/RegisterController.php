<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function dd;
use function redirect;
use function view;

class RegisterController extends Controller
{
    public function index(){
        return User::all();
    }

    public function store(Request $request){

        $request->only([
            'name',
            'user_name',
            'email',
            'password'
        ]);

         $validador = Validator::make($request ->all(), [
             'name' => ['required', 'max:255'],
             'user_name' => ['required', 'min:4', 'max:10'],
             'email' => ['required','email','max:255'],
             'password' => ['required','min:6']
         ]);
         if ($validador->fails()) {
             return ['erro' => $validador->errors()];
         }

         $user = new User;
         $user->name = $request['name'];
         $user->user_name = $request['user_name'];
         $user->email = $request['email'];
         $user->password = $request['password'];

        $user->save();
        Auth::login($user);

        return redirect('/')->with('success', 'Usuário criado.');
    }

    public function login(Request $request){

        $request->only([
            'user_name',
            'password'
        ]);

        $validator = Validator::make($request->all(),[
            'user_name'=> ['required'],
            'password'=>['required']
        ]);


        if(Auth::attempt((array)$validator)){
            return response()->json(['login'=> 'Deu tudo certo']);
        }else{
            return response()->json(['error'=> 'E-mail e/ou senha incorretos'], 422);
        }
    }

//    public function getName()

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
