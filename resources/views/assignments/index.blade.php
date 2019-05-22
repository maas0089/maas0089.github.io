@extends('layouts.layout')

@section('pageTitle', 'Opdrachten')

@section('header', 'Opdrachten')

@section('content')

    {{--UNDEFINED VARIABLE TO CREATE A 500 ERROR--}}
    {{--{{$somevariable}}--}}

    @if(session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
        </div>

    @endif
    <div class="table-wrapper-scroll-y">
        <table class="table table-hover h-25">
            <thead class="thead-dark">
            <tr>
                <th>Naam</th>
                <th>URL</th>
                <th colspan="3">Omschrijving</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($assignments as $a)

                <tr>
                    <td>{{$a['project_name']}}</td>
                    <td><a href="{{$a['image_url']}}">{{$a['image_url']}}</a></td>
                    <td>{{$a['description']}}</td>
                    <td><a class="btn btn-secondary btn-sm" href="{{route('opdrachten.show', $a['id'])}}"
                           role="button">Bekijk</a></td>

                    @if (\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                        <td><a class="btn btn-secondary btn-sm" href="{{route('opdrachten.edit', $a['id'])}}"
                               role="button">Edit</a></td>
                        <td>
                            <form action="{{ route('opdrachten.destroy', $a['id'])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @if (\Illuminate\Support\Facades\Auth::user()->role == 'admin')
        <a class="btn btn-success mt-2" href="{{route('opdrachten.create')}}" role="button">Voeg toe</a>
    @endif

@endsection