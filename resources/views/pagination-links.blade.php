@if($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="join">
        <button
            wire:click="previousPage"
            wire:loading.attr="disabled"
            rel="prev"
            class="join-item btn btn-sm"
            @if($paginator->onFirstPage()) disabled @endif
        >
            «
        </button>
        <button class="join-item btn btn-sm">Page {{ $paginator->currentPage()  }}</button>
        <button
            wire:loading.attr="disabled"
            rel="next"
            wire:click="nextPage"
            class="join-item btn btn-sm"
            @if(!$paginator->hasMorePages()) disabled @endif
        >
            »
        </button>
    </nav>
@endif
