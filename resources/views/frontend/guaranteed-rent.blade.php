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
<body class="mission-page">

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
    width: 260px;
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
    <form id="valuationForm">
      <input type="text" name="name" placeholder="Name" pattern="[A-Za-z\s]+" title="Letters only" required style="width:100%; padding:6px; margin-bottom:6px; border-radius:10px; border:none;">
      <input type="tel" name="phone" placeholder="Phone" pattern="\d{10,15}" title="Numbers only, 10-15 digits" required style="width:100%; padding:6px; margin-bottom:6px; border-radius:10px; border:none;">
      <input type="email" name="email" placeholder="Email" required style="width:100%; padding:6px; margin-bottom:6px; border-radius:10px; border:none;">
      <button type="submit" style="width:100%; padding:8px; background:#ffee07; color:#077165; border:none; border-radius:10px; cursor:pointer;">Submit</button>
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
  form.addEventListener('submit', (e) => {
    if (!form.checkValidity()) {
      e.preventDefault();
      alert('Please fill out the form correctly.');
      return;
    }
    e.preventDefault();
    alert('Thank you! Your request has been submitted.');
    form.reset();
    panel.style.display = 'none';
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
                                <a class="navbar-brand" href="index.html"><img class="nav-logo" src="{{ asset('files/assets/images/logo/bewin-white.png') }}" alt="real estate template"></a>
                                
                      
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon color-dark"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link " href="{{ route('home') }}">Home</a>
                                            
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('rent') }}">Guaranteed Rent</a>
                                           
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('property') }}">Properties</a>
                                            
                                              
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('aboutus') }}">About Us</a>
                                            
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ route('landlords') }}">Landlords</a>
                                            
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
                            <h1 class="page-title">Guaranteed Rent</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 bg-transparent p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               
                                    <li class="breadcrumb-item active" aria-current="page">Guaranteed Rent</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=============== Page Banner Section End ===============-->

        <!--================== Page Content Start =================-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-md-12">
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4">
                               <img src="{{ asset('files/assets/images/clipart/6.png') }}" class="hover-grayscale-0" alt="real estate template">
                            </div>
                            <div class="col-md-6 col-lg-8">
                                <h5>What Is Bedfordshire Accommodation Bureau’s Guaranteed Rent And Property Condition Scheme?</h5>
                                <p>Regarding property management one of the critical concerns for many property owners is ensuring rent is paid at the end of every month. However with our guaranteed rent we take the burden off you and ensure you get paid no matter what.</p>

                                <p>In today’s climate letting a property is both an opportunity and a challenge. The main challenge that it comes with is many responsibilities such as operational issues, maintenance and property upkeep. It can often mean that renting can become a massive risk to your property portfolio and become a huge financial burden.</p>

                               
                                <p>When your property is fully managed your rent is guaranteed on time, everytime and every month. Property condition is also guaranteed in our fully managed service.</p>

                               

                                
                            </div>

                            <div class="col-md-8 offset-md-2 col-lg-10 offset-lg-1" style="padding-top: 20px;">

                                <h5>So What Do The Rent And Guaranteed Property Conditions For Landlords Include?</h5>
                                 <p>When your property is fully managed you get the following as standard: <br>

                                <b>&bull;</b> Guaranteed rental payments at no extra cost <br>
                                <b>&bull;</b> Guaranteed property condition at no extra cost<br>
                                <b>&bull; </b> Happy and managed tenants<br>
                                <b>&bull; </b> No more income shortfalls<br>
                                <b>&bull;</b> Risk reduction when taking on new renters<br>
                                <b>&bull;</b> Premium customer service and 24/7 property management<br>
                                <b>&bull; </b> Legal cover for court and eviction costs<br>
                                <b>&bull; </b> Regular property checks on your behalf<br>
                                <b>&bull;</b> Vetted contractors to ensure ongoing high-quality property maintenance<br>
                                </p>

                                <p><b>We pride ourselves in being Luton’s first agent to offer a rent guarantee and property condition guarantee as a part of our fully managed service with no hidden or additional cost involved. Allow us to ensure your investment is guarded as standard.</b></p>

                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!--=================== Page Content End ==================-->


         <!--============= Partner Carousel Start ================-->
        <div class="full-row bg-white" style="
    padding-bottom: 80px;
">
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
                                <h3 class="widget-title">Over 1100+ Properties Managed</h3>
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
                                            <li><a href="{{ route('landlords') }}">Landlords</a></li>
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
</body>
</html>