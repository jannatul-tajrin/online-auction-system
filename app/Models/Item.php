<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//product
class Item extends Model
{
    use HasFactory;
    protected $fillable=['user_id','product_name','product_type','starting_price','starting_time','ending_time','product_description','image'];

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

}

