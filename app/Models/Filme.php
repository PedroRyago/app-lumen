<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filmes';
    protected $fillable = ['titulo'];
    public $timestamps = false;

    public function dono(){
        return $this->belongsTo('App\Models\Pessoa');
    }
}

?>