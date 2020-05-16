@extends('layout')
@section('title','Portafolio')

@section('content')
    <h1>Portafolio</h1>

        <ul>
     {{--    @isset ($portafolio)
            @foreach ($portafolio as $item)
            <li>{{$item['title']}}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endisset --}}


        @forelse ($portafolio as $item)
        <li>{{$item['title']}}<small>{{$loop->last  ? 'Este es el ultimo': ''}}</small></li>
        @empty
        <li>No hay proyectos para mostrar </li>
        @endforelse

{{--
        <?php foreach ($portafolio as $portafolioItem ) {

            echo "<li>". $portafolioItem['title']."</li>";
        }?>


        <?php foreach ($portafolio as $portafolioItem ):?>
            <li> {{$portafolioItem['title']}}</li>
        <?php endforeach ?>
 --}}

        </ul>

@endsection
