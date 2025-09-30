@extends('layouts.lariano')
@section('title', 'Tutti i ristoranti')
@section('content')
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Indirizzo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Latitudine</th>
      <th scope="col">Longitudine</th>
       <th scope="col">Immagini</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($restaurants as $restaurant)
        <tr>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->address}}</td>
            <td>{{$restaurant->phone}}</td>
             <td>{{$restaurant->latitude}}</td>
             <td>{{$restaurant->longitude}}</td>
              <td> @if ($restaurant->image)
  <img class="card-img-top" src="{{asset("storage/" . $restaurant->image)}}" alt="copertina">
@endif</td>
            <td><a href="{{route("restaurants.show", $restaurant->id)}}">Vai al dettaglio</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection