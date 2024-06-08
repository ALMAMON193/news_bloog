<?php 
        $life_style_posts = App\Models\Post::whereHas('category', function($query) {
            $query->where('name', 'Lifestyle');
        })->take(10)->get();
 ?>
<aside class="wrapper__list__article mb-0">
  <h4 class="border_section">Lifestyle</h4>
  <div class="row">
    @if($life_style_posts->isNotEmpty())

    @else

    @endif

      @foreach ($life_style_posts as $post)
          <div class="col-md-6 mb-4">
              <div class="article__entry">
                  <div class="article__image">
                      <a href="#">
                        <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" alt="" class="img-fluid">
                      </a>
                  </div>
                  <div class="article__content">
                      <ul class="list-inline">
                          <li class="list-inline-item">
                              <span class="text-primary">
                                by {{ $item->author }}
                              </span>
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
</aside>
