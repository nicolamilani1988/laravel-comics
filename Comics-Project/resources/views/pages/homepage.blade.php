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
                <div class="bg-blue-text-white">
                    <h1>CURRENT SERIES</h1>
                </div>
                {{-- content --}}
                <div class="content">
                    {{$data[0]['title']}}
                </div>
            </div>        
        </section>
        
    </main>
@endsection