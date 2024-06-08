<?php 
  
    $popular_news = App\Models\Post::latest()->take(3)->get();
    $popular_news_carousel = App\Models\Post::latest()->take(10)->get();
?>

 <!-- Popular news -->
 <section>
    <!-- Popular news  header-->
    <div class="popular__news-header">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 ">
                    <div class="card__post-carousel">
                        @foreach ($popular_news as $item)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post">
                                <div class="card__post__body">
                                    <a href="blog_details.html">
                                        <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" alt="" class="img-fluid"> </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                            {{ $item->category->name }}
                                        </div>
                                        <div class="card__post__title">
                                            <h2>
                                                <a href="#">
                                                  {{ $item->title }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        by {{ $item->author }}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{ $item->created_at->format('l, F jS  Y ') }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
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
                    <div class="top__news__slider" style="display: flex; flex-direction: column; height: 100%;">
                        @foreach ($popular_news_carousel as $item)
                            <div class="item" style="flex: 0 0 auto;">
                                <!-- Post Article -->
                                <div class="article__entry" style="height: 100%;">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content" style="height: 100%;">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by {{ $item->author }}
                                                </span>,
                                            </li>
    
                                            <li class="list-inline-item">
                                                <span>
                                                    {{ $item->created_at->format('l, F jS  Y ') }}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="#">
                                                {{ $item->title }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Popular news carousel -->
</section>
<!-- End Popular news -->
