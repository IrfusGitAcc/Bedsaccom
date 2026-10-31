<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image; // add this at the top
use App\Models\Property;
use App\Models\Enquiry;


class PropertyController extends Controller
{
     public function properties(){

        $properties = Property::all();
        return view('admin.properties',compact('properties'));
    }

    public function storePropertyModal(){

        return view('modals.store-property-modal');
    }

    public function storeProperty(Request $request){

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'short_info' => 'nullable|string',
            'price' => 'required|numeric',
            'address' => 'nullable|string|max:255',
            'map_iframe'=> 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'city' => 'nullable|string|max:100',
            'postcode' => 'nullable|string|max:20',
            'county' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'area' => 'nullable|numeric',
            'beds' => 'nullable|integer|min:0',
            'bathrooms' => 'nullable|integer|min:0',
            'property_type' => 'nullable|string|max:50',
    
            // ✅ FIXED ENUMS
            'status' => 'nullable|in:To Let,Let Agreed',
            'condition' => 'nullable|in:available,sold,pending',
            'furnishing' => 'nullable|in:Unfurnished,Part Furnished,Furnished',
            'bills' => 'nullable|in:Included,Excluded,Show Both',
            'pets' => 'nullable|in:Allowed,Not Allowed,Show Both',
    
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amenities' => 'nullable|array',
            'amenities.*' => 'nullable|string|max:100'
        ]);
        
        $property = new Property();
    
        $property->title = $validated['title'];
        $property->description = $validated['description'] ?? null;
        $property->short_info = $validated['short_info'] ?? null;
        $property->price = $validated['price'];
        $property->address = $validated['address'] ?? null;
        $property->city = $validated['city'] ?? 'Luton';
        $property->postcode = $validated['postcode'] ?? null;
        $property->county = $validated['county'] ?? 'Bedfordshire';
        $property->country = $validated['country'] ?? 'United Kingdom';
        $property->area = $validated['area'] ?? null;
        $property->property_type = $validated['property_type'] ?? null;
    
        // ✅ Correct defaults matching DB enums
        $property->status = $validated['status'] ?? 'To Let';
        $property->condition = $validated['condition'] ?? 'available';
        $property->furnishing = $validated['furnishing'] ?? 'Furnished';
        $property->bills = $validated['bills'] ?? 'Included';
        $property->pets = $validated['pets'] ?? 'Allowed';
    
        $property->amenities = $validated['amenities'] ?? null;
        $property->latitude   = $validated['latitude']   ?? null;
        $property->longitude  = $validated['longitude']  ?? null;
        $property->beds       = $validated['beds']       ?? 0;
        $property->bathrooms  = $validated['bathrooms']  ?? 0;
        $property->map_iframe = $validated['map_iframe'] ?? null;
    
        // Handle main image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('assets/img/properties');
        
            // Use Intervention Image to resize
            $img = Image::read($image->getRealPath());
            $img->resize(860, 550, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize(); // prevent upsizing smaller images
            });
        
            // Save resized image
            $img->save($destinationPath . '/' . $imageName);
        
            $property->image = $imageName;
        }
    
        // Handle gallery images
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            $destinationPath = public_path('assets/img/gallery');
            
            // Ensure directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            
            foreach ($request->file('gallery_images') as $file) {
                if ($file->isValid()) {
                    // Generate unique filename for each image
                    $fileName = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
                    
                    // Use Intervention Image to resize gallery images if needed
                    $img = Image::read($file->getRealPath());
                    $img->resize(860, 550, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    
                    // Save resized image
                    $img->save($destinationPath . '/' . $fileName);
                    
                    $galleryImages[] = $fileName;
                }
            }
            
            // Only set if we have valid images
            if (!empty($galleryImages)) {
                $property->gallery_images = $galleryImages;
            }
        }

        $property->save();
    
        return redirect()->route('properties')->with('success', 'Property created successfully.');

    }


    public function saveEnquiry(Request $request){

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'nullable|string',
        ]);

        Enquiry::create([
            'property_id' => $request->property_id,
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'message'     => $request->message,
            'ip'          => $request->ip(),
        ]);

        return back()->with('success', 'Your enquiry has been sent!');
    
    }

    public function editProperty($propertyId){

        $property = Property::findOrFail($propertyId);

        return view('admin.edit-properties',compact('property'));

    }

    public function updateProperty(Request $request, $propertyId){

        $property = Property::findOrFail($propertyId);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'short_info' => 'nullable|string',
            'address' => 'nullable|string',
            'map_iframe' => 'nullable|string',
            'city' => 'nullable|string',
            'postcode' => 'nullable|string',
            'county' => 'nullable|string',
            'country' => 'nullable|string',
            'area' => 'nullable|numeric',
            'beds' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'property_type' => 'nullable|string',
            'condition' => 'nullable|in:available,sold,pending',
            'status' => 'nullable|in:To Let,Let Agreed',
            'furnishing' => 'nullable|in:Unfurnished,Part Furnished,Furnished',
            'bills' => 'nullable|in:Included,Excluded,Show Both',
            'pets' => 'nullable|in:Allowed,Not Allowed,Show Both',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'amenities' => 'nullable|array',
            'amenities.*' => 'nullable|string|max:100',

        ]);
    
        // Update basic fields
        $property->fill($validated);
    
        // Main image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('assets/img/properties');
        
            // Use Intervention Image to resize
            $img = Image::read($image->getRealPath());
            $img->resize(860, 550, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize(); // prevent upsizing smaller images
            });
        
            // Save resized image
            $img->save($destinationPath . '/' . $imageName);
        
            $property->image = $imageName;
        }
    
        $gallery = $property->gallery_images ?? [];

        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                $gName = time() . '_' . Str::random(6) . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('assets/img/gallery');
        
                // Resize gallery image
                $img = Image::read($file->getRealPath());
                $img->resize(860, 550, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
        
                // Save resized gallery image
                $img->save($destinationPath . '/' . $gName);
        
                $gallery[] = $gName;
            }
        }
        $property->gallery_images = $gallery;

        // Amenities (store as JSON array)
        if ($request->filled('amenities')) {
            $property->amenities = $request->amenities; // let $casts handle array→json
        }

    
        $property->save();
    
        return redirect()->route('properties')->with('success', 'Property updated successfully!');
    }

    
    public function deleteProperty($propertyId){
        $property =Property::findOrfail($propertyId);
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }
    
        $property->delete(); 
        return redirect()->back()->with('success', 'Property deleted successfully.');

    }

}
