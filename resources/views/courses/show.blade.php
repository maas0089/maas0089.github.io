@extends('layouts.layout')

@section('pageTitle', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

    <div class="table-wrapper-scroll-y">
        <table class="table table-hover h-25">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Vak</th>
                <th scope="col">Blok</th>
                <th scope="col">Starttijd</th>
                <th scope="col">Eindtijd</th>
                <th scope="col">Foto</th>
                <th scope="col"><a class="btn btn-secondary float-right" href="{{route('courses.index')}}" role="button">Ga terug</a></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$course['name']}}</td>
                    <td>{{$course->term['title']}}</td>
                    <td>{{$course['start_date']}}</td>
                    <td>{{$course['end_date']}}</td>
                    <td colspan="2"><img class="img-fluid" style="width: 100px; height: 100px" src={{$course->term['photo']}}/></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection