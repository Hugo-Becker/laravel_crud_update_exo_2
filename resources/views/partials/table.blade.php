@extends('template.main')

@section('content')

<div class="container mt-5">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Genre</th>
            <th scope="col">Age</th>
            <th scope="col">Show</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($membres as $m)
            <tr>
                <th scope="row">{{$m->id}}</th>
                <td>{{$m->nom}}</td>
                <td>{{$m->genre}}</td>
                <td>{{$m->age}}</td>
                <td>
                    <form method="GET" action="showMember/{{$m->id}}">
                        @csrf
                        <button class="btn btn-success">Show</button>
                    </form>
                </td>
               
              </tr>
                
            @endforeach
    
    
        </tbody>
      </table>
</div>

    
@endsection