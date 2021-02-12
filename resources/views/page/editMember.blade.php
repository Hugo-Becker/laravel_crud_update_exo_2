@extends('template.main')

@section('content')

<div class="container">
    <form action="/update-member/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nom</label>
            <input value="{{$edit->nom}}" class="form-control" name="nom" type="text">
        </div>



        <div class="form-group">
            <label for="exampleFormControlSelect1">Genre</label>
            <select name="genre" class="form-control" id="exampleFormControlSelect1">

              <option selected="selected">{{$edit->genre}}</option>
              <option> 
                  @if ($edit->genre==='Homme')
                    Femme

                   
                        
                  @else

                  Homme
                        
                  
                  
                  @endif
            </option>

             
            </select>
        </div>

        <label for="">Age</label>
        <input value="{{$edit->age}}"" class="form-control" name="age" type="number">


        <button class="btn btn-success form-control mt-5" type="submit">SUBMIT</button>




    </form>


</div>

@endsection