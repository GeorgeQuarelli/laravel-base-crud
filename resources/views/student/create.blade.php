@extends('layouts.app')

@section('title-page', 'Nuovo Studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col12">
                <h1 class="mt-3 mb-3">Inserisci Studente</h1>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    @method('POST')
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" id="nome" placeholder="Nome Studente">
                      </div>
                      <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="lastname" class="form-control" id="cognome" placeholder="Cognome">
                      </div>
                      <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="matricola" class="form-control" id="matricola" placeholder="Matricola">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">E-Mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-Mail">
                      </div>
                      <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>


@endsection
