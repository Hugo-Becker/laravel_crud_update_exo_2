@extends('template.main')

@section('content')
<div class="container d-flex justify-content-center mt-5">
  <div class="card" style="width: 18rem;">

    <div class="card-body">
      <h5 class="card-title">{{$show->nom}}</h5>
      <h5 class="card-title">{{$show->genre}}</h5>
      <p class="card-text">{{$show->age}} ans</p>
      <a href="/edit-member/{{$show->id}}" class="btn btn-primary">Edit</a>
      <form action="/delete-member/{{$show->id}}" method="POST">
        @csrf

        <button class="btn btn-danger"> Delete</button>

      </form>

    </div>
  </div>
</div>

    
@endsection