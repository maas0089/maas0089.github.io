@extends('layouts.layout')

@section('pageTitle', 'Template')

@section('header', 'Template')

@section('content')

    {{--Alert message [$success]--}}
    @if(session()->get('success'))
        <div class="alert alert-success text-center" role="alert">
            {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    {{--Index table--}}
    <table class="table table-striped mt-2">
        <thead class="thead-dark">
        {{--Title--}}
        <tr>
            <th scope="col" colspan="9">Alle Waarnemingen</th>
        </tr>
        </thead>
        {{--Columns--}}
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Soort</th>
            <th scope="col">Aantal</th>
            <th scope="col">Gebied</th>
            <th scope="col">Datum</th>
            <th scope="col">Opmerking</th>
            {{--Create button--}}
            {{--<th scope="col" colspan="3"><a class="btn btn-success btn-sm btn-block float-right" href="{{route('waarnemingen.create')}}" role="button"><i class="fa fa-plus"></i> Waarneming toevoegen</a></th>--}}
        </tr>
        </thead>
        {{--Items--}}
        <tbody>
        {{--@foreach($sightings as $sight)--}}
            {{--<tr>--}}
                {{--<th scope="row">{{$sight['id']}}</th>--}}
                {{--<td>{{$sight['species_id']}}</td>--}}
                {{--<td>{{$sight['amount']}}</td>--}}
                {{--<td>{{$sight['area_id']}}</td>--}}
                {{--<td>{{$sight['date']}}</td>--}}
                {{--<td>{{$sight['note']}}</td>--}}
                {{--Show button--}}
                {{--<td><a class="btn btn-sm btn-block btn-secondary" href="{{route('waarnemingen.show', $sight['id'])}}" role="button"><i class="fa fa-eye"></i> Bekijk</a></td>--}}
                {{--Edit button--}}
                {{--<td> <a class="btn btn-sm btn-block btn-info" href="{{route('waarnemingen.edit', $sight['id'])}}" role="button"><i class="fa fa-edit"></i> Wijzig</a> </td>--}}
                {{--Delete button--}}
                {{--<td>--}}
                    {{--<form action="{{ route('opdrachten.destroy', $a['id'])}}" method="post">--}}
                        {{--@csrf--}}
                        {{--@method('DELETE')--}}
                        {{--<button class="btn btn-danger btn-sm" type="submit">Delete</button>--}}
                    {{--</form>--}}
                {{--</td>--}}

            {{--</tr>--}}

        {{--@endforeach--}}

        </tbody>
    </table>

    {{--Create form--}}

    {{--<form method="POST" action="{{route('waarnemingen.store')}}">--}}
    {{--@csrf--}}

    <form>
        {{--Top Row--}}
        <div class="form-row">
            {{--First item [email]--}}
            <div class="form-group col-md-6">
                <label for="input requiredEmail4">Email <strong style="color: red">&#42;</strong></label>
                <input required type="email" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredEmail4" placeholder="Email" value="{{old('input requiredEmail4')}}">
            </div>

            {{--Second item [password]--}}
            <div class="form-group col-md-6">
                <label for="input requiredPassword4">Password <strong style="color: red">&#42;</strong></label>
                <input required type="password" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredPassword4" placeholder="Password" value="{{old('species_id')}}">
            </div>
        </div>

        {{--Second row [text]--}}
        <div class="form-group">
            <label for="input requiredAddress">Address <strong style="color: red">&#42;</strong></label>
            <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                   id="input requiredAddress" placeholder="1234 Main St" value="{{old('species_id')}}">
        </div>

        {{--Third row [text]--}}
        <div class="form-group">
            <label for="input requiredAddress2">Address 2 <strong style="color: red">&#42;</strong></label>
            <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                   id="input requiredAddress2" placeholder="Apartment, studio, or floor" value="{{old('species_id')}}">
        </div>

        {{--Fourth row--}}
        <div class="form-row">

            {{--First item [text]--}}
            <div class="form-group col-md-6">
                <label for="input requiredCity">City <strong style="color: red">&#42;</strong></label>
                <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredCity" placeholder="City" value="{{old('species_id')}}">
            </div>

            {{--Second item [list]--}}
            <div class="form-group col-md-4">
                <label for="input requiredState">State <strong style="color: red">&#42;</strong></label>
                <select id="input requiredState" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            {{--Third item [text]--}}
            <div class="form-group col-md-2">
                <label for="input requiredZip">Zip <strong style="color: red">&#42;</strong></label>
                <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredZip" placeholder="1234AB" value="{{old('species_id')}}">
            </div>
        </div>

        {{--Fifth row [checkbox]--}}
        <div class="form-group">
            <div class="form-check">
                <input required class="form-check-input required" type="checkbox" id="gridCheck">
                <label class="form-check-label {{$errors->has('species_id') ? 'is-invalid' : ''}}" for="gridCheck">
                    Check me out <strong style="color: red">&#42;</strong>
                </label>
            </div>
        </div>

        {{--Buttons--}}
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Voeg toe</button>
                {{--<a class="btn btn-dark float-right" href="{{route('waarnemingen.index')}}"--}}
                   {{--role="button"><i class="fa fa-arrow-alt-circle-left"></i> Ga terug</a>--}}
            </div>
        </div>
    </form>


    {{--Show table--}}
    <table class="table table-striped mt-2">
        <thead class="thead-dark">
        {{--Title--}}
        <tr>
            <th scope="col" colspan="9">Waarneming ##</th>
        </tr>
        </thead>
        {{--Columns--}}
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Soort</th>
            <th scope="col">Aantal</th>
            <th scope="col">Gebied</th>
            <th scope="col">Datum</th>
            <th scope="col">Opmerking</th>
        </tr>
        </thead>
        {{--Items--}}
        <tbody>
        {{--<tr>--}}
        {{--<th scope="row">{{$sight['id']}}</th>--}}
        {{--<td>{{$sight['species_id']}}</td>--}}
        {{--<td>{{$sight['amount']}}</td>--}}
        {{--<td>{{$sight['area_id']}}</td>--}}
        {{--<td>{{$sight['date']}}</td>--}}
        {{--<td>{{$sight['note']}}</td>--}}
        {{--Edit button--}}
        {{--<td> <a class="btn btn-sm btn-block btn-info" href="{{route('waarnemingen.edit', $sight['id'])}}" role="button"><i class="fa fa-edit"></i> Wijzig</a> </td>--}}
        {{--Delete button--}}
        {{--<td>--}}
        {{--<form action="{{ route('opdrachten.destroy', $a['id'])}}" method="post">--}}
        {{--@csrf--}}
        {{--@method('DELETE')--}}
        {{--<button class="btn btn-danger btn-sm" type="submit">Delete</button>--}}
        {{--</form>--}}
        {{--</td>--}}

        {{--</tr>--}}

        </tbody>
    </table>


    {{--Edit form--}}

    {{--<form method="POST" action="{{route('waarnemingen.update', $sight['id'])}}">--}}

        {{--@method('PATCH')--}}
        {{--@csrf--}}

    <form>
        {{--Top Row--}}
        <div class="form-row">
            {{--First item [email]--}}
            <div class="form-group col-md-6">
                <label for="input requiredEmail4">Email <strong style="color: red">&#42;</strong></label>
                <input required type="email" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredEmail4" placeholder="Email" value="$variable[index]">
            </div>

            {{--Second item [password]--}}
            <div class="form-group col-md-6">
                <label for="input requiredPassword4">Password <strong style="color: red">&#42;</strong></label>
                <input required type="password" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredPassword4" placeholder="Password" value="$variable[index]">
            </div>
        </div>

        {{--Second row [text]--}}
        <div class="form-group">
            <label for="input requiredAddress">Address <strong style="color: red">&#42;</strong></label>
            <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                   id="input requiredAddress" placeholder="1234 Main St" value="$variable[index]">
        </div>

        {{--Third row [text]--}}
        <div class="form-group">
            <label for="input requiredAddress2">Address 2 <strong style="color: red">&#42;</strong></label>
            <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                   id="input requiredAddress2" placeholder="Apartment, studio, or floor" value="$variable[index]">
        </div>

        {{--Fourth row--}}
        <div class="form-row">

            {{--First item [text]--}}
            <div class="form-group col-md-6">
                <label for="input requiredCity">City <strong style="color: red">&#42;</strong></label>
                <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredCity" placeholder="City" value="$variable[index]">
            </div>

            {{--Second item [list]--}}
            <div class="form-group col-md-4">
                <label for="input requiredState">State <strong style="color: red">&#42;</strong></label>
                <select id="input requiredState" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            {{--Third item [text]--}}
            <div class="form-group col-md-2">
                <label for="input requiredZip">Zip <strong style="color: red">&#42;</strong></label>
                <input required type="text" class="form-control {{$errors->has('species_id') ? 'is-invalid' : ''}}"
                       id="input requiredZip" placeholder="1234AB" value="$variable[index]">
            </div>
        </div>

        {{--Fifth row [checkbox]--}}
        <div class="form-group">
            <div class="form-check">
                <input required class="form-check-input required" type="checkbox" id="gridCheck">
                <label class="form-check-label {{$errors->has('species_id') ? 'is-invalid' : ''}}" for="gridCheck">
                    Check me out <strong style="color: red">&#42;</strong>
                </label>
            </div>
        </div>

        {{--Buttons--}}
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Voeg toe</button>
                {{--<a class="btn btn-dark float-right" href="{{route('waarnemingen.index')}}"--}}
                {{--role="button"><i class="fa fa-arrow-alt-circle-left"></i> Ga terug</a>--}}
            </div>
        </div>
    </form>

@endsection