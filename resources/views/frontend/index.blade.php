<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bedfordshire Accommodation Bureau is one of Luton’s largest lettings agent. We consistently offer our tenants a range of outstanding properties to choose from.">
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
<body class="home-page">

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


 


    <div id="page_wrapper" class="bg-light straight-shape shape-size-500 shape-bg-secondary">
        <!--============== Header Section Start ==============-->
        <header class="main-header header-style-2">
            <div class="top-header">
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
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
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
        <!--============== Header Section End ==============-->

        <!--============== Slider Area Start ==============-->
        <div class="full-row p-0 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner">
                            <div class="banner-overlay"></div>

                              <!-- Left-aligned heading -->
                              <div class="banner-content">
                                <h1 class="animate-text">Luton's Largest Independent Agent.</h1>
                                <p class="animate-text">Great Accommodation Right in the Heart of Bedfordshire.</p>
                              </div>

                              <!-- Stats top-right with decorative lines -->
                              <div class="stats-container">
                              <div class="stats">
                                <div class="stat-box">
                                  <div class="decor-line top-line"></div>
                                  <h2>30+</h2>
                                  <p>YEARS OF<br>EXPERIENCE</p>
                                </div>
                                <div class="stat-box">
                                  <div class="decor-line top-line"></div>
                                  <h2>1000+</h2>
                                  <p>PROPERTIES<br>MANAGED</p>
                                </div>
                              </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Slider Area End ==============-->

        <!-- =============== Listing Category Start ================-->
        <div class="full-row py-2">
            <div class="container">
                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center g-2"> 
                    <div class="col">
                        <div class="listing-block-4">
                            <div class="entry-wrapper">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail entry-icon">
                                        <img src="{{ asset('files/assets/images/icon/building.png') }}" alt="real estate template">
                                    </div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <h5 class="entry-title"><a href="guaranteedrent.html" title="House">&nbsp;&nbsp;&nbsp;&nbsp;Guaranteed Rent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="listing-block-4">
                            <div class="entry-wrapper">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail entry-icon">
                                        <img src="{{ asset('files/assets/images/icon/building.png') }}" alt="real estate template">
                                    </div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <h5 class="entry-title"><a href="#" title="House">Guaranteed Property Condition</a></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="listing-block-4">
                            <div class="entry-wrapper">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail entry-icon">
                                        <img src="{{ asset('files/assets/images/icon/infrastructure.png') }}" alt="real estate template">
                                    </div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <h5 class="entry-title"><a href="#" title="Villa">Guaranteed Court/ Eviction Cover</a></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="listing-block-4">
                            <div class="entry-wrapper">
                                <div class="entry-thumbnail-wrapper">
                                    <div class="entry-thumbnail entry-icon">
                                        <img src="{{ asset('files/assets/images/icon/apartment.png') }}" alt="real estate template">
                                    </div>
                                </div>
                                <div class="entry-content-wrapper">
                                    <div class="entry-header">
                                        <h5 class="entry-title"><a href="#" title="Appartments">Over 30 Years Of Experience</a></h5>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- =============== Listing Category End ================-->

        <!--========= Featured Listings Properties Start =========-->
        <div class="full-row bg-white straight-shape shape-bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <span class="tagline bg-primary px-2 mb-2 mx-auto" style="color:#077165;" >Properties</span>
                        <h3 class="main-title mb-5 mx-auto text-center">Recent Listings</h3>
                    </div>
                </div>
                <div class="owl-carousel 4block-carusel">
                    @foreach($properties as $property)
                        <div class="item">
                            <div class="property-grid-4 property-block">
                                <div class="entry-wrapper">
                                    <div class="entry-thumbnail-wrapper">
                                        
                                        <a href="{{ route('property.details', $property->property_id) }}" class="entry-thumbnail"><img src="{{ asset('assets/img/properties/' . $property->image) }} " alt="real estate template"></a>
                                    </div>
                                    <div class="entry-content-wrapper">
                                        <div class="entry-header">
                                            <h5 class="listing-title" >
                                                <a href="{{ route('property.details', $property->property_id) }}" style="font-size:19px !important;">{{ $property->title }} 
                                                </a>
                                            </h5>
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
        <!--========== Featured Listings Properties End ==========-->

        <!--=========== Testimonial Section Start ============-->
        <div class="full-row bg-white straight-shape shape-bg-light shape-end" style="padding-bottom: 80px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="d-flex justify-content-center flex-column text-center">
                            <span class="tagline bg-primary px-2 mb-2 mx-auto" style="color:#077165;">Testimonial</span>
                            <h3 class="main-title mb-5">Best of Client Reviews</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel 3block-carusel">
                            <div class="item">
                                <div class="testimonial-block-2">
                                    <div class="entry-wrapper">
                                        <div class="quote-icon"><img src="{{ asset('files/assets/images/quotation.png') }}" alt=""></div>
                                        <div class="entry-content">
                                            <p>Hassan, Zia, and the rest of the team at Bedfordshire Accommodation Bureau have been a pleasure to deal with, exhibiting a superior level of professionalism. If you are looking to property insights, this team comes highly recommended for all property management related matters!</p>
                                        </div>
                                        <div class="entry-footer">
                                            
                                            <div class="about-avata">
                                                <div class="d-table">by <span class="name text-dark">Kiran Vekariya</span></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-block-2">
                                    <div class="entry-wrapper">
                                        <div class="quote-icon"><img src="{{ asset('files/assets/images/quotation.png') }}" alt=""></div>
                                        <div class="entry-content">
                                            <p>Excellent service by all the staff at bedsaccom, especially Ali he really went out of his way to explain the whole lettings process.</p>
                                        </div>
                                        <div class="entry-footer">
                                            
                                            <div class="about-avata">
                                                <div class="d-table">by <span class="name text-dark">Ashton Aguilar</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-block-2">
                                    <div class="entry-wrapper">
                                        <div class="quote-icon"><img src="{{ asset('files/assets/images/quotation.png') }}" alt=""></div>
                                        <div class="entry-content">
                                            <p>We were so impressed with the service we received from Bedfordshire Accommodation Bureau. We had a few challenges during our move but Hassan always kept us in the loop and did everything he could to help it progress. Would absolutely recommended them, we were very impressed!!!</p>
                                        </div>
                                        <div class="entry-footer">
                                            
                                            <div class="about-avata">
                                                <div class="d-table">by <span class="name text-dark">Carol Stein</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-block-2">
                                    <div class="entry-wrapper">
                                        <div class="quote-icon"><img src="{{ asset('files/assets/images/quotation.png') }}" alt=""></div>
                                        <div class="entry-content">
                                            <p>Very pleasant experience renting my property last month. Hassan was especially impressive and very responsive throughout.</p>
                                        </div>
                                        <div class="entry-footer">
                                            
                                            <div class="about-avata">
                                                <div class="d-table">by <span class="name text-dark">Kyler Woods</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Testimonial Section End ============-->



  <!--============= Partner Carousel Start ================-->
        <div class="full-row bg-white" style="padding-bottom: 80px;">
            <div class="container">

                
                <div class="row justify-content-center">

                    <div class="col-lg-10">
                        <div class="brand-style-1">
                            <div class="owl-carousel partner-slider">
                                <div class="item">
                                    <a href="#" class="brand-logo">
                                        <img class="w-auto" src="{{ asset('files/assets/images/partner/brand-1.png') }}" alt="real estate partner">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="brand-logo">
                                        <img class="w-auto" src="{{ asset('files/assets/images/partner/brand-2.png') }}" alt="real estate partner">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="brand-logo">
                                        <img class="w-auto" src="{{ asset('files/assets/images/partner/brand-3.png') }}" alt="real estate partner">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="brand-logo">
                                        <img class="w-auto" src="{{ asset('files/assets/images/partner/brand-4.png') }}" alt="real estate partner">
                                    </a>
                                </div>
                               

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Partner Carousel End ===============-->

        <!--============= Register Section Start =============-->
        <div class="full-row bg-white py-5 border-top">
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
                                            <li><a href="{{ route('landlords') }}">Guaranteed rent for Landlords</a></li>
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

        <!--============== Copyright Section Start ==============-->
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
        <!--============== Copyright Section End ==============-->
    </div>

    <!-- Modal Start -->
    <div class="overlay-dark modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="close view-close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body modal-property-block property-block">
                    <div class="entry-wrapper">
                        <div class="entry-thumbnail-wrapper">
                            <div class="type"><span class="sale">For Sale</span></div>
                            <a href="#" class="entry-thumbnail"><img src="{{ asset('files/assets/images/property/2.webp') }}" alt="real estate template"></a>
                        </div>
                        <div class="entry-content-wrapper">
                            <div class="entry-header">
                                <h5 class="listing-title"><a href="#">House Rent Infront of the Street of Green Park</a></h5>
                                <span class="listing-location"><i class="icon-map-pin"></i> 4213 South Burlington, VT 05403</span>
                                <span class="listing-price">$5600 - $8300<small> / mo</small><span class="property-status"><i class="icon-check"></i> Available</span></span>
                            </div>
                            <hr>
                            <div class="entry-content">
                                <ul class="property-info">
                                    <li>5 <span>Rooms</span></li>
                                    <li>3 <span>Beds</span></li>
                                    <li>2 <span>Baths</span></li>
                                    <li>1 <span>Garage</span></li>
                                    <li>2400 <span>Sqft</span> </li>
                                </ul>
                                <ul class="property-features">
                                    <li>24 hours security guard</li>
                                    <li>Fire alarm installed</li>
                                    <li>Emeargency exit system</li>
                                    <li>Free internet facility</li>
                                    <li>1 Elevator available</li>
                                </ul>
                                <div class="short-description">
                                    <h6>Description</h6>
                                    <p>Real estate development involves numerous tasks, including creating project proposals, contracts, permits, marketing materials, and financial reports.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

   

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
    <script>
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            type: 'responsive',
            responsiveUnder: 0,
            layersContainer: 1280,
            maxRatio: 1,
            slideBGSize: 'auto',
            navButtons: false,
            navStartStop: false,
            hideUnder: 0,
            hideOver: 100000,
            skin: 'numbers',
            thumbnailNavigation: 'disabled',
            skinsPath: 'files/assets/skins/',
            height: 600
        });
    </script>
    
     {!! NoCaptcha::renderJs() !!}
</body>
</html>