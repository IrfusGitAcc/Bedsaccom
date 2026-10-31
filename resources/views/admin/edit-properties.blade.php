<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Edit Properties | Bedforshire Admin Panel</title>

    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap1.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendors/themefy_icon/themify-icons.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/tagsinput/tagsinput.css')}}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{asset('assets/vendors/datepicker/date-picker.css')}}" />

     <link rel="stylesheet" href="{{asset('assets/vendors/vectormap-home/vectormap-2.0.2.css')}}" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{asset('assets/vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/material_icon/material-icons.css')}}')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/colors/default.css" id="colorSkincss')}}">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" >
    
    

</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href=""><img src="{{ asset('assets/img/logo1.png') }}" alt=""></a>
        <a class="small_logo" href=""><img src="assest/img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="" href="" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{ asset('assets/img/menu-icon/dashboard.svg') }}" alt="">
                </div>
                <div class="nav_title">
                    <span>Dashboard</span>
                </div>
            </a>
            
        </li>
        
        
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="assets/img/menu-icon/6.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Properties</span>
            </div>
            </a>
            <ul>
              <li><a href="">Property List</a></li>
            </ul>
        </li>
    </ul>
</nav>
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="img/line_img.png" alt="">
                    </div>
                    
                    <div class="header_right d-flex justify-content-between align-items-center">
                       
                        <div class="profile_info">
                           
                           <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                               <button type="submit" class="btn btn-danger w-100">
                                  <i class="fa fa-sign-out-alt"></i> Log Out
                               </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit Properties</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
             @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Add New Product </h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="row">
                                <form id="editPropertyForm" action="{{ route('update.property',$property->property_id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="title" class="form-label">Property Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $property->title) }}" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price', $property->price) }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" id="description" class="form-control">{{ old('description', $property->description) }}</textarea>
                                            </div>
                    
                                            <div class="col-md-6 mb-3">
                                                <label for="short_info" class="form-label">Short Info</label>
                                                <textarea name="short_info" id="short_info" class="form-control">{{ old('short_info', $property->short_info) }}</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <textarea name="address" id="address" class="form-control">{{ old('address', $property->address) }}</textarea>
                                            </div>
                        
                                            <div class="col-md-6 mb-3">
                                                <label for="map_iframe" class="form-label">Google Map Iframe</label>
                                                <textarea name="map_iframe" id="map_iframe" class="form-control" rows="3">{{ old('map_iframe', $property->map_iframe) }}</textarea>
                                                <small class="form-text text-muted">Paste the embed iframe code from Google Maps.</small>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-6 mb-3">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $property->city) }}">
                                            </div>
                        
                                            <div class="col-md-6 mb-3">
                                                <label for="postcode" class="form-label">Postcode</label>
                                                <input type="text" name="postcode" id="postcode" class="form-control" value="{{ old('postcode', $property->postcode) }}">
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-6 mb-3">
                                                <label for="county" class="form-label">County</label>
                                                <input type="text" name="county" id="county" class="form-control" value="{{ old('county', $property->county) }}">
                                            </div>
                        
                                            <div class="col-md-6 mb-3">
                                                <label for="country" class="form-label">Country</label>
                                                <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $property->country) }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="beds">Beds</label>
                                                <input type="number" name="beds" id="beds" class="form-control" min="0" value="{{ old('beds', $property->beds) }}">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label for="bathrooms">Bathrooms</label>
                                                <input type="number" name="bathrooms" id="bathrooms" class="form-control" min="0" value="{{ old('bathrooms', $property->bathrooms) }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="area" class="form-label">Area</label>
                                                <input type="number" name="area" id="area" class="form-control" step="0.01" value="{{ old('area', $property->area) }}">
                                            </div>
                        
                                            <div class="col-md-6 mb-3">
                                                <label for="property_type" class="form-label">Property Type</label>
                                                <input type="text" name="property_type" id="property_type" class="form-control" value="{{ old('short_info', $property->short_info) }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="image" class="form-label">Main Image</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>

                                            
                                            <div class="col-md-6 mb-3">
                                                <label for="gallery_images" class="form-label">Gallery Images</label>
                                                <input type="file" name="gallery_images[]" id="gallery_images" class="form-control" multiple>
                                            </div>

                                        </div>

                                        <div class="row">
                                        
                                            @if($property->image)
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Current Main Image</label><br>
                                                    <img src="{{ asset('assets/img/properties/' . $property->image) }}" alt="Main Image" class="img-fluid mb-2" style="max-height: 100px;">
                                                </div>
                                            @endif
                                            
                                             <!-- Show existing gallery images -->
                                            @if(!empty($property->gallery_images))
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Current Gallery Images</label><br>
                                                    @foreach((array) $property->gallery_images as $galleryImage)
                                                        <img src="{{ asset('assets/img/gallery/' . $galleryImage) }}"
                                                             alt="Gallery Image" class="img-thumbnail me-2 mb-2" style="max-height: 100px;">
                                                    @endforeach
                                                </div>
                                            @endif

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="condition" class="form-label">Condition</label>
                                                <select name="condition" id="condition" class="form-control">
                                                    <option value="available" {{ old('condition', $property->condition ?? '') == 'available' ? 'selected' : '' }}>Available</option>
                                                    <option value="sold" {{ old('condition', $property->condition ?? '') == 'sold' ? 'selected' : '' }}>Sold</option>
                                                    <option value="pending" {{ old('condition', $property->condition ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="amenities">Amenities</label>
                                                <select name="amenities[]" id="amenities" class="form-control" multiple>
                                                    <option value="Pool" {{ in_array('Pool', $property->amenities ?? []) ? 'selected' : '' }}>Pool</option>
                                                    <option value="Gym" {{ in_array('Gym', $property->amenities ?? []) ? 'selected' : '' }}>Gym</option>
                                                    <option value="Parking" {{ in_array('Parking', $property->amenities ?? []) ? 'selected' : '' }}>Parking</option>
                                                    <option value="Garden" {{ in_array('Garden', $property->amenities ?? []) ? 'selected' : '' }}>Garden</option>
                                                    <option value="Balcony" {{ in_array('Balcony', $property->amenities ?? []) ? 'selected' : '' }}>Balcony</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Status</option>
                                                    <option value="To Let" {{ old('status', $property->status ?? '') == 'To Let' ? 'selected' : '' }}>To Let</option>
                                                    <option value="Let Agreed" {{ old('status', $property->status ?? '') == 'Let Agreed' ? 'selected' : '' }}>Let Agreed</option>
                                                </select>
                                            </div>
                                        
                                            <div class="col-md-6 mb-3">
                                                <label for="bills" class="form-label">Bills</label>
                                                <select name="bills" id="bills" class="form-control">
                                                    <option value="">Bills</option>
                                                    <option value="Included" {{ old('bills', $property->bills ?? '') == 'Included' ? 'selected' : '' }}>Included</option>
                                                    <option value="Excluded" {{ old('bills', $property->bills ?? '') == 'Excluded' ? 'selected' : '' }}>Excluded</option>
                                                    <option value="Show Both" {{ old('bills', $property->bills ?? '') == 'Show Both' ? 'selected' : '' }}>Show Both</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="furnishing" class="form-label">Furnishing</label>
                                                <select name="furnishing" id="furnishing" class="form-control">
                                                    <option value="">Furnishing</option>
                                                    <option value="Unfurnished" {{ old('furnishing', $property->furnishing ?? '') == 'Unfurnished' ? 'selected' : '' }}>Unfurnished</option>
                                                    <option value="Part Furnished" {{ old('furnishing', $property->furnishing ?? '') == 'Part Furnished' ? 'selected' : '' }}>Part Furnished</option>
                                                    <option value="Furnished" {{ old('furnishing', $property->furnishing ?? '') == 'Furnished' ? 'selected' : '' }}>Furnished</option>
                                                </select>
                                            </div>
                                        
                                            <div class="col-md-6 mb-3">
                                                <label for="pets" class="form-label">Pets</label>
                                                <select name="pets" id="pets" class="form-control">
                                                    <option value="">Pets</option>
                                                    <option value="Allowed" {{ old('pets', $property->pets ?? '') == 'Allowed' ? 'selected' : '' }}>Allowed</option>
                                                    <option value="Not Allowed" {{ old('pets', $property->pets ?? '') == 'Not Allowed' ? 'selected' : '' }}>Not Allowed</option>
                                                    <option value="Show Both" {{ old('pets', $property->pets ?? '') == 'Show Both' ? 'selected' : '' }}>Show Both</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn_1">Update Property</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                         <p>Copyright ©2025 Bedsaccom All right reserved <a href="#">Designed By Technologies Ltd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content part end -->
 <div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- footer  -->
<script src="{{asset('assets/js/jquery1-3.4.1.min.js')}}"></script> 
<!-- popper js -->
<script src="{{asset('assets/js/popper1.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{asset('assets/js/bootstrap1.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{asset('assets/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('assets/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('assets/vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{asset('assets/vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{asset('assets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('assets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{asset('assets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatable/js/buttons.print.min.js')}}"></script>


<!-- scrollabe  -->
<script src="{{asset('assets/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/vendors/scroll/scrollable-custom.js')}}"></script>

<!-- custom js -->

<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</body>
</html>