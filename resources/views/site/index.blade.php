@extends('layouts.principal')

@section('conteudo-principal')
<div class="container">
    <div class="row">
        <h2>Mismatch - Where opposites attract!</h2>
    </div>
    <div class="row mt-5">

        @foreach ($profiles as $profile)
        <div class="card" style="width:400px">
            <img class="card-img-top" src="/img/profile/{{ $profile->picture }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{$profile->first_name}} {{$profile->last_name}}</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>

        @endforeach
    </div>
</div>


@endsection


