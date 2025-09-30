@extends('layouts.lariano') 
@section('title', 'Modifica il ristorante')
@section('content')
<form action="{{route("restaurants.update", $restaurant)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <input type="text" class="form-control" name="name" value="{{$restaurant->name}}" placeholder="Inserisci il nome">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="address" value="{{$restaurant->address}}" placeholder="Inserisci l'indirizzo">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="phone" value="{{$restaurant->phone}}" placeholder="Inserisci il numero di telefono">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="latitude" value="{{$restaurant->latitude}}" placeholder="Inserisci la latitudine">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="longitude" value="{{$restaurant->longitude}}" placeholder="Inserisci la longitudine">
    </div>
    {{-- img --}}
     <div class="mb-3">
        <label for="image">Immagine</label>
        <input type="file" class="form-control" name="image">
                @if ($restaurant->image)
                <div id="restaurant-image">
                <img class="card-img-fluid w-25" src="{{asset("storage/" . $restaurant->image)}}" alt="copertina">
                </div> 
@endif
    </div>

<button type="submit" class="btn btn-primary">Salva</button>
<a class="btn btn-warning" href="{{route ("restaurants.index")}}">Torna alla lista</a>

</form>
@endsection