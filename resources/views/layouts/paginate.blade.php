<!-- 分頁 -->
<style>
    .disabled {
        color: currentColor;
        cursor: not-allowed;
        opacity: 0.3;
        text-decoration: none;
    }
</style>
<div class="pages anim anim-3 yema">
    <div>
        <a class="next @if ($paginator->onFirstPage()) disabled @endif" href="{{ $paginator->previousPageUrl() }}"> < </a>
                @for ($page = 1; $page <= $paginator->lastPage(); $page++)
                    <a class="num @if ($page == $paginator->currentPage()) current @endif" href="{{ $paginator->url($page) }}">
                        {{ $page }}</a>
                @endfor
                <a class="next @if ($paginator->lastPage() == $paginator->currentPage()) disabled @endif" href="{{ $paginator->nextPageUrl() }}">></a>
    </div>
</div>
