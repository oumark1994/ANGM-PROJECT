@extends('backend.template')
@section('content')
@include('backend.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
</div>
             @endif
              <h6>Les Documents</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <a class="btn btn-outline-primary float-end" href="{{url('/ajouterdocument')}}">Ajouter Glisseur</a>
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Titre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Document</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($documents as $document)
                        <tr>
                          <td>{{$document->title}}</td>
                          <td>{{$document->document}}</td>
                          <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit_document/'.$document->id)}}'">Editer</button>
                          <a class="btn btn-outline-secondary" id="delete" target="_blank" href="storage/document_images/{{$document->document}}">Voir</a>
                          <a class="btn btn-outline-danger" id="delete" href="{{url('/supprimerdocument/'.$document->id)}}">Suprimer</a>
                        </td>
                        </tr>
                        @endforeach   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</main>
@endsection