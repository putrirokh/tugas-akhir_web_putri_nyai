@extends('layouts.index')
@section('content')
<!-- slider Area Start -->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                            <img src="assets/img/hero/hero_man.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                        <div class="hero__caption">
                            <!--span data-animation="fadeInRight" data-delay=".4s">60% Discount</span-->
                            <h1 data-animation="fadeInRight" data-delay=".6s">D'Muslim<br> Store</h1>
                            <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                <a href="industries.html" class="btn hero-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                            <img src="assets/img/hero/hero_man.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                        <div class="hero__caption">
                            <!--span data-animation="fadeInRight" data-delay=".4s">60% Discount</span-->
                            <h1 data-animation="fadeInRight" data-delay=".6s">D'Muslim <br> Store</h1>
                            <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                <a href="industries.html" class="btn hero-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Category Area Start-->
<section class="category-area section-padding30">
   <div class="container-fluid">
        <!-- Section Tittle -->
        
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img">
                        <img src="assets/img/categori/cat12.jpg" alt="">
                        <div class="category-caption">
                            <h2>Muslim wear</h2><h3>Collection 2020</h3>
                            <span class="best"><a href="#">Best New Deals</a></span>
                            <span class="collection">New Collection</span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-xl-4 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img text-center">
                        <img src="assets/img/categori/cat5.jpg" alt="">
                        <div class="category-caption">
                            <span class="collection">Discount!</span>
                            <h2>Winter Cloth</h2>
                           <p>New Collection</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img text-right">
                        <img src="assets/img/categori/cat13.png" alt="">
                        <div class="category-caption">
                            <h2>Man`s Cloth</h2>
                            <span class="best"><a href="#">Best New Deals</a></span>
                            <span class="collection">New Collection</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Area End-->
<!-- Latest Products Start -->
<section class="latest-product-area padding-bottom">
    <div class="container">
        <div class="row product-btn d-flex justify-content-end align-items-end">
            <!-- Section Tittle -->
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="section-tittle mb-30">
                    <h2>Trending Now</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7">
                <div class="properties__button f-right">
                    <!--Nav Button  -->
                    <nav>                                                                                                
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Wanita</a>
                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Pria</a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
            </div>
        </div>
        <!-- Nav Card -->
        <div class="tab-content" id="nav-tabContent">
            <!-- card one -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk1.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Yudhara Maxi Moscrepe</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp91.000</li>
                                        <li class="discount">Rp112.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk2.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Set Dress Yumna</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp95.000</li>
                                        <li class="discount">Rp115.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk4.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Claudia Syari Set Khimar</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp198.000</li>
                                        <li class="discount">Rp220.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk5.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Rok Tutu</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp99.000</li>
                                        <li class="discount">Rp115.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk6.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Koko Alvin Motif</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp132.000</li>
                                        <li class="discount">Rp140.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk7.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Gamis Qomishu Original</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp230.000</li>
                                        <li class="discount">Rp257.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card two -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk8.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Jumsuit Soft</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp150.000</li>
                                        <li class="discount">Rp120.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk9.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Amour Tunik</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp99.000</li>
                                        <li class="discount">Rp120.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk4.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Claudia Set Khimar</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp230.000</li>
                                        <li class="discount">Rp257.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk10.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Gamis Pria Original</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp233.000</li>
                                        <li class="discount">Rp260.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk11.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Celana Kain pria</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp145.000</li>
                                        <li class="discount">Rp169.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk12.jpeg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Kemeja Pria yellow</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp140.000</li>
                                        <li class="discount">Rp169.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card three -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk14.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Gamis Zahira Mocca</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp167.000</li>
                                        <li class="discount">Rp177.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/tas.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Tas Green Smallow</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp268.000</li>
                                        <li class="discount">Rp299.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk16.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Zea Skirt</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp138.000</li>
                                        <li class="discount">Rp154.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk17.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Mukena Motif Flower</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp130.000</li>
                                        <li class="discount">Rp167.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/sandal17.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Sandal Mocca Original</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp112.000</li>
                                        <li class="discount">Rp154.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk18.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Audrey Jilbab Syar'i</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp50.000</li>
                                        <li class="discount">Rp80.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card foure -->
            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk19.png" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Celana Clothes man</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp130.000</li>
                                        <li class="discount">Rp150.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk20.jpeg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Kemeja Black Pria</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp166.000</li>
                                        <li class="discount">Rp177.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk21.jpg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Sepatu Kulit Pria Original</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp248.000</li>
                                        <li class="discount">Rp277.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk22.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Kemeja Putih Pria</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp176.000</li>
                                        <li class="discount">Rp199.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk23.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Fabra Ransel Pria</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp155.000</li>
                                        <li class="discount">Rp168.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-product mb-60">
                            <div class="product-img">
                                <img src="assets/img/categori/produk24.jpeg" alt="">
                                <div class="new-product">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-ratting">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star low-star"></i>
                                    <i class="far fa-star low-star"></i>
                                </div>
                                <h4><a href="#">Sarung Celana Batik</a></h4>
                                <div class="price">
                                    <ul>
                                        <li>Rp220.000</li>
                                        <li class="discount">Rp250.000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Nav Card -->
    </div>
</section>
<!-- Latest Products End -->
<!-- Best Product Start -->
<div class="best-product-area lf-padding" >
   <div class="product-wrapper bg-height" style="background-image: url('assets/img/categori/card.png')">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-end">
                <div class="product-man position-absolute  d-none d-lg-block">
                    <img src="assets/img/categori/card-man.png" alt="">
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                    <div class="vertical-text">
                        <span>Manz</span>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="best-product-caption">
                        <h2>Find The Best Product<br> from Our Shop</h2>
                        <p>Designers who are interesten creating state ofthe.</p>
                        <a href="#" class="black-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- Shape -->
   <div class="shape bounce-animate d-none d-md-block">
       <img src="assets/img/categori/card-shape.png" alt="">
   </div>
</div>
<!-- Best Product End-->
<!-- Best Collection Start -->
<div class="best-collection-area section-padding2">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-end">
            <!-- Left content -->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="best-left-cap">
                    <h2>Best Collection of This Month</h2>
                    <p>Designers who are interesten crea.</p>
                    <a href="#" class="btn shop1-btn">Shop Now</a>
                </div>
                <div class="best-left-img mb-30 d-none d-sm-block">
                    <img src="assets/img/collection/collection1.png" alt="">
                </div>
            </div>
            <!-- Mid Img -->
             <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                <div class="best-mid-img mb-30 ">
                    <img src="assets/img/collection/collection2.png" alt="">
                </div>
            </div>
            <!-- Riht Caption -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="best-right-cap ">
                   <div class="best-single mb-30">
                       <div class="single-cap">
                           <h4>Menz Winter<br> Jacket</h4>
                       </div>
                       <div class="single-img">
                          <img src="assets/img/collection/collection3.png" alt="">
                       </div>
                   </div>
                </div>
                <div class="best-right-cap">
                   <div class="best-single mb-30">
                       <div class="single-cap active">
                           <h4>Menz Winter<br>Jacket</h4>
                       </div>
                       <div class="single-img">
                          <img src="assets/img/collection/collection4.png" alt="">
                       </div>
                   </div>
                </div>
                <div class="best-right-cap">
                   <div class="best-single mb-30">
                       <div class="single-cap">
                           <h4>Menz Winter<br> Jacket</h4>
                       </div>
                       <div class="single-img">
                          <img src="assets/img/collection/collection5.png" alt="">
                       </div>
                   </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Best Collection End -->
<!-- Latest Offers Start -->
<div class="latest-wrapper lf-padding">
    <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                    <div class="latest-caption">
                        <h2>Get Our<br>Latest Offers News</h2>
                        <p>Subscribe news latter</p>
                    </div>
                </div>
                 <div class="col-xl-5 col-lg-5 col-md-6 ">
                    <div class="latest-subscribe">
                        <form action="#">
                            <input type="email" placeholder="Your email here">
                            <button>Shop Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- man Shape -->
        <div class="man-shape">
            <img src="assets/img/collection/latest-man.png" alt="">
        </div>
    </div>
</div>
<!-- Latest Offers End -->
<!-- Shop Method Start-->
<div class="shop-method-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <h6>A COMPANY BY</h6>
                    <img src="assets/img/logo/muslim.jpg" width="80%" alt="" >
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <h6> PEMBAYARAN </h6>
                    <div class="flex-row justify-content-start">
                        <div class="col col-auto">
                            <img src="assets/img/logo/bca.png" alt=""> &nbsp;
                            <img src="assets/img/logo/bri.png" alt=""> <br/><br/>
                            <img src="assets/img/logo/mandiri.png" alt=""> &nbsp;
                            <img src="assets/img/logo/bni.png" alt=""> <br/><br/>
                            <img src="assets/img/logo/bjb.png" alt=""> &nbsp;
                            <img src="assets/img/logo/cod.png" alt="">
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <h6> PENGIRIMAN </h6>
                    <div class="flex-row justify-content-start">
                        <div class="col col-auto">
                            <img src="assets/img/logo/bca.png" alt=""> &nbsp;
                            <img src="assets/img/logo/bri.png" alt=""> <br/><br/>
                            <img src="assets/img/logo/mandiri.png" alt=""> &nbsp;
                            <img src="assets/img/logo/bni.png" alt=""> <br/><br/>
                            <img src="assets/img/logo/bjb.png" alt=""> &nbsp;
                            <img src="assets/img/logo/cod.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Method End-->
<!-- Gallery Start-->
<div class="gallery-wrapper lf-padding">
    <div class="gallery-area">
        <div class="container-fluid">
            <div class="row">
                <div class="gallery-items">
                    <img src="assets/img/gallery/galeri4.jpg" width="110%" alt="">
                </div> 
                <div class="gallery-items">
                    <img src="assets/img/gallery/galeri5.jpg" width="110%" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/img/gallery/galeri1.jpg" width="110%" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/img/gallery/galeri3.jpg" width="110%" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/img/gallery/galeri6.jpg" width="110%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End-->
@endsection
