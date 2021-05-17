@extends('layouts.main-layout')

@section('content')

    {{-- jumbotron --}}
    <section id="jumbotron"></section>
    {{-- principal part   --}}
    <main>
        {{-- MAIN first section  --}}
        <section id="series">
            <div class="container">
                {{-- title --}}
                <div class="title">
                    <h1>
                        <span class="bg-blue-text-white">CURRENT SERIES</span>
                    </h1>
                </div>
                {{-- content --}}
                <div class="content">
                    <ul>
                        @foreach ($data as $item)
                            <li class="card">
                                <a href="">
                                    <div class="img-container">
                                        <img src="{{$item['thumb']}}" alt="">
                                    </div>
                                    <div class="card-title">
                                       {{$item['series']}}
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>    
                </div>
                {{-- button --}}
                <div class="more-button">
                    <button class="bg-blue-text-white">LOAD MORE</button>
                </div>
            </div>        
        </section>
        {{-- MAIN second part: actions --}}
        <nav id="buy">
            <div class="container">
                <ul>
                    @foreach ($actions as $action)
                        <li>
                            @if ($loop -> index == 3 || $loop -> index == 4)
                                <img width="20%" src="{{$action['path']}}" alt="">
                                <a href="">{{$action['title']}}</a>  
                            @else
                                <img width="25%" src="{{$action['path']}}" alt="">
                                <a href="">{{$action['title']}}</a>  
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </main>
    
@endsection