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

         $validador = Validator::make($request ->all(), [
             'name' => ['required', 'max:255'],
             'email' => ['required','email','max:255'],
             'password' => ['required','min:6']
         ]);
         if ($validador->fails()) {
             return ['erro' => $validador->errors()];
         }

         $user = new User;
         $user->name = $request['name'];
         $user->email = $request['email'];
         $user->password = $request['password'];

        $user->save();
        Auth::login($user);

        return redirect('/')->with('success', 'Usuário criado.');
    }

    public function login(Request $request){

        $request->only([
            'name',
            'password'
        ]);

        $validator = Validator::make($request->all(),[
            'name'=> ['required'],
            'password'=>['required']
        ]);


        if(Auth::attempt((array)$validator)){
            return response()->json(['login'=> 'Deu tudo certo']);
        }else{
            return response()->json(['error'=> 'E-mail e/ou senha incorretos'], 422);
        }
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
