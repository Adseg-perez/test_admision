<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey='id';
   	protected $table='usuarios';
    protected $fillable = ['name', 'phone','email','bithday','gender'];
    protected $hidden = ['created_at','updated_at'];
}
