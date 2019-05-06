<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_model extends Model
{
    protected $table = 'cliente';
    protected $guarded = ['id'];
    protected $fillable=['nome'];
    public $timestamps = false;
}
