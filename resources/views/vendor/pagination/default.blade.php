<style>
    .pagination-previous:hover,
    .pagination-next:hover,
    .pagination-list li a:hover,
    .pagination-list li a.is-current
    {
        background-color: #4768FF !important;
    }
</style>
@if ($paginator->hasPages())
    <nav class="pagination is-centered is-rounded">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="pagination-previous">Prev</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">Prev</a>
        @endif

        <ul class="pagination-list">

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="#" class="pagination-link is-current">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

        </ul>
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next">Next</a>
        @else
            <a href="#" class="pagination-next">Next</a>
        @endif
    </nav>
@endif
