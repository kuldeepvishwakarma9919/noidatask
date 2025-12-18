<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/btn.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
</head>
    <header class="hero-section">
        <nav class="navbar navbar-expand-lg navbar-dark pt-4">
            <div class="container">
                <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home.index') }}">
                    <span class="logo-icon me-2">❖</span> ShipX
                </a>
                <button class="navbar-toggler box-shadow-none outline-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav bg-dark-glass px-2 py-1 rounded-pill">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="#">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="#">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('solutions*') ? 'active' : '' }}" href="#">Solutions</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('blog*') ? 'active' : '' }}" href="#">Blog</a>
                    </li>
                    
                </ul>
            </div>

                <div class="d-none d-lg-block">
                    <a href="#" class="btn get_start_btn rounded-pill d-inline-flex align-items-center">
                        Get Started
                        <span class="arrow-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="container hero-content text-center text-white">
            <div class="position-relative">
                <div class="brand-tag tag-1"><img src="{{ asset('assets/img/tag1.png') }}" alt="" width="30px"> Hero</div>
                <div class="brand-tag tag-2"><img src="{{ asset('assets/img/tag2.png') }}" alt="" width="30px"> Myntra</div>
                <div class="brand-tag tag-3"><img src="{{ asset('assets/img/tag3.png') }}" alt="" width="30px"> Tata</div>
                <div class="brand-tag tag-4"><img src="{{ asset('assets/img/tag4.png') }}" alt="" width="30px"> Lego</div>
                <div class="brand-tag tag-5"><img src="{{ asset('assets/img/tag5.png') }}" alt="" width="30px"> Adidas</div>
                <div class="brand-tag tag-6"><img src="{{ asset('assets/img/tag6.png') }}" alt="" width="30px"> H&M</div>

                <h1 class="display-text mb-4">STAY AHEAD <br> IN SHIPPING AND LOGISTICS</h1>
                <p class="lead-text mb-5 mx-auto" style="max-width: 600px;">
                    Discover key insights and trends to enhance your shipping strategies and stay competitive.
                </p>
                
                <div class="d-flex justify-content-center gap-3 align-items-center">
                <a href="#" class="btn-pill btn-blue">
                    Contact us
                    <span class="icon-wrap">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                    </span>
                </a>
                <a href="#" class="btn-pill btn-glass">
                    Play video
                    <span class="icon-wrap">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                    </span>
                </a>

                </div>
            </div>
        </div>
    </header>


    <section class="testimonial-section py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-5 text-white mb-5 mb-lg-0">
                    <span class="badge rounded-pill bg-glass mb-3">Testimonial</span>
                    <h2 class="display-5 mb-4">What Do Our <br> Clients Say</h2>
                    <p class="lead text-secondary mb-5">
                        We make shipping simple with fast booking, real-time tracking, and secure, on-time delivery for every cargo across the globe.
                    </p>
                    <div style="display: flex; gap: 15px; padding: 10px;"> <a href="#" class="btn-custom-pill btn-solid-blue">
                        Contact us
                        <span class="icon-circle">
                        <svg width="16" height="16" fill="white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                        </span>
                    </a>

                    <a href="#" class="btn-custom-pill btn-glass-dark">
                        Get Started
                        <span class="icon-circle">
                        <svg width="16" height="16" fill="white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                        </span>
                    </a>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="testimonial-card p-4">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pravatar.cc/150?u=olivia" alt="User" class="profile-img me-3">
                                <div>
                                    <h5 class="mb-0 text-white">Olivia Jonathan</h5>
                                    <small class="text-secondary">CEO at Shipzo</small>
                                </div>
                            </div>
                            <div class="stars text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>

                        <p class="testimonial-text text-light">
                            "Ship X has completely changed the way we manage logistics. The platform is easy to use, and their tracking system keeps us updated at every step"
                        </p>

                        <div class="d-flex align-items-center gap-3 my-4 text-secondary">
                            <span><i class="fas fa-location-dot me-1"></i> Mumbai</span>
                            <i class="fas fa-arrow-right small"></i>
                            <span><i class="fas fa-location-dot me-1"></i> Delhi</span>
                        </div>

                        <div class="d-flex align-items-center text-secondary">
                            <span class="verified-badge"><i class="fas fa-check-circle me-1"></i> Verified</span>
                        </div>
                    </div>
                    
                    <div class="slider-track mt-4">
                        <div class="slider-thumb"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>



  <section class="tracking-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="badge-custom">Tracking</span>
                <h1 class="display-4 fw-bold mt-3 mb-4 text-navy">Unlock The Full <br> Power of ShipX Logistics</h1>
                <p class="lead-text mb-5">Track shipments, monitor vehicles, and analyze data—all from one smart dashboard. Ship X simplifies your logistics with full control and visibility.</p>
                
                <div class="d-flex flex-wrap gap-3">
                    <a href="#" class="btn-custom-pill btn-solid-blue">
                        Contact us
                        <span class="icon-circle">
                            <svg width="14" height="14" fill="white" viewBox="0 0 16 16">
                                <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </span>
                    </a>

                    <a href="#" class="btn-custom-pill btn-glass-dark">
                        Get Started
                        <span class="icon-circle">
                            <svg width="14" height="14" fill="#333" viewBox="0 0 16 16">
                                <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

           <div class="col-lg-6">
    <div class="image-container">
        <img src="{{ asset('assets/img/tracking.png') }}" class="main-img" alt="Professional working">
        
        <div class="glass-overlay-card">
            <div class="card-header-text">
                <span class="dot"></span> Improved Supply Chain
            </div>
            
            <div class="card-body-content">
                <div class="stats-group">
                    <h2 class="stat-number">25K</h2>
                    <span class="stat-percentage">+50%</span>
                </div>
                
                <div class="graph-svg">
                    <svg viewBox="0 0 120 40" fill="none">
                        <path d="M5 35 C 20 35, 30 10, 50 25 S 80 40, 110 5" stroke="#6c7fd8" stroke-width="2.5" stroke-linecap="round" fill="none"/>
                        <circle cx="110" cy="5" r="3.5" fill="#6c7fd8" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>

    <section class="section-padding bg-navy text-white contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.2844091816137!2d80.94234641101842!3d26.911287376550735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957006e87ccbd%3A0x141b9c86370fd928!2zRW5naW5lZXJpbmcgQ29sbGVnZSBDaGF1cmFoYS_gpIfgpILgpJzgpYDgpKjgpL_gpK_gpLDgpL_gpILgpJcg4KSV4KWJ4KSy4KWH4KScIOCkmuCljOCksOCkvuCkueCkvg!5e1!3m2!1sen!2sin!4v1765976191263!5m2!1sen!2sin" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Send Us A Message</h3>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.leads.store') }}" method="POST" enctype="multipart/form-data" class="contact-form">
                     @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control"
                                placeholder="Full Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="business_name" class="form-control"
                                placeholder="Business Name"
                                value="{{ old('business_name') }}">
                            @error('business_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control"
                                placeholder="Email Id"
                                value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control"
                                placeholder="Phone Number"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="file" name="attachment" class="form-control">
                            @error('attachment')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control"
                                    rows="4"
                                    placeholder="Your Message">{{ old('message') }}</textarea>
                            @error('message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success-custom px-5">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <footer class="py-5 bg-white border-top">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 d-flex align-items-center gap-3">
                    <h4 class="fw-bold mb-0 text-navy">❖ ShipX</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end text-muted">
                    ©2025 ShipX. All Rights Reserved.
                </div>
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col-lg-4 mb-4">
                    <h6>Subscribe to Chainex</h6>
                    <div class="subscribe-box mt-3">
                        <input type="text" placeholder="Enter your Email">
                        <button class="btn" style="background-color: #717ce0">Sign up</button>
                    </div>
                </div>
                <div class="col-lg-2 col-6 mb-4">
                    <h6>Explore</h6>
                    <ul class="list-unstyled mt-3">
                        <li>Home</li><li>About Us</li><li>Solutions</li><li>Blog</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 mb-4">
                    <h6>Solutions</h6>
                    <ul class="list-unstyled mt-3">
                        <li>Freight Management</li><li>Order Tracking</li><li>Carrier Integration</li><li>Analytics Dashboard</li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6>Resources</h6>
                    <ul class="list-unstyled mt-3">
                        <li>Help Center</li><li>FAQs</li><li>Terms of Service</li><li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>