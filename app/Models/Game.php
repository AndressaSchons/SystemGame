<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['nome', ''];
    public static function findOrFail($id)
    {

        if (!file_exists($id)) {
            ddd('file does not exist');
        }

        $game = file_get_contents($id);

        return $game;

    }

    public function extension(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Extension::class);


    }
}
