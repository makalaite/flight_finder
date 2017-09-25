<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flight Finder Search</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/front-end.css')}}">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">

        <div class="page-content">

            <div class="container">
                {{--<h1 class="pageTitle">{{$pageTitle}}</h1>--}}
                <h1 class="pageTitle">Search for flights</h1>


                {{--@if(!(isset($flights)) )--}}
                <form action="{{ route('app.search.index')  }}" method="get">

                    <div class="form-group">
                        <label>Departure airport</label>

                        {{ Form::select('origin_id', $origin_id) }}

                    </div>

                    <div class="form-group">
                        <label>Arrival airport</label>

                        {{ Form::select('destination_id', $destination_id) }}

                    </div>

                    <div class="form-group">
                        <label>Departure date</label>
                        {{ Form::date('departure', $date) }}

                    </div>


                    <button type="submit" class="btn btn-secondary">Search</button>
                </form>

                @if(isset($flights))

                    <div style="margin-top: 30px">
                        <table class="table table-bordered" style="background-color: #fff;">
                            <thead>
                            <tr>
                                @foreach($flights[0] as $key => $value)
                                    <th>{{$key}}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($flights as $flight)

                                    @foreach ($flight as $key => $value)

                                        @if($key == 'airport_name')
                                            @foreach($value as $key => $detail)
                                                @if ($key == 'name')

                                                    <td>{{ $detail }}</td>
                                                    {{--{{ dd($detail) }}--}}

                                                @endif

                                            @endforeach
                                        @else

                                            <td>{{ $value }}</td>
                                        @endif
                                    @endforeach



                                    {{--@foreach($flight as $key => $value)--}}



                                    {{--@endforeach--}}
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>




                @endif

            </div>

        </div>
    </div>
</div>
</body>
</html>