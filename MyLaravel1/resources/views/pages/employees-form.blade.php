@extends('layouts.main-layout')
@section('content')

    <div>
        <h1>inserisci i dati nel nuovo Employee</h1>
    </div>
    
    <div>
        <label for="email"></label>


    </div>

    <div>
        <form method="POST" action="{{ route('store-employee') }}">
            @csrf
            @method('POST')
                <label>Nome:</label>
                <input id='firstname' name='name' type="text" placeholder="Mario">
                <label>Cognome:</label>
                <input id='lastname' name='lastname' type="text" placeholder="Rossi">
                <label>ruolo:</label>
                <input id='role' name='role' type="text" placeholder="base">
                <label>ral:</label>
                <input id='ral' name='ral' type="text" placeholder="C.I.">
                
        </form>
    </div>

    
@endsection