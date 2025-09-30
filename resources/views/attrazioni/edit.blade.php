@extends('layouts.lariano') 
@section('title', 'Tutte le attrazioni')
@section('content')
<form action="{{route("attrazioni.update", $attrazione)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <input type="text" class="form-control" name="nome" value="{{$attrazione->nome}}" placeholder="Inserisci il nome">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="categoria" value="{{$attrazione->categoria}}" placeholder="Inserisci la categoria">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="latitudine" value="{{$attrazione->latitudine}}" placeholder="Inserisci la latitudine">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="longitudine" value="{{$attrazione->longitudine}}" placeholder="Inserisci la longitudine">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="descrizione"rows="15">{{$attrazione->descrizione}}</textarea>
    </div>
    {{-- img --}}
     <div class="mb-3">
        <label for="image">Immagine</label>
        <input type="file" class="form-control" name="image">
                {{-- @if ($attrazione->image)
                <div id="attrazione-image">
                <img class="card-img-fluid w-25" src="{{asset("storage/" . $attrazione->image)}}" alt="copertina">
                </div> 
@endif --}}
    </div>

<button type="submit" class="btn btn-primary">Salva</button>
<a class="btn btn-warning" href="{{route ("attrazioni.index")}}">Torna alla lista</a>

</form>
@endsection