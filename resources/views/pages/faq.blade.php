@extends('layout')
@section('content') 

    <!-- Start Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->

    <!-- Start Faq section -->
    <div class="faq-section mt-110 mb-110">
        <div class="container">
             <div class="faq-title">
                <h1>Frequently 
                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="50" viewBox="0 0 53 50">
                        <path d="M26.7227 10.7143L34.7395 0L35.1849 13.8393L48.1008 9.82143L40.084 20.792L53 25.4464L40.084 29.4643L48.1008 40.625L34.7395 36.1607V50L26.2773 38.8393L18.2605 50L17.8151 36.1607L4.89916 40.1786L12.916 29.4643L0 25L12.916 20.5357L4.89916 9.82143L18.2605 13.3929V0L26.7227 10.7143Z"/>
                      </svg> <br>
                      <span>Asked Questions</span>
                </h1>
             </div>
             <div class="row g-4 mb-110">
                <div class="col-lg-4 ">
                    <div class="faq-item">
                        <h3>Orders 
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" viewBox="0 0 27 25">
                                <path d="M13.3613 5.35714L17.3697 0L17.5924 6.91964L24.0504 4.91071L20.042 10.396L26.5 12.7232L20.042 14.7321L24.0504 20.3125L17.3697 18.0804V25L13.1387 19.4196L9.13025 25L8.90756 18.0804L2.44958 20.0893L6.45798 14.7321L0 12.5L6.45798 10.2679L2.44958 4.91071L9.13025 6.69643V0L13.3613 5.35714Z"/>
                              </svg>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01.  How do I place an order on NameAura?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                You can easily place an order through whatsapp by clicking on buy now or order on whatsapp options. Simply select your product, customize it with your name/design, and proceed to checkout manually.
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. What information do I need to provide when placing an order?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You need only to provide your customized name and desired product.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. Can I make changes to my order after it has been placed?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes. Upon request, we can share a digital mockup before finalizing the engraving.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. How can I check the status of my order?
                                </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Once your order is shipped, you will receive a tracking number via email or WhatsApp.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    05. What should I do if my order arrives damaged or incomplete?
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                In case of any damage, please contact our support team within 24 hours of delivery. We’ll provide a replacement or refund as per our policy.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    06. What payment methods do you accept?
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We accept bank transfers, Easypaisa, and JazzCash for prepaid orders.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    07. Can I order in bulk for my office, school, or business?
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, we handle both single and bulk orders. For larger quantities, special corporate discounts and customized packaging options are available.
                                </div>
                              </div>
                            </div>

                          </div>
                    </div>
                </div>
             </div>
             <div class="row g-4 mb-110">
                <div class="col-lg-4 ">
                    <div class="faq-item">
                        <h3>Products
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" viewBox="0 0 27 25">
                                <path d="M13.3613 5.35714L17.3697 0L17.5924 6.91964L24.0504 4.91071L20.042 10.396L26.5 12.7232L20.042 14.7321L24.0504 20.3125L17.3697 18.0804V25L13.1387 19.4196L9.13025 25L8.90756 18.0804L2.44958 20.0893L6.45798 14.7321L0 12.5L6.45798 10.2679L2.44958 4.91071L9.13025 6.69643V0L13.3613 5.35714Z"/>
                              </svg>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-8"> 
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-01">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01">
                                    01.  What kind of products do you customize?
                                </button>
                              </h2>
                              <div id="collapse-01" class="accordion-collapse collapse show" aria-labelledby="heading-01" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    We specialize in engraved and personalized items such as pens, mugs, water bottles, office accessories, apparel, and corporate gifts.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-02">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-02" aria-expanded="false" aria-controls="collapse-02">
                                    02. Are the products durable?
                                </button>
                              </h2>
                              <div id="collapse-02" class="accordion-collapse collapse" aria-labelledby="heading-02" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Yes, all NameAura products are crafted with premium-quality materials to ensure durability and long-lasting use.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-03">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-03" aria-expanded="false" aria-controls="collapse-03">
                                    03. Can I add my company logo along with names?
                                </button>
                              </h2>
                              <div id="collapse-03" class="accordion-collapse collapse" aria-labelledby="heading-03" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Absolutely! We offer custom logo + name engraving/printing for corporate and bulk orders.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-04">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-04" aria-expanded="false" aria-controls="collapse-04">
                                    04. Do the colors of products appear exactly as shown on the website?
                                </button>
                              </h2>
                              <div id="collapse-04" class="accordion-collapse collapse" aria-labelledby="heading-04" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    We strive to display true colors, but slight variations may occur due to lighting or screen differences.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-05">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-05" aria-expanded="false" aria-controls="collapse-05">
                                    05. Do you provide gift packaging?
                                </button>
                              </h2>
                              <div id="collapse-05" class="accordion-collapse collapse" aria-labelledby="heading-05" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Yes, we offer premium gift packaging options upon request for both personal and business needs.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
             </div>
             <div class="row g-4">
                <div class="col-lg-4 ">
                    <div class="faq-item">
                        <h3>Delievery & Refunds
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="25" viewBox="0 0 27 25">
                                <path d="M13.3613 5.35714L17.3697 0L17.5924 6.91964L24.0504 4.91071L20.042 10.396L26.5 12.7232L20.042 14.7321L24.0504 20.3125L17.3697 18.0804V25L13.1387 19.4196L9.13025 25L8.90756 18.0804L2.44958 20.0893L6.45798 14.7321L0 12.5L6.45798 10.2679L2.44958 4.91071L9.13025 6.69643V0L13.3613 5.35714Z"/>
                              </svg>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-8"> 
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample3">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-06">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-06" aria-expanded="true" aria-controls="collapse-06">
                                    01.  How long does delivery take?
                                </button>
                              </h2>
                              <div id="collapse-06" class="accordion-collapse collapse show" aria-labelledby="heading-06" data-bs-parent="#accordionExample3 ">
                                <div class="accordion-body">
                                    For most cities in Pakistan, delivery takes 2–4 business days. Remote areas may require an additional 1–2 days.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-07">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-07" aria-expanded="false" aria-controls="collapse-07">
                                    02. Which courier service do you use?rd?
                                </button>
                              </h2>
                              <div id="collapse-07" class="accordion-collapse collapse" aria-labelledby="heading-07" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    We partner with reliable courier companies like Leopards,PostEx, PakistanPost, TCS, and M&P to ensure safe and timely delivery.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-08">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-08" aria-expanded="false" aria-controls="collapse-08">
                                    03. Do you offer express or urgent delivery?
                                </button>
                              </h2>
                              <div id="collapse-08" class="accordion-collapse collapse" aria-labelledby="heading-08" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Yes, express delivery is available in select cities at an additional cost. Please contact our support team for urgent requirements.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-09">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-09" aria-expanded="false" aria-controls="collapse-09">
                                    04. What is your refund/return policy?
                                </button>
                              </h2>
                              <div id="collapse-09" class="accordion-collapse collapse" aria-labelledby="heading-09" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Since our products are customized and engraved, refunds/returns are only accepted in cases of: Damaged product on arrival and Wrong product delivered.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10 ">
                                    05. How do I request a refund or replacement?
                                </button>
                              </h2>
                              <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="heading-10" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Please contact our support team within 24 hours of delivery, share clear pictures, and our team will guide you.
                                </div>
                              </div>
                            </div><div class="accordion-item">
                              <h2 class="accordion-header" id="heading-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10 ">
                                    06. Do you refund for change of mind?
                                </button>
                              </h2>
                              <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="heading-10" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    Unfortunately, due to the personalized nature of our products, we cannot offer refunds for change of mind after engraving.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!-- End Faq section -->

  
@endsection