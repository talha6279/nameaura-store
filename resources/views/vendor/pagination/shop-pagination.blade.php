@if ($paginator->hasPages())
    <ul class="pagination-list">
        {{-- Previous Page Link --}}
        <li>
            @if ($paginator->onFirstPage())
                <span class="shop-pagi-btn disabled"><i class="bi bi-chevron-left"></i></span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="shop-pagi-btn ajax-page"><i class="bi bi-chevron-left"></i></a>
            @endif
        </li>

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="#" class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}" class="ajax-page">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        <li>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="shop-pagi-btn ajax-page"><i class="bi bi-chevron-right"></i></a>
            @else
                <span class="shop-pagi-btn disabled"><i class="bi bi-chevron-right"></i></span>
            @endif
        </li>
    </ul>
@endif
