<div class="tnm-widget-container type-featured">
    <h2 class="widget-title"><em>{{-- widget.title --}}일하는조직은 어떻게 일할까</em></h2>

    <div class="tnm-widget">
        <ul>
            {{-- loop item --}}
            @foreach ($list as $idx => $item)
                <li class="item">
                    <a href="{{ $urlHandler->getShow($item) }}">
                        <strong>{{ $item->title }}</strong>
                        <em>
                            <span data-xe-timeago="{{ $item->created_at }}" title="{{ $item->created_at }}">{{ $item->created_at }}</span>
                            @if ($boardConfig->get('category') == true && $item->boardCategory !== null)
                                &#x318D;{{-- ㆍ --}}
                                {{xe_trans($item->boardCategory->categoryItem->word)}}
                            @endif
                        </em>
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
