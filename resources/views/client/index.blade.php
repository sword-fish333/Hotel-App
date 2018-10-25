@extends('layouts.app')

@section('content')
<div class="row">
      <div class="col-md-8 offset-2 mt-5">
        <h4>Clients</h4>
        <div class="medium-2  columns"><a class="btn btn-warning  mb-3" href="{{ route('new_client') }}">ADD NEW CLIENT</a></div>                  <table class="table table-hover">
       
          <thead>
            <tr>
              <th width="200">Name</th>
              <th width="200">Email</th>
              <th width="200" style="text-align:center;">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($clients as $client)
              <tr>
              <td>{{$client->title}}. {{$client->name}} {{$client->last_name}}</td>
                <td>{{$client->email}}</td>
                <td>
                  <a class="btn btn-success mr-4" href="{{route('show_client',['client_id'=>$client->id])}}" style="color:white;">EDIT</a>
                  <a class="btn btn-warning ml-4" href="{{route('check_room',['client_id'=>$client->id])}}" >BOOK A ROOM</a>
                </td>
              </tr>     
              @endforeach         
                </tbody>
        </table>

      </div>

      </div>
    </div>
@endsection