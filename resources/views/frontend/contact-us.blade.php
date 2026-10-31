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
    <link href="https://fonts.googleapis.com/css2%EF%B9%96family=Albert+Sans%EF%B9%95ital,wght@0,100..900%EF%B9%941,100..900&amp;display=swap.css" rel="stylesheet">

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
<body class="contact-page">

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
                        <div class="page-title-wrapper">
                            <h1 class="page-title">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 bg-transparent p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=============== Page Banner Section End ===============-->

        <!--================== Page Content Start =================-->
        <div class="full-row" style="padding-bottom: 80px;">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-5 order-md-2">
                        <div class="contact-info">
                            <h5 class="main-title mb-4">Get In Touch</h5>
                            <p>For any enquiries please fill out the form below and someone will be in touch with you. We would love to hear from you!</p>
                            <ul>
                                <li><span>Office Address :</span> 737 Dunstable Road, Luton, LU4 0HL</li>
                                <li><span>Contact Number :</span> 01582 410151</li>
                                <li><span>Email Address :</span><a href="mailto:lettings@bedsaccom.co.uk" style="color: #067165;"> lettings@bedsaccom.co.uk</a></li>
                            </ul>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-7 order-md-1">
                        <h5 class="mb-4">Send Message</h5>
                        <div class="contact-form">
                            <form id="contact-agent" class="single-contact-agent" method="POST" action="{{ route('send.contact.enquiry') }}">
                                @csrf
                            
                                <div class="row g-2">
                                    <input type="hidden" name="website"> <!-- Honeypot -->
                            
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

                <br>
                <br>
                <!-- Responsive Google Map with smaller height -->
                <div style="position: relative; width: 100%; padding-bottom: 40%; /* Reduced height */ height: 0; overflow: hidden;">
                  <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19698.0892658813!2d-0.474464!3d51.892698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876497c7e9b615d%3A0x558a98d95d76901e!2sBedfordshire%20Accommodation%20Bureau%20Limited!5e0!3m2!1sen!2suk!4v1757726171364!5m2!1sen!2suk" 
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </div>

            </div>
        </div>


        <!--=================== Page Content End ==================-->

        
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
    
    {!! NoCaptcha::renderJs() !!}
</body>
</html>