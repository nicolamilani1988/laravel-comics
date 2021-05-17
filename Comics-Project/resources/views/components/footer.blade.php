<footer>
    {{-- FOOTER first section --}}
    <section id="useful-links">
        <div class="container">
            {{-- links+credits --}}
            <div>
                {{-- links --}}
                <div class="infos">
                    @foreach ($footerLinks as $link)
                        <div class="links-container">
                            <h2>{{$link['title']}}</h2>
                            <ul>
                                @foreach ($link['links'] as $item)
                                    <li class="small-text"><a href="">{{$item}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                {{-- credits --}}
                <div class="credits small-text">
                    All Site Content TM and © 2020 DC Entertainment, unless otherwise<span class="blue-text"><a href=""> noted here.</a></span> All rights reserved.
                    <p class="blue-text"><a href="">Cookies settings</a></p>
                </div>
            </div>
            {{-- logo --}}
            <div class="footer-logo">
                <img src="{{ asset('/storage/assets/images/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
    </section>
    {{-- FOOTER last section --}}
    <section id="follow-up">
        <div class="container">
            {{-- sign up --}}
            <div>
                <button id="sign-up"><h2>SIGN UP NOW!</h2></button>
            </div>
            {{-- social --}}
            <div class="social-networks">
                <h2 class="blue-text">FOLLOW US</h2>
                <ul>
                    @foreach ($socialNetworks as $social)
                        <li class="social">
                            <a href="">
                                <img src="{{$social}}" alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</footer>