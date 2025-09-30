@extends('layouts.lariano')
@section('title', 'Tutte le cose da vedere')
@section('content')
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Categoria</th>
      <th scope="col">Latitudine</th>
      <th scope="col">Longitudine</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($attrazioni as $attrazione)
        <tr>
            <td>{{$attrazione->nome}}</td>
            <td>{{$attrazione->descrizione}}</td>
            <td>{{$attrazione->categoria}}</td>
             <td>{{$attrazione->latitudine}}</td>
              <td>{{$attrazione->longitudine}}</td>
            <td><a href="{{route("attrazioni.show", $attrazione->id)}}">Vai al dettaglio</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection