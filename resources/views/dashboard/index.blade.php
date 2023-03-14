@extends('link')
<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand">
            <img src="../assets/img/logocofe.png" alt="" width="100" height="60">
        </a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
{{-- end nav --}}
<div class="section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <img src="../assets/img/cofe2.jpg" alt="" class="img-fluid">
            </div>
            <div class="text col-lg-6 text-center mt-5">
                <div class="inner-column ">
                    <h1>Selamat datang di Cofe Caffe</h1>
                    <h4 class="mt-5">Little Story</h4>
                    <p>Pernahkah Anda membayangkan jika secangkir kopi memiliki perasaan? Mungkin jika punya, Ia bisa
                        menolak untuk diminum oleh orang tertentu. Namun, kenyataannya kopi tidak peduli
                        siapa peminumnya. Mau Anda kaya, miskin, tua, muda, maling, atau pejabat, semua berhak
                        menikmatinya.</p>
                    <p>Seduhan biji tanaman Coffea yang telah dipanggang identik dengan warnanya yang hitam dan rasanya
                        yang pahit. Meski begitu, banyak orang yang tergila-gila dengan minuman ini.
                        Bahkan, ada orang yang rela membayar secangkir kopi yang enak dengan harga mahal.
                    </p>
                    <a class="btn btn-lg btn-circle btn-outline-primary" href="#">Masuk</a>
                </div>
                {{-- carouser --}}
                <div id="carouselExampleCaptions" class="carousel slide mt-4">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row ms-4">
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row ms-4">
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row ms-4">
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card" style="width: 10rem; height= 20;">
                                        <img src="../assets/img/cofe2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <a href="#" class="btn btn-success">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- endcarouser --}}
            </div>
        </div>
        <div class="category mt-5">
            <div class="row ">
                <div class="col-4 ">
                    <div class="border border-success-subtle text-center mt-5">
                        <h1>drink</h1>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="border border-success-subtle text-center mt-5">
                        <h1>food</h1>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="border border-success-subtle text-center mt-5">
                        <h1>coffe</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- menu --}}
        <section class="mt-5">
            <div class="container">
                <div class="text-center" >
                    <h2>Menu spesial</h2>
                    <div class="separetor"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-2 ms-4 ">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                </div>
                {{-- end row1 --}}
                <div class="row mt-2">
                    <div class="col-2 ms-4 ">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                    <div class="col-2 ms-4">
                        <div class="single_special_img">
                            <img src="../assets/img/mn (1).jpg" style="height: 200px;" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- endmenu --}}
        <div class="promo1">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-6">
                        <img src="../assets/img/mn (3).jpg"  class="mt-4 img1" alt="">
                        <img src="../assets/img/mn (4).jpeg"  class="img3" alt="">
                        <img src="../assets/img/mn(5).jpg"  class="img2" alt="">
                    </div>
                    <div class="col-6 mt-4 promo">
                        <h3>Promo! Kapan lagi beli 2 ini bayar seharga 1 porsi. Langsung cus gak pake mikir!</h3>
                        <img src="./assets/img/go food.png" class="gojek 1 ms-5" alt="">
                        <img src="./assets/img/shopee.png" class="shope ms-5" alt="">
                    </div> 
                </div>
            </div>
        </div>
        {{-- endpromo1 --}}
        <div class="promo2">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-6 promo" >
                        <h3>Promo! Kapan lagi beli 6 ini bayar seharga 5 porsi. Langsung cus gak pake mikir!</h3>
                        <img src="./assets/img/GrabFood_Logo.png" class="grab" alt="">
                    </div>
                    <div class="col-6 mt-4">
                        <img src="../assets/img/kopi 1.jpg"  class="mt-4 img1" alt="">
                        <img src="../assets/img/kopi 3.jpg"  class="img4" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- endpromo --}}
    </div>
</div>
<footer class="text-center bg-body-tertiary mt-5">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 rounded">
                    <img src="../assets/img/logocofe.png" class="footer-logo" alt="">
                    <h6>Alamat</h6>
                    <p>Toko Siliwangi
                        Jl. Taposkota I No.22a, RT.02/RW.04</p>
                    <div class="contak">
                        <a href=""><img src="../assets/img/smk.png" class="smk-logo" alt=""></a>
                        <a href=""><img src="../assets/img/logoig.png" class="ig-logo" alt=""></a>
                        <a href=""><img src="../assets/img/logo-facebook.png" class="fb-logo" alt=""></a>
                        <a href=""><img src="../assets/img/wa -logo.png" class="fb-logo" alt=""></a>
                        <a href=""><img src="../assets/img/tiktok-logo.png" class="tiktok-logo" alt=""></a>
                    </div>
                </div>
                <div class="footer-about col-4  rounded mt-5">
                    <h6>Abaout</h6>
                    <ul>
                        <li><a href="">kontak</a></li>
                        <li><a href="">kontak</a></li>
                        <li><a href="">kontak</a></li>
                        <li><a href="">kontak</a></li>
                        <li><a href="">kontak</a></li>
                        <li><a href="">kontak</a></li>
                        <li><a href="">kontak</a></li>

                    </ul>
                </div>
                <div class="col-4  rounded">
                    <form>
                        <div class="mb-3">
                          <label for="" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="">
                        <div class="mb-3">
                          <label for="" class="form-label">Pesan</label>
                          <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    byFikriFirdaos
</footer>