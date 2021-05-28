@extends('layouts.main-layout')
    @section('content')
        <div>

            <a href="{{ route('create-employee') }} ">Aggiungi Employee</a> 

        </div>
        <br>
        <br>

        @foreach ($employees as $employee)
        <div>
            <a href="{{ route('edit-employee', $employee -> id)}}">
                {{ $employee -> firstname }}
                {{ $employee -> lastname }}
                {{ $employee -> role }}
            </a>
            
        </div>
           
            
        @endforeach
    @endsection