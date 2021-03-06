<div class="tnm-widget-container type-category">
    <h2 class="widget-title"><em>{{ $widgetConfig['@attributes']['title'] }}</em></h2>
    <div class="tnm-widget">
        <ul>
            @foreach ($list as $item)
                <li class="item">
                    <a href="{{ $urlHandler->getShow($item) }}">
                        <div class="box-content">
                            <strong>{!! $item->title !!}</strong>
                            <em>
                                <span data-xe-timeago="{{ $item->created_at }}" title="{{ $item->created_at }}">{{ $item->created_at }}</span>
                                @if ($boardConfig->get('category') == true && $item->boardCategory !== null)
                                    &#x318D;{{-- ㆍ --}}
                                    {{xe_trans($item->boardCategory->categoryItem->word)}}
                                @endif
                            </em>
                            <p class="text">{{ $item->pure_content }}</p>
                        </div>
                        <span class="cover-image" @if($item->board_thumbnail_path) style="background-image:url('{{ $item->board_thumbnail_path }}')" @endif></span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
