<footer class="tnm-footer">
    <div class="tnm-fnb">
        @if($config->get('footerMenu'))
            <ul>
                @foreach(menu_list($config->get('footerMenu')) as $menu)
                    <li><a href="{{ url($menu['url']) }}">{{ $menu['link'] }}</a></li>
                @endforeach
            </ul>
        @endif

        @if($config->get('useCopyright') !== 'N')
            <address>
                @if(trim($config->get('copyrightContent')))
                    {!! $config->get('copyrightContent') !!}
                @else
                    Powered by <a href="https://www.xpressengine.io/" target="_blank">XpressEngine</a>.
                @endif
            </address>
        @endif
    </div>
</footer>
