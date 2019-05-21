@extends('layouts.layout')

@section('pageTitle', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

    Hier staat elk blok met de bijbehorende vakken. Klik op het vak voor meer informatie.

    {{--Show each term in a card. Each row has 3 cards--}}

    <div class="row">
        @foreach($terms as $term)

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header bg-dark">
                    <h5 class="text-light"> {{ucfirst($term['title'])}}</h5>
                </div>
                <img class="card-img-top" src="{{$term['photo']}}" alt="Card image cap">
                <div class="card-body bg-secondary">
                    <p class="card-text">{{$term['description']}}</p>
                </div>

                {{--Show all courses for each term--}}

                @foreach($term->courses as $course)
                    <div class="list-group">
                        <a href="{{route("courses.show", $course['id'])}}" class="list-group-item list-group-item-action">{{$course['name']}}</a>
                    </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

@endsection