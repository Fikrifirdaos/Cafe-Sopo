@extends('link')
<section class="mt-5">
    <div class="container">
        <div class="text-center" >
            <h1>Menu</h1> 
            <a href="/cart" class="btn btn-warning mt-4"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart<span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></a>
            <hr> 
        </div>
        
        <div class="row mt-5">
            @foreach ($products as $prod)
            <div class="col-3">
                <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <img src="{{$prod->image}}"  alt="" />
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3 class="text-center">{{$prod->name}}</h3>
                        <p class="ms-3">Rp {{$prod->price}}</p>
                        <p class="ms-3">{{$prod->description}}</p>
                        <a href="{{ route('add_to_cart', $prod->id) }}" class="btn btn-warning mt-4">cart+</a>
                        <a href="{{ route('add_to_shop', $prod->id) }}" class="btn btn-success ms-3">pesan</a>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>  
       
        {{-- end row1 --}}
        <div class="row mt-5">
            <div class="col-3">
                <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <img src="../assets/img/mn (1).jpg"  alt="" />
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3 class="text-center">Kopi Kavian</h3>
                        <p class="ms-3">Rp.15.000</p>
                        <p class="ms-3">Biji kopi pilihan terdapat didalamnya</p>
                        <a href="" class="">cart+</a>
                        <a href="/keranjang" class="btn btn-success ms-3 btn btn-success ms-3-successs">pesan</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <img src="../assets/img/mn (1).jpg"  alt="" />
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3 class="text-center">Kopi Kavian</h3>
                        <p class="ms-3">Rp.15.000</p>
                        <p class="ms-3">Biji kopi pilihan terdapat didalamnya</p>
                        <a href="/keranjang" class="btn btn-success ms-3">pesan</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <img src="../assets/img/mn (1).jpg"  alt="" />
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3 class="text-center">Kopi Kavian</h3>
                        <p class="ms-3">Rp.15.000</p>
                        <p class="ms-3">Biji kopi pilihan terdapat didalamnya</p>
                        <a href="/keranjang" class="btn btn-success ms-3">pesan</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-3 ">
                <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <img src="../assets/img/mn (1).jpg"  alt="" />
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3 class="text-center">Kopi Kavian</h3>
                        <p class="ms-3">Rp.15.000</p>
                        <p class="ms-3">Biji kopi pilihan terdapat didalamnya</p>
                        <a href="/keranjang" class="btn btn-success ms-3">pesan</a>
                        
                    </div>
                </div>
            </div>   
        </div>
    </div>
</section>