@extends('layouts.main-layout')
@section('content')

    <div>
        <h1>Modifica Employee</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div>
        <label for="email"></label>


    </div>

    <div>
        <form method="POST" action="{{ route('update-employee', $employee -> id) }}">
            @csrf
            @method('POST')
                <label>Nome:</label>
                <input id='firstname' name='firstname' value="{{ $employee -> firstname }}" type="text" placeholder="Mario">
                <label>Cognome:</label>
                <input id='lastname' name='lastname' value="{{ $employee -> lastname }}" type="text" placeholder="Rossi">
                <label>ruolo:</label>
                <input id='role' name='role' value="{{ $employee -> role }}" type="text" placeholder="base">
                <label>ral:</label>
                <input id='ral' name='ral' value="{{ $employee -> ral }}" type="text" placeholder="C.I.">
                <input type="submit" value="SUBMIT">
        </form>
    </div>

    
@endsection