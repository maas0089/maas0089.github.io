@extends('layouts.layout')

@section('pageTitle', 'Contact')

@section('header', 'Contact')

@section('content')
    <div class="table-wrapper-scroll-y">
        <table class="table table-hover h-25">
            <thead class="thead-dark">
            <tr>
                <th colspan="2">Naam</th>
                <th>E-mail</th>
                <th>Telefoonnummer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $c)

                <tr>
                    <td>{{$c['name']}}</td>
                    <td>{{$c['last_name']}}</td>
                    <td>{{$c['email']}}</td>
                    <td>{{$c['phone']}}</td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>

@endsection