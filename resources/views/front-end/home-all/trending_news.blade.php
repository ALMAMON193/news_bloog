
@php
    $trendingPosts = App\Models\Post::all();
@endphp


<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wrapp__list__article-responsive wrapp__list__article-responsive-carousel">
          @foreach ($trendingPosts as $item)
          <div class="item">
            <!-- Post Article -->
          
           <div class="card__post card__post-list">
           
            <div class="image-sm">
              <a href="./blog_details.html">
                <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" class="img-fluid" alt="">
              </a>
            </div>
            <div class="card__post__body">
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
                        december 09, 2016
                      </span>
                    </li>
                  </ul>
                </div>
                <div class="card__post__title">
                  <h6>
                    <a href="./blog_details.html">
                      6 Best Tips for Building a Good Shipping Boat
                    </a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
       
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>