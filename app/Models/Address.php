<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['logradouro', 'numero','complemento','bairro', 'cidade', 'cep', 'estado'];

    //Define a relacao do endereco
    public function employee(){
        
        // um funcionario recebe um endereco
        return $this->belongsTo(Employee::class);
    }
}
