<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaTelefone extends Model
{
    use HasFactory;

    protected $table = 'pessoa_telefone';

    protected $fillable = ['pessoa_id', 'telefone_id'];

    public function pessoas()
    {

        return $this->belongsToMany(Pessoa::class, 'pessoa_telefone', 'pessoa_id', 'telefone_id');
    }
}
