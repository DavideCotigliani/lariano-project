@extends('layouts.lariano') 
@section('title', 'Modifica evento')
@section('content')
<form action="{{route("events.update", $event)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <input type="text" class="form-control" name="title" value="{{$event->title}}" placeholder="Inserisci il nome">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="start_date" value="{{$event->categoria}}" placeholder="Inserisci la data di inizio">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="end_date" value="{{$event->latitudine}}" placeholder="Inserisci la data di fine">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="description"rows="15">{{$event->description}}</textarea>
    </div>
    {{-- img --}}
     <div class="mb-3">
        <label for="image">Immagine</label>
        <input type="file" class="form-control" name="image">
                {{-- @if ($event->image)
                <div id="event-image">
                <img class="card-img-fluid w-25" src="{{asset("storage/" . $event->image)}}" alt="copertina">
                </div> 
@endif --}}
    </div>

<button type="submit" class="btn btn-primary">Salva</button>
<a class="btn btn-warning" href="{{route ("events.index")}}">Torna alla lista</a>

</form>
@endsection