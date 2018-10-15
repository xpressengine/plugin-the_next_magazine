<div class="tnm-head-container">
    <header>
        <div class="tnm-header">
            {{-- Logo --}}
            <h1 class="site-logo">
                <a href="{{ url('/') }}">
                    @if($config->get('logoType', 'text') === 'text')
                        {{ xe_trans($config->get('logoText', 'TNM')) }}
                    @else
                        <img src="{{ $config->get('logoImage.path', asset('plugins/the_next_magazine/assets/images/logo.jpg')) }}" data-logo-with-bg="{{ $config->get('logoImageWithBg.path') }}" alt="{{ xe_trans($config->get('logoText', '')) }}" />
                    @endif
                </a>
            </h1>
            {{-- /Logo --}}

            <div class="buttons">
                <button type="button" class="_tnm-menu-open"><span class="xe-sr-only">메뉴</span><i class="xi-bars"></i></button>
                {{-- <button type="button"><span>메뉴 닫기</span><i class="xi-close-thin"></i></button> --}}
            </div>
        </div>

        <div class="tnm-navs">
            <div class="area clearfix">
                {{-- GNB --}}
                <nav class="gnb">
                    <ul>
                        {{-- 1st menu --}}
                        @foreach(menu_list($config->get('mainMenu')) as $menu1st)
                        <li>
                            <a href="{{ url($menu1st['url']) }}" @if($menu1st['target'] !== '_self') target="{{ $menu1st['target'] }}" @endif>
                                {{ $menu1st['link'] }}
                            </a>

                            {{-- 2nd menu --}}
                            @if(count($menu1st['children']))
                                <ul class="gnb-children">
                                    @foreach($menu1st['children'] as $menu2nd)
                                        <li>
                                            <a href="{{ url($menu2nd['url']) }}" @if($menu2nd['target'] !== '_self') target="{{ $menu2nd['target'] }}" @endif>{{ $menu2nd['link'] }}</a>

                                            {{-- 3rd menu --}}
                                            @if(count($menu2nd['children']))
                                                <ul class="gnb-children">
                                                    @foreach($menu2nd['children'] as $menu3rd)
                                                        <li><a href="{{ url($menu3rd['url']) }}" @if($menu3rd['target'] !== '_self') target="{{ $menu3rd['target'] }}" @endif>{{ $menu3rd['link'] }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </nav>

                {{-- SNB --}}
                @if($config->get('useSnb', 'N') === 'Y')
                <div class="snb">
                    <ul>
                        @foreach(menu_list($config->get('sidebarMenu')) as $menu)
                            <li>
                                <a href="{{ url($menu['url']) }}" @if($menu['target'] !== '_self') target="{{ $menu['target'] }}" @endif>{{ $menu['link'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            {{-- UNB --}}
            <div class="unb">
                <ul>
                    @if(Auth::check())
                        @if(auth()->user()->isAdmin())
                            <li><a href="{{ route('settings') }}">관리</a></li>
                        @endif
                        <li><a href="{{ route('logout') }}">로그아웃</a></li>
                    @else
                        <li><a href="{{ route('login') }}">로그인</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </header>
</div>
