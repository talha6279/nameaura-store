@if($products->count() > 0)
                            @foreach($products as $product)
                            @include('partials.view-modal', ['product' => $product])
                            @include('partials.product-card', ['product' => $product])
                            @endforeach
                            @else
                         <div class="col-12 text-center">
                         <h5>No Products Found</h5>
                         </div>
                        @endif