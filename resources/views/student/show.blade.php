@extends('layouts.app')

@section('title-page', 'Studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col12">
                <h1 class="mt-3 mb-3">Dettaglio Studente</h1>
                <ul>
                    <li>ID: {{ $student->id }}</li>
                    <li>ID: {{ $student->name }}</li>
                    <li>ID: {{ $student->lastname }}</li>
                    <li>ID: {{ $student->matricola }}</li>
                    <li>ID: {{ $student->email }}</li>
                </ul>
            </div>
        </div>
    </div>


@endsection
