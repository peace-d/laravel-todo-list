@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-bod">
                    
                <form method="post" action="/todo">

              @csrf


                <input type="text" name="title" placeholder='Title'>

                <br>  <br>

                <textarea type="text" name="description" placeholder='Description'></textarea>

                <br>

                <input type="submit" value="Submit">


                </form>


                </div>



            </div>
        </div>
    </div>
</div>
@endsection
