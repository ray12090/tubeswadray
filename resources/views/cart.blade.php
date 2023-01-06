@extends('master')
@section('title', 'KiosTani - Shopping Cart')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Shopping Cart</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="/">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Shopping Cart</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-lg-8">
                            <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                <p class="mb-0 text-muted">3 items</p>
                            </div>
                            <hr class="my-4">

                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="text-muted">Shirt</p>
                                <p class="text-black mb-0">Cotton T-shirt</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm" />

                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <p class="mb-0">Rp  44.00</p>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img6.webp"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="text-muted">Shirt</p>
                                <p class="text-black mb-0">Cotton T-shirt</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm" />

                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <p class="mb-0">Rp  44.00</p>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="text-muted">Shirt</p>
                                <p class="text-black mb-0">Cotton T-shirt</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm" />

                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <p class="mb-0">Rp  44.00</p>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="pt-5">
                                <p class="mb-0"><a href="#!" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></p>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 bg-grey">
                            <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-4">
                                <p class="text-uppercase">items 3</p>
                                <p>Rp 132.00</p>
                            </div>

                            <p class="text-uppercase mb-3">Shipping</p>

                            <div class="dropdown mb-4 pb-2">
                                <select class="select">
                                <option value="1">Standard-Delivery- Rp 5.000</option>
                                <option value="2">Next Day-Delivery- Rp 10.000</option>
                                </select>
                            </div>

                            <p class="text-uppercase mb-3">Give code</p>

                            <div class="mb-5">
                                <div class="form-outline">
                                <input type="text" id="form3Examplea2" class="form-control" />
                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-5">
                                <p class="text-uppercase">Total price</p>
                                <p>Rp  137.00</p>
                            </div>

                            <button type="button" class="btn btn-primary rounded-pill py-3 px-5 mt-3"
                                data-mdb-ripple-color="dark">Check out</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection