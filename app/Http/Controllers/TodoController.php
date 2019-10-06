<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();

        return view('todos/index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // fins rodo by id
        $todo = new Todo();

        $todo->title = $request->title;
        $todo->description = $request->description;

        $todo->save();

        return redirect('todo')->with('success', 'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
      
        return view('todos/edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find a todo
        $todo = Todo::find($id); 

        // Update values
        $todo->title = $request->title;
        $todo->description = $request->description;

        // Save your values in table
        $todo->update();

        return redirect('todo/')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return redirect('todo/')->with('success', 'Successfully deleted');

    }

    public function markAsDone($id)
    {
        $todo = Todo::find($id);

        $todo->is_done = true;

        $todo->update();


        return redirect('todo/')->with('success', 'Successfully done');

    }

    public function MarkAsUnDone($id)
    {
        $todo = Todo::find($id);

        $todo->is_done = false;

        $todo->update();


        return redirect('todo/')->with('success', 'Successfully done');

    }
    
}
