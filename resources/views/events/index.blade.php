@extends('layouts.lariano')
@section('title', 'Tutte le attrazioni')
@section('content')
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Data di Inizio</th>
      <th scope="col">Data fine</th>
      <th scope="col">Immagini</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($events as $event)
        <tr>
            <td>{{$event->title}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->start_date}}</td>
             <td>{{$event->end_date}}</td>
<td>@if ($event->image)
  <img class="card-img-top" src="{{asset("storage/" . $event->image)}}" alt="copertina">
@endif</td>
            <td><a href="{{route("events.show", $event->id)}}">Vai al dettaglio</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection