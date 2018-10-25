@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-5">
    <h1 class="new_client ml-4">{{$modify==1 ? 'Modify Client' : 'New Client'}}</h1>
  </div>
    <div class="col-md-6 offset-4 mb-5">

        <form id="form" action="{{$modify==1 ? route('update_client',['client_id'=>$client_id]) :route('create_client')}}" method="post">
          <div class="col-md-4">
            <div class="form-group">
            <label>Title</label>
            <select name="title" class="form-control">
              @foreach($titles as $title)
            <option value="{{$title}}" >{{$title}}.</option>
            @endforeach 
                        </select>
                        
          </div>
          </div>
                  
          <div class="form-group">
            <label>Name</label>
          <input name="name" class="form-control" type="text" value="{{old('name') ? old('name') :$name}}">
            <p id="p" class="mt-3 text-center alert-danger">{{$errors->first('name')}}</p>
        
        </div>
          <div class="form-group">
            <label>Last Name</label>
            <input name="last_name" class="form-control" type="text" value="{{old('last_name') ? old('last_name') : $last_name }}">
          <p class="mt-3 text-center alert-danger">{{$errors->first('last_name')}}</p>
          </div>
          <div class="form-group">
            <label>Address</label>
            <input name="address" class="form-control" type="text" value="{{old('address') ? old('address') : $address}}">
            <p class="mt-3 text-center alert-danger">{{$errors->first('address')}}</p>
        
        </div>
          <div class="form-group">
            <label>zip_code</label>
            <input name="zip_code"  class="form-control" type="text" value="{{old('zip_code') ? old('zip_code') : $zip_code}}">
            <p class="mt-3 text-center alert-danger">{{$errors->first('zip_code')}}</p>
         
        </div>
          <div class="form-group">
            <label>City</label>
            <input name="city" class="form-control" type="text" value="{{old('city') ? old('city') : $city}}">
            <p class="mt-3 text-center alert-danger">{{$errors->first('city')}}</p>
              </div>
          <div class="form-group">
            <label>State</label>
            <input name="state"  class="form-control" type="text" value="{{old('state') ? old('state') : $state}}">
            <p class="mt-3 text-center alert-danger">{{$errors->first('state')}}</p>         
        </div>
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="email" class="form-control" type="text" value="{{old('email') ? old('email') : $email}}">
            <p class="mt-3 text-center alert-danger">{{$errors->first('email')}}</p>         
        </div>
          <div class="form-group mt-3">
            <input value="SAVE" class="btn btn-success btn-block" type="submit">
          </div>
        </form>
      </div>
    </div>
   
    @endsection
