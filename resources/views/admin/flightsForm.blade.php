@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            <h1 class="pageTitle">{{$pageTitle}}</h1>

            <form action="{{ route('app.flights.store') }}" method="post">
                {{Form::token()}}

                <div class="form-group">
                    <label for="exampleSelect1">Country of origin</label>
                    <select class="form-control form-control-lg" name="origin_id">
                        <option value="" disabled selected>Select origin</option>
                        @foreach($origin_airport as $origin_id => $origin_name)
                            <option value="{{ $origin_id }}">{{ $origin_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Country of destination</label>
                    <select class="form-control form-control-lg" name="destination_id">
                        <option value="" disabled selected>Select destination</option>
                        @foreach($destination_airport as $destination_id => $destination_name)
                            <option value="{{ $destination_id }}">{{ $destination_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Airline</label>
                    <select class="form-control form-control-lg" name="airline_id">
                        <option value="" disabled selected>Select airline</option>
                        @foreach($airline as $airline_id => $airline_name)
                            <option value="{{ $airline_id }}">{{ $airline_name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="example-datetime-local-input">Departure date and time</label>
                    <input class="form-control" type="datetime-local" value="{{ str_replace(' ', 'T', $departure_date) }}" name="departure">
                </div>

                <div class="form-group">
                    <label for="example-datetime-local-input">Arrival date and time</label>
                    <input class="form-control" type="datetime-local" value="{{ str_replace(' ', 'T', $arrival_date) }}" name="arrival">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection