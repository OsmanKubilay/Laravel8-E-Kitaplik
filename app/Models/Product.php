<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    #ONE TO MANY(INVERSE) / BELONGS TO
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
    public function reservations()
    {
        return $this->belongsTo(Reservation::class,'id','product_id');
    }



}
