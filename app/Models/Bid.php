<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $fillable=['item_id','user_id','bidding_price','status'];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
