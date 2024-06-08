 <?php 
        $technologyPosts = App\Models\Post::whereHas('category', function($query) {
            $query->where('name', 'Technology');
        })->take(10)->get();
 ?>
 
 <!-- Post news carousel -->
 <div class="container">
  <div class="row">
      <div class="col-md-12">
          <aside class="wrapper__list__article">
              <h4 class="border_section">technology</h4>
          </aside>
      </div>
      <div class="col-md-12">

          <div class="article__entry-carousel">
            @foreach ($technologyPosts as $item)
              <div class="item">
                  <!-- Post Article -->
                  <div class="article__entry">
                      <div class="article__image">
                          <a href="#">
                            <img src="{{ asset('uploads/bloog_images/' . $item->image) }}" class="img-fluid" alt="">
                          </a>
                      </div>
                      <div class="article__content">
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <span class="text-primary">
                                      {{ $item->author }}
                                  </span>
                              </li>
                              <li class="list-inline-item">
                                  <span>
                                    {{ $item->created_at->format('l, jS F Y h:i:s A') }}


                                  </span>
                              </li>

                          </ul>
                          <h5>
                              <a href="#">
                                 {{ $item->title }}.
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
<!-- End Popular news category -->