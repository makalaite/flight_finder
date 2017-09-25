@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            <h1 class="pageTitle">{{$pageTitle}}</h1>

            <form action="{{ route('app.airports.store') }}" method="post">
                {{Form::token()}}
                <div class="form-group">
                    <label>Airport name</label>
                    <input class="form-control" placeholder="Enter airport name" name="name">
                </div>

                <div class="form-group">
                    <label>Airport name abbreviation</label>
                    <input class="form-control" placeholder="Enter 3 symbol abbreviation" name="id">
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Country</label>
                    <select class="form-control form-control-lg" name="country_id">
                        <option value="" disabled selected>Select country</option>
                        @foreach($country_id as $key => $country)
                            <option value="{{ $key }}">{{ $country }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input class="form-control" placeholder="Enter city" name="city">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection