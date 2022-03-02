<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameResource extends Controller
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_extension' => $this->id_extension,
            'name' => $this->name,
            'summary' => $this->summary,
            'explanation' => $this->explanation
        ];
    }
}
