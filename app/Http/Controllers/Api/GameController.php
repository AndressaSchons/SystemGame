<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    public function index()
    {
        return Game::all();
    }

    public function create(Request $request)
    {

        $request->only([
            'name',
            'summary',
            'explanation',
        ]);

        $rules = [
            'name' => ['required', 'max:150'],
            'summary' => ['required', 'min:10', 'max:200'],
            'explanation' => ['required', 'min:10', 'max:500']
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $array['erro'] = $validator->errors();

            return response()->json($array, 422);
        }

        $game = new Game;

        $game->name = $request['name'];
        $game->summary = $request['summary'];
        $game->explanation = $request['explanation'];

        $game->save();
    }

    public function getGame($id)
    {
        $game = Game::find($id);
        return response()->json($game);
    }

    public function destroy($id)
    {

        $game = Game::find($id);

        if ($game != null) {
            $game->delete();
            redirect()->route('home');
        }
    }

    public function update($id, Request $request)
    {
        $request->only([
            'name',
            'summary',
            'explanation',
        ]);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150',
            'summary' => 'required|min:10|max:200',
            'explanation' => 'required|min:10|max:500',
        ]);

        if ($validator->fails()) {
            return ['erro' => $validator->errors()];
        }
        $game = Game::find($id);


        if ($game) {
            $game->name = $request->input('name');
            $game->summary = $request->input('summary');
            $game->explanation = $request->input('explanation');
            $game->save();
        } else {
            $array['erro'] = $validator->errors();

            return response()->json($array, 422);
        }

    }

    public function search2(Request $request)
    {
        $search = $request->get('q');
        return Game::where('name', 'LIKE', '%' . $search . '%')->get();

//         $data = Game::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
//         return response()->json($data);
    }


}
