<!-- 分頁 -->
<ul class="flex items-center justify-center lg:justify-end jk-text-body lg:text-b mt-9 lg:mt-16 2xl:mt-[5.25rem]">
    <li>
        <a href="{{ $paginator->previousPageUrl() }}"
            class="page-prev inline-flex items-center justify-center hover:bg-black/10 @if ($paginator->onFirstPage()) disabled @endif"
            type="button">
            <i class="icon-arrow -scale-x-100"></i>
        </a>
    </li>
    @for ($page = 1; $page <= $paginator->lastPage(); $page++)
        <li class="mx-1.5 lg:mx-0">
            <a href="{{ $paginator->url($page) }}"
                class="page-item inline-flex items-center justify-center border-solid hover:bg-black/10 @if ($page == $paginator->currentPage()) active @endif"
                type="button">
                {{ $page }}
            </a>
        </li>
    @endfor
    <li>
        <a href="{{ $paginator->nextPageUrl() }}"
            class="page-next inline-flex items-center justify-center hover:bg-black/10 @if ($paginator->lastPage() == $paginator->currentPage()) disabled @endif"
            type="button"><i class="icon-arrow"></i></a>
    </li>
</ul>

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
