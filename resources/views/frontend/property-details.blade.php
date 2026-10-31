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
<body class="single-property">

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

        <!--============== Property Details Start ==============-->
        <div class="full-row straight-shape shape-size-500 " style="padding-bottom: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-property-page property-block">
                            <div class="entry-single-wrapper">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="entry-single-header p-0">
                                    <div class="entry-title-wrapper">
                                        
                                        <h1 class="entry-title color-white">{{ $property->title }}</h1>
                                        <span class="listing-location"><i class="icon-map-pin"></i> {{ $property->address }}</span>
                                    </div>
                                    <div class="entry-price-wrapper">
                                        <span class="listing-available"><i class="icon-check-square"></i>{{ $property->status }}</span>
                                        <span class="listing-price">£{{ $property->price }}<small> /pcm</small></span>
                                        
                                    </div>
                                </div>
                                <div class="cs2-slider">
                                    {{-- Main Image first --}}
                                    <div class="cs2-slide active">
                                        <img src="{{ asset('assets/img/properties/' . $property->image) }}" alt="">
                                    </div>
                                
                                    {{-- Gallery Images --}}
                                    @if(!empty($property->gallery_images))
                                        @foreach($property->gallery_images as $galleryImage)
                                             <div class="cs2-slide">
                                                <img src="{{ asset('assets/img/gallery/' . trim($galleryImage)) }}" alt="">
                                            </div>
                                        @endforeach
                                    @endif
                                
                                    <span class="cs2-prev">&#10094;</span>
                                    <span class="cs2-next">&#10095;</span>
                                </div>
                                
                                <div class="cs2-thumb-wrapper">
                                    <span class="cs2-thumb-prev">&#10094;</span>
                                    <div class="cs2-thumbnails">
                                        {{-- Main Image Thumbnail --}}
                                        <img src="{{ asset('assets/img/properties/' . $property->image) }}" class="active" alt="{{ $property->title }}">
                                
                                        {{-- Gallery Thumbnails --}}
                                        @if(!empty($property->gallery_images))
                                            @foreach($property->gallery_images as $galleryImage)
                                                <img src="{{ asset('assets/img/gallery/' . trim($galleryImage)) }}" alt="{{ $property->title }}">
                                            @endforeach
                                        @endif
                                    </div>
                                    <span class="cs2-thumb-next">&#10095;</span>
                                </div>

                                <div class="entry-single-content-wrapper">
                                    <div class="row g-3">
                                        <div class="col-lg-8">
                                            <div class="single-content-wrapper">
                                                <div class="single-property-overview">
                                                    <h4 class="main-title">Overview</h4>
                                                    <ul class="property-info">
                                                        <li><span>Beds:</span> {{ $property->beds }}</li>
                                                        <li><span>Baths:</span> {{ $property->bathrooms }}</li>
                                                    </ul>
                                                </div>
                                                <div class="single-property-description">
                                                    <h4 class="main-title">Description</h4>
                                                    <p>{{ $property->description }}</p>
                                                    <h6>Features and Amenities</h6>
                                                    <ul>
                                                        <li><b>Modern Kitchens:</b> Equipped with familiar appliances, ample storage, and ample counter space for shared meals and daily routines.</li>
                                                        <li><b>Comfortable Bedrooms:</b> Each bedroom offers a cozy retreat, while the master suite may include a private bathroom and additional closet space.</li>
                                                        <li><b>Bathrooms:</b> Designed with practicality in mind, often with a bathtub or double sink to cope with busy mornings.</li>
                                                        <li><b>Balcony or outdoor space:</b> Many family apartments feature private balconies or access to
                                                    </ul>
                                                </div>
                                                
                                                <div class="single-property-details">
                                                    <h4 class="main-title">Address</h4>
                                                    <ul class="property-address">
                                                        <li><span>Address :</span>  {{ $property->address}} </li>
                                                        <li><span>City :</span>  {{ $property->city }}</li>
                                                        <li><span>Post Code :</span> {{ $property->postcode }}</li>
                                                        <li><span>County :</span> {{ $property->county }}</li>
                                                        <li><span>Country :</span> United Kingdom</li>
                                                    </ul>

                                                    <br>

                                                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                                                        @if(!empty($property->map_iframe))
                                                            {!! $property->map_iframe !!}
                                                        @else
                                                            <iframe
                                                                width="100%"
                                                                height="100%"
                                                                style="border:0; position:absolute; top:0; left:0;"
                                                                loading="lazy"
                                                                allowfullscreen
                                                                src="https://www.google.com/maps?q={{ urlencode($property->address) }}&output=embed">
                                                            </iframe>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-property-sidebar">
                                                <div class="contact-with-agent">
                                                    <h4 class="main-title">Bedfordshire Accommodation Bureau</h4>
                                                    <div class="single-agent-info">
                                                       
                                                        <div class="agent-info">
                                                            <h5 class="agent-name">Schedule A Viewing Now</h5>
                                                        </div>
                                                    </div>
                                                    <form id="contact-agent" class="single-contact-agent" method="POST" action="{{ route('send.enquiry') }}">
                                                        @csrf
                                                    
                                                            <!-- Pass property_id dynamically -->
                                                             <input type="hidden" name="property_id" value="{{ $property->property_id }}">
                                                            
                                                            <input type="hidden" name="website"> <!-- Honeypot -->
                                                            
                                                        <div class="row g-2">    
                                                    
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input type="tel" class="form-control" name="phone" placeholder="Phone" required>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <textarea name="message" placeholder="Message" class="form-control" rows="8" required></textarea>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="col-12">
                                                                {!! NoCaptcha::display() !!}
                                                                @if ($errors->has('g-recaptcha-response'))
                                                                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                                                @endif
                                                            </div>
                                                    
                                                            <div class="col-12">
                                                                <div class="form-group d-flex justify-content-between gap-3">
                                                                    <button type="submit" class="btn flex-fill" style="background: #067165;">Send Message</button>
                                                                    <a href="callto:01582410151" class="btn btn-border fw-semibold hover-color-white flex-fill">Phone Call</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                    

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
        </div>
        <!--=============== Property Details End ===============-->
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



    <!-- Javascript Files -->
    
    <script>
  window.addEventListener('load', function(){
  const slides = document.querySelectorAll('.cs2-slide');
  const thumbs = document.querySelectorAll('.cs2-thumbnails img');
  const prev = document.querySelector('.cs2-prev');
  const next = document.querySelector('.cs2-next');
  const thumbPrev = document.querySelector('.cs2-thumb-prev');
  const thumbNext = document.querySelector('.cs2-thumb-next');
  const thumbContainer = document.querySelector('.cs2-thumbnails');

  let index = 0;

  function showSlide(i){
    slides.forEach((s,j)=>{
      s.classList.toggle('active', j===i);
      thumbs[j].classList.toggle('active', j===i);
    });
    index = i;
  }

  prev.addEventListener('click', ()=>{ showSlide((index-1+slides.length)%slides.length); });
  next.addEventListener('click', ()=>{ showSlide((index+1)%slides.length); });
  thumbs.forEach((t,i)=>{ t.addEventListener('click',()=>showSlide(i)); });

  // Scroll thumbnails
  thumbNext.addEventListener('click', ()=>{ thumbContainer.scrollBy({left:120, behavior:'smooth'}); });
  thumbPrev.addEventListener('click', ()=>{ thumbContainer.scrollBy({left:-120, behavior:'smooth'}); });
});

</script>

    
  
    <script src="{{ asset('files/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/greensock.js') }}"></script>
    <script src="{{ asset('files/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/paraxify.js') }}"></script>
    <script src="{{ asset('files/assets/js/custom.js') }}"></script>
    
    <script>
        //get  the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
    {!! NoCaptcha::renderJs() !!}
</body>
</html>