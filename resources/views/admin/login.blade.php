@extends('layouts.app')
@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-4">
                @if($errors->any)
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
          </div>
      </div>
      <form action="/todo-login" method="post">
        @csrf
      <div class="row">
          <div class="col-md-4 m-auto">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" required value="{{ old('name') }}" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" required value="{{ old('password') }}" class="form-control">
              </div>
              <div class="from-group text-center">
                  <button type="submit" class="btn btn-success w-100">Login</button>
              </div>
          </div>
      </div>
    </form>
  </div>
@endsection