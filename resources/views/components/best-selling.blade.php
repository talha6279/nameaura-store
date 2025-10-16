<div class="best-selling-section mb-110">
        <div class="container">
            <div class="section-title2">
                <h3>Best Selling Product</h3>
                <div class="all-product hover-underline">
                    <a href="{{route('category')}}">*View All Products
                        <svg width="33" height="13" viewBox="0 0 33 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.5083 7.28L0.491206 7.25429C0.36093 7.25429 0.23599 7.18821 0.143871 7.0706C0.0517519 6.95299 0 6.79347 0 6.62714C0 6.46081 0.0517519 6.3013 0.143871 6.18369C0.23599 6.06607 0.36093 6 0.491206 6L25.5088 6.02571C25.6391 6.02571 25.764 6.09179 25.8561 6.2094C25.9482 6.32701 26 6.48653 26 6.65286C26 6.81919 25.9482 6.9787 25.8561 7.09631C25.764 7.21393 25.6386 7.28 25.5083 7.28Z" />
                            <path
                                d="M33.0001 6.50854C29.2204 7.9435 24.5298 10.398 21.623 13L23.9157 6.50034L21.6317 0C24.5358 2.60547 29.2224 5.06539 33.0001 6.50854Z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row gy-4">
                @foreach($products as $product)
                @include('partials.view-modal', ['product' => $product])
                <div class="col-lg-4 col-md-6">
                    <div class="product-card hover-btn">
                        <div class="product-card-img double-img">
                           <a href="{{route('product-detail', $product->item_id) }}">
                            <img src="{{asset($product->picture)}}" alt="{{$product->itemname}}" class="img1" loading="lazy">
                            <img src="{{asset($product->picture1)}}" alt="{{$product->itemname}}" class="img2" loading="lazy">
                            
                           </a>
                           <div class="overlay">
                              <div class="cart-area">
                              <a href="https://wa.me/923432310179?text=Hello%20NameAura%20Team%2C%0AI%20am%20interested%20in%20purchasing%20the%20*{{ $product->itemname }}*%20priced%20at%20*Rs.{{ $product->discounted_price }}*.%0APlease%20guide%20me%20with%20the%20next%20steps.%20Thank%20you." class="hover-btn3 add-cart-btn"><i class="bi bi-bag-check"></i> Buy Now</a>
                               </div>
                           </div>
                            <div class="view-and-favorite-area">
                                <ul>
                                    
                                                <li>
                                                    <a href="{{route('product-detail', $product->item_id) }}" data-bs-toggle="modal" data-bs-target="#product-view-{{ $product->item_id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                                            <path
                                                                d="M21.8601 10.5721C21.6636 10.3032 16.9807 3.98901 10.9999 3.98901C5.019 3.98901 0.335925 10.3032 0.139601 10.5718C0.0488852 10.6961 0 10.846 0 10.9999C0 11.1537 0.0488852 11.3036 0.139601 11.4279C0.335925 11.6967 5.019 18.011 10.9999 18.011C16.9807 18.011 21.6636 11.6967 21.8601 11.4281C21.951 11.3039 21.9999 11.154 21.9999 11.0001C21.9999 10.8462 21.951 10.6963 21.8601 10.5721ZM10.9999 16.5604C6.59432 16.5604 2.77866 12.3696 1.64914 10.9995C2.77719 9.62823 6.58487 5.43955 10.9999 5.43955C15.4052 5.43955 19.2206 9.62969 20.3506 11.0005C19.2225 12.3717 15.4149 16.5604 10.9999 16.5604Z" />
                                                            <path
                                                                d="M10.9999 6.64832C8.60039 6.64832 6.64819 8.60051 6.64819 11C6.64819 13.3994 8.60039 15.3516 10.9999 15.3516C13.3993 15.3516 15.3515 13.3994 15.3515 11C15.3515 8.60051 13.3993 6.64832 10.9999 6.64832ZM10.9999 13.9011C9.40013 13.9011 8.09878 12.5997 8.09878 11C8.09878 9.40029 9.40017 8.0989 10.9999 8.0989C12.5995 8.0989 13.9009 9.40029 13.9009 11C13.9009 12.5997 12.5996 13.9011 10.9999 13.9011Z" />
                                                        </svg>
                                                    </a>
                                                </li>
                                </ul>
                            
                            </div>
                        </div>
                        <div class="product-card-content">
                            <h6><a href="{{route('product-detail', $product->item_id) }}" class="hover-underline">{{$product->itemname}}</a></h6>
                            <p><a href="{{ route('category', ['category' => $product->category->category_id]) }}">{{$product->category->name}}</a></p>
                            <p class="price">PKR{{$product->discounted_price}} <del> PKR{{$product->price}}</del></p>
                            <div class="rating">
                                <ul>
                                @php
            $averageRating = $product->reviews->avg('rating'); // Average rating for the product
            $filledStars = floor($averageRating); // Full stars
            $halfStar = ($averageRating - $filledStars) >= 0.5; // Half star check
        @endphp
                                @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $filledStars)
                <i class="bi bi-star-fill text-warning"></i>
            @elseif ($i == $filledStars + 1 && $halfStar)
                <i class="bi bi-star-half text-warning"></i>
            @else
                <i class="bi bi-star text-secondary"></i>
            @endif
        @endfor
                                </ul>
                                <span>({{$product->reviews->count()}})</span>
                            </div>
                        </div>
                        <span class="for-border"></span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> 
    
    <!-- product view modal  -->
