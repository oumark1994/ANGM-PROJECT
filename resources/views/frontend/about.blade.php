@extends('frontend.template')
@section('content')
<main id="main">
      <!-- ======= About Section ======= -->
      <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">ANGMV est une agence de ceinture verte a Tchad</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{url('/')}}">Acceuil</a>
                </li>
               
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="/public/assets/img/HH.jpg" alt="" class="img-responsive" width="100%">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">ANGMV


                <span></span>
                <br> Depuis 2017
              </h3>
             
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="public/assets/img/HH.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">AGENCE NATIONALE DE LA GRANDE
MURAILLE VERTE
                   
                  </h3>
                </div>
                <p class="color-text-a">
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget
                  consectetur sed, convallis
                  at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                  ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                  neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                </p>
                <p class="color-text-a">
                  Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                  Mauris blandit aliquet
                  elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                  convallis at tellus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection