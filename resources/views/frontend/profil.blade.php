<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Account - FashionStore Bootstrap Template</title>
<meta content="" name="description"/>
<meta content="" name="keywords"/>
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon"/>
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"/>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;family=Quicksand:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>
<link href="assets/vendor/aos/aos.css" rel="stylesheet"/>
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"/>
<link href="assets/vendor/drift-zoom/drift-basic.css" rel="stylesheet"/>
<!-- Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet"/>
<!-- =======================================================
  * Template Name: FashionStore
  * Template URL: https://bootstrapmade.com/fashion-store-bootstrap-template/
  * Updated: Apr 26 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="account-page">
<header class="header position-relative" id="header">
<!-- Main Header -->
<div class="main-header">
<div class="container-fluid container-xl">
<div class="d-flex py-3 align-items-center justify-content-between">
<!-- Logo -->
<a class="logo d-flex align-items-center" href="{{ route('beranda') }}">
<!-- Uncomment the line below if you also wish to use an image logo -->
<!-- <img src="assets/img/logo.webp" alt=""> -->
<h1 class="sitename">Apotek<span>Ibunda</span></h1>
</a>
<!-- Search -->
<form class="search-form desktop-search-form">
<div class="input-group">
<input class="form-control" placeholder="Search for products..." type="text"/>
<button class="btn search-btn" type="submit">
<i class="bi bi-search"></i>
</button>
</div>
</form>
<!-- Actions -->
<div class="header-actions d-flex align-items-center justify-content-end">
<!-- Mobile Search Toggle -->
<button aria-controls="mobileSearch" aria-expanded="false" class="header-action-btn mobile-search-toggle d-xl-none" data-bs-target="#mobileSearch" data-bs-toggle="collapse" type="button">
<i class="bi bi-search"></i>
</button>
<!-- Beranda -->
{{-- <a class="header-action-btn d-none d-md-flex" href="{{ route('beranda') }}">
<i class="bi bi-house"></i>
<span class="action-text d-none d-md-inline-block">Beranda</span>
<span class="badge">0</span>
</a> --}}
<!-- Cart -->
<div class="dropdown cart-dropdown">
<button class="header-action-btn" data-bs-toggle="dropdown">
<i class="bi bi-cart3"></i>
<span class="action-text d-none d-md-inline-block">Cart</span>
<span class="badge">3</span>
</button>
<div class="dropdown-menu cart-dropdown-menu">
<div class="dropdown-header">
<h6>Shopping Cart (3)</h6>
</div>
<div class="dropdown-body">
<div class="cart-items">
<!-- Cart Item 1 -->
<div class="cart-item">
<div class="cart-item-image">
<img alt="Product" class="img-fluid" src="assets/img/product/product-1.webp"/>
</div>
<div class="cart-item-content">
<h6 class="cart-item-title">Wireless Headphones</h6>
<div class="cart-item-meta">1 × $89.99</div>
</div>
<button class="cart-item-remove">
<i class="bi bi-x"></i>
</button>
</div>
<!-- Cart Item 2 -->
<div class="cart-item">
<div class="cart-item-image">
<img alt="Product" class="img-fluid" src="assets/img/product/product-2.webp"/>
</div>
<div class="cart-item-content">
<h6 class="cart-item-title">Smart Watch</h6>
<div class="cart-item-meta">1 × $129.99</div>
</div>
<button class="cart-item-remove">
<i class="bi bi-x"></i>
</button>
</div>
<!-- Cart Item 3 -->
<div class="cart-item">
<div class="cart-item-image">
<img alt="Product" class="img-fluid" src="assets/img/product/product-3.webp"/>
</div>
<div class="cart-item-content">
<h6 class="cart-item-title">Bluetooth Speaker</h6>
<div class="cart-item-meta">1 × $59.99</div>
</div>
<button class="cart-item-remove">
<i class="bi bi-x"></i>
</button>
</div>
</div>
</div>
<div class="dropdown-footer">
<div class="cart-total">
<span>Total:</span>
<span class="cart-total-price">$279.97</span>
</div>
<div class="cart-actions">
<a class="btn btn-outline-primary" href="cart.html">View Cart</a>
<a class="btn btn-primary" href="checkout.html">Checkout</a>
</div>
</div>
</div>
</div>
<!-- Mobile Navigation Toggle -->
<i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>
</div>
</div>
</div>
</div>
<!-- Announcement Bar -->
<div class="announcement-bar py-2">
<div class="container-fluid container-xl">
<div class="announcement-slider swiper init-swiper">
<script class="swiper-config" type="application/json">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "effect": "slide",
              "direction": "vertical"
            }
          </script>
<div class="swiper-wrapper">
<div class="swiper-slide">🚚 Free shipping on orders over $50</div>
<div class="swiper-slide">💰 30 days money back guarantee</div>
<div class="swiper-slide">🎁 20% off on your first order - Use code: FIRST20</div>
<div class="swiper-slide">⚡ Flash Sale! Up to 70% off on selected items</div>
</div>
</div>
</div>
</div>
<!-- Mobile Search Form -->
<div class="collapse" id="mobileSearch">
<div class="container">
<form class="search-form">
<div class="input-group">
<input class="form-control" placeholder="Search for products..." type="text"/>
<button class="btn search-btn" type="submit">
<i class="bi bi-search"></i>
</button>
</div>
</form>
</div>
</div>
</header>
<main class="main">
<!-- Page Title -->
<div class="page-title light-background">
<div class="container">
<nav class="breadcrumbs">
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
<ol>
<li><a href="{{ route('beranda') }}">Beranda</a></li>
<li class="current">Akun Saya</li>
</ol>
</nav>
<h1>Akun Saya</h1>
</div>
</div><!-- End Page Title -->
<!-- Account Section -->
<section class="account section" id="account">
<div class="container" data-aos="fade-up" data-aos-delay="100">
<!-- Mobile Sidebar Toggle Button -->
<div class="sidebar-toggle d-lg-none mb-3">
<button aria-controls="profileSidebar" aria-expanded="false" class="btn btn-toggle" data-bs-target="#profileSidebar" data-bs-toggle="collapse" type="button">
<i class="bi bi-list me-2"></i> Profile Menu
          </button>
</div>
<div class="row">
<!-- Profile Sidebar -->
<div class="col-lg-3 profile-sidebar collapse d-lg-block" data-aos="fade-right" data-aos-delay="200" id="profileSidebar">
<div class="profile-header">
<div class="profile-avatar">
<span>S</span>
</div>
<div class="profile-info">
<h4>Sarah Anderson</h4>
<div class="profile-bonus">
<i class="bi bi-gift"></i>
<span>100 bonuses available</span>
</div>
</div>
</div>
<div class="profile-nav">
<ul class="nav flex-column" id="profileTabs" role="tablist">
<li class="nav-item" role="presentation">
<button aria-controls="orders" aria-selected="true" class="nav-link active" data-bs-target="#orders" data-bs-toggle="tab" id="orders-tab" role="tab" type="button">
<i class="bi bi-box-seam"></i>
<span>Orders</span>
<span class="badge">1</span>
</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="wishlist" aria-selected="false" class="nav-link" data-bs-target="#wishlist" data-bs-toggle="tab" id="wishlist-tab" role="tab" type="button">
<i class="bi bi-heart"></i>
<span>Wishlist</span>
</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="payment" aria-selected="false" class="nav-link" data-bs-target="#payment" data-bs-toggle="tab" id="payment-tab" role="tab" type="button">
<i class="bi bi-credit-card"></i>
<span>Payment methods</span>
</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="reviews" aria-selected="false" class="nav-link" data-bs-target="#reviews" data-bs-toggle="tab" id="reviews-tab" role="tab" type="button">
<i class="bi bi-star"></i>
<span>My reviews</span>
</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="personal" aria-selected="false" class="nav-link" data-bs-target="#personal" data-bs-toggle="tab" id="personal-tab" role="tab" type="button">
<i class="bi bi-person"></i>
<span>Personal info</span>
</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="addresses" aria-selected="false" class="nav-link" data-bs-target="#addresses" data-bs-toggle="tab" id="addresses-tab" role="tab" type="button">
<i class="bi bi-geo-alt"></i>
<span>Addresses</span>
</button>
</li>
<li class="nav-item" role="presentation">
<button aria-controls="notifications" aria-selected="false" class="nav-link" data-bs-target="#notifications" data-bs-toggle="tab" id="notifications-tab" role="tab" type="button">
<i class="bi bi-bell"></i>
<span>Notifications</span>
</button>
</li>
</ul>
<h6 class="nav-section-title">Customer service</h6>
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link" href="#">
<i class="bi bi-question-circle"></i>
<span>Help center</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<i class="bi bi-file-text"></i>
<span>Terms and conditions</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link logout" href="#">
<i class="bi bi-box-arrow-right"></i>
<span>Log out</span>
</a>
</li>
</ul>
</div>
</div>
<!-- Profile Content -->
<div class="col-lg-9 profile-content" data-aos="fade-left" data-aos-delay="300">
<div class="tab-content" id="profileTabsContent">
<!-- Orders Tab -->
<div aria-labelledby="orders-tab" class="tab-pane fade show active" id="orders" role="tabpanel">
<div class="tab-header">
<h2>Orders</h2>
<div class="tab-filters">
<div class="row">
<div class="col-md-6 mb-3 mb-md-0">
<div class="dropdown">
<button aria-expanded="false" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="statusFilter" type="button">
<span>Select status</span>
<i class="bi bi-chevron-down"></i>
</button>
<ul aria-labelledby="statusFilter" class="dropdown-menu">
<li><a class="dropdown-item" href="#">All statuses</a></li>
<li><a class="dropdown-item" href="#">In progress</a></li>
<li><a class="dropdown-item" href="#">Delivered</a></li>
<li><a class="dropdown-item" href="#">Canceled</a></li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="dropdown">
<button aria-expanded="false" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="timeFilter" type="button">
<span>For all time</span>
<i class="bi bi-chevron-down"></i>
</button>
<ul aria-labelledby="timeFilter" class="dropdown-menu">
<li><a class="dropdown-item" href="#">For all time</a></li>
<li><a class="dropdown-item" href="#">Last 30 days</a></li>
<li><a class="dropdown-item" href="#">Last 6 months</a></li>
<li><a class="dropdown-item" href="#">Last year</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="orders-table">
<div class="table-header">
<div class="row">
<div class="col-md-3">
<div class="sort-header">
                          Order #
                        </div>
</div>
<div class="col-md-3">
<div class="sort-header">
                          Order date
                          <i class="bi bi-arrow-down-up"></i>
</div>
</div>
<div class="col-md-3">
<div class="sort-header">
                          Status
                        </div>
</div>
<div class="col-md-3">
<div class="sort-header">
                          Total
                          <i class="bi bi-arrow-down-up"></i>
</div>
</div>
</div>
</div>
<div class="order-items">
<!-- Order Item 1 -->
<div class="order-item">
<div class="row align-items-center">
<div class="col-md-3">
<div class="order-id">78A6431D409</div>
</div>
<div class="col-md-3">
<div class="order-date">02/15/2025</div>
</div>
<div class="col-md-3">
<div class="order-status in-progress">
<span class="status-dot"></span>
<span>In progress</span>
</div>
</div>
<div class="col-md-3">
<div class="order-total">$2,105.90</div>
</div>
</div>
<div class="order-products">
<div class="product-thumbnails">
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-1.webp"/>
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-2.webp"/>
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-3.webp"/>
</div>
<button aria-controls="orderDetails1" aria-expanded="false" class="order-details-link" data-bs-target="#orderDetails1" data-bs-toggle="collapse" type="button">
<i class="bi bi-chevron-down"></i>
</button>
</div>
<div class="collapse order-details" id="orderDetails1">
<div class="order-details-content">
<div class="order-details-header">
<h5>Order Details</h5>
<div class="order-info">
<div class="info-item">
<span class="info-label">Order Date:</span>
<span class="info-value">02/15/2025</span>
</div>
<div class="info-item">
<span class="info-label">Payment Method:</span>
<span class="info-value">Credit Card (**** 4589)</span>
</div>
</div>
</div>
<div class="order-items-list">
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-1.webp"/>
</div>
<div class="item-info">
<h6>Lorem ipsum dolor sit amet</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-001</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$899.99</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-2.webp"/>
</div>
<div class="item-info">
<h6>Consectetur adipiscing elit</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-002</span>
<span class="item-qty">Qty: 2</span>
</div>
</div>
<div class="item-price">$599.95</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-3.webp"/>
</div>
<div class="item-info">
<h6>Sed do eiusmod tempor</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-003</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$129.99</div>
</div>
</div>
<div class="order-summary">
<div class="summary-row">
<span>Subtotal:</span>
<span>$1,929.93</span>
</div>
<div class="summary-row">
<span>Shipping:</span>
<span>$15.99</span>
</div>
<div class="summary-row">
<span>Tax:</span>
<span>$159.98</span>
</div>
<div class="summary-row total">
<span>Total:</span>
<span>$2,105.90</span>
</div>
</div>
<div class="shipping-info">
<div class="shipping-address">
<h6>Shipping Address</h6>
<p>123 Main Street<br/>Apt 4B<br/>New York, NY 10001<br/>United States</p>
</div>
<div class="shipping-method">
<h6>Shipping Method</h6>
<p>Express Delivery (2-3 business days)</p>
</div>
</div>
</div>
</div>
</div><!-- End Order Item -->
<!-- Order Item 2 -->
<div class="order-item">
<div class="row align-items-center">
<div class="col-md-3">
<div class="order-id">47H76G09F33</div>
</div>
<div class="col-md-3">
<div class="order-date">12/10/2024</div>
</div>
<div class="col-md-3">
<div class="order-status delivered">
<span class="status-dot"></span>
<span>Delivered</span>
</div>
</div>
<div class="col-md-3">
<div class="order-total">$360.75</div>
</div>
</div>
<div class="order-products">
<div class="product-thumbnails">
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-4.webp"/>
</div>
<button aria-controls="orderDetails2" aria-expanded="false" class="order-details-link" data-bs-target="#orderDetails2" data-bs-toggle="collapse" type="button">
<i class="bi bi-chevron-down"></i>
</button>
</div>
<div class="collapse order-details" id="orderDetails2">
<div class="order-details-content">
<div class="order-details-header">
<h5>Order Details</h5>
<div class="order-info">
<div class="info-item">
<span class="info-label">Order Date:</span>
<span class="info-value">12/10/2024</span>
</div>
<div class="info-item">
<span class="info-label">Payment Method:</span>
<span class="info-value">Credit Card (**** 7821)</span>
</div>
</div>
</div>
<div class="order-items-list">
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-4.webp"/>
</div>
<div class="item-info">
<h6>Ut enim ad minim veniam</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-004</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$329.99</div>
</div>
</div>
<div class="order-summary">
<div class="summary-row">
<span>Subtotal:</span>
<span>$329.99</span>
</div>
<div class="summary-row">
<span>Shipping:</span>
<span>$9.99</span>
</div>
<div class="summary-row">
<span>Tax:</span>
<span>$20.77</span>
</div>
<div class="summary-row total">
<span>Total:</span>
<span>$360.75</span>
</div>
</div>
<div class="shipping-info">
<div class="shipping-address">
<h6>Shipping Address</h6>
<p>123 Main Street<br/>Apt 4B<br/>New York, NY 10001<br/>United States</p>
</div>
<div class="shipping-method">
<h6>Shipping Method</h6>
<p>Standard Shipping (5-7 business days)</p>
</div>
</div>
</div>
</div>
</div><!-- End Order Item -->
<!-- Order Item 3 -->
<div class="order-item">
<div class="row align-items-center">
<div class="col-md-3">
<div class="order-id">502TR872W2</div>
</div>
<div class="col-md-3">
<div class="order-date">11/05/2024</div>
</div>
<div class="col-md-3">
<div class="order-status delivered">
<span class="status-dot"></span>
<span>Delivered</span>
</div>
</div>
<div class="col-md-3">
<div class="order-total">$4,268.00</div>
</div>
</div>
<div class="order-products">
<div class="product-thumbnails">
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-5.webp"/>
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-6.webp"/>
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-7.webp"/>
<span class="more-products">+3</span>
</div>
<button aria-controls="orderDetails3" aria-expanded="false" class="order-details-link" data-bs-target="#orderDetails3" data-bs-toggle="collapse" type="button">
<i class="bi bi-chevron-down"></i>
</button>
</div>
<div class="collapse order-details" id="orderDetails3">
<div class="order-details-content">
<div class="order-details-header">
<h5>Order Details</h5>
<div class="order-info">
<div class="info-item">
<span class="info-label">Order Date:</span>
<span class="info-value">11/05/2024</span>
</div>
<div class="info-item">
<span class="info-label">Payment Method:</span>
<span class="info-value">Credit Card (**** 4589)</span>
</div>
</div>
</div>
<div class="order-items-list">
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-5.webp"/>
</div>
<div class="item-info">
<h6>Quis nostrud exercitation</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-005</span>
<span class="item-qty">Qty: 2</span>
</div>
</div>
<div class="item-price">$1,299.99</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-6.webp"/>
</div>
<div class="item-info">
<h6>Ullamco laboris nisi</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-006</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$799.99</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-7.webp"/>
</div>
<div class="item-info">
<h6>Aliquip ex ea commodo</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-007</span>
<span class="item-qty">Qty: 3</span>
</div>
</div>
<div class="item-price">$449.99</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-8.webp"/>
</div>
<div class="item-info">
<h6>Duis aute irure dolor</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-008</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$249.99</div>
</div>
</div>
<div class="order-summary">
<div class="summary-row">
<span>Subtotal:</span>
<span>$3,899.94</span>
</div>
<div class="summary-row">
<span>Shipping:</span>
<span>$29.99</span>
</div>
<div class="summary-row">
<span>Tax:</span>
<span>$338.07</span>
</div>
<div class="summary-row total">
<span>Total:</span>
<span>$4,268.00</span>
</div>
</div>
<div class="shipping-info">
<div class="shipping-address">
<h6>Shipping Address</h6>
<p>456 Business Ave<br/>Suite 200<br/>San Francisco, CA 94107<br/>United States</p>
</div>
<div class="shipping-method">
<h6>Shipping Method</h6>
<p>Premium Delivery (1-2 business days)</p>
</div>
</div>
</div>
</div>
</div><!-- End Order Item -->
<!-- Order Item 4 -->
<div class="order-item">
<div class="row align-items-center">
<div class="col-md-3">
<div class="order-id">34VB5540K83</div>
</div>
<div class="col-md-3">
<div class="order-date">09/22/2024</div>
</div>
<div class="col-md-3">
<div class="order-status canceled">
<span class="status-dot"></span>
<span>Canceled</span>
</div>
</div>
<div class="col-md-3">
<div class="order-total">$987.50</div>
</div>
</div>
<div class="order-products">
<div class="product-thumbnails">
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-8.webp"/>
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-9.webp"/>
</div>
<button aria-controls="orderDetails4" aria-expanded="false" class="order-details-link" data-bs-target="#orderDetails4" data-bs-toggle="collapse" type="button">
<i class="bi bi-chevron-down"></i>
</button>
</div>
<div class="collapse order-details" id="orderDetails4">
<div class="order-details-content">
<div class="order-details-header">
<h5>Order Details</h5>
<div class="order-info">
<div class="info-item">
<span class="info-label">Order Date:</span>
<span class="info-value">09/22/2024</span>
</div>
<div class="info-item">
<span class="info-label">Payment Method:</span>
<span class="info-value">Credit Card (**** 7821)</span>
</div>
</div>
</div>
<div class="order-items-list">
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-8.webp"/>
</div>
<div class="item-info">
<h6>In reprehenderit in voluptate</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-008</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$499.99</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-9.webp"/>
</div>
<div class="item-info">
<h6>Velit esse cillum dolore</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-009</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$399.99</div>
</div>
</div>
<div class="order-summary">
<div class="summary-row">
<span>Subtotal:</span>
<span>$899.98</span>
</div>
<div class="summary-row">
<span>Shipping:</span>
<span>$12.99</span>
</div>
<div class="summary-row">
<span>Tax:</span>
<span>$74.53</span>
</div>
<div class="summary-row total">
<span>Total:</span>
<span>$987.50</span>
</div>
</div>
<div class="shipping-info">
<div class="shipping-address">
<h6>Shipping Address</h6>
<p>123 Main Street<br/>Apt 4B<br/>New York, NY 10001<br/>United States</p>
</div>
<div class="shipping-method">
<h6>Shipping Method</h6>
<p>Standard Shipping (5-7 business days)</p>
</div>
</div>
</div>
</div>
</div><!-- End Order Item -->
<!-- Order Item 5 -->
<div class="order-item">
<div class="row align-items-center">
<div class="col-md-3">
<div class="order-id">112P45A90V2</div>
</div>
<div class="col-md-3">
<div class="order-date">05/18/2024</div>
</div>
<div class="col-md-3">
<div class="order-status delivered">
<span class="status-dot"></span>
<span>Delivered</span>
</div>
</div>
<div class="col-md-3">
<div class="order-total">$53.00</div>
</div>
</div>
<div class="order-products">
<div class="product-thumbnails">
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-10.webp"/>
</div>
<button aria-controls="orderDetails5" aria-expanded="false" class="order-details-link" data-bs-target="#orderDetails5" data-bs-toggle="collapse" type="button">
<i class="bi bi-chevron-down"></i>
</button>
</div>
<div class="collapse order-details" id="orderDetails5">
<div class="order-details-content">
<div class="order-details-header">
<h5>Order Details</h5>
<div class="order-info">
<div class="info-item">
<span class="info-label">Order Date:</span>
<span class="info-value">05/18/2024</span>
</div>
<div class="info-item">
<span class="info-label">Payment Method:</span>
<span class="info-value">Credit Card (**** 4589)</span>
</div>
</div>
</div>
<div class="order-items-list">
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-10.webp"/>
</div>
<div class="item-info">
<h6>Eu fugiat nulla pariatur</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-010</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$49.99</div>
</div>
</div>
<div class="order-summary">
<div class="summary-row">
<span>Subtotal:</span>
<span>$49.99</span>
</div>
<div class="summary-row">
<span>Shipping:</span>
<span>$0.00</span>
</div>
<div class="summary-row">
<span>Tax:</span>
<span>$3.01</span>
</div>
<div class="summary-row total">
<span>Total:</span>
<span>$53.00</span>
</div>
</div>
<div class="shipping-info">
<div class="shipping-address">
<h6>Shipping Address</h6>
<p>123 Main Street<br/>Apt 4B<br/>New York, NY 10001<br/>United States</p>
</div>
<div class="shipping-method">
<h6>Shipping Method</h6>
<p>Free Shipping (7-10 business days)</p>
</div>
</div>
</div>
</div>
</div><!-- End Order Item -->
<!-- Order Item 6 -->
<div class="order-item">
<div class="row align-items-center">
<div class="col-md-3">
<div class="order-id">28BA67U0981</div>
</div>
<div class="col-md-3">
<div class="order-date">04/03/2024</div>
</div>
<div class="col-md-3">
<div class="order-status canceled">
<span class="status-dot"></span>
<span>Canceled</span>
</div>
</div>
<div class="col-md-3">
<div class="order-total">$1,029.50</div>
</div>
</div>
<div class="order-products">
<div class="product-thumbnails">
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-11.webp"/>
<img alt="Product" class="product-thumb" loading="lazy" src="assets/img/product/product-1-variant.webp"/>
</div>
<button aria-controls="orderDetails6" aria-expanded="false" class="order-details-link" data-bs-target="#orderDetails6" data-bs-toggle="collapse" type="button">
<i class="bi bi-chevron-down"></i>
</button>
</div>
<div class="collapse order-details" id="orderDetails6">
<div class="order-details-content">
<div class="order-details-header">
<h5>Order Details</h5>
<div class="order-info">
<div class="info-item">
<span class="info-label">Order Date:</span>
<span class="info-value">04/03/2024</span>
</div>
<div class="info-item">
<span class="info-label">Payment Method:</span>
<span class="info-value">Credit Card (**** 7821)</span>
</div>
</div>
</div>
<div class="order-items-list">
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-11.webp"/>
</div>
<div class="item-info">
<h6>Excepteur sint occaecat</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-011</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$599.99</div>
</div>
<div class="order-item-detail">
<div class="item-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-1-variant.webp"/>
</div>
<div class="item-info">
<h6>Cupidatat non proident</h6>
<div class="item-meta">
<span class="item-sku">SKU: PRD-001-V</span>
<span class="item-qty">Qty: 1</span>
</div>
</div>
<div class="item-price">$349.99</div>
</div>
</div>
<div class="order-summary">
<div class="summary-row">
<span>Subtotal:</span>
<span>$949.98</span>
</div>
<div class="summary-row">
<span>Shipping:</span>
<span>$0.00</span>
</div>
<div class="summary-row">
<span>Tax:</span>
<span>$79.52</span>
</div>
<div class="summary-row total">
<span>Total:</span>
<span>$1,029.50</span>
</div>
</div>
<div class="shipping-info">
<div class="shipping-address">
<h6>Shipping Address</h6>
<p>456 Business Ave<br/>Suite 200<br/>San Francisco, CA 94107<br/>United States</p>
</div>
<div class="shipping-method">
<h6>Shipping Method</h6>
<p>Free Express Shipping (1-2 business days)</p>
</div>
</div>
<div class="cancellation-info mt-3">
<h6>Cancellation Reason</h6>
<p>Order was canceled at customer's request. Items were not in stock at the time of processing.</p>
</div>
</div>
</div>
</div><!-- End Order Item -->
</div>
<div class="pagination-container">
<nav aria-label="Orders pagination">
<ul class="pagination">
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
</ul>
</nav>
</div>
</div>
</div>
<!-- Wishlist Tab -->
<div aria-labelledby="wishlist-tab" class="tab-pane fade" id="wishlist" role="tabpanel">
<div class="tab-header">
<h2>Wishlist</h2>
</div>
<div class="wishlist-items">
<div class="row">
<!-- Wishlist Item 1 -->
<div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
<div class="wishlist-item">
<div class="wishlist-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-1.webp"/>
<button class="remove-wishlist" type="button">
<i class="bi bi-x-lg"></i>
</button>
</div>
<div class="wishlist-content">
<h5>Lorem ipsum dolor sit amet</h5>
<div class="product-price">$129.99</div>
<button class="btn btn-add-cart">Add to cart</button>
</div>
</div>
</div><!-- End Wishlist Item -->
<!-- Wishlist Item 2 -->
<div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
<div class="wishlist-item">
<div class="wishlist-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-2.webp"/>
<button class="remove-wishlist" type="button">
<i class="bi bi-x-lg"></i>
</button>
</div>
<div class="wishlist-content">
<h5>Consectetur adipiscing elit</h5>
<div class="product-price">$89.50</div>
<button class="btn btn-add-cart">Add to cart</button>
</div>
</div>
</div><!-- End Wishlist Item -->
<!-- Wishlist Item 3 -->
<div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
<div class="wishlist-item">
<div class="wishlist-image">
<img alt="Product" loading="lazy" src="assets/img/product/product-3.webp"/>
<button class="remove-wishlist" type="button">
<i class="bi bi-x-lg"></i>
</button>
</div>
<div class="wishlist-content">
<h5>Sed do eiusmod tempor</h5>
<div class="product-price">$199.99</div>
<button class="btn btn-add-cart">Add to cart</button>
</div>
</div>
</div><!-- End Wishlist Item -->
</div>
</div>
</div>
<!-- Payment Methods Tab -->
<div aria-labelledby="payment-tab" class="tab-pane fade" id="payment" role="tabpanel">
<div class="tab-header">
<h2>Payment Methods</h2>
<button class="btn btn-add-payment" type="button">
<i class="bi bi-plus-lg"></i> Add payment method
                  </button>
</div>
<div class="payment-methods">
<!-- Payment Method 1 -->
<div class="payment-method-item" data-aos="fade-up" data-aos-delay="100">
<div class="payment-card">
<div class="card-type">
<i class="bi bi-credit-card"></i>
</div>
<div class="card-info">
<div class="card-number">**** **** **** 4589</div>
<div class="card-expiry">Expires 09/2026</div>
</div>
<div class="card-actions">
<button class="btn-edit-card" type="button">
<i class="bi bi-pencil"></i>
</button>
<button class="btn-delete-card" type="button">
<i class="bi bi-trash"></i>
</button>
</div>
</div>
<div class="default-badge">Default</div>
</div><!-- End Payment Method -->
<!-- Payment Method 2 -->
<div class="payment-method-item" data-aos="fade-up" data-aos-delay="200">
<div class="payment-card">
<div class="card-type">
<i class="bi bi-credit-card"></i>
</div>
<div class="card-info">
<div class="card-number">**** **** **** 7821</div>
<div class="card-expiry">Expires 05/2025</div>
</div>
<div class="card-actions">
<button class="btn-edit-card" type="button">
<i class="bi bi-pencil"></i>
</button>
<button class="btn-delete-card" type="button">
<i class="bi bi-trash"></i>
</button>
</div>
</div>
<button class="btn btn-sm btn-make-default" type="button">Make default</button>
</div><!-- End Payment Method -->
</div>
</div>
<!-- Reviews Tab -->
<div aria-labelledby="reviews-tab" class="tab-pane fade" id="reviews" role="tabpanel">
<div class="tab-header">
<h2>My Reviews</h2>
</div>
<div class="reviews-list">
<!-- Review Item 1 -->
<div class="review-item" data-aos="fade-up" data-aos-delay="100">
<div class="review-header">
<div class="review-product">
<img alt="Product" class="product-image" loading="lazy" src="assets/img/product/product-4.webp"/>
<div class="product-info">
<h5>Lorem ipsum dolor sit amet</h5>
<div class="review-date">Reviewed on 01/15/2025</div>
</div>
</div>
<div class="review-rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star"></i>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget ultricies nisl nisl eget nisl.</p>
</div>
<div class="review-actions">
<button class="btn btn-sm btn-edit-review" type="button">Edit</button>
<button class="btn btn-sm btn-delete-review" type="button">Delete</button>
</div>
</div><!-- End Review Item -->
<!-- Review Item 2 -->
<div class="review-item" data-aos="fade-up" data-aos-delay="200">
<div class="review-header">
<div class="review-product">
<img alt="Product" class="product-image" loading="lazy" src="assets/img/product/product-5.webp"/>
<div class="product-info">
<h5>Consectetur adipiscing elit</h5>
<div class="review-date">Reviewed on 12/03/2024</div>
</div>
</div>
<div class="review-rating">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
</div>
</div>
<div class="review-content">
<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div class="review-actions">
<button class="btn btn-sm btn-edit-review" type="button">Edit</button>
<button class="btn btn-sm btn-delete-review" type="button">Delete</button>
</div>
</div><!-- End Review Item -->
</div>
</div>
<!-- Personal Info Tab -->
<div aria-labelledby="personal-tab" class="tab-pane fade" id="personal" role="tabpanel">
<div class="tab-header">
<h2>Personal Information</h2>
</div>
<div class="personal-info-form" data-aos="fade-up" data-aos-delay="100">
<form method="POST" action="{{ route('profile.update') }}">
    @csrf
<div class="row">
<div class="col-md-6 mb-3">
<label class="form-label" for="firstName">First Name</label>
@auth
  <input type="text" class="form-control" id="firstName" name="firstName" required
    value="{{ explode(' ', auth()->user()->name)[0] ?? '' }}">
@else
  <input type="text" class="form-control" id="firstName" name="firstName" required value="">
@endauth
</div>
<div class="col-md-6 mb-3">
<label class="form-label" for="lastName">Last Name</label>
@auth
  <input type="text" class="form-control" id="lasstName" name="lastName" required
    value="{{ explode(' ', auth()->user()->name)[0] ?? '' }}">
@else
  <input type="text" class="form-control" id="lastName" name="lastName" required value="">
@endauth
</div>
</div>
<div class="row">
<div class="col-md-6 mb-3">
<label class="form-label" for="email">Email</label>
@auth
  <input type="text" class="form-control" id="email" name="email" required
    value="{{ explode(' ', auth()->user()->email)[0] ?? '' }}">
@else
  <input type="text" class="form-control" id="email" name="email" required value="">
@endauth
</div>
<div class="col-md-6 mb-3">
<label class="form-label" for="phone">Phone</label>
<input class="form-control" id="phone" name="phone" type="tel" value="{{ auth()->user()->phone ?? '' }}"/>
</div>
</div>
<div class="mb-3">
<label class="form-label" for="birthdate">Date of Birth</label>
<input class="form-control" id="birthdate" name="birthdate" type="date" value="{{ auth()->user()->birthdate ?? '' }}"/>
</div>
<div class="mb-3">
<label class="form-label d-block">Gender</label>
<div class="form-check form-check-inline">
<input checked="" class="form-check-input" id="genderMale" name="gender" type="radio" value="male"/>
<label class="form-check-label" for="genderMale">Male</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" id="genderFemale" name="gender" type="radio" value="female"/>
<label class="form-check-label" for="genderFemale">Female</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" id="genderOther" name="gender" type="radio" value="other"/>
<label class="form-check-label" for="genderOther">Other</label>
</div>
</div>
<div class="loading">Loading</div>
<div class="error-message"></div>
<div class="sent-message">Your information has been updated. Thank you!</div>
<div class="text-end">
<button class="btn btn-save" type="submit">Save Changes</button>
</div>
</form>
</div>
</div>
<!-- Addresses Tab -->
<div aria-labelledby="addresses-tab" class="tab-pane fade" id="addresses" role="tabpanel">
<div class="tab-header">
<h2>My Addresses</h2>
<button class="btn btn-add-address" type="button">
<i class="bi bi-plus-lg"></i> Add new address
                  </button>
</div>
<div class="addresses-list">
<div class="row">
<!-- Address Item 1 -->
<div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
<div class="address-item">
<div class="address-header">
<h5>Home Address</h5>
<div class="address-actions">
<button class="btn-edit-address" type="button">
<i class="bi bi-pencil"></i>
</button>
<button class="btn-delete-address" type="button">
<i class="bi bi-trash"></i>
</button>
</div>
</div>
<div class="address-content">
<p>123 Main Street<br/>Apt 4B<br/>New York, NY 10001<br/>United States</p>
</div>
<div class="default-badge">Default</div>
</div>
</div><!-- End Address Item -->
<!-- Address Item 2 -->
<div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
<div class="address-item">
<div class="address-header">
<h5>Work Address</h5>
<div class="address-actions">
<button class="btn-edit-address" type="button">
<i class="bi bi-pencil"></i>
</button>
<button class="btn-delete-address" type="button">
<i class="bi bi-trash"></i>
</button>
</div>
</div>
<div class="address-content">
<p>456 Business Ave<br/>Suite 200<br/>San Francisco, CA 94107<br/>United States</p>
</div>
<button class="btn btn-sm btn-make-default" type="button">Make default</button>
</div>
</div><!-- End Address Item -->
</div>
</div>
</div>
<!-- Notifications Tab -->
<div aria-labelledby="notifications-tab" class="tab-pane fade" id="notifications" role="tabpanel">
<div class="tab-header">
<h2>Notification Settings</h2>
</div>
<div class="notifications-settings" data-aos="fade-up" data-aos-delay="100">
<div class="notification-group">
<h5>Order Updates</h5>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">Order status changes</div>
<div class="notification-desc">Receive notifications when your order status changes</div>
</div>
<div class="form-check form-switch">
<input checked="" class="form-check-input" id="orderStatusNotif" type="checkbox"/>
<label class="form-check-label" for="orderStatusNotif"></label>
</div>
</div>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">Shipping updates</div>
<div class="notification-desc">Receive notifications about shipping and delivery</div>
</div>
<div class="form-check form-switch">
<input checked="" class="form-check-input" id="shippingNotif" type="checkbox"/>
<label class="form-check-label" for="shippingNotif"></label>
</div>
</div>
</div>
<div class="notification-group">
<h5>Account Activity</h5>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">Security alerts</div>
<div class="notification-desc">Receive notifications about security-related activity</div>
</div>
<div class="form-check form-switch">
<input checked="" class="form-check-input" id="securityNotif" type="checkbox"/>
<label class="form-check-label" for="securityNotif"></label>
</div>
</div>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">Password changes</div>
<div class="notification-desc">Receive notifications when your password is changed</div>
</div>
<div class="form-check form-switch">
<input checked="" class="form-check-input" id="passwordNotif" type="checkbox"/>
<label class="form-check-label" for="passwordNotif"></label>
</div>
</div>
</div>
<div class="notification-group">
<h5>Marketing</h5>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">Promotions and deals</div>
<div class="notification-desc">Receive notifications about special offers and discounts</div>
</div>
<div class="form-check form-switch">
<input class="form-check-input" id="promoNotif" type="checkbox"/>
<label class="form-check-label" for="promoNotif"></label>
</div>
</div>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">New product arrivals</div>
<div class="notification-desc">Receive notifications when new products are added</div>
</div>
<div class="form-check form-switch">
<input class="form-check-input" id="newProductNotif" type="checkbox"/>
<label class="form-check-label" for="newProductNotif"></label>
</div>
</div>
<div class="notification-item">
<div class="notification-info">
<div class="notification-title">Personalized recommendations</div>
<div class="notification-desc">Receive notifications with product recommendations based on your interests</div>
</div>
<div class="form-check form-switch">
<input checked="" class="form-check-input" id="recommendNotif" type="checkbox"/>
<label class="form-check-label" for="recommendNotif"></label>
</div>
</div>
</div>
<div class="notification-actions">
<button class="btn btn-save" type="button">Save Preferences</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section><!-- /Account Section -->
</main>
<footer class="footer light-background" id="footer">
<div class="footer-main">
<div class="container">
<div class="row gy-4">
<div class="col-lg-4 col-md-6">
<div class="footer-widget footer-about">
<a class="logo" href="{{ route('beranda') }}">
<span class="sitename">ApotekIbunda</span>
</a>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nibh vehicula, facilisis magna ut, consectetur lorem. Proin eget tortor risus.</p>
<div class="social-links mt-4">
<h5>Connect With Us</h5>
<div class="social-icons">
<a aria-label="Facebook" href="#"><i class="bi bi-facebook"></i></a>
<a aria-label="Instagram" href="#"><i class="bi bi-instagram"></i></a>
<a aria-label="Twitter" href="#"><i class="bi bi-twitter-x"></i></a>
<a aria-label="TikTok" href="#"><i class="bi bi-tiktok"></i></a>
<a aria-label="Pinterest" href="#"><i class="bi bi-pinterest"></i></a>
<a aria-label="YouTube" href="#"><i class="bi bi-youtube"></i></a>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="footer-widget">
<h4>Shop</h4>
<ul class="footer-links">
<li><a href="category.html">New Arrivals</a></li>
<li><a href="category.html">Bestsellers</a></li>
<li><a href="category.html">Women's Clothing</a></li>
<li><a href="category.html">Men's Clothing</a></li>
<li><a href="category.html">Accessories</a></li>
<li><a href="category.html">Sale</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="footer-widget">
<h4>Support</h4>
<ul class="footer-links">
<li><a href="support.html">Help Center</a></li>
<li><a href="account.html">Order Status</a></li>
<li><a href="shiping-info.html">Shipping Info</a></li>
<li><a href="return-policy.html">Returns &amp; Exchanges</a></li>
<li><a href="#">Size Guide</a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="footer-widget">
<h4>Contact Information</h4>
<div class="footer-contact">
<div class="contact-item">
<i class="bi bi-geo-alt"></i>
<span>123 Fashion Street, New York, NY 10001</span>
</div>
<div class="contact-item">
<i class="bi bi-telephone"></i>
<span>+1 (555) 123-4567</span>
</div>
<div class="contact-item">
<i class="bi bi-envelope"></i>
<span>hello@example.com</span>
</div>
<div class="contact-item">
<i class="bi bi-clock"></i>
<span>Monday-Friday: 9am-6pm<br/>Saturday: 10am-4pm<br/>Sunday: Closed</span>
</div>
</div>
<div class="app-buttons mt-4">
<a class="app-btn" href="#">
<i class="bi bi-apple"></i>
<span>App Store</span>
</a>
<a class="app-btn" href="#">
<i class="bi bi-google-play"></i>
<span>Google Play</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row gy-3 align-items-center">
<div class="col-lg-6 col-md-12">
<div class="copyright">
<p>© <span>Copyright</span> <strong class="sitename">MyWebsite</strong>. All Rights Reserved.</p>
</div>
<div class="credits mt-1">
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you've purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="d-flex flex-wrap justify-content-lg-end justify-content-center align-items-center gap-4">
<div class="payment-methods">
<div class="payment-icons">
<i aria-label="Credit Card" class="bi bi-credit-card"></i>
<i aria-label="PayPal" class="bi bi-paypal"></i>
<i aria-label="Apple Pay" class="bi bi-apple"></i>
<i aria-label="Google Pay" class="bi bi-google"></i>
<i aria-label="Shop Pay" class="bi bi-shop"></i>
<i aria-label="Cash on Delivery" class="bi bi-cash"></i>
</div>
</div>
<div class="legal-links">
<a href="tos.html">Terms</a>
<a href="privacy.html">Privacy</a>
<a href="tos.html">Cookies</a>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<!-- Scroll Top -->
<a class="scroll-top d-flex align-items-center justify-content-center" href="#" id="scroll-top"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/drift-zoom/Drift.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>