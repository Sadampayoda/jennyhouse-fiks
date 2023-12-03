@extends('templete.html')

@section('conten')
    


<!-- Section Header Start-->
<section class="header" id="header">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/header1.png" class="d-block w-100" alt="Header1">
            </div>
            <div class="carousel-item">
                <img src="img/header2.png" class="d-block w-100" alt="header2">
            </div>
            <div class="carousel-item">
                <img src="img/header3.png" class="d-block w-100" alt="header3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- Section Header End -->

<!-- Products Start-->
<section class="products section-margin" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-products">
                        <img src="img/haicare.png" class="card-img-top" alt="">
                        <h3 class="heading mt-0">HAIRCARE</h3>
                        <p class="subheading mt-3">Formulated from 20 years experience of Jennyhouse salon in
                            Korea
                            with
                            natural ingredients</p>
                        <a href="{{route('option.product',['id' => 'hair-care'])}}" class="btn-products btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="img/cosmetics.png" class="card-img-top" alt="">
                    <div class="card-products">
                        <h3 class="heading">COSMETICS</h3>
                        <p class="subheading mb-5">Vegan cosmetic products that are widely used by celebrities
                            and
                            public
                            figures from South Korea</p>
                        <a href="{{route('option.product',['id' => 'cosmetiks'])}}" class="btn-products btn">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img src="img/haircolor.png" class="card-img-top" alt="">
                    <div class="card-products">
                        <h3 class="heading">HAIR COLOR</h3>
                        <p class="subheading mb-5">Premium Hair Color at Salon Korea made with CICA natural
                            ingredients
                        </p>
                        <a href="{{route('option.product',['id' => 'hair-color'])}}" class="btn-products btn">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Products End-->
{{-- @dd($product) --}}
<!-- Best Seller Start -->
<section class="best-seller section-margin" id="best-seller">
    <div class="container">
        <div class="row mt-4">
            <div class="row" style="background-color: #FBDDE5;">
                <div class="col-lg-2" id="seller">
                    <h3 class="judul-best-seller">Best Seller</h3>
                </div>
                <div class="col-lg-9">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($product as $item)
                                <div class="swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                    <a href="#"><img src="{{asset('img/barang/'.$item->image.'.png')}}" class="card-img-top"
                                            alt=""></a>
                                    <div class="card-body">
                                        <h5 class="card-title m-1">{{$item->name}}</h5>
                                        <p class="card-text1 m-1">3%</p>
                                        <p class="card-text2 m-1"><del>Rp. {{$item->harga + 30000}},00</del></p>
                                        <p class="card-text3 m-1">Rp. {{$item->harga}},00</p>
                                        <p class="card-text4 m-1"><i class='bx bxs-star'></i> {{$item->rating}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Best Seller End -->

<!-- Jenny's Pick Start -->
<section class="best-seller section-margin" id="best-seller">
    <div class="container">
        <div class="row mt-4">
            <div class="row" style="background-color: #FBDDE5;">
                <div class="col-lg-2" id="jennys-pick">
                    <h3 class="judul-best-seller">Jenny's Pick</h3>
                </div>
                <div class="col-lg-9">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                <a href="#"><img src=" img/Hydrokeratin Curl Serum.png" class="card-img-top"
                                        alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title m-1">Hydrokeratin Curl Serum</h5>
                                    <p class="card-text1 m-1">3%</p>
                                    <p class="card-text2 m-1"><del>Rp. 359.000,00</del></p>
                                    <p class="card-text3 m-1">Rp. 383.150,00</p>
                                    <p class="card-text4 m-1"><i class='bx bxs-star'></i> 5</p>
                                </div>
                            </div>
                            <div class="swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                <a href="#"><img src=" img/Hydrokeratin Curl Serum.png" class="card-img-top"
                                        alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title m-1">Hydrokeratin Curl Serum</h5>
                                    <p class="card-text1 m-1">3%</p>
                                    <p class="card-text2 m-1"><del>Rp. 359.000,00</del></p>
                                    <p class="card-text3 m-1">Rp. 383.150,00</p>
                                    <p class="card-text4 m-1"><i class='bx bxs-star'></i> 5</p>
                                </div>
                            </div>
                            <div class=" swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                <a href="#"><img src="img/Hydrokeratin Repair ampoule [100m].png"
                                        class="card-img-top" alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title m-1">Hydrokeratin Repair ampoule [100ml]</h5>
                                    <p class="card-text1 m-1">3%</p>
                                    <p class="card-text2 m-1"><del>Rp. 359.000,00</del></p>
                                    <p class="card-text3 m-1">Rp. 383.150,00</p>
                                    <p class="card-text4 m-1"><i class='bx bxs-star'></i> 4,9</p>
                                </div>
                            </div>
                            <div class=" swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                <a href="#"><img src="img/Hydrokeratin Repair ampoule [100m].png"
                                        class="card-img-top" alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title m-1">Hydrokeratin Repair ampoule [100ml]</h5>
                                    <p class="card-text1 m-1">3%</p>
                                    <p class="card-text2 m-1"><del>Rp. 359.000,00</del></p>
                                    <p class="card-text3 m-1">Rp. 383.150,00</p>
                                    <p class="card-text4 m-1"><i class='bx bxs-star'></i> 4,9</p>
                                </div>
                            </div>
                            <div class=" swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                <a href="#"><img src="img/Jewel Fit Eye Shadow [2g].png" class="card-img-top"
                                        alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title m-1">Jewel Fit Eye Shadow [2g]</h5>
                                    <p class="card-text1 m-1">3%</p>
                                    <p class="card-text2 m-1"><del>Rp. 346.200,00</del></p>
                                    <p class="card-text3 m-1">Rp. 335.418,00</p>
                                    <p class="card-text4 m-1"><i class='bx bxs-star'></i> 4,9</p>
                                </div>
                            </div>
                            <div class=" swiper-slide card mt-3" id="card-best" style="width: 14rem;">
                                <a href="#"><img src="img/Jewel Fit Eye Shadow [2g].png" class="card-img-top"
                                        alt=""></a>
                                <div class="card-body">
                                    <h5 class="card-title m-1">Jewel Fit Eye Shadow [2g]</h5>
                                    <p class="card-text1 m-1">3%</p>
                                    <p class="card-text2 m-1"><del>Rp. 346.200,00</del></p>
                                    <p class="card-text3 m-1">Rp. 335.418,00</p>
                                    <p class="card-text4 m-1"><i class='bx bxs-star'></i> 4,9</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Jenny's Pick End -->

<!-- Banner Start -->
<section class="banner section-margin" id="banner">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h3 class="banner-judul">Reveal Your True Beauty</h3>
                <p class="banner-text">The best skin condition for creating a perfect makeup look.</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Drop Video Start -->
<section class="video section-margin" id="video">
    <div class="container">
        <div class="row mt-4">
            <div class="row" style="background-color: #F6ADC0;">
                <div class="col-lg-8 mt-2">
                    <iframe class="frame" width="660" height="315" src="https://www.youtube.com/embed/G-uOv8HBHjI"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 mt-5" id="text">
                    <h3 class="video-judul">Self-Up Volume Care</h3>
                    <p class="video-text">Experience the same impressively beautiful hair you had at Jennyhouse
                        Salon. Get salon-quality results at home today.</p>
                    <a href="#" class="btn-video btn">More Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Drop Video End -->

<!-- Find us On Start-->
<div class="find section-margin" id="find">
    <div class="container">
        <div class="row mt-4">
            <div class="row">
                <div class="judul-find text-center">
                    <h3>Find us on:</h3>
                </div>
                <div class="col-lg-3">
                    <a href="#"><img src="img/shoppe.png" alt="shopee"></a>
                </div>
                <div class="col-lg-4">
                    <a href="#"><img src="img/tokopedia.png" alt="shopee"></a>
                </div>
                <div class="col-lg-4">
                    <a href="#"><img src="img/tiktok.png" alt="shopee"></a>
                </div>
                <div class="col-lg-3 mt-5">
                    <a href="#"><img src="img/lazada.png" alt="shopee"></a>
                </div>
                <div class="col-lg-4 mt-5">
                    <a href="#"><img src="img/zalora.png" alt="shopee"></a>
                </div>
                <div class="col-lg-3 mt-5">
                    <a href="#"><img src="img/beauty.png" alt="shopee"></a>
                </div>
                <div class="col-lg-2 mt-5">
                    <a href="#"><img src="img/fd.png" alt="shopee"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Find us On End-->

<!-- footer Start -->
<footer class="text-light section-margin" style="background-color: #B77284;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mt-5">
                <img src="img/brand.png" alt="">
            </div>
            <div class="col-lg-3 mt-5">
                <ul class="list-unstyled">
                    <li><a href="#">Haircare</a></li>
                    <li><a href="#">Cosmetics</a></li>
                    <li><a href="#">Hair Color</a></li>
                </ul>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="contact">
                    <ul class="list-unstyled">
                        <li><a href="#">+62 822 8888 5456</a></li>
                        <li><a href="mailto:youremail@example.com">mail@jennyhouse.id</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=6287881203283&text=Halo, saya ingin bertanya tentang layanan Anda"
                                target="_blank">Talk To us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <ul class="list-inline mt-5">
                    <li class="list-inline-item"><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class='bx bxl-twitter'></i></a></li>
                </ul>
            </div>
            <div class="col-lg-8 mt-5">
                <div class="copy-right">
                    <p>Copyright © PT. Distrindo Kosmeta Utama</p>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="powered-by">
                    <p>Powered by - The #1 Open Source eCommerce</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection