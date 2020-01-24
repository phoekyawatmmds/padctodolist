<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\LoginRequest;
use Auth;
class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $todos = Auth::user()->todos;
        return view('admin.todo.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoStoreRequest $request)
    {
        TodoList::create($request->validated());
        return redirect(route('todo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function show(TodoList $todoList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoList $todoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoList $todoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoList $todoList)
    {
        //
    }

    public function login()
    {
        if (Auth::check()) {
           return redirect('/todo');
        }else{
            return view('admin.login');
        }
    }

    public function doLogin(LoginRequest $request)
    {
       Auth::attempt($request->validated());
       if (Auth::check()) {
          return redirect('/todo');
       } else {
          return "Login Fail";
       }
       
    }
}
