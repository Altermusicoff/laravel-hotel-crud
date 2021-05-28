@extends('layouts.main-layout')
@section('content')

    <div>
        <h1>inserisci i dati nel nuovo ospite</h1>
    </div>
    
    <div>
        <label for="email"></label>


    </div>

    <div>
        <form method="POST" action="{{ route('store-ospite') }}">
            @csrf
            @method('POST')
                <label>Nome:</label>
                <input id='name' name='name' type="text" placeholder="Mario">
                <label>Cognome:</label>
                <input id='lastname' name='lastname' type="text" placeholder="Rossi">
                <label>data di nascita:</label>
                <input id='date_of_birth' name='date_of_birth' type="text" placeholder="01/01/80">
                <label>documento:</label>
                <input id='document_type' name='document_type' type="text" placeholder="C.I.">
                <label>id documento:</label>
                <input id='document_number' name='document_number' type="text" placeholder="A024011">
                <input type="submit" value="SUBMIT">
        </form>
    </div>

    
@endsection