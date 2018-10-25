@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-5 ">
        <h1 class="new_client ml-4">Clients/Booking</h1>
      </div>
      <div class="col-md-6 offset-3 mb-5">
       
        <h4 class="booking_for">BOOKING FOR:</h4>
        <div class="for"><b>
        {{$client->title}}.  
        {{$client->name}}	&nbsp;
        {{$client->last_name}}&nbsp;
        </b></div>
        <form action="" method="post" >
        <div class="form-group">
          <div class="medium-1  columns">FROM:</div>
        <div class="medium-2  columns"><input class="form-control" name="dateFrom" value="{{$dateFrom}}" type="date"  /></div>
        </div>
        <div class="form-group">
          <div class="medium-1  columns">TO:</div>
          <div class="medium-2  columns"><input class="form-control" name="dateTo" value="{{$dateTo}}" type="date"  /></div>
        </div>
      <div class="form-group">
          <div class="medium-2  columns"><input  class="btn btn-block btn-warning mt-3" type="submit" value="SEARCH" /></div>
        </div>
        </form>

        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th width="200">Room</th>
              <th width="200">Availability</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody>
            @unless(empty($dateFrom)|| empty($dateTo))
            @foreach($rooms as $room)
                      <tr>
              <td>{{$room->name}}</td>
              <td>
                <div class="callout success">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class="btn btn-warning m-4" href="{{
                  route(
                    'book_room',
                    [
                      'client_id'=>$client->id,
                      'room_id'=>$room->id,
                      'date_in'=>$dateFrom,
                      'date_out'=>$dateTo,
                      ]
                  )
                }}">BOOK NOW</a>
              </td>
            </tr>
                     @endforeach
                     @endunless
                    </tbody>
        </table>
      </div>
    </div>
@endsection