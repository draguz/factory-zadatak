@if ($paginator->hasPages())
    <ul class="pagination">

        <!-- Prev link -->
        @if ($paginator->onFirstPage())
            <li class="page-item "><a class="page-link"><span>&laquo;</span></a></li>      
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">&laquo;</a></li>      
        @endif


        <!-- Next link -->
        @if ($paginator->hasMorePages())
            <li class="page-item "><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><span>&raquo;</span></a></li>      
        @else 
            <li class="page-item "><a class="page-link" >&raquo;</a></li>      
        @endif


 

    </ul>
    
@endif