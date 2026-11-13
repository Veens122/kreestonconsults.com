<header id="header" class="header style2 bg-color">
    <div class="container">
        <div class="row">
            <div class="header-wrap">

                <div id="logo" class="logo">
                    <a href="{{ route('home') }}" title="">
                        <img src="{{ asset('assets/images/Kreeston-Logo-2.webp') }}" alt="Company Logo">
                    </a>
                </div>

                {{-- <div class="flat-show-search">
                    <div class="show-search">
                        <i class="fa fa-search"></i>
                    </div>

                    <div class="top-search">
                        <form action="#" id="searchform-all" method="get">
                            <div>
                                <input type="text" id="s" class="sss" placeholder="Search...">
                                <input type="submit" value="" id="searchsubmit">
                            </div>
                        </form>
                    </div>
                </div> --}}

                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div>

                    @include('partials.navigation')

                </div>

            </div>
        </div>
    </div>
</header>