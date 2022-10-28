<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'nome_empresa',
    ];

    public function sevicos()
    {
        return $this->hasMany(Servicos::class);
    }


}
