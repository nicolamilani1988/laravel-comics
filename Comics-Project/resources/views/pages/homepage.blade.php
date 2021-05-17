@extends('layouts.main-layout')
@section('content')
    {{-- jumbotron --}}
    <section id="jumbotron">
        <img src="{{ asset('/storage/assets/images/jumbotron.jpg') }}" alt="">
    </section> 
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
                                <div class="img-container">
                                    <img src="{{$item['thumb']}}" alt="">
                                </div>
                                <div class="card-title">
                                    {{$item['series']}}
                                </div>
                            </li>
                        @endforeach
                    </ul>    
                </div>
                <div class="more-content">
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
                            <img src="{{$action['path']}}" alt="">
                            <div>{{$action['title']}}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        
    </main>
@endsection