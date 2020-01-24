@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-4">
              <h5> To Do List</h5>
           </div>
           <div class="col-md-4 text-right">
               <a href="{{route('todo.create')}}" class="btn btn-primary">Add Todo</a>
           </div>
       </div>
       <div class="row mt-2">
           <div class="col-md-8">
               @foreach ($todos as $todo)
                   <div class="card mb-3">
                       <div class="card-header">
                           {{$todo->title}}
                       </div>
                       <div class="card-body">
                           <div class="row">
                               <div class="col-md-8">
                                    {{$todo->description}} <br>
                                    <span>{{date("d M Y ",strtotime($todo->created_at))}}</span>
                               </div>
                               <div class="col-md-4 text-right">
                                   <button class="btn btn-sm btn-primary">Edit</button>
                                   <button class="btn btn-sm btn-danger">Delete</button>
                               </div>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
   </div>
@endsection