<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//product
class Item extends Model
{
    use HasFactory;
    protected $fillable=['product_name','product_type','starting_price','starting_time','ending_time',];
    
}
