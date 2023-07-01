
@extends('layouts.main-singlepost')

@section('container')
<br>
<br>
<br>
{{-- <div class="container my-4">
    <div class="row justify-content-center mb-5">

        
        <div class="col-md-8">

            <h1 class="mb-3">{{ $post->title }}</h1>
            
            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if($post->image)

            <div style="
            max-height: 350px;
            overflow: hidden;
            ">
             <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
             </div>

            @else 
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

                <article class="my-3 fs-5">
                {!! $post->body !!}
                </article>
                <br>
                <a href="/posts" class="btn btn-primary mt-3" >Back to Posts</a>
        </div>
    </div>
</div> --}}

<!-- ======= Blog Page ======= -->

    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <div class="input-group mb-3">
                <form action="/posts">
              
                    @if (request('category'))

                    <input type="hidden" name="category" value="{{ request('category') }}">

                    @endif
                    
                    @if (request('author'))

                    <input type="hidden" name="author" value="{{ request('author') }}">

                    @endif
                  
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit" >Search</button>
                  </div>
            </form>
      </div>
                <!-- search option end -->
              </div>
              
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>KATEGORI</h4>
                  @foreach ($categories as $category)
                  <ul>
                    <li>
                      <a href="/posts?category={{ $category->slug}}">{{ $category->name }}</a>
                    </li>
                  
                  </ul>
                  @endforeach
                </div>
              </div>
              
              @if ($posts->count())
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>POST TERBARU</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                         
                      <a href="/posts">
                      @if($posts[0]->image)

                      <div style="
                      max-height: 350px;
                      
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                      @endif
                        </a>
                      </div>
                      <div class="pst-content">
                        <h5><a href="/posts" style="color: black">{{ $posts[0]->title }}</h5>
                        <p>{{ $posts[0]->excerpt }}</p></a>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/posts">
                          @if($posts[1]->image)

                      <div style="
                      max-height: 350px;
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="{{ $posts[1]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[1]->category->name }}" class="card-img-top" alt="{{ $posts[1]->category->name }}">
                      @endif
                        </a>
                      </div>
                      <div class="pst-content">
                         <h5><a href="/posts" style="color: black">{{ $posts[1]->title }}</h5>
                        <p>{{ $posts[1]->excerpt }}</p></a>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/posts">
                          @if($posts[2]->image)

                      <div style="
                      max-height: 350px;
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[2]->image) }}" alt="{{ $posts[2]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[2]->category->name }}" class="card-img-top" alt="{{ $posts[2]->category->name }}">
                      @endif
                        </a>
                      </div>
                      <div class="pst-content">
                        <h5><a href="/posts" style="color: black">{{ $posts[2]->title }}</h5>
                        <p>{{ $posts[2]->excerpt }}</p></a>
                      </div>
                    </div>
                    <!-- End single post -->
                    
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="/posts">
                          @if($posts[3]->image)

                      <div style="
                      max-height: 350px;
                      overflow: hidden;
                      ">
                      <img src="{{ asset('storage/' . $posts[3]->image) }}" alt="{{ $posts[3]->category->name }}" class="img-fluid">
                      </div>

                      @else 
                      <img src="https://source.unsplash.com/1200x400?{{ $posts[3]->category->name }}" class="card-img-top" alt="{{ $posts[3]->category->name }}">
                      @endif
                        </a>
                      </div>
                      <div class="pst-content">
                        <h5><a href="/posts" style="color: black">{{ $posts[3]->title }}</h5>
                        <p>{{ $posts[3]->excerpt }}</p></a>
                      </div>
                    </div>
                    <!-- End single post -->
                  </div>
                </div>
                <!-- recent end -->
              </div>
              @endif

            </div>
          </div>
          <!-- End left sidebar -->


          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <h2>{{ $post->title }}</h2>
                  <div class="post-thumbnail">
                    @if($post->image)

                    {{-- <div> --}}
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="
                    width: 1200px;
                    height: 400px;
                    
                    ">
                   {{--  </div> --}}

                    @else 
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                  </div>
                  <div class="post-information">
                    
                    <div class="entry-meta">
                      <span class="author-meta"><i class="bi bi-person"></i> <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> </span>
                      <span><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }} </span>
                     
                      <span>
                        <i class="bi bi-tags"></i>
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                      </span>
                     
                    </div>
                    <div class="entry-content">
                      <p>{!! $post->body !!}</p>
                    </div>
                  </div>
                </article>
                
                <a href="/posts" class="btn btn-outline-secondary rounded-pill">Kembali</a>
                
                <!-- single-blog end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- End Blog Page -->

@endsection
