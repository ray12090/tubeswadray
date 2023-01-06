@extends('master')
@section('title', 'KiosTani - About Us')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="/">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="foto/tani.jpg">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 mb-4">Best Organic Fruits And Vegetables</h1>
                <p class="mb-4">Focusing on the B2B Industry with a technology-supported food ecosystem, Kios Tani strives to create a food market with stable prices and aims to improve the quality life of local producers.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Organic Vedgetable</p>
                <p><i class="fa fa-check text-primary me-3"></i>Fresh Fruits</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Firm Visit Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-white mb-3">Visit Our Firm</h1>
                <p class="text-white mb-0">Together with Kios Tani, we will be FEEDING THE NATION! Kios Tani has worked with hundreds of local farmers and dozens of raw material suppliers to provide all the culinary business needs of our thousands of customers.</p>
            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Firm Visit End -->


<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Our Features</h1>
            <p>Kios Tani menyediakan beberapa fitur dalam pengolahan dan penanaman sayuran dan buah-buahan</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                    <h4 class="mb-3">Natural Process</h4>
                    <p class="mb-4">Natural processes are interactions among plants, animals, and the environment. These interactions, which include photosynthesis , pollination, decomposition , and others, help create and shape natural communities.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h4 class="mb-3">Organic Products</h4>
                    <p class="mb-4">Organic products are those that are produced using methods that do not involve synthetic pesticides, herbicides, or fertilizers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                    <h4 class="mb-3">Biologically Safe</h4>
                    <p class="mb-4">Biologically safe products are those that are safe for living organisms, including humans, animals, and plants. These products do not contain harmful ingredients or substances that could cause negative effects on living organisms.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
@endsection