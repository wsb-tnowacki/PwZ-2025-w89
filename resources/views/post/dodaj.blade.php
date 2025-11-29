@extends('layout.template')
@section('tytul', 'Dodawanie posta')
@section('podstrona', 'Formularz dodający post')
@section('tresc')
<form action="{{route('post.store')}}" method="post" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 max00 font-bold mb-2 ">
    @csrf
    <div class="mb-2">
        <label for="tytul" class="block text-gray-700 font-bold mb-2">Tytuł</label>
        <input type="text" name="tytul" id="tytul" placeholder="Podaj tytuł postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="@if(old('tytul') !== null){{old('tytul')}}@endif">
        @if ($errors->get('tytul'))
            <div class="text-red-400">
                @foreach ($errors->get('tytul') as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
    </div>
    <div class="mb-2">
        <label for="autor" class="block text-gray-700 font-bold mb-2">Autor</label>
        <input type="text" name="autor" id="autor" placeholder="Podaj autora postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="@if(old('autor') !== null){{old('autor')}}@endif">
        @error('autor')
            <div class="text-red-400">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
        <input type="email" name="email" id="email" placeholder="Podaj email autora postu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="@if(old('email') !== null){{old('email')}}@endif">
        @error('email')
            <div class="text-red-400">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-2">
        <label for="tresc" class="block text-gray-700 font-bold mb-2">Treść</label>
        <textarea name="tresc" id="tresc" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>@if(old('tresc') !== null){{old('tresc')}}@endif</textarea>
        @error('tresc')
            <div class="text-red-400">{{$message}}</div>
        @enderror
    </div>
    <div class="flex items-center gap-x-2">
        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Dodaj post</button>
        <a href="{{route('post.index')}}" >
            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Powrót do listy</button>
        </a>
    </div>
</form>
@endsection
