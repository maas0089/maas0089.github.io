@extends('layouts.layout')

@section('pageTitle', 'Opdrachten')

@section('header', 'Opdracht toevoegen')

@section('content')

    <form method="POST" action={{route('opdrachten.index')}}>

        {{csrf_field()}}

        <div class="form-group">
            <label for="project_name">Naam</label>
            <input type="text" name="project_name" id="project_name" class="form-control" placeholder="Naam van de opdracht">
        </div>
        <div class="form-group">
            <label for="image_url">URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" placeholder="URL van de afbeelding">
        </div>
        <div class="form-group">
            <label for="description">Omschrijving</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-secondary">Voeg toe</button>
    </form>

@endsection