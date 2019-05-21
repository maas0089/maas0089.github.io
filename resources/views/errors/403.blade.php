@extends('layouts.layout')

@section('pageTitle', '403 Verboden toegang')

@section('sublinks', '')

@section('header', 'Sorry, deze pagina is alleen toegankelijk voor studenten')

@section('subheader', '')


@section('content')

    Klik <a href={{route('home')}}>hier</a> om terug naar de hoofdpagina te gaan.<br>

@endsection