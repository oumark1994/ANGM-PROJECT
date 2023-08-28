@extends('backend.template')
@section('content')
<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bienvenu!</h1>
            <p class="text-lead text-white">ANGMV</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5 pt-5">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-9">
            <div class="card-header text-center pt-4">
              <h5>Se Connecter</h5>
            </div>
        
              <div class="col-12 me-auto px-1">
              @if(Session::has('status'))
                    <div class="alert alert-success text-center">
                      {{Session::get('status')}}
</div>
@elseif(Session::has('error'))
    <div class="alert alert-danger text-white text-center">
     {{Session::get('error')}}
 </div>
 @endif   
  </div>
  <div class="mt-2  text-center">
  </div>
            </div>
            <div class="card-body mt-5">
            <form role="form text-left" method="post" action="{{url('/signin')}}">
                {{csrf_field()}}
         <div class="mb-3">
         <input type="email"value="{{ old('email') }}"class="form-control" name="email"  placeholder="Votre Email" aria-label="Email" aria-describedby="email-addon">
             @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif
           </div>
                <div class="mb-3">
                  <input type="password" value="{{ old('password')}}" name="password"  class="form-control" placeholder="Mot de passe" aria-label="Password" aria-describedby="password-addon">
                  @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Connecter</button>
                </div>
                <p class="text-sm mt-3 mb-0">Vous n'avez pas  un compte? <a href="{{url('/enregistrer')}}" class="text-dark font-weight-bolder">Enregistrer</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection