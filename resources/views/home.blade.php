<!-- on page load modal -->
<x-onpage-load-modal></x-onpage-load-modal>
@extends('layout')
@section('content')
  <!-- Start Banner section -->
  <x-banner-section></x-banner-section>
    <!-- End Banner section -->
    <!-- Start choose section section -->
    <!-- End choose section section -->
    <!-- Start Best Selling section section -->
   <x-best-selling></x-best-selling>
    <!-- End Best Selling section section -->
    <!-- Start Just For section section -->
    <x-just-for></x-just-for>
    <!-- End Just For section section -->
    <!-- Start Newest Product section section -->
     <x-newest-product></x-newest-product>
    <!-- End Newest Product section section -->
    <!-- Start Exclusive Product section section -->
    <x-exclusive-product></x-exclusive-product>
    <!-- End Exclusive Product section section -->
    <!-- Start Special Offer section section -->
    <x-special-offer></x-special-offer>
    <!-- End Special Offer section section -->
    <!-- Start Say About section section -->
    <x-say-about-section></x-say-about-section>
    <!-- End Say About section section -->
    <!-- Star Newsletter section section -->
    <x-newsletter-section></x-newsletter-section>
    <!-- End Newsletter section section -->
    <!-- Start Instagram section section -->
    <x-instagram-section></x-instagram-section>
    <!-- End Instagram section section -->
@endsection