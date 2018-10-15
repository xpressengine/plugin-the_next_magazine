{{-- <span>
    <a href="#">콘텐츠 바로가기</a>
</span> --}}

<div class="tnm-container tnm-orange">
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

