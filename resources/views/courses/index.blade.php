@extends('layouts.layout')

@section('pageTitle', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

    <div class="table-wrapper-scroll-y">
        <table class="table table-hover h-25">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Blok</th>
                <th scope="col">Vak</th>
                <th scope="col">Starttijd</th>
                <th scope="col">Eindtijd</th>
                <th scope="col">Foto</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->term['title']}}</td>
                <td>{{$course['name']}}</td>
                <td>{{$course['start_date']}}</td>
                <td>{{$course['end_date']}}</td>
                <td><img class="img-fluid"  src={{$course->term['photo']}}/></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection