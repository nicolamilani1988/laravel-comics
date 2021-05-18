@extends('layouts.main-layout')

@section('content')

    {{-- principal part --}}
    <main id="serie">
        {{-- MAIN First Section : blu-bar with pic --}}
        <section id="pic">
            <div class="mini-container">
                <div class="img-container">
                    <div class="label serie-type">{{$elem['type']}}</div>
                    <img src="{{$elem['thumb']}}" alt="">
                    <div class="label gallery"><a href="">VIEW GALLERY</a></div>
                </div>
            </div>
        </section>
        {{-- MAIN Second Section : description + advertising --}}
        <section id="description">
            <div class="mini-container">
                {{-- description --}}
                <div class="serie-infos">
                    {{-- title --}}
                    <div class="serie-title">
                        <h1 class="darkblue-text">{{$elem['title']}}</h1>
                    </div>
                    {{-- price and availability --}}
                    <div class="price-and-availability">
                        <div class="left-block">
                            <div class="price">
                                <span class="lightgreen-text">U.S. Price:</span>
                                <span>{{$elem['price']}}</span>
                            </div>
                            <div>
                                <span class="lightgreen-text">AVAILABLE</span>
                            </div>
                        </div>
                        <div class="right-block">
                            <span>Check Availability <i class="fas fa-caret-down"></i></span>
                        </div>
                    </div>
                    {{-- description --}}
                    <div class="serie-description">
                        <p>{{$elem['description']}}</p>
                    </div>
                </div>
                {{-- advertising --}}
                <div class="adv">
                    <h3>ADVERTISEMENT</h3>
                    <div class="img-container">
                        <img src="{{ asset('/storage/assets/images/miafoto-adv.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- MAIN third section: tecnical-infos --}}
        <section id="technical-infos">
            <div class="mini-container">
                {{-- talent --}}
                <div>
                    <h2 class="darkblue-text">Talent</h2>
                    <table class="small-text">
                        <tr>
                            <td class="desc-title">Art by:</td>
                            <td class="blue-text">
                                @foreach ($elem['artists'] as $artist)
                                    @if ($loop->last)
                                        <span>{{$artist}}</span>
                                    @else
                                        <span>{{$artist}}, </span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td class="desc-title">Written by:</td>
                            <td class="blue-text">
                                @foreach ($elem['writers'] as $writer)
                                    @if ($loop->last)
                                        <span>{{$writer}}</span>
                                    @else
                                        <span>{{$writer}}, </span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
                {{-- specs --}}
                <div>
                    <h2 class="darkblue-text">Specs</h2>
                    <table class="small-text">
                        <tr>
                            <td class="desc-title">Series:</td>
                            <td class="blue-text">{{$elem['series']}}</td>
                        </tr>
                        <tr>
                            <td class="desc-title">U.S. Price:</td>
                            <td>{{$elem['price']}}</td>
                        </tr>
                        <tr>
                            <td class="desc-title">On Sale Date:</td>
                            <td>{{$elem['sale_date']}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        {{-- MAIN third section: buy section gray version --}}
        <section id="buy-gray">
            <div class="mini-container">
                @foreach ($actions as $action)
                    @if (!$loop->last)
                        <div class="gray-action">
                            <div class="small-text gray-text"><a href="">{{$action['title']}}</a></div>
                            <div class="icon-container">
                                <img src="{{$action['path']}}" alt="">
                            </div>
                        </div>
                    @endif
                @endforeach                
            </div>
        </section>
    </main>
    
@endsection