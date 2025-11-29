@extends('layout.template')
@section('tytul', 'Lista postów')
@section('podstrona', 'Lista postów')
@section('tresc')
<table class="table-fixed border border-gray-300 divide-y divide-gray-200 w-full rounded-lg">
            <thead>
                <tr>
                    <th scope="col" class="border border-gray-300 px-4 py-2">Lp</th>
                    <th scope="col" class="border border-gray-300 px-4 py-2">Tytuł</th>
                    <th scope="col" class="border border-gray-300 px-4 py-2">Autor</th>
                    <th scope="col" class="border border-gray-300 px-4 py-2">Data utworzenia</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dump($posty) --}}
                @isset($posty)
                    @php($lp =1)
                    @forelse ($posty as $post)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{$lp++}}</td>
                        <td class="border border-gray-300 px-4 py-2"><a href="{{route('post.show', $post['id'])}}">{{$post->tytul}}</a></td>
                        <td class="border border-gray-300 px-4 py-2">{{$post->autor}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$post->created_at->setTimezone('Europe/Warsaw')->format('j F Y H:i')}}</td>
                    </tr>    
                    @empty
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center" colspan="4">Brak postów w tabeli</td>
                    </tr>     
                    @endforelse
                @else
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center" colspan="4">Brak postów</td>
                    </tr>
                @endisset
                
            </tbody>

</table>
@endsection