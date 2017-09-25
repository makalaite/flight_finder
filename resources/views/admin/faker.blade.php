@extends('admin.main')

@section('content')
    <div class="page-content" id="fakedatacontent">

        <h1 class="pageTitle">Fake data generator</h1>

        <div class="fakedata"><h4>If you want to generate fake data to analyse the app, you can do this through Command
                Line or Terminal using PHP Artisan commands. <br/> To generate fake airports use "php artisan
                fakedata:airports". <br/>To generate fake flights use "php artisan fakedata:flights".</h4></div>
        <div class="fakedata"><h6>Fake data generating through admin panel has been removed. If you want this function
                restored, contact your beloved programmer.</h6></div>

    </div>
@endsection