<div>
    @if (count($products) == 0)
        <p>No products</p>
    @else
        <p>{{ count($products) }} products</p>
    @endif
</div>
