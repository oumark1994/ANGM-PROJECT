@extends('frontend.template')
@section('content')

    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                </ol>
            </nav>
        </div>
    </div>
 <div class="row g-5 justify-content-center">
  
          <div class="col-lg-6 col-md-10 col-sm-10 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-4 text-center">Avez vous des questions? Veillez nous contactez!</h1>
           
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="name"
                      placeholder="Votre Nom"
                    />
                    <label for="name">Nom</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control bg-light border-0"
                      id="email"
                      placeholder="Votre Email"
                    />
                    <label for="email">Votre Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="subject"
                      placeholder="Suject"
                    />
                    <label for="subject">Suject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control bg-light border-0"
                      placeholder="Laissez nous un message"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-success w-100 py-3" type="submit">
                    Envoyer Message
                  </button>
                </div>
              </div>
            </form>
          </div>

@endsection