<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge - Premium financial planning and investment management HTML template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ABC - Flight Reservation System</title>

    <link rel="icon" href="img/core-img/favicon.ico">
   <link rel="stylesheet" href="style.css?v=2">
    <link rel="stylesheet" href="css/custom-override.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap"> 
            <!-- Logo -->
            <div class="ve-logo">
                <a href="index.html">
                    <span class="ve-logo-icon">V</span>
                    <span class="ve-logo-text">Vansh<strong>Airways</strong></span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="ve-nav">
<ul>
<nav class="navbar">
   <nav class="navbar">
   <li><a href="index.php">Dashboard</a></li>
<li class="dropdown">
    <a href="#">👤 Passengers ▼</a>

    <ul class="dropdown-menu">
      <li><a href="passenger/add_passenger.php">➕ Add Passenger</a></li>
        <li><a href="passenger/update_passenger.php">✏️ Update Passenger</a></li>
        <li><a href="passenger/search_passenger.php">🔍 Search Passenger</a></li>
        <li><a href="passenger/booking_history.php">📋 Booking History</a></li>
        <li><a href="passenger/passenger_records.php"> 📝 Passenger Records </a>
</li>
    </ul>
</li>
<li class="dropdown">
    <a href="#">🏢 Agencies ▼</a>

    <ul class="dropdown-menu">
         <li><a href="agency/add_agency.php">➕ Add Agency</a></li>
        <li><a href="agency/manage_location.php">📍 Manage Locations</a></li>
        <li><a href="agency/search_agency.php">🔍 Search Agency</a></li>
   
    </ul>
</li>
<li class="dropdown">
    <a href="#">✈ Flight Management ▼</a>

    <ul class="dropdown-menu">
   <li><a href="flight/add_flight.php">➕ Add Flight</a></li>
        <li><a href="flight/update_flight.php">🕒 Update Timings</a></li>
        <li><a href="flight/search_flight.php">🔍 Search Flights</a></li>
        <li><a href="flight/routes.php">🗺 View Routes</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#">🎫 Bookings ▼</a>

    <ul class="dropdown-menu">
         <li><a href="booking/book_flight.php">🎟 Book Ticket</a></li>
        <li><a href="booking/cancel_booking.php">❌ Cancel Booking</a></li>
        <li><a href="booking/booking_records.php">📋 Booking Records</a></li>
        <li><a href="booking/reports.php">📊 Reports</a></li>
    </ul>
</li>
<li><a href="sql/sql_queries.php">📄 SQL Queries</a></li>
</nav>
</nav>
</ul>
</nav>

            <!-- CTA -->
           <div class="ve-nav-cta">
    <a href="booking.html" class="ve-cta-btn">
        Book Now <i class="fa fa-plane"></i>
    </a>
</div>

            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
  <div class="ve-mobile-menu" id="ve-mobile-menu">

    <a href="index.php" class="menu-item">🏠 Home</a>

    <div class="menu-heading">👤 Passengers</div>
    <a href="passenger/add_passenger.php" class="menu-item"> Add Passenger</a>
    <a href="passenger/search_passenger.php" class="menu-item"> Search Passenger</a>
    <a href="passenger/update_passenger.php" class="menu-item"> Update Passenger</a>
    <a href="passenger/booking_history.php" class="menu-item"> Booking History</a>
    <a href="passenger/passenger_records.php"class="menu-item">  Passenger Records </a>

    <div class="menu-heading">🏢 Agencies</div>
    <a href="agency/add_agency.php" class="menu-item"> Add Agency</a>
    <a href="agency/search_agency.php" class="menu-item"> Search Agency</a>
    <a href="agency/manage_location.php" class="menu-item"> Manage Location</a>

    <div class="menu-heading">✈️ Flights</div>
    <a href="flight/add_flight.php" class="menu-item"> Add Flight</a>
    <a href="flight/search_flight.php" class="menu-item"> Search Flights</a>
    <a href="flight/update_flight.php" class="menu-item"> Update Timings</a>
    <a href="flight/routes.php" class="menu-item"> View Routes</a>

    <div class="menu-heading">🎫 Bookings</div>
    <a href="booking/book_flight.php" class="menu-item"> Book Ticket</a>
    <a href="booking/cancel_booking.php" class="menu-item"> Cancel Booking</a>
    <a href="booking/booking_records.php" class="menu-item"> Booking Records</a>
    <a href="booking/reports.php" class="menu-item"> Reports</a>

<div class="menu-heading">📄 SQL</div>
<a href="/sql/sql_queries.php">SQL Queries</a>
   
</div>
    </header>

    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <section class="ve-hero">
        <!-- Left Panel -->
        <div class="ve-hero-left">
           <span class="ve-hero-badge">
    Flight Reservation System • Easy Online Booking
</span>
<h1>Book Your <span class="ve-highlight">Flight</span><br>
    In Minutes
</h1>
<p> Search flights, manage passengers, agencies and bookings through one powerful airline reservation system.</p>
<div class="hero-buttons">

<a href="booking/book_flight.php" class="btn-primary">
    Book Flight
</a>

<a href="flight/search_flight.php" class="btn-secondary">
    Search Flights
</a>

</div>
            </div>
            <!-- Quick Stats Row -->
            <div class="ve-hero-stats">
                <div class="ve-stat">
                    <strong>500+</strong>
                    <span>Flights Available</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>1000+</strong>
                    <span>Passengers</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>50+</strong>
                    <span>Travel Agencies</span>
                </div>
            </div>
        </div></div></div>
       
        <!-- Right Panel: overlapping image cards -->
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img" style="background-image:url(img/bg-img/1.jpg);"></div>
            <div class="ve-hero-img-accent bg-img" style="background-image:url(img/bg-img/3.jpg);"></div>
            <!-- Floating card -->
            <div class="ve-float-card">
                <i class="fa fa-line-chart"></i>
                <div>
                 <strong>24/7</strong>
                 <span>Flight Support</span> 
                </div>
               
            </div>
        </div>
    </section>

    <!-- ===== MARQUEE TRUST BAR ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
          <span><i class="fa fa-user"></i> Passenger Management</span>
          <span><i class="fa fa-building"></i> Agency Management</span>
          <span><i class="fa fa-plane"></i> Flight Scheduling</span>
          <span><i class="fa fa-ticket"></i> Online Ticket Booking</span>
          <span><i class="fa fa-search"></i> Flight Search Facility</span>
          <span><i class="fa fa-file"></i> Booking Reports</span>
          <span><i class="fa fa-clock"></i> Real-Time Access</span>
          <span><i class="fa fa-shield"></i> Secure Database System</span>
          <span><i class="fa fa-globe"></i> Multi-City Flight Routes</span>
          <span><i class="fa fa-check-circle"></i> Easy Reservation Process</span>
        </div>
    </div>

    <!-- ===== SERVICES GRID (new card layout) ===== -->
    <section class="ve-section ve-services-section">
        <div class="container">
            <div class="ve-section-header text-center">
           <span class="ve-section-tag">System Modules</span>
<h2>Airline Reservation <span>Modules</span></h2>
<p>Manage passengers, agencies, flights and bookings through a centralized airline reservation system.</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon"><i class="fa fa-user"></i></div>
                    <h4>Passenger Management</h4>
<p>Add, update, search and manage passenger records efficiently.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon"><i class="fa fa-building"></i></div>
                  <h4>Agency Management</h4>
<p>Manage travel agencies and their booking operations.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon"><i class="fa fa-plane"></i></div>
                   <h4>Flight Management</h4>
<p>Add flight schedules, routes, timings and destinations.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-service-icon"><i class="fa fa-ticket"></i></div>
                   <h4>Booking Management</h4>
<p>Create, update and cancel flight reservations easily.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="ve-service-icon"><i class="fa fa-search"></i></div>
                   <h4>Flight Search</h4>
<p>Search available flights based on source, destination and date.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                    <div class="ve-service-icon"><i class="fa fa-file"></i></div>
                   <h4>Reports & Analytics</h4>
<p>Generate booking reports and passenger statistics instantly.</p>
                    <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-5">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img" style="background-image:url(img/bg-img/5.jpg);"></div>
                        <div class="ve-whyus-badge">
                           <strong>500+</strong>
                             <span>Flights Available</span>
                        </div>
                    </div>
                </div>
                <!-- Content Side -->
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-whyus-content">
                       <span class="ve-section-tag">Why Choose Us</span>
                      <h2>Smart Airline <span>Reservation System</span></h2>
                      <p>Manage passengers, agencies, flights and bookings through a centralized database system designed for efficient airline reservation management.</p>
                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                               <div><strong>Passenger Management</strong>
                                <p>Add, update and search passenger records efficiently.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                               <div><strong>Flight Search & Booking</strong>
                                  <p>Quickly search flights and make reservations with ease.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                              <div><strong>Booking Reports</strong>
                                   <p>Generate passenger and booking reports instantly.</p></div>   
                            </div>
                        </div>
                       <a href="about.html" class="ve-btn-primary mt-30">
                      Learn More
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COUNTERS ===== -->
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                   <i class="fa fa-plane"></i>
<strong class="counter" data-count="500">0</strong><span>+</span>
<p>Flights Available</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                   <i class="fa fa-users"></i>
<strong class="counter" data-count="1000">0</strong><span>+</span>
<p>Passengers</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-building"></i>
<strong class="counter" data-count="50">0</strong><span>+</span>
<p>Travel Agencies</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-ticket"></i>
<strong class="counter" data-count="5000">0</strong><span>+</span>
<p>Bookings Processed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ve-section ve-testimonials-section">
        <div class="container">
            <div class="ve-section-header text-center">
               <span class="ve-section-tag">System Features</span>
<h2>What Our Users <span>Experience</span></h2>
            </div>
            <div class="ve-testi-grid">
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Flight booking is now much faster and easier. The system helps us manage passenger records efficiently."


</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(img/bg-img/32.jpg);"></div>
                        <div><strong>rabada sharma</strong><span>Passenger</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"The flight search and booking modules work smoothly and save a lot of time."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(img/bg-img/33.jpg);"></div>
                        <div><strong>Miss juli</strong><span>Travel Agent</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"The centralized database makes managing flights and bookings very convenient."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(img/bg-img/35.webp);"></div>
                        <div><strong>Vansh jha</strong><span>System Administrator</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url(img/bg-img/6.jpg);">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Ready to Book Your <span>Next Flight?</span></h2>
<p>Search flights, manage bookings and explore destinations through our Airline Reservation System.</p>
<a href="booking.php" class="ve-btn-white">Book Flight Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <section class="ve-section ve-insights-section">
        <div class="container">
            <div class="ve-section-header text-center">
               <span class="ve-section-tag">Flight Updates</span>
<h2>Latest Airline <span>Features</span></h2>
<p>Explore the key features and functionalities of the Airline Reservation System.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(img/bg-img/10.jpg);"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Passenger</span>
<h5><a href="#">Passenger Management System</a></h5>
<p>Add, update, search and manage passenger records efficiently.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 26</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(img/bg-img/11.jpg);"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Flight</span>
<h5><a href="#">Flight Search & Scheduling</a></h5>
<p>Search flights by source, destination and date with ease.</p>
                            <div class="ve-insight-meta">
                               <span><i class="fa fa-calendar"></i> Updated 2025</span>
                                <a href="about.html">Learn More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(img/bg-img/12.jpg);"></div>
                        <div class="ve-insight-body">
                           <span class="ve-insight-cat">Booking</span>
<h5><a href="#">Online Booking Management</a></h5>
<p>Create, manage and track passenger bookings instantly.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 14</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== NEWSLETTER ===== -->
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left">
                   <i class="fa fa-plane"></i>
<h3>Get Flight Updates</h3>
<p>Stay updated with flight schedules, booking information and airline announcements.</p>
                    </div>
                </div>
                <div class="ve-nl-right">
                   <form class="ve-nl-form">
    <input type="email" placeholder="Enter your email" required>
    <button type="submit">Get Updates</button>
</form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER (dark, 4-column) ===== -->
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <!-- Col 1: Brand -->
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="index.html" class="ve-footer-logo">
                            <span class="ve-logo-icon">V</span>
                            <span class="ve-logo-text">Vansh<strong>Airways</strong></span>
                        </a>
                     <p>Airline Reservation System for managing passengers, flights, agencies and bookings efficiently.</p>
                        <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Col 2: Quick Links -->
                <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Quick Links</h5>
                    <ul class="ve-footer-links">
                       <li><a href="about.html">About System</a></li>
                       <li><a href="flights.html">Flights</a></li>
                       <li><a href="booking.php">Booking</a></li>
                       <li><a href="reports.html">Reports</a></li>
                    
                    </ul>
                </div>
                <!-- Col 3: Services -->
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Our Services</h5>
                    <ul class="ve-footer-links">
                   <li><a href="#">Passenger Management</a></li>
                   <li><a href="#">Agency Management</a></li>
                   <li><a href="#">Flight Management</a></li>
                   <li><a href="#">Booking System</a></li>
                   <li><a href="#">Reports</a></li>
                    </ul>
                </div>
                <!-- Col 4: Contact -->
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Get In Touch</h5>
                    <ul class="ve-footer-contact">
                      <li><i class="fa fa-map-marker"></i> Airline Reservation System</li>
                    <li><i class="fa fa-phone"></i> +91 XXXXX XXXXX</li>
                    <li><i class="fa fa-envelope"></i> jhavansh8585@gmail.com</li>
                    <li><i class="fa fa-clock-o"></i> 24/7 Support</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="ve-footer-bottom">
            <div class="container">
                <div class="ve-footer-bottom-inner">
                  <p>© <script>document.write(new Date().getFullYear());</script> Airline Reservation System | DBMS Case Study Project created by vansh jha</p>
                    <ul>
                    <li><a href="about.html">About System</a></li>
<li><a href="booking.php">Booking</a></li>
<li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
    <script src="js/vaultedge.js"></script>
</body>
</html>
