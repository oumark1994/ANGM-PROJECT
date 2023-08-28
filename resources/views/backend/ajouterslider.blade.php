@extends('backend.template')
@section('content')
@include('backend.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container py-4">
    <div class="row justify-content-center">
<div class="col-md-6">
<div class="card-header text-center pt-4">
              <h5>Ajouter Slider</h5>
            </div>
<div class="card-body mt-5">

<form role="form text-left" method="post" action="{{url('/sauverslider')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <input type="text"value="{{old('title') }}"class="form-control" name="title"  placeholder="Glisseur Titre" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
               @endif
           </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control" cols="30" rows="10" value="{{old('description')}}"></textarea>
                  @if($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
 <input type="file" class="form-control" name="slider_image"  aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('slider_image'))
                <span class="text-danger">{{ $errors->first('slider_image') }}</span>
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