<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $listTodos = TodoList::get();

        return view('todolist.index', compact('listTodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todolist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
         TodoList::create($data);

         return back()->with(['message' => 'Todolist created Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TodoList::find($id);

        return view('todolist.edit', compact('data'));
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
       $data = TodoList::find($id);

       $data->update([
        'title' => $request->title === null ? $data->title : $request->title,
        'description' => $request->description === null ? $data->description : $request->description
       ]);


       return back()->with(['message' => 'Data Update Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TodoList::find($id);


        $data->delete();


        return back()->with(['message' => 'Todolist Deleted Successfully']);

    }
}
