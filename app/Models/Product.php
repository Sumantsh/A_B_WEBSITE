<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "prd_name",
        "prd_dis",
        "prd_image",
        "prd_min_price",
        "prd_max_price",
        "prd_about",
        "prd_qty",
        "prd_mg",
        "prd_details"
    ];
}


