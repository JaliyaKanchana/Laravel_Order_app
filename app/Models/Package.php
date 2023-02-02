<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $fillable = [
        'package_name', 'package_type', 'price', 'number_of_days', 'number_of_aminities', 'number_of_nearest_place',
        'number_of_photo', 'number_of_property', 'number_of_feature_property', 'number_of_top_property', 'number_of_urgent_property',
        'status', 'is_featured', 'is_top', 'is_urgent', 'package_order', 'created_at', 'updated_at'
    ];
}
