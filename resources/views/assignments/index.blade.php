@extends('layouts.layout')

@section('pageTitle', 'Opdrachten')

@section('header', 'Opdrachten')

@section('content')

    <div class="table-wrapper-scroll-y">
        <table class="table table-hover h-25">
            <thead class="thead-dark">
            <tr>
                <th>Naam</th>
                <th>URL</th>
                <th>Omschrijving</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assignments as $a)

                <tr>
                    <td><a href="/opdrachten/{{$a['id']}}">{{$a['project_name']}}</a></td>
                    <td>{{$a['image_url']}}</td>
                    <td>{{$a['description']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <a class="btn btn-secondary" href="./opdrachten/create" role="button">Voeg toe</a>

@endsection