@extends('master')
@section('title', 'KiosTani - Products')
@section('content')

<!-- route dari navbar masih ke sini, belum ke /products  -->

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="/">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Our Products</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4" style="width: 81rem;">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-1.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Tomat Ceri</a>
                                <span class="text-primary me-1">Rp.30.000/kg</span>
                                <span class="text-body text-decoration-line-through">Rp.45.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-2.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Nanas</a>
                                <span class="text-primary me-1">Rp.12.000/kg</span>
                                <span class="text-body text-decoration-line-through">Rp.14.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-3.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Cabai</a>
                                <span class="text-primary me-1">Rp.70.000/kg</span>
                                <span class="text-body text-decoration-line-through">Rp.85.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-4.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Stroberi</a>
                                <span class="text-primary me-1">Rp.20.000/kg</span>
                                <span class="text-body text-decoration-line-through">Rp.18.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-5.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Timun</a>
                                <span class="text-primary me-1">Rp.14.000/kg</span>
                                <span class="text-body text-decoration-line-through">Rp.17.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-6.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Tomat besar</a>
                                <span class="text-primary me-1">Rp.16.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-7.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Kentang</a>
                                <span class="text-primary me-1">Rp.18.500/kg>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-8.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Pisang</a>
                                <span class="text-primary me-1">Rp. 15.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-1.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Tomat Ceri</a>
                                <span class="text-primary me-1">Rp.30.000/kg</span>
                                <span class="text-body text-decoration-line-through">Rp.45.000/kg</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-2.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-3.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-4.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-5.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-6.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-7.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-8.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-1.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-2.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-3.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-4.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-5.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-6.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-7.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" src="img/product-8.jpg" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Fresh Tomato</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                <small class="w-100 text-center py-3">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->
@endsection