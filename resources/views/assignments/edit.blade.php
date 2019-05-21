@extends('layouts.layout')

@section('pageTitle', 'Opdrachten')

@section('header', 'Opdracht '. $assignment['id'] .' wijzigen')

@section('content')

    <form method="POST" action="{{route('opdrachten.update', $assignment)}}">

        @method('PATCH')
        {{csrf_field()}}

        <div class="form-group">
            <label for="project_name">Naam</label>
            <input type="text" name="project_name" id="project_name" class="form-control" value="{{$assignment['project_name']}}">
        </div>
        <div class="form-group">
            <label for="image_url">URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" value="{{$assignment['image_url']}}">
        </div>
        <div class="form-group">
            <label for="description">Omschrijving</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{$assignment['description']}}</textarea>
        </div>

        <button type="submit" class="btn btn-secondary">Wijziging opslaan</button>
        <a class="btn btn-secondary float-right" href="{{route('opdrachten.index')}}" role="button">Ga terug</a>

    </form>

@endsection