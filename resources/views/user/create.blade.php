@extends('user.base')

@section('title', 'Create user')

@section('container')
{{ $errors->list }}
<h1>Create a User</h1>
<br>
    <form action="add" method="post"  class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10"> 
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10"> 
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="repeat_password">Repeat Password:</label>
                <div class="col-sm-10"> 
                <input type="password" class="form-control" name="password_confirmation" id="repeat_password" placeholder="Repeat Password">
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
@endsection