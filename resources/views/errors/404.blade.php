@extends('layouts.layout')

@section('pageTitle', '404 Pagina niet gevonden')

@section('sublinks', '')

@section('header', 'Helaas, deze pagina kon niet worden gevonden')

@section('subheader', 'De pagina is mogelijk verplaatst of verwijderd')


@section('content')

    Controleer of de url correct is.<br>
    Klik <a href={{route('home')}}>hier</a> om terug naar de hoofdpagina te gaan.<br>
    Als u de pagina waar u naar zoekt niet kunt vinden, overweeg dan <a href={{route('contact')}}>contact</a> met mij op te nemen.

@endsection