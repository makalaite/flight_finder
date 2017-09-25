<div id="menu">
    <nav class="nav flex-column">
        <h3>MENU</h3>
        <a class="nav-link" href="{{asset ('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <br>
        <a class="nav-link" href="{{route('app.faker.index')}}"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
        <br>
        <a class="nav-link active" href="{{route('app.countries.index')}}"><i class="fa fa-globe" aria-hidden="true"></i> Countries</a>
        <a class="nav-link" href="{{route('app.airports.index')}}"><i class="fa fa-flag" aria-hidden="true"></i> Airports</a>
        <a class="nav-link" href="{{route('app.airlines.index')}}"><i class="fa fa-briefcase" aria-hidden="true"></i> Airlines</a>
        <a class="nav-link" href="{{route('app.flights.index')}}"><i class="fa fa-plane" aria-hidden="true"></i> Flights</a>
        <br>
        <a class="nav-link" href="{{route('app.faker.index')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Data faker</a>
    </nav>
</div>
