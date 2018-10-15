{{-- <span>
    <a href="#">콘텐츠 바로가기</a>
</span> --}}

<div class="tnm-container tnm-orange">
    @include($theme::view('_header'))

    <div class="flex-column">
        <div class="flex-wrap">
            <div class="tnm-main">
                <main>
                    {!! $content !!}
                </main>
            </div>
        </div>

        <div class="flex-wrap">
            @include($theme::view('_footer'))
        </div>
    </div>
</div>
