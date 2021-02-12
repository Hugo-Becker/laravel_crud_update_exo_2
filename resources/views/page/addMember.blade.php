@extends('template.main')

@section('content')

<div class="container">
    <form action="/store-member" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nom</label>
            <input class="form-control" name="nom" type="text">
        </div>



        <div class="form-group">
            <label for="exampleFormControlSelect1">Genre</label>
            <select name="genre" class="form-control" id="exampleFormControlSelect1">

              <option>Femme</option>
              <option>Homme</option>
             
            </select>
        </div>

        <label for="">Age</label>
        <input class="form-control" name="age" type="number">


        <button class="btn btn-success form-control mt-5" type="submit">SUBMIT</button>




    </form>


</div>

@endsection