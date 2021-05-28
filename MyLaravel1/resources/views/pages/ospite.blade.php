@extends('layouts.main-layout')
@section('content')
    <h1>dettagli ospite</h1>
     <p>{{ $ospite -> name }}</p>
     <p>{{ $ospite -> lastname }}</p>
     <p>{{ $ospite -> date_of_birth }}</p>
     


@endsection