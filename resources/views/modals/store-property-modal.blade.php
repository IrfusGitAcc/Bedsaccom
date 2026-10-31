<!-- Add new admin Modal -->
<div class="modal fade" id="storePropertyModal" tabindex="-1" role="dialog" aria-labelledby="storePropertyModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="storePropertyModalTitle">Add New Property</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <!-- Form Inside Modal -->
            <form id="propertyForm" action="{{ route('store.property') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Property Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="short_info" class="form-label">Short Info</label>
                        <textarea name="short_info" id="short_info" class="form-control">{{ old('short_info') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                    </div>

                    <input type="hidden" name="latitude" id="latitudeInput" value="{{ old('latitude') }}" />
                    <input type="hidden" name="longitude" id="longitudeInput" value="{{ old('longitude') }}" />
                
                    <!-- NEW FIELD for Iframe -->
                    <div class="mb-3">
                        <label for="map_iframe" class="form-label">Google Map Iframe</label>
                        <textarea name="map_iframe" id="map_iframe" class="form-control" rows="3">{{ old('map_iframe') }}</textarea>
                        <small class="form-text text-muted">Paste the embed iframe code from Google Maps.</small>
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ old('city', 'Luton') }}">
                    </div>

                    <div class="mb-3">
                        <label for="postcode" class="form-label">Postcode</label>
                        <input type="text" name="postcode" id="postcode" class="form-control" value="{{ old('postcode') }}">
                    </div>

                    <div class="mb-3">
                        <label for="county" class="form-label">County</label>
                        <input type="text" name="county" id="county" class="form-control" value="{{ old('county', 'Bedfordshire') }}">
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" name="country" id="country" class="form-control" value="{{ old('country', 'United Kingdom') }}">
                    </div>

                    <div class="mb-3">
                        <label for="area" class="form-label">Area</label>
                        <input type="number" name="area" id="area" class="form-control" step="0.01" value="{{ old('area') }}">
                    </div>

                    <div class="mb-3">
                        <label for="beds">Beds</label>
                        <input type="number" name="beds" id="beds" class="form-control" min="0" value="{{ old('beds', 0) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="bathrooms">Bathrooms</label>
                        <input type="number" name="bathrooms" id="bathrooms" class="form-control" min="0" value="{{ old('bathrooms', 0) }}">
                    </div>

                    <div class="mb-3">
                        <label for="property_type" class="form-label">Property Type</label>
                        <input type="text" name="property_type" id="property_type" class="form-control" value="{{ old('property_type') }}">
                    </div>

                    
                   <div class="mb-3">
                        <label for="condition" class="form-label">Condition</label>
                        <select name="condition" id="condition" class="form-control">
                            <option value=""> Select Condition</option>
                            <option value="available" {{ old('condition') == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="sold" {{ old('condition') == 'sold' ? 'selected' : '' }}>Sold</option>
                            <option value="pending" {{ old('condition') == 'pending' ? 'selected' : '' }}>Pending</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Select Status</option>
                            <option value="To Let" {{ old('status') == 'To Let' ? 'selected' : '' }}>To Let</option>
                            <option value="Let Agreed" {{ old('costatusndition') == 'Let Agreed' ? 'selected' : '' }}>Let Agreed</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="bills" class="form-label">Bills</label>
                        <select name="bills" id="bills" class="form-control">
                            <option value="">Select Bills</option>
                            <option value="Included" {{ old('bills') == 'Included' ? 'selected' : '' }}>Included</option>
                            <option value="Excluded" {{ old('bills') == 'Excluded' ? 'selected' : '' }}>Excluded</option>
                            <option value="Show Both" {{ old('bills') == 'Show Both' ? 'selected' : '' }}>Show Both</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="furnishing" class="form-label">Furnishing</label>
                        <select name="furnishing" id="furnishing" class="form-control">
                            <option value="">Select Furnishing</option>
                            <option value="Unfurnished" {{ old('furnishing') == 'Unfurnished' ? 'selected' : '' }}>Unfurnished</option>
                            <option value="Part Furnished" {{ old('furnishing') == 'Part Furnished' ? 'selected' : '' }}>Part Furnished</option>
                            <option value="Furnished" {{ old('furnishing') == 'Furnished' ? 'selected' : '' }}>Furnished</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="pets" class="form-label">Pets</label>
                        <select name="pets" id="pets" class="form-control">
                            <option value="">Select Pets Option</option>
                            <option value="Allowed" {{ old('pets') == 'Allowed' ? 'selected' : '' }}>Allowed</option>
                            <option value="Not Allowed" {{ old('pets') == 'Not Allowed' ? 'selected' : '' }}>Not Allowed</option>
                            <option value="Show Both" {{ old('pets') == 'Show Both' ? 'selected' : '' }}>Show Both</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Main Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="gallery_images" class="form-label">Gallery Images</label>
                        <input type="file" name="gallery_images[]" id="gallery_images" class="form-control" multiple>
                    </div>

                    <div class="mb-3">
                        <select name="amenities[]" id="amenities" class="form-control" multiple>
                            <option value="Pool" {{ in_array('Pool', $property->amenities ?? []) ? 'selected' : '' }}>Pool</option>
                            <option value="Gym" {{ in_array('Gym', $property->amenities ?? []) ? 'selected' : '' }}>Gym</option>
                            <option value="Parking" {{ in_array('Parking', $property->amenities ?? []) ? 'selected' : '' }}>Parking</option>
                            <option value="Garden" {{ in_array('Garden', $property->amenities ?? []) ? 'selected' : '' }}>Garden</option>
                            <option value="Balcony" {{ in_array('Balcony', $property->amenities ?? []) ? 'selected' : '' }}>Balcony</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn_1">Save Property</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add new admin modal end -->
