<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey='id';
    protected $table='productos';
    protected $fillable = ['name', 'price'];
    protected $hidden = ['created_at','updated_at'];
}
