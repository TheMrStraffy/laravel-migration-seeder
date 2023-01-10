@extends('layouts.main')

@section('content')
<div class="container">

    <h1 class="text-center">TRAINS FROM ALL OVER THE WOOOOOORLD</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train Code</th>
            <th scope="col">Number Of Coaches</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)

            <tr>
              <td>{{$train['company']}}</td>
              <td>{{$train['departure_station']}}</td>
              <td>{{$train['arrival_station']}}</td>
              <td>{{$train['departure_time']}}</td>
              <td>{{$train['arrival_time']}}</td>
              <td>{{$train['train_code']}}</td>
              <td>{{$train['coaches_number']}}</td>
              <td>
                @if ($train['is_in_time'])
                    In Time
                    @elseif (!$train['is_in_time'] && !$train['is_cancelled'])
                    Delayed
                    @else
                    Cancelled
                @endif
              </td>

            </tr>
            @endforeach

        </tbody>
      </table>
</div>

@endsection
