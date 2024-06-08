<?php 
$latest_posts = App\Models\Post::orderBy('created_at', 'desc')->take(1)->get();
$latest_posts2 = App\Models\Post::orderBy('created_at', 'desc')->take(2)->get();
$latest_category = App\Models\Post::orderBy('created_at', 'desc')->take(10)->get();
?>

<div class="col-md-4">
  <div class="sticky-top">
      <aside class="wrapper__list__article">
          <h4 class="border_section">
              Latest post</h4>
          <div class="wrapper__list__article-small">

              <!-- Post Article -->
              @foreach ($latest_posts as $item)
              <div class="article__entry">
                <div class="article__image">
                    <a href="#">
                        <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="article__content">
                    <div class="article__category">
                        {{ $item->category->name }}
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <span class="text-primary">
                                by {{ $item->author }}
                            </span>
                        </li>
                        <li class="list-inline-item">
                            <span class="text-dark text-capitalize">
                              {{ $item->created_at->format('l, F jS  Y ') }}
                            </span>
                        </li>

                    </ul>
                    <h5>
                        <a href="#">
                           {{ $item->title }}
                        </a>
                    </h5>
                    <p>
                       {{ $item->short_description }}
                    </p>
                    <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read
                        more</a>
                </div>
            </div>
              @endforeach
              <div class="mb-3">
                  <!-- Post Article -->
                  @foreach ($latest_posts2 as $item)
                  <div class="card__post card__post-list">
                    <div class="image-sm">
                        <a href="blog_details.html">
                          <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" alt="" class="img-fluid">
                        </a>
                    </div>

                    <div class="card__post__body ">
                        <div class="card__post__content">
                            <div class="card__post__author-info mb-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                            by {{ $item->author }}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="text-dark text-capitalize">
                                          {{ $item->created_at->format('l, F jS  Y ') }}
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <div class="card__post__title">
                                <h6>
                                    <a href="blog_details.html">
                                       {{ $item->title }}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
              </div>
              
          </div>
      </aside>

      <aside class="wrapper__list__article">
          <h4 class="border_section">stay conected</h4>
          <!-- widget Social media -->
          <div class="wrap__social__media">
              <a href="#" target="_blank">
                  <div class="social__media__widget facebook">
                      <span class="social__media__widget-icon">
                          <i class="fa fa-facebook"></i>
                      </span>
                      <span class="social__media__widget-counter">
                          19,243 fans
                      </span>
                      <span class="social__media__widget-name">
                          like
                      </span>
                  </div>
              </a>
              <a href="#" target="_blank">
                  <div class="social__media__widget twitter">
                      <span class="social__media__widget-icon">
                          <i class="fa fa-twitter"></i>
                      </span>
                      <span class="social__media__widget-counter">
                          2.076 followers
                      </span>
                      <span class="social__media__widget-name">
                          follow
                      </span>
                  </div>
              </a>
              <a href="#" target="_blank">
                  <div class="social__media__widget youtube">
                      <span class="social__media__widget-icon">
                          <i class="fa fa-youtube"></i>
                      </span>
                      <span class="social__media__widget-counter">
                          15,200 followers
                      </span>
                      <span class="social__media__widget-name">
                          subscribe
                      </span>
                  </div>
              </a>

          </div>
      </aside>

      <aside class="wrapper__list__article">
        <h4 class="border_section">Latest Post Categories</h4>
        <div class="blog-tags p-0">
            @if ($latest_category->isNotEmpty())
                <ul class="list-inline">
                    @php
                        $uniqueCategories = $latest_category->unique('category_id');
                    @endphp
                    @foreach ($uniqueCategories as $post)
                        <li class="list-inline-item">
                            <a href="#">
                                {{ $post->category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No categories found.</p>
            @endif
        </div>
    </aside>
    
    
    

      <aside class="wrapper__list__article">
          <h4 class="border_section">Advertise</h4>
          <a href="#">
              <figure>
                  <img src="front-end/images/newsimage3.png" alt="" class="img-fluid">
              </figure>
          </a>
      </aside>

      <aside class="wrapper__list__article">
          <h4 class="border_section">newsletter</h4>
          <!-- Form Subscribe -->
          <div class="widget__form-subscribe bg__card-shadow">
              <h6>
                  The most important world news and events of the day.
              </h6>
              <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
              <div class="input-group ">
                  <input type="text" class="form-control" placeholder="Your email address">
                  <div class="input-group-append">
                      <button class="btn btn-primary" type="button">sign up</button>
                  </div>
              </div>
          </div>
      </aside>
  </div>
</div>