@extends('admin.main')

@section('content')
    <div class="page-content">

        <div class="container">
            <h1 class="pageTitle">{{$pageTitle}}</h1>

            <form action="{{ route('app.airlines.store') }}" method="post">
                {{Form::token()}}
                <div class="form-group">

                    <label>Airline name</label>
                    <input class="form-control" placeholder="Enter airline name" name="name">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection