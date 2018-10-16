<div class="tnm-widget-container type-featured">
    <h2 class="widget-title"><em>{{-- widget.title --}}일하는조직은 어떻게 일할까</em></h2>

    <div class="tnm-widget">
        <ul>
            {{-- loop item --}}
            @foreach ($list as $idx => $item)
                <li class="item">
                    <a href="{{ $urlHandler->getShow($item) }}">
                        <strong>{{ $item->title }}</strong>
                        @if ($boardConfig->get('category') == true && $item->boardCategory !== null)
                            <em>{{xe_trans($item->boardCategory->categoryItem->word)}}</em>
                        @endif
                        {{-- .cover-image는 첫번째 아이템에서만 노출 --}}
                        @if($idx === 0)
                            <span class="cover-image" @if($item->board_thumbnail_path) style="background-image:url('{{ $item->board_thumbnail_path }}')" @endif></span>
                        @endif
                    </a>
                </li>
            @endforeach
            {{-- /loop item --}}
        </ul>
    </div>
</div>
