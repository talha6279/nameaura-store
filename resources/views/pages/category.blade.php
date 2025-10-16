@extends('layout')
@section('content') 

    <!-- Start Breadcrumb Section --> 
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  <li class="breadcrumb-item active" aria-current="page">Category On Top</li>
                </ol>
              </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->

    <!-- Star Shop List section -->
    <div class="category-on-top-section">
        <img src="assets/img/inner-page/category-top-vector1.png" alt="" class="ct-vector1">
        <img src="assets/img/inner-page/category-top-vector2.png" alt="" class="ct-vector2">
        <div class="container position-relative">
            <div class="nav nav-pills" id="pills-tab" role="tablist">
                <div class="swiper category-top-slider">
                    <div class="swiper-wrapper">
                            @foreach($categories as $cat)
                            <div class="swiper-slide">
                                <div class="nav-item" role="presentation">
                                    <a href="{{ route('category', ['category' => $cat->category_id]) }};" class="nav-link category-filter {{ $categoryId == $cat->id ? 'active' : '' }}"
                                         data-id="{{ $cat->category_id }}">
                                        <img src="{{asset('uploads/products/categories/' . $cat->picture)}}" alt="{{$cat->name}}">
                                    </a>
                                    <h6>{{$cat->name}}</h6>
                                </div>
                            </div>
                            @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="slider-btn">
                <div class="ct-top-prev-btn">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="ct-top-next-btn">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop List section -->


    <!-- Star Category on top tab section -->
    
    <!-- product view modal  -->
    <x-product-view-modal></x-product-view-modal>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="category-top-img1" role="tabpanel">
            <!-- Star Shop List section -->
            <div class="shop-list-section mt-110 mb-110">
                <div class="container-lg container-fluid">
                    <div class="shop-columns-title-section mb-40">
                        <p>Showing 1–12 of all Products</p>
                        
                    </div>
                    <div class="all-products list-grid-product-wrap">
                        <div class="row gy-4 mb-80 " id="product-list">
                        @include('partials.product-list', ['products' => $products])
                        </div>
                    </div>
                    <nav class="shop-pagination">
    {{ $products->withQueryString()->links('vendor.pagination.shop-pagination') }}
</nav>

                </div>
            </div>
            <!-- End Shop List section -->
        </div>
        <div class="tab-pane fade" id="category-top-img2" role="tabpanel">
            <!-- Star Shop List section -->
            
            <!-- End Shop List section -->
        </div>
        <div class="tab-pane fade" id="category-top-img3" role="tabpanel">
            <!-- Star Shop List section -->
            
            <!-- End Shop List section -->
        </div>
        <div class="tab-pane fade" id="category-top-img4" role="tabpanel">
            <!-- Star Shop List section -->
            
            <!-- End Shop List section -->
        </div>
        <div class="tab-pane fade" id="category-top-img5" role="tabpanel">
            <!-- Star Shop List section -->
            
            <!-- End Shop List section -->
        </div>
        <div class="tab-pane fade" id="category-top-img6" role="tabpanel">
            <!-- Star Shop List section -->
            
            <!-- End Shop List section -->
        </div>
    </div>
    <!-- End Category on top tab section -->
@endsection

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.category-filter').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            let id = this.getAttribute("data-id"); // safer than dataset
            console.log("Clicked category id:", id); // 🔥 check console

            // If still undefined, Blade didn't render data-id properly
            if (!id) id = 'all';

            // Reset active
            document.querySelectorAll('.category-filter').forEach(el => el.classList.remove('active'));
            this.classList.add('active');

            // Update URL with the actual id
            history.pushState(null, "", "/categories-with-products?category=" + id);
            
            // Fetch products
            fetch(`/filter-products/${id}`)
            .then(res => res.text())
            .then(html => {
                    document.getElementById('product-list').innerHTML = html;
                })
                .catch(err => console.error(err));
        });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // AJAX pagination
    document.addEventListener("click", function (e) {
        if (e.target.closest(".ajax-page")) {
            e.preventDefault();

            let url = e.target.closest(".ajax-page").getAttribute("href");
            if (!url) return;

            fetch(url, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
                .then(res => res.text())
                .then(html => {
                    document.getElementById("product-list").innerHTML = html;

                    // ✅ also update URL
                    history.pushState(null, "", url);
                })
                .catch(err => console.error(err));
        }
    });
});
</script>

