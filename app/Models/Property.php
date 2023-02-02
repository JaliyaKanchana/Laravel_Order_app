<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = [
        'user_type', 'admin_id', 'user_id', 'property_type_id', 'city_id', 'listing_package_id', 'property_purpose_id',
        'title', 'slug', 'views', 'address', 'phone', 'email', 'website', 'description', 'file', 'thumbnail_image',
        'banner_image', 'number_of_unit', 'number_of_room', 'number_of_bedroom', 'number_of_bathroom', 'number_of_floor',
        'number_of_kitchen', 'number_of_parking', 'area', 'google_map_embed_code', 'price', 'period', 'video_link',
        'is_featured', 'verified', 'top_property', 'urgent_property', 'status', 'seo_title', 'expired_date', 'seo_description',
        'created_at', 'updated_at'
    ];
}
