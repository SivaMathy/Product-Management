<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'mathyvathana_list_products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'category','status'];
}
