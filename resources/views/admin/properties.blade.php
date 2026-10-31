<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bedforshire Admin Panel</title>

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
    
<style>
    .property-title {
    margin-left: 10px;
    max-width: 200px; /* default for desktop/tablet */
}

.property-title span {
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Mobile: shrink width */
@media (max-width: 576px) {   /* you can adjust 576px -> 768px depending */
    .property-title {
        width: 50px;   /* force smaller width for title */
        max-width: 50px;
    }
}

</style>

<!-- main content part here -->
 
 <!-- sidebar  -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href=""><img src="assets/img/logo1.png" alt=""></a>
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
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Properties</h3>
                            
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
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 pt-4">
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Admin List </h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" class="btn_1" id="addPropertyButton">
                                                Add New Property
                                            </button>
                                            
                                        </div>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="select-all"></th>
                                                    <th scope="col">Sl No</th>
                                                    <th scope="col">Property Title</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Amenities</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">Enquiries</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody>
                                                @foreach($properties as $property)
                                                    <tr>
                                                        <td><input type="checkbox" name="select[]" value="{{ $property->property_id }}"></td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('assets/img/properties/' . $property->image) }}" 
                                                                     alt="Image" 
                                                                     style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                                                        
                                                                <div class="property-title" style="color:#000;">
                                                                    <span><strong>{{ $property->title }}</strong></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>£{{ number_format($property->price, 2) }}</td>
                                                        <td>{{ $property->address }}</td>
                                                        <td>
                                                            <div style="font-size:12px; color:#000;">
                                                                <strong>Bath:</strong> {{ $property->bathrooms ?? '-' }} <br>
                                                                <strong>Beds:</strong> {{ $property->beds ?? '-' }} <br>
                                                                <strong>Bills:</strong> {{ $property->bills ?? '-' }} <br>
                                                                <strong>faurnishing:</strong> {{ $property->furnishing ?? '-' }} <br>
                                                            </div>
                                                        </td>
                                                        <td>{{ $property->property_type }}</td>
                                                        <td>
                                                            @php
                                                                $statusClass = match($property->status) {
                                                                    'available' => 'badge bg-success',
                                                                    'sold' => 'badge bg-danger',
                                                                    'pending' => 'badge bg-warning text-dark',
                                                                    default => 'badge bg-secondary'
                                                                };
                                                            @endphp
                                                            <span class="{{ $statusClass }}">{{ ucfirst($property->status) }}</span>
                                                        </td>
                                                        <td>
                                                            <div class="action_btns d-flex">
                                                                <a href="{{ route('edit.property',$property->property_id) }}" class="action_btn mr-2">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <form action="{{ route('delete.property',$property->property_id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="action_btn btn btn-link p-0 m-0" onclick="return confirm('Are you sure you want to delete this property?')"><i class="fas fa-trash"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <!-- Enquiry button -->
                                                            <button class="btn btn-sm" style="background-color:#0f683e; color:#fff;" data-bs-toggle="modal" data-bs-target="#enquiryModal{{ $property->id }}">
                                                                View Enquiries
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                                    
                                </div>
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
                        <p>Copyright ©2025 Bedsaccom All right reserved <a href="#">Designed By Appsync Technologies Ltd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content part end -->

<!-- Container where modal will be loaded -->
<div id="modalContainer"></div>
<!-- Enquiry Modal -->
@foreach($properties as $property)
    <div class="modal fade" id="enquiryModal{{ $property->id }}" tabindex="-1" aria-labelledby="enquiryModalLabel{{ $property->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel{{ $property->id }}">
                        Enquiries for {{ $property->title }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($property->enquiries->count() > 0)
                        <div style="max-height:400px; overflow-y:auto;"> {{-- scroll area --}}
                            @foreach($property->enquiries as $i => $enquiry)
                                <div style="border:1px solid #ddd; border-radius:6px; padding:12px; margin-bottom:15px; background:#fafafa;">
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">Sl No</div>
                                        <div>{{ $i + 1 }}</div>
                                    </div>
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">Name</div>
                                        <div>{{ $enquiry->name }}</div>
                                    </div>
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">Email</div>
                                        <div>{{ $enquiry->email }}</div>
                                    </div>
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">Phone</div>
                                        <div>{{ $enquiry->phone }}</div>
                                    </div>
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">Message</div>
                                        <div>{{ $enquiry->message }}</div>
                                    </div>
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">IP</div>
                                        <div>{{ $enquiry->ip }}</div>
                                    </div>
                                    <div style="display:flex; margin-bottom:6px;">
                                        <div style="width:120px; font-weight:bold;">Date</div>
                                        <div>{{ $enquiry->created_at->format('d M Y H:i') }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    @else
                        <p class="text-muted">No enquiries for this property yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach

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

<script>
    document.getElementById('addPropertyButton').addEventListener('click', function() {
        fetch('{{ route("property.modal") }}')
            .then(response => response.text())
            .then(html => {
                document.getElementById('modalContainer').innerHTML = html;
                // Initialize and show the modal
                var myModal = new bootstrap.Modal(document.getElementById('storePropertyModal'));
                myModal.show();
            })
            .catch(error => console.error('Error loading modal:', error));
    });
</script>


</body>
</html>
