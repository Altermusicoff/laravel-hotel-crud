@extends('layouts.main-layout')
    @section('content')
        <div>

            <a href="{{ route('create-ospite') }} ">Aggiungi Ospite</a> 

        </div>
        <br>
        <br>

        @foreach ($ospiti as $ospite)
        <div>
            <a href="{{ route('show-ospite', $ospite -> id)}}">
                {{ $ospite -> name }}
                {{ $ospite -> lastname }}
                {{-- {{ $ospite -> date_of_birth }} --}}
            </a>
            
        </div>
           
            
        @endforeach
    @endsection