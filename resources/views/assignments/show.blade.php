@extends('layouts.layout')

@section('pageTitle', 'Opdrachten')

@section('header', 'Opdracht '.$assignment['id'])

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Naam</h5>
                    <p class="card-subtitle mb-2 text-muted">{{$assignment['project_name']}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Omschrijving</h5>
                    <p class="card-subtitle mb-2 text-muted">{{$assignment['description']}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Afbeelding</h5>
                    <p class="card-subtitle mb-2 text-muted"> <a href="{{$assignment['image_url']}}"> {{$assignment['image_url']}}</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gemaakt op</h5>
                    <p class="card-subtitle mb-2 text-muted">{{$assignment['created_at']}}</p>
                </div>
            </div>
        </div>
    </div>

<a class="btn btn-secondary mt-3" href="{{route('opdrachten.index')}}" role="button">Ga terug</a>

@endsection