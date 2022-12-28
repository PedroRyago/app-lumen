<?php
    namespace App\Models;
    use illuminate\Database\Eloquent\Model;

    class Pessoa extends Model
    {
        protected $table = 'pessoas';
        protected $fillable = ['nome', 'email', 'cpf'];
        public $timestamps = false;

        public function filmes(){
            return $this->hasMany('App\Models\Filme');
        }
    }
?>