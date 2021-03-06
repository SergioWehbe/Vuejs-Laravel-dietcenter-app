<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
//    public $incrementing = false;// disable defaults incrementing as integer key
    protected $table ='Order';// custom user table
    public $timestamps = false; // disable defaults timestamp
    protected $fillable = [
        'stripeId','id','userId'
    ];
    public function user (){
        return $this->belongsTo(User::class,'userId');
    }
    public function recipes()
    {
        return $this->belongsToMany(Recipe::class,'OrderRecipe','orderId','recipeId');
    }
}
