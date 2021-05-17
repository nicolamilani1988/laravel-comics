<header>
    <!-- blu section on top -->
    <section id="partners" class="bg-blue-text-white">
        <div class="container small-text">
            <div>
                DC POWER VISA
            </div>
            <div>
                ADDITIONAL DC SITES<i class="fas fa-caret-down"></i>
            </div>
        </div>
    </section>
    {{-- menu nav --}}
    <nav id="navbar-menu">
        <div class="container">
            {{-- logo --}}
            <div class="logo">
                <a href="">
                    <img src="{{ asset('/storage/assets/images/dc-logo.png') }}" alt="">
                </a>
            </div>
            {{-- menu --}}
            <div class="menu">
                <ul>
                    @foreach ($menu as $link)
                        @if ($link == 'COMICS')
                            <li class="active"><a href="">{{$link}}</a></li> 
                        @else
                            <li><a href="">{{$link}}</a></li>  
                        @endif
                    @endforeach
                </ul>
            </div>
            {{-- searchbar --}}
            <div class="searchbar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </nav>
</header>