@extends('layouts.lariano') 
@section('title', 'Singola attrazione')

@section('content')

<div class="card" style="width:25rem;">
         @if ($attrazione->image)
<div id="restaurant-image">
  <img class="card-img-top" src="{{asset("storage/" . $attrazione->image)}}" alt="copertina">
</div> 
@endif

  <div class="card-body">
    <h4 class="card-title">{{$attrazione->nome}}</h4>
    <h5 class="card-title">{{$attrazione->descrizione}}</h5>
    <p class="card-text">Categoria: {{$attrazione->categoria}}</p>
     <p class="card-text">Latitudine: {{$attrazione->latitudine}}</p>
      <p class="card-text"> Longitudine: {{$attrazione->longitudine}}</p>
  </div>
</div>
<div class="d-flex gap-1" >
    <a class="btn btn-warning" href="{{route ("attrazioni.edit", $attrazione)}}">Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Elimina
</button>
    <a class="btn btn-primary" href="{{route ("attrazioni.index")}}">Torna alla lista</a>
</div>
{{-- Per eliminare il videogioco --}}
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimina il videogioco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il videogioco?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
          <form action="{{route ("videogames.destroy", $videogame)}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" value="Elimina definitivamente" >
    </form>
      </div>
    </div>
  </div>
</div> --}}
@endsection