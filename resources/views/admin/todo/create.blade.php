@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-12">
              <h5>Create Todo </h5>
           </div>
       </div>
       <form action="{{route('todo.store')}}" method="post">
           @csrf
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                   <label for="title">Title</label>
                   <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" required autocomplete="off">
               </div>
               <div class="form-group">
                   <label for="description">Description</label>
                   <textarea name="description" id="description" class="form-control" cols="30" rows="10" required>{{old('description')}}</textarea>
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-success">Create</button>
               </div>
           </div>
       </div>
    </form>
   </div>
@endsection