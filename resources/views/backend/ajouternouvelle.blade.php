@extends('backend.template')
@section('content')
@include('backend.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container py-4">
    <div class="row justify-content-center">
<div class="col-md-6">
<div class="card-header text-center pt-4">
              <h5>Ajouter nouvelle</h5>
            </div>
<div class="card-body mt-5">

<form role="form text-left" method="post" action="{{url('/sauvernews')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <input type="text"value="{{old('title') }}"class="form-control" name="title"  placeholder="Nouvelle Titre" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
               @endif
           </div>
           <div class="mb-3">
                    <textarea name="short_description" class="form-control" placeholder="Nouvelle courte description" cols="30" rows="5" value="{{old('short_description')}}"></textarea>
                  @if($errors->has('short_description'))
        <span class="text-danger">{{ $errors->first('short_description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control" placeholder="Nouvelle description" cols="30" rows="10" value="{{old('description')}}"></textarea>
                  @if($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
 <input type="file" class="form-control" name="nouvelle_image"  aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('nouvelle_image'))
                <span class="text-danger">{{ $errors->first('nouvelle_image') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="date"value="{{old('nouvelle_date')}}"class="form-control" name="nouvelle_date"  aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
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