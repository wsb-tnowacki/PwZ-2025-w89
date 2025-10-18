@extends('layout.template')
@section('tytul','O nas')
@section('podtytul', 'Strona O nas')
@section('tresc')
    <div>
        Treść strony o nas <br>
        
        {{-- @dump($zadania) --}}
        @isset($zadania)
            <ol>
                @foreach ($zadania as $zadanie)
                    <li>{{ $zadanie }}</li>
                @endforeach
            </ol>
        @endisset
        @isset($tasks)
            <ol>
                @forelse ($tasks as $task)
                    <li>{{ $task}}</li>
                @empty
                    <li>brak elementów</li>
                @endforelse
            </ol>
            @else
            <p>Niezdefiniowano</p>
        @endisset
    </div>
@endsection