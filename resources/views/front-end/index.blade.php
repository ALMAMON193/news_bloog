@extends('front-end.home')
@section('content')

  
   <!-- Trending news carousel -->
   @include('front-end.home-all.trending_news')
<!-- End Trending news carousel -->


  <!-- Popular news -->
  <section>
      <!-- Popular news  header-->
      <div class="popular__news-header">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-8 ">
                      <div class="card__post-carousel">
                          <div class="item">
                              <!-- Post Article -->
                              <div class="card__post">
                                  <div class="card__post__body">
                                      <a href="blog_details.html">
                                          <img src="{{ asset('front-end/images/newsimage1.png') }}" class="img-fluid" alt="">
                                      </a>
                                      <div class="card__post__content bg__post-cover">
                                          <div class="card__post__category">
                                              covid-19
                                          </div>
                                          <div class="card__post__title">
                                              <h2>
                                                  <a href="#">
                                                      Global solidarity to fight COVID-19, and indonesia stay safe and
                                                      health
                                                  </a>
                                              </h2>
                                          </div>
                                          <div class="card__post__author-info">
                                              <ul class="list-inline">
                                                  <li class="list-inline-item">
                                                      <a href="#">
                                                          by david hall
                                                      </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <span>
                                                          Descember 09, 2016
                                                      </span>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>


                              </div>
                          </div>
                          <div class="item">
                              <!-- Post Article -->
                              <div class="card__post">
                                  <div class="card__post__body">
                                      <a href="blog_details.html">
                                          <img src="front-end/images/newsimage2.png" class="img-fluid" alt="">
                                      </a>
                                      <div class="card__post__content bg__post-cover">
                                          <div class="card__post__category">
                                              covid-19
                                          </div>
                                          <div class="card__post__title">
                                              <h2>
                                                  <a href="#">
                                                      Global solidarity to fight COVID-19, and indonesia stay safe and
                                                      health
                                                  </a>
                                              </h2>
                                          </div>
                                          <div class="card__post__author-info">
                                              <ul class="list-inline">
                                                  <li class="list-inline-item">
                                                      <a href="#">
                                                          by david hall
                                                      </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <span>
                                                          Descember 09, 2016
                                                      </span>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="popular__news-right">
                          <!-- Post Article -->
                          <div class="card__post ">
                              <div class="card__post__body card__post__transition">
                                  <a href="blog_details.html">
                                      <img src="front-end/images/newsimage3.png" class="img-fluid" alt="">
                                  </a>
                                  <div class="card__post__content bg__post-cover">
                                      <div class="card__post__category">
                                          politics
                                      </div>
                                      <div class="card__post__title">
                                          <h5>
                                              <a href="blog_details.html">
                                                  Barack Obama and Family Visit borobudur temple enjoy holiday
                                                  indonesia.</a>
                                          </h5>
                                      </div>
                                      <div class="card__post__author-info">
                                          <ul class="list-inline">
                                              <li class="list-inline-item">
                                                  <a href="blog_details.html">
                                                      by david hall
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <span>
                                                      Descember 09, 2016
                                                  </span>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>

                          </div>
                          <!-- Post Article -->
                          <div class="card__post ">
                              <div class="card__post__body card__post__transition">
                                  <a href="blog_details.html">
                                      <img src="front-end/images/newsimage4.png" class="img-fluid" alt="">
                                  </a>
                                  <div class="card__post__content bg__post-cover">
                                      <div class="card__post__category">
                                          politics
                                      </div>
                                      <div class="card__post__title">
                                          <h5>
                                              <a href="blog_details.html">
                                                  Barack Obama and Family Visit borobudur temple enjoy holiday
                                                  indonesia.</a>
                                          </h5>
                                      </div>
                                      <div class="card__post__author-info">
                                          <ul class="list-inline">
                                              <li class="list-inline-item">
                                                  <a href="blog_details.html">
                                                      by david hall
                                                  </a>
                                              </li>
                                              <li class="list-inline-item">
                                                  <span>
                                                      Descember 09, 2016
                                                  </span>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Popular news header-->
      <!-- Popular news carousel -->
      <div class="popular__news-header-carousel">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="top__news__slider">
                          <div class="item">
                              <!-- Post Article -->
                              <div class="article__entry">
                                  <div class="article__image">
                                      <a href="#">
                                          <img src="front-end/images/newsimage5.png" alt="" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="article__content">
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <span class="text-primary">
                                                  by david hall
                                              </span>,
                                          </li>

                                          <li class="list-inline-item">
                                              <span>
                                                  descember 09, 2016
                                              </span>
                                          </li>
                                      </ul>
                                      <h5>
                                          <a href="#">
                                              Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                          </a>
                                      </h5>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <!-- Post Article -->
                              <div class="article__entry">
                                  <div class="article__image">
                                      <a href="#">
                                          <img src="front-end/images/newsimage6.png" alt="" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="article__content">
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <span class="text-primary">
                                                  by david hall
                                              </span>,
                                          </li>

                                          <li class="list-inline-item">
                                              <span>
                                                  descember 09, 2016
                                              </span>
                                          </li>
                                      </ul>
                                      <h5>
                                          <a href="#">
                                              Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                          </a>
                                      </h5>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <!-- Post Article -->
                              <div class="article__entry">
                                  <div class="article__image">
                                      <a href="#">
                                          <img src="front-end/images/newsimage7.png" alt="" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="article__content">
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <span class="text-primary">
                                                  by david hall
                                              </span>,
                                          </li>

                                          <li class="list-inline-item">
                                              <span>
                                                  descember 09, 2016
                                              </span>
                                          </li>
                                      </ul>
                                      <h5>
                                          <a href="#">
                                              Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                          </a>
                                      </h5>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <!-- Post Article -->
                              <div class="article__entry">
                                  <div class="article__image">
                                      <a href="#">
                                          <img src="front-end/images/newsimage8.png" alt="" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="article__content">
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <span class="text-primary">
                                                  by david hall
                                              </span>,
                                          </li>

                                          <li class="list-inline-item">
                                              <span>
                                                  descember 09, 2016
                                              </span>
                                          </li>
                                      </ul>
                                      <h5>
                                          <a href="#">
                                              Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                          </a>
                                      </h5>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <!-- Post Article -->
                              <div class="article__entry">
                                  <div class="article__image">
                                      <a href="#">
                                          <img src="front-end/images/newsimage8.png" alt="" class="img-fluid">
                                      </a>
                                  </div>
                                  <div class="article__content">
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <span class="text-primary">
                                                  by david hall
                                              </span>,
                                          </li>

                                          <li class="list-inline-item">
                                              <span>
                                                  descember 09, 2016
                                              </span>
                                          </li>
                                      </ul>
                                      <h5>
                                          <a href="#">
                                              Proin eu nisl et arcu iaculis placerat sollicitudin ut est.
                                          </a>
                                      </h5>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <!-- End Popular news carousel -->
  </section>
  <!-- End Popular news -->

  <div class="large_add_banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="large_add_banner_img">
            <img src="{{ asset('front-end/images/placeholder_large.jpg') }}" alt="adds">
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Popular news category -->
  <section class="pt-0 mt-5">
      <div class="popular__section-news">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-lg-8">
                      <div class="wrapper__list__article">
                          <h4 class="border_section">recent post</h4>
                      </div>
                      <div class="row ">
                          <div class="col-sm-12 col-md-6 mb-4">
                              <!-- Post Article -->
                              <div class="card__post ">
                                  <div class="card__post__body card__post__transition">
                                      <a href="blog_details.html">
                                          <img src="front-end/images/newsimage8.png" class="img-fluid" alt="">
                                      </a>
                                      <div class="card__post__content bg__post-cover">
                                          <div class="card__post__category">
                                              politics
                                          </div>
                                          <div class="card__post__title">
                                              <h5>
                                                  <a href="blog_details.html">
                                                      Barack Obama and Family Visit borobudur temple enjoy holiday
                                                      indonesia.</a>
                                              </h5>
                                          </div>
                                          <div class="card__post__author-info">
                                              <ul class="list-inline">
                                                  <li class="list-inline-item">
                                                      <a href="blog_details.html">
                                                          by david hall
                                                      </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <span>
                                                          Descember 09, 2016
                                                      </span>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6 mb-4">
                              <!-- Post Article -->
                              <div class="card__post ">
                                  <div class="card__post__body card__post__transition">
                                      <a href="blog_details.html">
                                          <img src="front-end/images/newsimage9.png" class="img-fluid" alt="">
                                      </a>
                                      <div class="card__post__content bg__post-cover">
                                          <div class="card__post__category">
                                              politics
                                          </div>
                                          <div class="card__post__title">
                                              <h5>
                                                  <a href="blog_details.html">
                                                      Barack Obama and Family Visit borobudur temple enjoy holiday
                                                      indonesia.</a>
                                              </h5>
                                          </div>
                                          <div class="card__post__author-info">
                                              <ul class="list-inline">
                                                  <li class="list-inline-item">
                                                      <a href="blog_details.html">
                                                          by david hall
                                                      </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <span>
                                                          Descember 09, 2016
                                                      </span>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <div class="row ">
                          <div class="col-sm-12 col-md-6">
                              <div class="wrapp__list__article-responsive">
                                  <div class="mb-3">
                                      <!-- Post Article -->
                                      <div class="card__post card__post-list">
                                          <div class="image-sm">
                                              <a href="blog_details.html">
                                                  <img src="front-end/images/news1.jpg" class="img-fluid" alt="">
                                              </a>
                                          </div>


                                          <div class="card__post__body ">
                                              <div class="card__post__content">

                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>

                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h6>
                                                          <a href="blog_details.html">
                                                              6 Best Tips for Building a Good Shipping Boat
                                                          </a>
                                                      </h6>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="mb-3">
                                      <!-- Post Article -->
                                      <div class="card__post card__post-list">
                                          <div class="image-sm">
                                              <a href="blog_details.html">
                                                  <img src="front-end/images/news2.jpg" class="img-fluid" alt="">
                                              </a>
                                          </div>


                                          <div class="card__post__body ">
                                              <div class="card__post__content">

                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h6>
                                                          <a href="blog_details.html">
                                                              6 Best Tips for Building a Good Shipping Boat
                                                          </a>
                                                      </h6>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-6 ">
                              <div class="wrapp__list__article-responsive">
                                  <div class="mb-3">
                                      <!-- Post Article -->
                                      <div class="card__post card__post-list">
                                          <div class="image-sm">
                                              <a href="blog_details.html">
                                                  <img src="front-end/images/news3.jpg" class="img-fluid" alt="">
                                              </a>
                                          </div>

                                          <div class="card__post__body ">
                                              <div class="card__post__content">

                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>

                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h6>
                                                          <a href="blog_details.html">
                                                              6 Best Tips for Building a Good Shipping Boat
                                                          </a>
                                                      </h6>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="mb-3">
                                      <!-- Post Article -->
                                      <div class="card__post card__post-list">
                                          <div class="image-sm">
                                              <a href="blog_details.html">
                                                  <img src="front-end/images/news4.jpg" class="img-fluid" alt="">
                                              </a>
                                          </div>


                                          <div class="card__post__body ">
                                              <div class="card__post__content">

                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>

                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h6>
                                                          <a href="blog_details.html">
                                                              6 Best Tips for Building a Good Shipping Boat
                                                          </a>
                                                      </h6>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="col-md-12 col-lg-4">
                      <aside class="wrapper__list__article">
                          <h4 class="border_section">popular post</h4>
                          <div class="wrapper__list-number">

                              <!-- List Article -->
                              <div class="card__post__list">
                                  <div class="list-number">
                                      <span>
                                          1
                                      </span>
                                  </div>
                                  <a href="#" class="category">
                                      covid-19
                                  </a>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <h5>
                                              <a href="#">
                                                  Gegera Corona, Kekayaan Bos Zoom Nambah Rp 64 T dalam 3 Bulan - CNBC
                                                  Indonesia

                                              </a>
                                          </h5>
                                      </li>
                                  </ul>
                              </div>


                              <div class="card__post__list">
                                  <div class="list-number">
                                      <span>
                                          2
                                      </span>
                                  </div>
                                  <a href="#" class="category">
                                      Startup
                                  </a>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <h5>
                                              <a href="#">
                                                  Gegera Corona, Kekayaan Bos Zoom Nambah Rp 64 T dalam 3 Bulan - CNBC
                                                  Indonesia

                                              </a>
                                          </h5>
                                      </li>
                                  </ul>
                              </div>
                              <!-- List Article -->
                              <div class="card__post__list">
                                  <div class="list-number">
                                      <span>
                                          1
                                      </span>
                                  </div>
                                  <a href="#" class="category">
                                      covid-19
                                  </a>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">

                                          <h5>
                                              <a href="#">
                                                  Gegera Corona, Kekayaan Bos Zoom Nambah Rp 64 T dalam 3 Bulan - CNBC
                                                  Indonesia

                                              </a>
                                          </h5>
                                      </li>
                                  </ul>

                              </div>


                              <div class="card__post__list">
                                  <div class="list-number">
                                      <span>
                                          2
                                      </span>
                                  </div>
                                  <a href="#" class="category">
                                      Startup
                                  </a>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <h5>
                                              <a href="#">
                                                  Gegera Corona, Kekayaan Bos Zoom Nambah Rp 64 T dalam 3 Bulan - CNBC
                                                  Indonesia

                                              </a>
                                          </h5>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </aside>
                  </div>
              </div>
          </div>
      </div>

     @include('front-end.home-all.techonology')


      <!-- Popular news category -->
      <div class="mt-4">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                    
                     @include('front-end.home-all.lifestyle')

                      <div class="small_add_banner">
                          <div class="small_add_banner_img">
                              <img src="{{ asset('front-end/images/placeholder_large.jpg') }}" alt="adds">
                          </div>
                      </div>

                      <aside class="wrapper__list__article mt-5">
                          <h4 class="border_section">technology</h4>

                          <div class="wrapp__list__article-responsive">
                              <!-- Post Article List -->
                              <div class="card__post card__post-list card__post__transition mt-30">
                                  <div class="row ">
                                      <div class="col-md-5">
                                          <div class="card__post__transition">
                                              <a href="#">
                                                  <img src="front-end/images/newsimage6.png" class="img-fluid w-100" alt="">
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-md-7 my-auto pl-0">
                                          <div class="card__post__body ">
                                              <div class="card__post__content  ">
                                                  <div class="card__post__category ">
                                                      travel
                                                  </div>
                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h5>
                                                          <a href="#">
                                                              Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                          </a>
                                                      </h5>
                                                      <p class="d-none d-lg-block d-xl-block mb-0">
                                                          Maecenas accumsan tortor ut velit pharetra mollis. Proin eu
                                                          nisl et arcu iaculis placerat
                                                          sollicitudin ut est. In fringilla dui dui.
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              <!-- Post Article List -->
                              <div class="card__post card__post-list card__post__transition mt-30">
                                  <div class="row ">
                                      <div class="col-md-5">
                                          <div class="card__post__transition">
                                              <a href="#">
                                                  <img src="front-end/images/newsimage8.png" class="img-fluid w-100" alt="">
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-md-7 my-auto pl-0">
                                          <div class="card__post__body ">
                                              <div class="card__post__content  ">
                                                  <div class="card__post__category ">
                                                      travel
                                                  </div>
                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h5>
                                                          <a href="#">
                                                              Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                          </a>
                                                      </h5>
                                                      <p class="d-none d-lg-block d-xl-block mb-0">
                                                          Maecenas accumsan tortor ut velit pharetra mollis. Proin eu
                                                          nisl et arcu iaculis placerat
                                                          sollicitudin ut est. In fringilla dui dui.
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Post Article List -->
                              <div class="card__post card__post-list card__post__transition mt-30">
                                  <div class="row ">
                                      <div class="col-md-5">
                                          <div class="card__post__transition">
                                              <a href="#">
                                                  <img src="front-end/images/newsimage9.png" class="img-fluid w-100" alt="">
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-md-7 my-auto pl-0">
                                          <div class="card__post__body ">
                                              <div class="card__post__content  ">
                                                  <div class="card__post__category ">
                                                      travel
                                                  </div>
                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>

                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h5>
                                                          <a href="#">
                                                              Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                          </a>
                                                      </h5>
                                                      <p class="d-none d-lg-block d-xl-block mb-0">
                                                          Maecenas accumsan tortor ut velit pharetra mollis. Proin eu
                                                          nisl et arcu iaculis placerat
                                                          sollicitudin ut est. In fringilla dui dui.
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Post Article List -->
                              <div class="card__post card__post-list card__post__transition mt-30">
                                  <div class="row ">
                                      <div class="col-md-5">
                                          <div class="card__post__transition">
                                              <a href="#">
                                                  <img src="front-end/images/newsimage1.png" class="img-fluid w-100" alt="">
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-md-7 my-auto pl-0">
                                          <div class="card__post__body ">
                                              <div class="card__post__content  ">
                                                  <div class="card__post__category ">
                                                      travel
                                                  </div>
                                                  <div class="card__post__author-info mb-2">
                                                      <ul class="list-inline">
                                                          <li class="list-inline-item">
                                                              <span class="text-primary">
                                                                  by david hall
                                                              </span>
                                                          </li>
                                                          <li class="list-inline-item">
                                                              <span class="text-dark text-capitalize">
                                                                  descember 09, 2016
                                                              </span>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="card__post__title">
                                                      <h5>
                                                          <a href="#">
                                                              Exercitation Ullamco Laboris Nisi Ut Aliquip
                                                          </a>
                                                      </h5>
                                                      <p class="d-none d-lg-block d-xl-block mb-0">
                                                          Maecenas accumsan tortor ut velit pharetra mollis. Proin eu
                                                          nisl et arcu iaculis placerat
                                                          sollicitudin ut est. In fringilla dui dui.
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </aside>
                  </div>

                  @include('front-end.home-all.latest_post')

                  
                  <div class="mx-auto">
                      <!-- Pagination -->
                      <div class="pagination-area">
                          <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                              style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                              <a href="#">
                                  «
                              </a>
                              <a href="#">
                                  1
                              </a>
                              <a class="active" href="#">
                                  2
                              </a>
                              <a href="#">
                                  3
                              </a>
                              <a href="#">
                                  4
                              </a>
                              <a href="#">
                                  5
                              </a>

                              <a href="#">
                                  »
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="clearfix"></div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Popular news category -->
  @endsection