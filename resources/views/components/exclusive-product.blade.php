<div class="exclusive-product-section mb-110">
        <img src="{{asset('assets/img/home1/icon/vector-3.svg')}}" alt="" class="vector3" loading="lazy">
        <img src="{{asset('assets/img/home1/icon/vector-4.svg')}}" alt="" class="vector4" loading="lazy">
        <div class="container">
            <div class="section-title style-2 text-center">
                <h3>Exclusive Product</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper exclusive-slider">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                            <div class="swiper-slide">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="exclusive-product-left">
                                            <h2>{{$product->itemname}}.</h2>
                                            <p>{{$product->detail}}</p>
                                            <ul>
                                                <li>
                                                    <svg width="13" height="11" viewBox="0 0 13 11" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2986 0.0327999C9.89985 0.832756 6.86143 2.97809 4.03623 6.6688L2.36599 4.778C2.09946 4.4871 1.63748 4.4871 1.38872 4.778L0.162693 6.17792C-0.0682981 6.45063 -0.0505298 6.86879 0.19823 7.12332L3.96516 10.814C4.28499 11.1231 4.78251 11.0322 4.99574 10.6504C7.00358 6.92333 9.17134 4.15985 12.7961 0.996384C13.2581 0.596406 12.8672 -0.167189 12.2986 0.0327999Z" />
                                                    </svg>
                                                    {{$product->availability}}
                                                </li>
                                                <li>
                                                    <svg width="13" height="11" viewBox="0 0 13 11" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2986 0.0327999C9.89985 0.832756 6.86143 2.97809 4.03623 6.6688L2.36599 4.778C2.09946 4.4871 1.63748 4.4871 1.38872 4.778L0.162693 6.17792C-0.0682981 6.45063 -0.0505298 6.86879 0.19823 7.12332L3.96516 10.814C4.28499 11.1231 4.78251 11.0322 4.99574 10.6504C7.00358 6.92333 9.17134 4.15985 12.7961 0.996384C13.2581 0.596406 12.8672 -0.167189 12.2986 0.0327999Z" />
                                                    </svg>
                                                    Unique 
                                                </li>
                                                <li>
                                                    <svg width="13" height="11" viewBox="0 0 13 11" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2986 0.0327999C9.89985 0.832756 6.86143 2.97809 4.03623 6.6688L2.36599 4.778C2.09946 4.4871 1.63748 4.4871 1.38872 4.778L0.162693 6.17792C-0.0682981 6.45063 -0.0505298 6.86879 0.19823 7.12332L3.96516 10.814C4.28499 11.1231 4.78251 11.0322 4.99574 10.6504C7.00358 6.92333 9.17134 4.15985 12.7961 0.996384C13.2581 0.596406 12.8672 -0.167189 12.2986 0.0327999Z" />
                                                    </svg>
                                                    Elegant
                                                </li>
                                                <li>
                                                    <svg width="13" height="11" viewBox="0 0 13 11" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2986 0.0327999C9.89985 0.832756 6.86143 2.97809 4.03623 6.6688L2.36599 4.778C2.09946 4.4871 1.63748 4.4871 1.38872 4.778L0.162693 6.17792C-0.0682981 6.45063 -0.0505298 6.86879 0.19823 7.12332L3.96516 10.814C4.28499 11.1231 4.78251 11.0322 4.99574 10.6504C7.00358 6.92333 9.17134 4.15985 12.7961 0.996384C13.2581 0.596406 12.8672 -0.167189 12.2986 0.0327999Z" />
                                                    </svg>
                                                    Quality
                                                </li>
                                                <li>
                                                    <svg width="13" height="11" viewBox="0 0 13 11" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2986 0.0327999C9.89985 0.832756 6.86143 2.97809 4.03623 6.6688L2.36599 4.778C2.09946 4.4871 1.63748 4.4871 1.38872 4.778L0.162693 6.17792C-0.0682981 6.45063 -0.0505298 6.86879 0.19823 7.12332L3.96516 10.814C4.28499 11.1231 4.78251 11.0322 4.99574 10.6504C7.00358 6.92333 9.17134 4.15985 12.7961 0.996384C13.2581 0.596406 12.8672 -0.167189 12.2986 0.0327999Z" />
                                                    </svg>
                                                    Customize
                                                </li>
                                                <li>
                                                    <svg width="13" height="11" viewBox="0 0 13 11" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.2986 0.0327999C9.89985 0.832756 6.86143 2.97809 4.03623 6.6688L2.36599 4.778C2.09946 4.4871 1.63748 4.4871 1.38872 4.778L0.162693 6.17792C-0.0682981 6.45063 -0.0505298 6.86879 0.19823 7.12332L3.96516 10.814C4.28499 11.1231 4.78251 11.0322 4.99574 10.6504C7.00358 6.92333 9.17134 4.15985 12.7961 0.996384C13.2581 0.596406 12.8672 -0.167189 12.2986 0.0327999Z" />
                                                    </svg>
                                                    Durable    
                                                </li>
                                            </ul>
                                             <a href="{{route('product-detail', $product->item_id) }}" class="primary-btn1 hover-btn3">*Buy Now*</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="exclusive-product-right">
                                            <div class="product-right-img hover-img">
                                                <a href="{{route('product-detail', $product->item_id) }}">
                                                    <img src="{{asset($product->picture2)}}" alt="{{$product->itemname}}" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="product-right-content">
                                                <a href="{{route('category')}}">
                                                    <h4>NameAura</h4>
                                                </a>
                                                <div class="star-bg">
                                                    <img src="{{asset('assets/img/home1/star.svg')}}" alt="" loading="lazy">
                                                    <span>NEW</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="slider-btn">
                        <div class="prev-btn exclusive-prev-btn">
                            <i class="bi bi-arrow-up"></i>
                        </div>
                        <div class="next-btn exclusive-next-btn">
                            <i class="bi bi-arrow-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>