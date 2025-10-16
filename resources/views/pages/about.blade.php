@extends('layout')
@section('content') 
    <!-- Start Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->
    <!-- Start About Us Banner Section -->
    <div class="about-us-banner mt-110  mb-110">
        
        
       
        <!-- Start About Us Content Section section -->
        <div class="about-us-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="about-us-wrapper">
                            <h1>About Us – NameAura</h1>
                            <p>Welcome to NameAura, where every product carries a personal touch of elegance and identity. We specialize in creating customized products engraved with names, initials, and unique designs that transform everyday items into meaningful keepsakes.</p>
                            <p>At NameAura, we believe that personalization is more than just a trend — it’s a way to express individuality, celebrate milestones, and create lasting memories. From branded pens, mugs, water bottles, keychains, and corporate gifts to large-scale customized orders for businesses, schools, and organizations, we craft products that leave a lasting impression. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Content Section section -->
    </div>
    <!-- End About Us Banner Section -->

    <!-- Start About Us Video Section -->
    
    <!-- End About Us Video Section -->

   <br><br>

    <!-- Start Makeup section -->
    <div class="makeup-section mb-110">
        <div class="container">
            <div class="makeup-top-item">
                <div class="row align-items-center justify-content-center g-0 gy-4">
                    <div class="col-lg-6">
                        <div class="makeup-img hover-img">
                            <img src="assets/img/home1/makeup-img1.webp" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="makeup-content">
                            <h2>Our Mission</h2>
                            <p>To bring people closer to their identity through unique, personalized items that reflect style, value, and purpose.</p>
                            <p>Whether you’re an individual looking for the perfect personalized gift, a school in search of student merchandise, or a business ordering customized promotional products in bulk — NameAura is your reliable partner.</p>
                            <a href="{{route('category')}}" class="primary-btn1 style-2 hover-btn3">*Shop Something*</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center g-0 gy-4">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="makeup-content">
                        <h2>Our Vision</h2>
                        <p>To become Pakistan’s most trusted name in customized products, expanding globally with a reputation for quality, creativity, and customer satisfaction.</p>
                        <p>✔ Premium-quality materials <br>
✔ Modern laser engraving technology <br>
✔ Attention to detail & fine craftsmanship <br>
✔ Reliable bulk order solutions for companies and institutions <br>
✔ Professional customer support & timely delivery</p>
                        <a href="{{route('category')}}" class="primary-btn1 style-2 hover-btn3">*Try*</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="makeup-img hover-img">
                        <img src="assets/img/home1/makeup-img2.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Makeup section -->

    <!-- Start Say About section -->
    <x-say-about-section></x-say-about-section>
    <!-- End Say About section -->

    <!-- Star Newsletter section -->
    <x-newsletter-section></x-newsletter-section>
    <!-- End Newsletter section -->

    <!-- Start Instagram section -->
    <x-instagram-section></x-instagram-section>
    <!-- End Instagram section -->

   
@endsection