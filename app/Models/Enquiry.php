<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model{


    protected $primaryKey = 'enquiry_id';
    protected $table ='enquiries';
    protected $fillable=['property_id', 'name', 'email', 'phone', 'message', 'ip'];

    public function property(){
        
        return $this->belongsTo(Property::class, 'property_id');
    }



    
}
