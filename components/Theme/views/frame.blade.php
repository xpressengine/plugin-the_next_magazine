<div class="tnm-container tnm-{{ $config->get('colorset', 'blue') }}">
    <div class="tnm-main-wrap">
        @include($theme::view('_header'))

        <main class="tnm-main tnm-flexible-box">
            {!! $content !!}
        </main>
    </div>

    <div class="tnm-footer-container">
        @include($theme::view('_footer'))
    </div>
</div>

