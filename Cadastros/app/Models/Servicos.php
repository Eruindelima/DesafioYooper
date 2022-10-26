<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $table = 'servicos';
    
    protected $fillable = [
        'name',
        'id_user'
    ];

    public function servicos(){
        return $this->hasMany(User::class,'id');
    }
}
