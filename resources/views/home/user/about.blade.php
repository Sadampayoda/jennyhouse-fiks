@extends('templete.html')


@section('conten')
    

    <!-- Section Header Start-->
    <section class="section-header">
        <div class="container">
            <img src="{{ asset('img/section-header.png') }}" class="img-large" alt="">
            <div class="judul-section">
                <h1>Korea's NO.1 prestige beauty salon</h1>
            </div>
        </div>
    </section>

    <!-- Intro Start -->
    <section class="section-intro section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">“The center of K-BEAUTY, Jenny House leads Korean beauty culture.”</h1>
                    <p class="text-center">Jenny House is a total beauty brand that develops hair and makeup services,
                        nail care, wedding consulting, cosmetics, beauty academy, and franchise businesses</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro End -->

    <!-- beauty Start -->
    <section class="section-beauty section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3" style="max-width: 1140px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/beauty-section.png')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 text-center">
                                <div class="card-body" style="background-color: #F6ADC0; height: 388px;">
                                    <h5 class="card-title mt-5">Beauty Salon</h5>
                                    <p class="card-text mt-5">Located in Cheongdam-dong, Beauty Salon "Jenny House"
                                        operates
                                        two branches of Cheongdam Hill and Primo directly. For the past 18 years Jenny
                                        House has offered the most illuminating moments to the Korean glamour industry
                                        by giving the best professional services and products to beautify the skin of
                                        tens of thousands women and men including more than 1,000 celebrities and half a
                                        million customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- beauty End -->

    <!-- Information Start -->
    <section class="section-iformation section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Jenny House Cosmetics started with a desire to provide beauty solutions to
                        more customers based on the experience of Jenny House, which started as a beauty shop 20 years
                        ago and met numerous customers. Based on this experience, when someone thinks about beauty, we
                        look at it from the customer's point of view.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Information End -->

    <!-- lips Start -->
    <section class="section-lips section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-7 mt-lg-5">
                    <h5>Cosmetic</h5>
                    <p>Cosmetics made with passion for beauty and experience of the senses, Jenny
                        House Cosmetics
                        is based on that long agony and experience, and everyone finds their own hidden beauty.
                        We respect you by making that journey together.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- lips End -->

    <!-- Notify Start -->
    <section class="section-notify section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">CURRENTLY IN CHARGE OF DOING HAIR & MAKEUP FOR 600 KOREAN CELEBRITIES</h1>
                    <p class="text-center mt-5">Are you a fan of Korean entertainment and awestruck by the stunning
                        beauty of
                        your favorite stars? Look no further, as we bring you the ultimate glam experience with our
                        top-notch hair and makeup services.
                        Our team of experts is currently in charge of doing hair and makeup for 600 Korean celebrities,
                        including A-listers such as Kim Tae-ri, Han Ji-min, Bae Suzy, and Wanna One. With years of
                        experience in the industry, we have mastered the art of enhancing natural beauty and creating
                        flawless looks that steal the show.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Notify End -->

    <!-- Video Start -->
    <section class="section-video section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <iframe class="frame" width="1114" height="315" src="https://www.youtube.com/embed/4bcjJAY357U"
                            frameborder="0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title text-center">Jenny House Cheongdam Hill Open Party</h5>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Video End -->

    <!-- Close Start -->
    <section class="section-close section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mt-lg-5">
                    <h1 class="mt-lg-5">" Jenny House Cosmetics always listens to consumers' voices.
                        And, we talk about healthy good vibe clean beauty with the artist's pure passion and know-how. "
                    </h1>
                    <h2 class="mt-lg-5">Now get your ULTIMATE GLAM at home</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Close End -->

    <!-- footer Start -->
    <footer class="text-light" style="background-color: #B77284;">
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
@endsection