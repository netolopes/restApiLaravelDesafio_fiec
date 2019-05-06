<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco_model extends Model
{
  protected $table = 'endereco';
  protected $guarded = ['id'];
  protected $fillable=['cep,logradouro'];
  public $timestamps = false;
}
