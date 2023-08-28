@extends('backend.template')
@section('content')
@include('backend.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container py-4">
    <div class="row justify-content-center">
<div class="col-md-6">
<div class="card-header text-center pt-4">
              <h5>Ajouter blog</h5>
            </div>
<div class="card-body mt-5">

<form role="form text-left" method="post" action="{{url('/sauverblog')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <input type="text"value="{{old('title') }}"class="form-control" name="title"  placeholder="Titre" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
               @endif
           </div>
           <div class="mb-3">
                    <textarea name="short_description" class="form-control" placeholder="Actualite courte description" cols="30" rows="5" value="{{old('short_description')}}"></textarea>
                  @if($errors->has('short_description'))
        <span class="text-danger">{{ $errors->first('short_description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control" placeholder="Actualite description" cols="30" rows="10" value="{{old('description')}}"></textarea>
                  @if($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
 <input type="file" class="form-control" name="blog_image"  aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('blog_image'))
                <span class="text-danger">{{ $errors->first('blog_image') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text" class="form-control" name="author" placeholder="Actualite autheur" aria-describedby="email-addon">
             @if($errors->has('author'))
                <span class="text-danger">{{ $errors->first('author') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="date"value="{{old('blog_date')}}"class="form-control" name="blog_date"  aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('blog_date'))
                <span class="text-danger">{{ $errors->first('blog_date') }}</span>
               @endif
           </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Ajouter Glisseur</button>
                </div>

      </form>
      </div>
</div>
 </div> 
</div>
</main>
@endsection