@if ($paginator->hasPages())
    <ul class="pager">
        <!-- Previous Page Link -->
        @if (!$paginator->onFirstPage())
            {{--<li class="disabled"><span>&laquo;</span></li>--}}
            {{--@else--}}
            <li class="pull-left">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fa fa-arrow-left"></i>
                    NEWER
                </a>
            </li>
        @endif

    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li class="next">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    OLDER
                    <i class="fa fa-arrow-right"></i>
                </a>
            </li>
            {{--@else--}}
            {{--<li class="disabled"><span>&raquo;</span></li>--}}
        @endif
    </ul>
@endif
