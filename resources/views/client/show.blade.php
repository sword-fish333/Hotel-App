@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-5">
    <h1 class="new_client ml-4">New Client</h1>
  </div>
    <div class="col-md-6 offset-4 mb-5">

        <form action="/clients/new" method="post">
          <div class="col-md-6">
            <label>Title</label>
            <select name="form[title]">
                          <option value="mr" selected="selected">Mr.</option>
                          <option value="ms">Ms.</option>
                          <option value="mrs">Mrs.</option>
                          <option value="dr">Dr.</option>
                          <option value="mx">Mx.</option>
                        </select>
          </div>
          <div class="form-group">
            <label>Name</label>
            <input name="form[name]" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input name="form[lastName]" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input name="form[address]" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label>zip_code</label>
            <input name="form[zipCode]"  class="form-control" type="text">
          </div>
          <div class="form-group">
            <label>City</label>
            <input name="form[city]" class="form-control" type="text">
          </div>
          <div class="form-group">
            <label>State</label>
            <input name="form[state]"  class="form-control" type="text">
          </div>
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="form[email]" class="form-control" type="text">
          </div>
          <div class="form-group mt-3">
            <input value="SAVE" class="btn btn-success btn-block" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection