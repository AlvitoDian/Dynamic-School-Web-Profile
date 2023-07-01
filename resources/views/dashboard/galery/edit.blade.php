@extends('dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Galleri</h1>
  </div>

  <div class="col-lg-8">
      
    <form method="post" action="/dashboard/galery/{{ $galery->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $galery->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $galery->slug) }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
     

        <div class="mb-3">
          <label for="imggallery" class="form-label">Image Post</label>
          <input type="hidden" name="oldImage" value="{{ $galery->imggallery }}">

          @if($galery->image)
          <img src="{{ asset('storage/' . $galery->imggallery) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">

          @endif

          <input class="form-control @error('imggallery') is-invalid @enderror" type="file" id="imggallery" name="imggallery" onchange="previewImage()">
          @error('imggallery')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Photo</button>
      </form>

  </div>

  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    function previewImage() {

      const image = document.querySelector('#imggallery');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src =  oFREvent.target.result;
      }
    }
</script>

@endsection