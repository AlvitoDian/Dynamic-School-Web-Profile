@extends('dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Daftar sop</h1>
  </div>

  <div class="col-lg-8">
      
    <form method="post" action="/dashboard/sop/{{ $sop->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $sop->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $sop->slug) }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="desc" class="form-label">Description</label>
          @error('desc')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="desc" type="hidden" name="desc" value="{{ old('desc', $sop->desc) }}">
          <trix-editor input="desc"></trix-editor>
        </div>

        <div class="mb-3">
          <label for="imgsop" class="form-label">Image Sop</label>
          <input type="hidden" name="oldImage" value="{{ $sop->imgsop }}">

          @if($sop->imgsop)
          <img src="{{ asset('storage/' . $sop->imgsop) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">

          @endif

          <input class="form-control @error('imgsop') is-invalid @enderror" type="file" id="imgsop" name="imgsop" onchange="previewImage()">
          @error('imgsop')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Sop</button>
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

      const image = document.querySelector('#imgsop');
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