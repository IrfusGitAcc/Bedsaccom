<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Enquiry;

class HomeController extends Controller
{
    public function homePage(){
        
        $properties = Property::latest()->take(4)->get();
        
        return view('frontend.index',compact('properties'));
    }
    
    public function propertyGrid(){
        $properties = Property::latest()->take(4)->get();
        
        $distances = ['+1/4 Miles','+1/2 Miles','+1 Miles','+2 Miles','+3 Miles','+4 Miles','+5 Miles','+6 Miles','+7 Miles','+8 Miles','+9 Miles','+10 Miles'];
    
        
        $types     = Property::select('property_type')->distinct()->pluck('property_type');
        $status    = Property::select('condition')->distinct()->pluck('condition');
        $bills     = Property::select('bills')->distinct()->pluck('bills');
        $pets      = Property::select('pets')->distinct()->pluck('pets');
        $furnishing= Property::select('furnishing')->distinct()->pluck('furnishing');
        
       
        
        return view('frontend.properties',compact('properties','distances','types','status','furnishing','bills','pets'));
    }
    
    public function propertyDetails($propId){
        
        $property = Property::findOrFail($propId);
        
        if (is_string($property->gallery_images)) {
            $decoded = json_decode($property->gallery_images, true);
            $property->gallery_images = is_array($decoded) ? $decoded : [];
        }

        
        return view('frontend.property-details',compact('property'));
    }
    
    public function guaranteedRent(){
        
        return view('frontend.guaranteed-rent');
    }
    
    public function aboutUs(){
        
        return view('frontend.about-us');
    }
    
    public function landLords(){
        
        return view('frontend.landlords');
    }
    
    public function contactUs(){
        
        return view('frontend.contact-us');
    }
    
    public function searchProperty(Request $request){
        
        $query = Property::query();

        if ($request->filled('property_type') && $request->property_type !== 'Types') {
            $query->where('property_type', $request->property_type);
        }

        if ($request->filled('condition') && $request->condition !== 'Status') {
            $query->where('condition', $request->condition);
        }

        if ($request->filled('beds') && $request->beds !== 'Bed') {
            $query->where('beds', '>=', $request->beds);
        }

        if ($request->filled('bathrooms') && $request->bathrooms !== 'Bath') {
            $query->where('bathrooms', '>=', $request->bathrooms);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->filled('furnishing') && $request->furnishing !== 'Furnishing') {
            $query->where('furnishing', $request->furnishing);
        }

        if ($request->filled('bills') && $request->bills !== 'Bills') {
            $query->where('bills', $request->bills);
        }

        if ($request->filled('pets') && $request->pets !== 'Pets') {
            $query->where('pets', $request->pets);
        }

        $properties = $query->get();

        return view('frontend.search-results', compact('properties'));
    }
    
    
    
}
