<?php 
      $sportsposts = App\Models\Post::whereHas('category', function($query) {
        $query->where('name', 'Sports');
    })->latest()->take(10)->get();
?>

<aside class="wrapper__list__article mt-5">
    <h4 class="border_section">Sports</h4>

    <div class="wrapp__list__article-responsive">
        <!-- Post Article List -->
        @foreach ($sportsposts as $item)
            
   
        <div class="card__post card__post-list card__post__transition mt-30">
            <div class="row ">
                <div class="col-md-5">
                    <div class="card__post__transition">
                        <a href="#">
                            <img src="{{ asset('uploads/bloog_images/' . $item->image) }}"class="img-fluid w-100" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 my-auto pl-0">
                    <div class="card__post__body ">
                        <div class="card__post__content  ">
                            <div class="card__post__category ">
                               {{ $item->category->name }}
                            </div>
                            <div class="card__post__author-info mb-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                            by{{ $item->author }}
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
                                <h5>
                                    <a href="#">
                                       {{ $item->title }}
                                    </a>
                                </h5>
                                <p class="d-none d-lg-block d-xl-block mb-0">
                                    {{ $item->short_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</aside>
