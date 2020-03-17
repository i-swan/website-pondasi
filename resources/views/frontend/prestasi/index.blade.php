@extends('frontend.app')

@section('content')

<!-- Prestasi start -->
<section class="pricing-area ptb--100" id="price">
    <div class="feature-blog ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <h2>Prestasi Pondasi</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="{{ asset('images_new/blog/mobileapp-blog/mobileapp-blog-img1.jpg') }}" alt="">
                            <a href="blog-details.html" class="read-more">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>                    
                        <div class="blog-content">
                            <h2>
                                <a href="blog-details.html">Everyday it provides me with exactly what I need</a>
                            </h2>
                            <span>June 18, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="{{ asset('images_new/blog/mobileapp-blog/mobileapp-blog-img1.jpg') }}" alt="">
                            <a href="blog-details.html" class="read-more">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>                    
                        <div class="blog-content">
                            <h2>
                                <a href="blog-details.html">Everyday it provides me with exactly what I need</a>
                            </h2>
                            <span>June 18, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="{{ asset('images_new/blog/mobileapp-blog/mobileapp-blog-img1.jpg') }}" alt="">
                            <a href="blog-details.html" class="read-more">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>                    
                        <div class="blog-content">
                            <h2>
                                <a href="blog-details.html">Everyday it provides me with exactly what I need</a>
                            </h2>
                            <span>June 18, 2017</span>
                        </div>
                    </div>
                </div>                        
            </div>
            <div class="row">
                <div class="appcta-content  appcta-right">
                    <div class="links links-left">
                        <a class="active" href="#">Lihat Semua Member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Prestasi end -->

@endsection