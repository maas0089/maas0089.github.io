@extends('layouts.layout')

@section('pageTitle', '500 Interne fout')

@section('sublinks', '')

@section('header', 'Interne fout')

@section('subheader')
    Er is iets fout gegaan<br>
    Ik ben hiervan op de hoogte gesteld<br>
    en zal dit zo snel mogelijk herstellen
@endsection

@section('content')

    U kunt hier niets aan doen.<br>
    U kunt het later <a href={{url()->current()}}>opnieuw</a> proberen of terug naar de <a href={{route('home')}}>hoofdpagina</a> gaan.<br>
    Als dit probleem zich blijft herhalen, overweeg dan <a href={{route('contact')}}>contact</a> met mij op te nemen.

@endsection