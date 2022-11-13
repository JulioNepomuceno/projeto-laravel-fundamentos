<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{   
    
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'data_contratacao'];


    //Define a relacao do endereco
    public function address(){
        
        // um funcionario recebe um endereco
        return $this->hasOne(Address::class);
    }
}
