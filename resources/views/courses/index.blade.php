@extends('layouts.layout')

@section('pageTitle', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

    <div class="table-wrapper-scroll-y">
        <table class="table table-hover h-25">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Vak</th>
                <th scope="col">Cijfer</th>
                <th scope="col">EC</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courseResults as $results)
            @if($results['header'])
            <thead class="bg-secondary">
            <tr>
            <th colspan="3">{{'Blok '.$results['period']}}</th>
            </tr>
            </thead>
            @endif
            <tr>
            <td>{{$results['course']}}</td>
            <td>{{$results['grade']}}</td>
            <td>{{$results['ec']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection