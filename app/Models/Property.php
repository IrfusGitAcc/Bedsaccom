<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $primaryKey = 'property_id';

    protected $table= 'properties';
    
    protected $fillable = [
        'title', 'description', 'short_info', 'price', 'address', 'city', 'postcode',
        'latitude','longitude','beds', 'map_iframe' , 'bathrooms','county', 'country', 'area', 
        'property_type', 'status','condition','bills','furnishing','pets', 'image', 'gallery_images', 'amenities'
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'amenities' => 'array'
    ];

    public function enquiries(){
        
        return $this->hasMany(Enquiry::class, 'property_id');
    }

}
