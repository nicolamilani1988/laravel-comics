<header>
    <!-- blu section on top -->
    <section id="partners">
        <div class="container small-text">
            <div>
                DC POWER VISA
            </div>
            <div>
                ADDITIONAL DC SITES<i class="fas fa-caret-down"></i>
            </div>
        </div>
    </section>
    <nav id="navbar-menu">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('/storage/assets/images/dc-logo.png') }}" alt="">
            </div>
            <div class="menu">
                <ul>
                    @foreach ($menu as $link)
                        @if ($loop->index == 1)
                            <li class="active"><a href="">{{$link}}</a></li> 
                        @else
                            <li><a href="">{{$link}}</a></li>  
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="searchbar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </nav>
</header>