<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bewin - Real Estate HTML Template">
    <meta name="keywords" content="real estate, house, realtor, property, directory, listing, agent, developer, business, idx, housing, agency, rental, map, black">
    <meta name="author" content="unicoder">
    <title>Lettings Agent &amp; Estate Agents In Luton and Dunstable - Bedfordshire Accommodation Bureau</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('files/assets/images/logo/favicon.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    
    <!--  CSS Style -->
    <link rel="stylesheet" href="{{ asset('files/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/css/control.css') }}">
</head>
<body class="listing-page">

    <div class="preloader">
        <div class="loader"></div>
    </div>

    
 <!--============== Vertical Sticky Section ==============-->
    <!-- Vertical Sticky Tab -->
<div id="verticalSticky" style="
  position: fixed;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1000;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
">

  <!-- Rounded Vertical Tab Button -->
  <div id="stickyTab" style="
    background: #077165;
    color: #ffee07;
    padding: 14px;
    border-radius: 20px 0 0 20px;
    cursor: pointer;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    font-weight: bold;
    transition: background 0.3s;
    text-align: center;
  ">
    Free Valuation
  </div>

  <!-- Slightly Bigger Slide-out Panel -->
  <div id="stickyPanel" style="
    display: none;
    background: #077165;
    color: #ffee07;
    padding: 20px;
    border-radius: 15px 0 0 15px;
    margin-top: 5px;
    width: 341px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    text-align: left;
    position: relative;
  ">
    <button id="closeBtn" style="
      position: absolute;
      top: 5px;
      right: 5px;
      background: #ffee07;
      color: #077165;
      border: none;
      border-radius: 50%;
      width: 28px;
      height: 28px;
      cursor: pointer;
      font-weight: bold;
      line-height: 24px;
      text-align: center;
    ">×</button>
    <p style="font-size:14px; margin-top:0;">Enter your details:</p>
           <form id="valuationForm" class="single-contact-agent" method="POST" action="{{ route('send.contact.enquiry') }}">
        @csrf
    
        <!-- Honeypot (invisible to users, traps bots) -->
        <input type="hidden" name="website">
    
        <!-- Name -->
        <input type="text" name="name" placeholder="Name" pattern="[A-Za-z\s]+" title="Letters only" required 
            style="width:100%; padding:6px; margin-bottom:6px; border-radius:10px; border:none;"
        >
    
        <!-- Phone -->
        <input type="tel"name="phone" placeholder="Phone" pattern="\d{10,15}" title="Numbers only, 10-15 digits"required 
            style="width:100%; padding:6px; margin-bottom:6px; border-radius:10px; border:none;"
        >
    
        <!-- Email -->
        <input  type="email" name="email" placeholder="Email" required 
            style="width:100%; padding:6px; margin-bottom:6px; border-radius:10px; border:none;"
        >
    
         <div style="flex-basis:100%; margin-bottom:6px;">
        {!! NoCaptcha::display() !!}
        @if ($errors->has('g-recaptcha-response'))
            <span class="text-danger" style="color:red;">{{ $errors->first('g-recaptcha-response') }}</span>
        @endif
    </div>
    
        <!-- Submit -->
        <button 
            type="submit" 
            style="width:100%; padding:8px; background:#ffee07; color:#077165; border:none; border-radius:10px; cursor:pointer;"
        >
            Submit
        </button>
    </form>
    
   
  </div>

</div>

<script>
  const tab = document.getElementById('stickyTab');
  const panel = document.getElementById('stickyPanel');
  const closeBtn = document.getElementById('closeBtn');
  const form = document.getElementById('valuationForm');

  // Open panel
  tab.addEventListener('click', () => {
    panel.style.display = 'block';
  });

  // Close panel
  closeBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    panel.style.display = 'none';
  });

  // Form submit
  form.addEventListener('submit', async (e) => {
  e.preventDefault();

  if (!form.checkValidity()) {
    alert('Please fill out the form correctly.');
    return;
  }

  const formData = new FormData(form);

  try {
    const response = await fetch(form.action, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
      },
      body: formData,
    });

    if (response.ok) {
      alert('✅ Thank you! Your request has been submitted.');
      form.reset();
      panel.style.display = 'none';
    } else {
      alert('❌ Failed to send. Please try again.');
    }
  } catch (error) {
    alert('⚠️ Something went wrong. Please try again later.');
    console.error(error);
  }
});

</script>

<style>
  #stickyTab:hover {
    background: #05564f;
  }

  @media (max-width: 768px) {
    #stickyPanel {
      width: 220px;
      padding: 15px;
    }
    #stickyPanel input, #stickyPanel button {
      padding: 5px;
    }
  }
</style>


 <!--============== Vertical Sticky Section End ==============-->

    <div id="page_wrapper" class="bg-light">
        <!--============== Header Section Start ==============-->
        <header class="main-header header-style-1">

            <div class="top-header" style="background: #000;">
                <div class="container">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col">
                            <ul class="list-color-white d-flex justify-content-start gap-3">
                                <li><a href="tel:01582 410151"><i class="icon-phone"></i> Talk To Us  01582 410151</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="navbar-top list-color-white d-flex justify-content-end gap-3">
                                <li><a href="tel:01582 410151"><i class="icon-map"></i> 737 Dunstable Road, Luton, LU4 0HL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-active-primary nav-hover-primary nav-line-active">
                                <a class="navbar-brand" href="{{ route('home') }}"><img class="nav-logo" src="{{ asset('files/assets/images/logo/bewin-white.png') }}" alt="real estate template"></a>
                                
                      
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon color-dark"></span>
                                </button>
                               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link " href="{{ route('home') }}">Home</a>
                                            
                                        </li>
                                        <!--<li class="nav-item ">
                                            <a class="nav-link " href="{{ route('rent') }}">Guaranteed Rent</a>
                                           
                                        </li>-->
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('property') }}">Properties</a>
                                            
                                              
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('landlords') }}">Guaranteed Rent for Landlords</a>
                                            
                                        </li>


                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('aboutus') }}">About Us</a>
                                            
                                        </li>

                                        
                                         
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-hover-white hover-flash-move" style="color: #077165;">Schedule Viewing</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--================== Header Section End =================-->

           <!--============== Page Banner Section Start ==============-->
        <div class="inner-page-banner paraxify">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center mx-auto color-white mt-5">Search what you are looking for...</h2>
                        <span class="d-table font-primary text-center mx-auto color-white font-semibold fs-6 mb-4">We have listed over 100000+ property in our database</span>
                        <form class="bg-white quick-search form-icon-left" action="{{ route('search.property') }}" method="post">
                            @csrf
                            <div class="row g-2">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <i class="icon-search"></i>
                                        <input type="text" id="search-location" name="location"
                                            class="form-control" placeholder="Enter Location...">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="distance" aria-label="Default select example">
                                        <option selected>Distance</option>
                                        @foreach($distances as $distance)
                                            <option value="{{ $distance }}">{{ $distance }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <select class="form-select" name="property_type" aria-label="Default select example">
                                            <option selected>Types</option>
                                            @foreach($types as $type)
                                                <option value="{{ $type }}">{{ $type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="condition" aria-label="Default select example">
                                        <option selected>Status</option>
                                            @foreach($status as $condition)
                                               <option value="{{ $condition }}">{{ $condition }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="beds" aria-label="Default select example">
                                        <option selected>Bed</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="bathrooms" aria-label="Default select example">
                                        <option selected>Bath</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Min. Price">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Max. Price">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="furnishing" aria-label="Default select example">
                                        <option selected>Furnishing</option>
                                        @foreach($furnishing as $furnish)
                                            <option value="{{ $furnish }}">{{ $furnish }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="bills" aria-label="Default select example">
                                        <option selected>Bills</option>
                                            @foreach($bills as $bill)
                                              <option value="{{ $bill }}">{{ $bill }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-select" name="pets" aria-label="Default select example">
                                        <option selected>Pets</option>
                                        @foreach($pets as $pet)
                                            <option value="{{ $pet }}">{{ $pet }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-dark w-100" style="background: #067165;">Search Property</button> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page Banner Section End ==============-->
        
        


        <!--=============== Start Listing ====================-->
        <div class="full-row full-wide-layout" style="padding-bottom: 80px;">
            <div class="container">
                <div class="row g-5 g-lg-3">
                    <div class="col content-block order-lg-2">
                        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 g-3">
                            @foreach($properties as $property)
                                <div class="col">
                                    <!-- Property Grid -->
                                    <div class="property-grid-4 property-block">
                                        <div class="entry-wrapper">
                                            <div class="entry-thumbnail-wrapper">
                                                <a href="{{ route('property.details', $property->property_id) }}" class="entry-thumbnail"><img src="{{ asset('assets/img/properties/' . $property->image) }}" alt="real estate template"></a>
                                            </div>
                                            
                                            <div class="entry-content-wrapper">
                                                <div class="entry-header">
                                                    <h5 class="listing-title" ><a href="#" style="font-size: 19px !important;">{{ $property->title }} </a></h5>
                                                    <span class="listing-location"><i class="icon-map-pin"></i> {{ $property->address }}</span>
                                                </div>
                                                <div class="entry-content">
                                                    <ul class="property-info">
                                                        <li title="Beds">{{ $property->beds }} <span>Beds</span></li>
                                                        <li title="Baths">{{ $property->bathrooms }} <span>Baths</span></li>
                                                    </ul>
                                                    
                                                </div>
                                                <div class="entry-content">
                                                    <ul class="property-info">
                                                        <li title="Beds">Property Status:<span> {{ $property->status }}</span></li>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                                <div class="entry-footer">
                                                    <span class="listing-price" style="color: #077165;">£{{ $property->price }}<small> /pcm</small></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== End Listing =====================-->
        
        <!--============= Register Section Start =============-->
        <div class="full-row py-5 border-top" style="background:#e6e6e6;">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-9 col-md-8">
                        <h4 class="text-uppercase">Looking for Guaranteed Rent?</h4>
                        <span class="d-inline-block">Secure your income with guaranteed rent, hassle-free and reliable every month.</span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <a href="#" class="btn btn-primary btn-hover-secondary hover-flash-move d-table ms-md-auto" style="color:#000;">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Register Section End ==============-->

        <!--============== Footer Section Start ==============-->
        <footer class="footer-light bg-light full-row p-0 footer-two">
            <div class="full-row">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="widget footer-widget widget-about">
                                <h3 class="widget-title">Over 1000+ Properties Managed</h3>
                                <p><b>We have over 30 years expertise in the field and over time our principles and service oriented approach has allowed us to become one of the largest and most established agents in the area.</b></p>
                                <ul class="contact-info">
                                    <li><a href="callto: 01582 410151"> 01582 410151</a></li>
                                </ul>
                            </div>
                            <div class="widget footer-widget social-widget">
                                <a href="https://www.facebook.com/share/1GKZLArfko/?mibextid=wwXIfr"><i class="icon-facebook"></i></a>
                                <a href="https://www.instagram.com/bedsaccom?igsh=czZleHV2Z2d0cWl6"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row row-cols-1 row-cols-sm-3">
                                <div class="col">
                                    <div class="widget footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Learn More</h4>
                                        <ul>
                                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                            <li><a href="{{ route('landlords') }}">Guaranteed Rent for Landlords</a></li>
                                            <li><a href="{{ route('property') }}">Properties</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="widget footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Quick Links</h4>
                                        <ul>
                                         
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            <li><a href="{{ route('contact') }}">Schedule Viewing</a></li>
                                            <li><a href="{{ route('contact') }}">Free Valuation</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="widget footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Locations</h4>
                                        <ul>
                                             <p>737 Dunstable Road,<br>
                                            Luton, LU4 0HL<br>
                                            United Kingdom</p>
                                             <li><a href="mailto:lettings@bedsaccom.co.uk" style="color: #067165;"> lettings@bedsaccom.co.uk</a></li> 
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll to top -->
            <div id="scroll" title="Scroll back to top"><span class="icon-arrow-up-right"></span></div>
        </footer>
        <!--================= Footer Section End ================-->


        <!--============ Copyright Section Start ===========-->
        <div class="copyright">
            <div class="container py-4">
                <div class="row row-cols-lg-2 row-cols-1 g-3">
                    <div class="col">
                        <span class="color-white mb-0">Copyright ©2025 Bedsaccom All right reserved</span>
                    </div>
                    <div class="col">
                        <ul class="bottom-footer-nav list-color-gray">
                            <li>Designed By <a href="https://www.appsynctechnologies.co.uk">Appsync Technologies Ltd</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Copyright Section End =============-->

    </div>


    <!--============== Modal Start ==============-->
    <div class="overlay-dark modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="close view-close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body property-block summary p-3">
                    <div class="row row-cols-xl-2 row-cols-1">
                        <div class="col">
                            <div class="entry-thumbnail bg-secondary hover-img-zoom m-2">
                                <div class="type"><span class="sale text-white">For Sale</span><span class="featured text-white">Featured</span></div>
                                <a href="#"><img class="w-100" src="{{ asset('files/assets/images/property/2.webp') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="entry-content-wrapper">
                                <div class="property-type"><a href="#">Condos</a></div>
                                <h5 class="entry-title mb-1" id="staticBackdropLabel"><a href="#">Luxury Condos Infront of the street of Green Park</a></h5>
                                <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 4213 South Burlington, VT 05403</span>
                                <span class="d-block color-dark hover-text-primary primary-font fs-7 mb-2">( 100 People Recommended )</span>
                                <div class="d-flex align-items-center">
                                    <span class="color-primary font-primary fw-semibold fs-3">$5600 - $8300/<small>mo</small></span>
                                    <span class="product-status ms-4 my-1"><i class="fas fa-check"></i> Available</span>
                                </div>
                                <div class="product-offers mt-3">
                                    <ul class="product-offers-list">
                                        <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                        <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                        <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="quantity">
                                    <ul class="d-flex gap-2">
                                        <li><span>Rooms:</span> 5</li>
                                        <li><span>Beds:</span> 3</li>
                                        <li><span>Bathrooms:</span> 2</li>
                                        <li><span>Garage:</span> 1</li>
                                        <li><span>Area:</span> 1100 Sqft</li>
                                    </ul>
                                </div>
                                <h5 class="text-secondary my-3">Description</h5>
                                <p>Bibendum purus aenean mus aenean eu interdum nonummy ipsum ad consequat. Dui eros donec faucibus convallis tempus rutrum id donec mus hymenaeos placerat congue curae mauris turpis gravida viverra consequat consequat
                                    gravida luctus.</p>
                                <div class="short-description d-flex">
                                    <span class="me-4"><b>Highlights:</b></span>
                                    <div class="short-description">
                                        <ul class="list-style d-flex flex-column">
                                            <li>Regular Fit.</li>
                                            <li>Full sleeves.</li>
                                            <li>Machine wash, tumble dry.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Modal End ==============-->

    


    <!-- Javascript Files -->
    <script src="{{ asset('files/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/greensock.js') }}"></script>
    <script src="{{ asset('files/assets/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('files/assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('files/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/range/tmpl.js') }}"></script>
    <script src="{{ asset('files/assets/js/range/jquery.dependClass.js') }}"></script>
    <script src="{{ asset('files/assets/js/range/draggable.js') }}"></script>
    <script src="{{ asset('files/assets/js/range/jquery.slider.js') }}"></script>
    <script src="{{ asset('files/assets/js/paraxify.js') }}"></script>
    <script src="{{ asset('files/assets/js/custom.js') }}"></script>
    
    
    {{-- Google Places API --}}
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
<script>
    function initAutocomplete() {
        const input = document.getElementById("search-location");
        new google.maps.places.Autocomplete(input, {
            types: ['geocode'],
            componentRestrictions: { country: "uk" }
        });
    }
    google.maps.event.addDomListener(window, "load", initAutocomplete);
    
    
</script>

   {!! NoCaptcha::renderJs() !!}
</body>
</html>