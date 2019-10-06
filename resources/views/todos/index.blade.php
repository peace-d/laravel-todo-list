@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Todo List</div>

                @include('includes/messages')

                <a href="/todo/create">Add New todo</a>

                <div class="card-bod">
                    
                    <ul>
                    @foreach ($todos as $todo )

                        <li> 
                        
                            @if( $todo->is_done == true)
                                <strike>{{ $todo->title }} - {{ $todo->description }}</strike>
                            @elseif( $todo->is_done == false )
                                {{ $todo->title }} - {{ $todo->description }}
                            @endif
                            x
                            <a href="/todo/{{ $todo->id }}/edit">Edit</a>


                            @if( $todo->is_done == true)
                                <a href="/todo/{{ $todo->id }}/mark-as-undone">Undo</a>
                            @elseif( $todo->is_done == false )
                                <a href="/todo/{{ $todo->id }}/mark-as-done">Done</a>
                            @endif




                            
                            
                            <form method="post" action="/todo/{{ $todo->id }}/">

                            @method('delete')
                            @csrf

                            <input type="submit" value="Delete">

                            </form>
                        
                        </li>

                    @endforeach
                    </ul>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
