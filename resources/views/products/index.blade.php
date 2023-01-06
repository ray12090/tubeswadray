@extends('master')
 
@section('content')
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
                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="">
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="">{{ $product->name }}</a>
                                        <span class="text-primary me-1">Rp {{ $product->price }}/kg</span>
                                        <span class="text-body text-decoration-line-through">Rp.45.000/kg</span>
                                    </div>
                                    <button type="submit" name="addtocart" class="d-flex border border-grey bg-white" style="width: 100%;">
                                        <small class="w-100 text-center py-3">
                                            <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                        </small>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @guest
            @if (Route::has('login', 'register'))
            <h1>login pls</h1>
                
            @endif
        @else
        <div class="row margin-tb float-end">
                    <div class="col-lg-12" style="margin-top:60px; margin-bottom:30px">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                        </div>
                    </div>
                </div>
            
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Harga</th>
                        <th>Image</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>Rp {{ $product->price }}</td>
                        <td><img width="150px" height="150px" src="{{ asset('storage/' . $product->image) }}" alt="test" style="object-fit: cover;"></td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                
                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
        <h1>logged in</h1>
        @endguest
    </div>  
@endsection