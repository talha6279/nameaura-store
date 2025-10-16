<div class="newsletter-section mb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-banner hover-img">
                        <div class="newsletter-content">
                            <h2>Sign up to our newsletter for all the latest Offer & discounts.</h2>
                            <form action="{{ route('newsletter.store') }}" method="POST">
                            @csrf
                            <div class="from-inner">
                            <input type="email" name="email" placeholder="Email Address" required autocapitalize="none" style="text-transform: lowercase;">
                            <button type="submit" class="btn btn-dark ms-2 px-3">
                            <i class="bi bi-arrow-right"></i>
                            </button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>