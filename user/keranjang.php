<?php 
require('../config.php');
if(!isset($_SESSION["user"])){
    header("Location: ../index.php");
    exit;
}
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/keranjangstyle.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v2/toolkit.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                    href="../index.php">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>User Menu</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="keranjang.php"><i
                                class="fas fa-cart-plus"></i><span>Keranjang</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php"><i
                                class="fas fa-home"></i><span>Halaman Utama</span></a></li>

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small"><?=$row["username"]?></span><img
                                            class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href=""><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item"
                                            href="logout.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="row mx-auto">
                        <div class="col">
                            <div data-reflow-type="shopping-cart">
                                <div class="reflow-shopping-cart" style="display: block;">
                                    <div class="ref-loading-overlay"></div>
                                    <div class="ref-message" style="display: none;"></div>
                                    <div class="ref-cart" style="display: block;">
                                        <div class="ref-heading">Shopping Cart</div>
                                        <div class="ref-th">
                                            <div class="ref-product-col">Product</div>
                                            <div class="ref-price-col">Price</div>
                                            <div class="ref-quantity-col">Quantity</div>
                                            <div class="ref-total-col">Total</div>
                                        </div>
                                        <div class="ref-cart-table">
                                            <div class="ref-product" data-id="494001057" data-quantity="2">
                                                <div class="ref-product-col">
                                                    <div class="ref-product-wrapper"><img class="ref-product-photo"
                                                            src="https://cdn.bootstrapstudio.io/products/product-21_sm.jpg"
                                                            alt="Vintage Clock" />
                                                        <div class="ref-product-data">
                                                            <div class="ref-product-info">
                                                                <div class="ref-product-name">Vintage Clock</div>
                                                                <div class="ref-product-category">Tech</div>
                                                                <div class="ref-product-variants"></div>
                                                                <div class="ref-product-personalization-holder"></div>
                                                            </div>
                                                            <div class="ref-product-price">$20.41</div>
                                                        </div>
                                                    </div>
                                                    <div class="ref-product-controls">
                                                        <div class="ref-product-quantity">
                                                            <div class="ref-quantity-container"
                                                                data-reflow-product="494001057"
                                                                data-reflow-max-qty="999" data-reflow-quantity="2">
                                                                <div class="ref-quantity-widget">
                                                                    <div class="ref-decrease"><span></span></div><input
                                                                        type="text" value="1" />
                                                                    <div class="ref-increase"><span></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="ref-product-qty-message"></div>
                                                            <div class="ref-product-remove">Remove</div>
                                                        </div>
                                                        <div class="ref-product-total">
                                                            <div class="ref-product-total-sum">$40.82</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ref-price-col">
                                                    <div class="ref-product-price">$20.41</div>
                                                </div>
                                                <div class="ref-quantity-col">
                                                    <div class="ref-product-quantity">
                                                        <div class="ref-quantity-container"
                                                            data-reflow-product="494001057" data-reflow-max-qty="999"
                                                            data-reflow-quantity="2">
                                                            <div class="ref-quantity-widget">
                                                                <div class="ref-decrease"><span></span></div><input
                                                                    type="text" value="1" />
                                                                <div class="ref-increase"><span></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="ref-product-qty-message"></div>
                                                        <div class="ref-product-remove">Remove</div>
                                                    </div>
                                                </div>
                                                <div class="ref-total-col">
                                                    <div class="ref-product-total">
                                                        <div class="ref-product-total-sum">$40.82</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ref-product" data-id="2095884274" data-quantity="1"
                                                data-variant_id="199976733_s">
                                                <div class="ref-product-col">
                                                    <div class="ref-product-wrapper"><img class="ref-product-photo"
                                                            src="https://cdn.bootstrapstudio.io/products/product-18_sm.jpg"
                                                            alt="Reusable Cup" />
                                                        <div class="ref-product-data">
                                                            <div class="ref-product-info">
                                                                <div class="ref-product-name">Reusable Cup</div>
                                                                <div class="ref-product-category">Cups</div>
                                                                <div class="ref-product-variants">
                                                                    <div class="ref-product-variant">Size: S</div>
                                                                </div>
                                                                <div class="ref-product-personalization-holder"></div>
                                                            </div>
                                                            <div class="ref-product-price">$46.03</div>
                                                        </div>
                                                    </div>
                                                    <div class="ref-product-controls">
                                                        <div class="ref-product-quantity">
                                                            <div class="ref-quantity-container"
                                                                data-reflow-variant="199976733_s"
                                                                data-reflow-product="2095884274"
                                                                data-reflow-max-qty="999" data-reflow-quantity="1">
                                                                <div class="ref-quantity-widget">
                                                                    <div class="ref-decrease"><span></span></div><input
                                                                        type="text" value="1" />
                                                                    <div class="ref-increase"><span></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="ref-product-qty-message"></div>
                                                            <div class="ref-product-remove">Remove</div>
                                                        </div>
                                                        <div class="ref-product-total">
                                                            <div class="ref-product-total-sum">$46.03</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ref-price-col">
                                                    <div class="ref-product-price">$46.03</div>
                                                </div>
                                                <div class="ref-quantity-col">
                                                    <div class="ref-product-quantity">
                                                        <div class="ref-quantity-container"
                                                            data-reflow-variant="199976733_s"
                                                            data-reflow-product="2095884274" data-reflow-max-qty="999"
                                                            data-reflow-quantity="1">
                                                            <div class="ref-quantity-widget">
                                                                <div class="ref-decrease"><span></span></div><input
                                                                    type="text" value="1" />
                                                                <div class="ref-increase"><span></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="ref-product-qty-message"></div>
                                                        <div class="ref-product-remove">Remove</div>
                                                    </div>
                                                </div>
                                                <div class="ref-total-col">
                                                    <div class="ref-product-total">
                                                        <div class="ref-product-total-sum">$46.03</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ref-product" data-id="2095884274" data-quantity="1"
                                                data-variant_id="199976733_m">
                                                <div class="ref-product-col">
                                                    <div class="ref-product-wrapper"><img class="ref-product-photo"
                                                            src="https://cdn.bootstrapstudio.io/products/product-18_sm.jpg"
                                                            alt="Reusable Cup" />
                                                        <div class="ref-product-data">
                                                            <div class="ref-product-info">
                                                                <div class="ref-product-name">Reusable Cup</div>
                                                                <div class="ref-product-category">Cups</div>
                                                                <div class="ref-product-variants">
                                                                    <div class="ref-product-variant">Size: M</div>
                                                                </div>
                                                                <div class="ref-product-personalization-holder"></div>
                                                            </div>
                                                            <div class="ref-product-price">$46.03</div>
                                                        </div>
                                                    </div>
                                                    <div class="ref-product-controls">
                                                        <div class="ref-product-quantity">
                                                            <div class="ref-quantity-container"
                                                                data-reflow-variant="199976733_m"
                                                                data-reflow-product="2095884274"
                                                                data-reflow-max-qty="999" data-reflow-quantity="1">
                                                                <div class="ref-quantity-widget">
                                                                    <div class="ref-decrease"><span></span></div><input
                                                                        type="text" value="1" />
                                                                    <div class="ref-increase"><span></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="ref-product-qty-message"></div>
                                                            <div class="ref-product-remove">Remove</div>
                                                        </div>
                                                        <div class="ref-product-total">
                                                            <div class="ref-product-total-sum">$46.03</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ref-price-col">
                                                    <div class="ref-product-price">$46.03</div>
                                                </div>
                                                <div class="ref-quantity-col">
                                                    <div class="ref-product-quantity">
                                                        <div class="ref-quantity-container"
                                                            data-reflow-variant="199976733_m"
                                                            data-reflow-product="2095884274" data-reflow-max-qty="999"
                                                            data-reflow-quantity="1">
                                                            <div class="ref-quantity-widget">
                                                                <div class="ref-decrease"><span></span></div><input
                                                                    type="text" value="1" />
                                                                <div class="ref-increase"><span></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="ref-product-qty-message"></div>
                                                        <div class="ref-product-remove">Remove</div>
                                                    </div>
                                                </div>
                                                <div class="ref-total-col">
                                                    <div class="ref-product-total">
                                                        <div class="ref-product-total-sum">$46.03</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ref-footer">
                                            <div class="ref-links"><a href="https://google.com" target="_blank">Terms
                                                    &amp; Conditions</a><a href="https://google.com"
                                                    target="_blank">Privacy Policy</a><a href="https://google.com"
                                                    target="_blank">Refund Policy</a></div>
                                            <div class="ref-totals">
                                                <div class="ref-subtotal">Subtotal: $132.88</div>
                                                <form class="ref-accept-terms" style="display: block;"><input
                                                        id="ref-terms-agreement" type="checkbox"
                                                        data-state-src="accept-terms" required /><label
                                                        class="ref-terms-agreement-text"
                                                        for="ref-terms-agreement"><span>I agree to the </span><a
                                                            href="https://google.com">Terms &amp; Conditions</a><span>,
                                                        </span><a href="https://google.com">Privacy Policy</a><span> and
                                                        </span><a href="https://google.com">Refund Policy</a></label>
                                                </form>
                                                <div class="ref-row ref-checkout-buttons">
                                                    <div class="ref-paypal-express-checkout-holder">
                                                        <div
                                                            class="paypal-button paypal-button-gold button-demo-payment">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="22"
                                                                viewBox="0 0 101 32"
                                                                preserveAspectRatio="xMinYMin meet">
                                                                <path fill="#003087"
                                                                    d="M 12.237 2.8 L 4.437 2.8 C 3.937 2.8 3.437 3.2 3.337 3.7 L 0.237 23.7 C 0.137 24.1 0.437 24.4 0.837 24.4 L 4.537 24.4 C 5.037 24.4 5.537 24 5.637 23.5 L 6.437 18.1 C 6.537 17.6 6.937 17.2 7.537 17.2 L 10.037 17.2 C 15.137 17.2 18.137 14.7 18.937 9.8 C 19.237 7.7 18.937 6 17.937 4.8 C 16.837 3.5 14.837 2.8 12.237 2.8 Z M 13.137 10.1 C 12.737 12.9 10.537 12.9 8.537 12.9 L 7.337 12.9 L 8.137 7.7 C 8.137 7.4 8.437 7.2 8.737 7.2 L 9.237 7.2 C 10.637 7.2 11.937 7.2 12.637 8 C 13.137 8.4 13.337 9.1 13.137 10.1 Z">
                                                                </path>
                                                                <path fill="#003087"
                                                                    d="M 35.437 10 L 31.737 10 C 31.437 10 31.137 10.2 31.137 10.5 L 30.937 11.5 L 30.637 11.1 C 29.837 9.9 28.037 9.5 26.237 9.5 C 22.137 9.5 18.637 12.6 17.937 17 C 17.537 19.2 18.037 21.3 19.337 22.7 C 20.437 24 22.137 24.6 24.037 24.6 C 27.337 24.6 29.237 22.5 29.237 22.5 L 29.037 23.5 C 28.937 23.9 29.237 24.3 29.637 24.3 L 33.037 24.3 C 33.537 24.3 34.037 23.9 34.137 23.4 L 36.137 10.6 C 36.237 10.4 35.837 10 35.437 10 Z M 30.337 17.2 C 29.937 19.3 28.337 20.8 26.137 20.8 C 25.037 20.8 24.237 20.5 23.637 19.8 C 23.037 19.1 22.837 18.2 23.037 17.2 C 23.337 15.1 25.137 13.6 27.237 13.6 C 28.337 13.6 29.137 14 29.737 14.6 C 30.237 15.3 30.437 16.2 30.337 17.2 Z">
                                                                </path>
                                                                <path fill="#003087"
                                                                    d="M 55.337 10 L 51.637 10 C 51.237 10 50.937 10.2 50.737 10.5 L 45.537 18.1 L 43.337 10.8 C 43.237 10.3 42.737 10 42.337 10 L 38.637 10 C 38.237 10 37.837 10.4 38.037 10.9 L 42.137 23 L 38.237 28.4 C 37.937 28.8 38.237 29.4 38.737 29.4 L 42.437 29.4 C 42.837 29.4 43.137 29.2 43.337 28.9 L 55.837 10.9 C 56.137 10.6 55.837 10 55.337 10 Z">
                                                                </path>
                                                                <path fill="#009cde"
                                                                    d="M 67.737 2.8 L 59.937 2.8 C 59.437 2.8 58.937 3.2 58.837 3.7 L 55.737 23.6 C 55.637 24 55.937 24.3 56.337 24.3 L 60.337 24.3 C 60.737 24.3 61.037 24 61.037 23.7 L 61.937 18 C 62.037 17.5 62.437 17.1 63.037 17.1 L 65.537 17.1 C 70.637 17.1 73.637 14.6 74.437 9.7 C 74.737 7.6 74.437 5.9 73.437 4.7 C 72.237 3.5 70.337 2.8 67.737 2.8 Z M 68.637 10.1 C 68.237 12.9 66.037 12.9 64.037 12.9 L 62.837 12.9 L 63.637 7.7 C 63.637 7.4 63.937 7.2 64.237 7.2 L 64.737 7.2 C 66.137 7.2 67.437 7.2 68.137 8 C 68.637 8.4 68.737 9.1 68.637 10.1 Z">
                                                                </path>
                                                                <path fill="#009cde"
                                                                    d="M 90.937 10 L 87.237 10 C 86.937 10 86.637 10.2 86.637 10.5 L 86.437 11.5 L 86.137 11.1 C 85.337 9.9 83.537 9.5 81.737 9.5 C 77.637 9.5 74.137 12.6 73.437 17 C 73.037 19.2 73.537 21.3 74.837 22.7 C 75.937 24 77.637 24.6 79.537 24.6 C 82.837 24.6 84.737 22.5 84.737 22.5 L 84.537 23.5 C 84.437 23.9 84.737 24.3 85.137 24.3 L 88.537 24.3 C 89.037 24.3 89.537 23.9 89.637 23.4 L 91.637 10.6 C 91.637 10.4 91.337 10 90.937 10 Z M 85.737 17.2 C 85.337 19.3 83.737 20.8 81.537 20.8 C 80.437 20.8 79.637 20.5 79.037 19.8 C 78.437 19.1 78.237 18.2 78.437 17.2 C 78.737 15.1 80.537 13.6 82.637 13.6 C 83.737 13.6 84.537 14 85.137 14.6 C 85.737 15.3 85.937 16.2 85.737 17.2 Z">
                                                                </path>
                                                                <path fill="#009cde"
                                                                    d="M 95.337 3.3 L 92.137 23.6 C 92.037 24 92.337 24.3 92.737 24.3 L 95.937 24.3 C 96.437 24.3 96.937 23.9 97.037 23.4 L 100.237 3.5 C 100.337 3.1 100.037 2.8 99.637 2.8 L 96.037 2.8 C 95.637 2.8 95.437 3 95.337 3.3 Z">
                                                                </path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="ref-button ref-standard-checkout-button">Checkout</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ref-checkout" style="display: none;">
                                        <div class="ref-checkout-content">
                                            <form class="ref-details" style="display: block;">
                                                <div class="ref-back">← Back to Cart</div>
                                                <div class="ref-heading">Customer Details</div>
                                                <label><span>Email</span><input id="ref-field-email"
                                                        class="ref-form-control" type="email" name="email" value
                                                        required data-state-src="email" />
                                                    <div class="ref-validation-error"></div>
                                                </label><label><span>Phone</span><input id="ref-field-phone"
                                                        class="ref-form-control" type="tel" name="phone" value
                                                        pattern="[0-9\+\- ]{5,30}" placeholder="+1234567890" required
                                                        data-state-src="phone" />
                                                    <div class="ref-validation-error"></div>
                                                </label><label class="ref-pickup-customer-name-input"
                                                    style="display: none;"><span>Name</span><input
                                                        class="ref-form-control" type="text" name="pickup-customer-name"
                                                        value data-state-src="pickup-customer-name" minlength="5"
                                                        required disabled />
                                                    <div class="ref-validation-error"></div>
                                                </label>
                                                <div class="ref-heading ref-heading-delivery" style="display: block;">
                                                    Delivery</div>
                                                <div class="ref-delivery-unavailable" style="display: none;"></div>
                                                <div class="ref-delivery-card" style="display: block;">
                                                    <div class="ref-tab ref-local-pickup-tab" data-ref-delivery="pickup"
                                                        style="display: none;"><label class="ref-tab-toggle"><input
                                                                type="radio" value="pickup" name="delivery-method"
                                                                required />
                                                            <div class="ref-heading-small">Pickup at Store</div>
                                                        </label>
                                                        <fieldset class="ref-tab-content">
                                                            <div class="ref-heading-small">Select a Store</div>
                                                            <div class="ref-locations ref-error-parent"></div>
                                                            <div class="ref-billing-container">
                                                                <div class="ref-button ref-add-billing"
                                                                    style="display: inline-block;">Add Billing Info
                                                                </div>
                                                                <fieldset class="ref-billing-address" disabled
                                                                    style="display: none;">
                                                                    <div class="ref-row">
                                                                        <div class="ref-heading-small">Billing Address
                                                                        </div>
                                                                        <div class="ref-button ref-remove-billing">
                                                                            Remove</div>
                                                                    </div>
                                                                    <div class="ref-billing-address-holder"></div>
                                                                </fieldset>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="ref-tab ref-shipping-tab open"
                                                        data-ref-delivery="shipping" style="display: block;"><label
                                                            class="ref-tab-toggle"><input type="radio" value="shipping"
                                                                name="delivery-method" required />
                                                            <div class="ref-heading-small">Deliver to Address</div>
                                                        </label>
                                                        <fieldset class="ref-tab-content">
                                                            <div class="ref-heading-small">Shipping Address</div>
                                                            <div class="ref-shipping-address-holder">
                                                                <div class="ref-address-widget">
                                                                    <label><span>Name</span><input
                                                                            class="ref-form-control ref-field-details-name"
                                                                            type="text" value name="shipping-name"
                                                                            data-state-src="shipping-name" required
                                                                            minlength="5" />
                                                                        <div class="ref-validation-error"></div>
                                                                    </label><label><span>Address</span><textarea
                                                                            class="ref-form-control ref-field-details-address-line"
                                                                            row="2" name="shipping-address"
                                                                            data-state-src="shipping-address" required
                                                                            minlength="5"></textarea>
                                                                        <div class="ref-validation-error"></div>
                                                                    </label><label><span>City</span><input
                                                                            class="ref-form-control ref-field-details-city"
                                                                            type="text" value name="shipping-city"
                                                                            data-state-src="shipping-city" required
                                                                            minlength="2" />
                                                                        <div class="ref-validation-error"></div>
                                                                    </label>
                                                                    <div class="ref-error-parent">
                                                                        <label><span>Country</span><select
                                                                                class="ref-form-control ref-field-details-country"
                                                                                name="shipping-country"
                                                                                data-state-src="shipping-country"
                                                                                required>
                                                                                <option value>Select Country</option>
                                                                                <option value="US">United States
                                                                                </option>
                                                                                <option value="CA">Canada</option>
                                                                                <option value="GB">United Kingdom
                                                                                </option>
                                                                                <option value="FR">France</option>
                                                                                <option value="DE">Germany</option>
                                                                                <option value="JP">Japan</option>
                                                                                <option value="RU">Russia</option>
                                                                                <option value="AF">Afghanistan</option>
                                                                                <option value="AX">Åland Islands
                                                                                </option>
                                                                                <option value="AL">Albania</option>
                                                                                <option value="DZ">Algeria</option>
                                                                                <option value="AD">Andorra</option>
                                                                                <option value="AO">Angola</option>
                                                                                <option value="AI">Anguilla</option>
                                                                                <option value="AG">Antigua &amp; Barbuda
                                                                                </option>
                                                                                <option value="AR">Argentina</option>
                                                                                <option value="AM">Armenia</option>
                                                                                <option value="AW">Aruba</option>
                                                                                <option value="AC">Ascension Island
                                                                                </option>
                                                                                <option value="AU">Australia</option>
                                                                                <option value="AT">Austria</option>
                                                                                <option value="AZ">Azerbaijan</option>
                                                                                <option value="BS">Bahamas</option>
                                                                                <option value="BH">Bahrain</option>
                                                                                <option value="BD">Bangladesh</option>
                                                                                <option value="BB">Barbados</option>
                                                                                <option value="BY">Belarus</option>
                                                                                <option value="BE">Belgium</option>
                                                                                <option value="BZ">Belize</option>
                                                                                <option value="BJ">Benin</option>
                                                                                <option value="BM">Bermuda</option>
                                                                                <option value="BT">Bhutan</option>
                                                                                <option value="BO">Bolivia</option>
                                                                                <option value="BA">Bosnia &amp;
                                                                                    Herzegovina</option>
                                                                                <option value="BW">Botswana</option>
                                                                                <option value="BR">Brazil</option>
                                                                                <option value="IO">British Indian Ocean
                                                                                    Territory</option>
                                                                                <option value="VG">British Virgin
                                                                                    Islands</option>
                                                                                <option value="BN">Brunei</option>
                                                                                <option value="BG">Bulgaria</option>
                                                                                <option value="BF">Burkina Faso</option>
                                                                                <option value="BI">Burundi</option>
                                                                                <option value="KH">Cambodia</option>
                                                                                <option value="CM">Cameroon</option>
                                                                                <option value="CV">Cape Verde</option>
                                                                                <option value="BQ">Caribbean Netherlands
                                                                                </option>
                                                                                <option value="KY">Cayman Islands
                                                                                </option>
                                                                                <option value="CF">Central African
                                                                                    Republic</option>
                                                                                <option value="TD">Chad</option>
                                                                                <option value="CL">Chile</option>
                                                                                <option value="CN">China</option>
                                                                                <option value="CX">Christmas Island
                                                                                </option>
                                                                                <option value="CC">Cocos (Keeling)
                                                                                    Islands</option>
                                                                                <option value="CO">Colombia</option>
                                                                                <option value="KM">Comoros</option>
                                                                                <option value="CG">Congo - Brazzaville
                                                                                </option>
                                                                                <option value="CD">Congo - Kinshasa
                                                                                </option>
                                                                                <option value="CK">Cook Islands</option>
                                                                                <option value="CR">Costa Rica</option>
                                                                                <option value="HR">Croatia</option>
                                                                                <option value="CW">Curaçao</option>
                                                                                <option value="CY">Cyprus</option>
                                                                                <option value="CZ">Czechia</option>
                                                                                <option value="CI">Côte d’Ivoire
                                                                                </option>
                                                                                <option value="DK">Denmark</option>
                                                                                <option value="DJ">Djibouti</option>
                                                                                <option value="DM">Dominica</option>
                                                                                <option value="DO">Dominican Republic
                                                                                </option>
                                                                                <option value="EC">Ecuador</option>
                                                                                <option value="EG">Egypt</option>
                                                                                <option value="SV">El Salvador</option>
                                                                                <option value="GQ">Equatorial Guinea
                                                                                </option>
                                                                                <option value="ER">Eritrea</option>
                                                                                <option value="EE">Estonia</option>
                                                                                <option value="SZ">Eswatini</option>
                                                                                <option value="ET">Ethiopia</option>
                                                                                <option value="FK">Falkland Islands
                                                                                </option>
                                                                                <option value="FO">Faroe Islands
                                                                                </option>
                                                                                <option value="FJ">Fiji</option>
                                                                                <option value="FI">Finland</option>
                                                                                <option value="GF">French Guiana
                                                                                </option>
                                                                                <option value="PF">French Polynesia
                                                                                </option>
                                                                                <option value="TF">French Southern
                                                                                    Territories</option>
                                                                                <option value="GA">Gabon</option>
                                                                                <option value="GM">Gambia</option>
                                                                                <option value="GE">Georgia</option>
                                                                                <option value="GH">Ghana</option>
                                                                                <option value="GI">Gibraltar</option>
                                                                                <option value="GR">Greece</option>
                                                                                <option value="GL">Greenland</option>
                                                                                <option value="GD">Grenada</option>
                                                                                <option value="GP">Guadeloupe</option>
                                                                                <option value="GT">Guatemala</option>
                                                                                <option value="GG">Guernsey</option>
                                                                                <option value="GN">Guinea</option>
                                                                                <option value="GW">Guinea-Bissau
                                                                                </option>
                                                                                <option value="GY">Guyana</option>
                                                                                <option value="HT">Haiti</option>
                                                                                <option value="HN">Honduras</option>
                                                                                <option value="HK">Hong Kong SAR
                                                                                </option>
                                                                                <option value="HU">Hungary</option>
                                                                                <option value="IS">Iceland</option>
                                                                                <option value="IN">India</option>
                                                                                <option value="ID">Indonesia</option>
                                                                                <option value="IQ">Iraq</option>
                                                                                <option value="IE">Ireland</option>
                                                                                <option value="IM">Isle of Man</option>
                                                                                <option value="IL">Israel</option>
                                                                                <option value="IT">Italy</option>
                                                                                <option value="JM">Jamaica</option>
                                                                                <option value="JE">Jersey</option>
                                                                                <option value="JO">Jordan</option>
                                                                                <option value="KZ">Kazakhstan</option>
                                                                                <option value="KE">Kenya</option>
                                                                                <option value="KI">Kiribati</option>
                                                                                <option value="XK">Kosovo</option>
                                                                                <option value="KW">Kuwait</option>
                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                <option value="LA">Laos</option>
                                                                                <option value="LV">Latvia</option>
                                                                                <option value="LB">Lebanon</option>
                                                                                <option value="LS">Lesotho</option>
                                                                                <option value="LR">Liberia</option>
                                                                                <option value="LY">Libya</option>
                                                                                <option value="LI">Liechtenstein
                                                                                </option>
                                                                                <option value="LT">Lithuania</option>
                                                                                <option value="LU">Luxembourg</option>
                                                                                <option value="MO">Macao SAR</option>
                                                                                <option value="MG">Madagascar</option>
                                                                                <option value="MW">Malawi</option>
                                                                                <option value="MY">Malaysia</option>
                                                                                <option value="MV">Maldives</option>
                                                                                <option value="ML">Mali</option>
                                                                                <option value="MT">Malta</option>
                                                                                <option value="MQ">Martinique</option>
                                                                                <option value="MR">Mauritania</option>
                                                                                <option value="MU">Mauritius</option>
                                                                                <option value="YT">Mayotte</option>
                                                                                <option value="MX">Mexico</option>
                                                                                <option value="MD">Moldova</option>
                                                                                <option value="MC">Monaco</option>
                                                                                <option value="MN">Mongolia</option>
                                                                                <option value="ME">Montenegro</option>
                                                                                <option value="MS">Montserrat</option>
                                                                                <option value="MA">Morocco</option>
                                                                                <option value="MZ">Mozambique</option>
                                                                                <option value="MM">Myanmar (Burma)
                                                                                </option>
                                                                                <option value="NA">Namibia</option>
                                                                                <option value="NR">Nauru</option>
                                                                                <option value="NP">Nepal</option>
                                                                                <option value="NL">Netherlands</option>
                                                                                <option value="NC">New Caledonia
                                                                                </option>
                                                                                <option value="NZ">New Zealand</option>
                                                                                <option value="NI">Nicaragua</option>
                                                                                <option value="NE">Niger</option>
                                                                                <option value="NG">Nigeria</option>
                                                                                <option value="NU">Niue</option>
                                                                                <option value="NF">Norfolk Island
                                                                                </option>
                                                                                <option value="MK">North Macedonia
                                                                                </option>
                                                                                <option value="NO">Norway</option>
                                                                                <option value="OM">Oman</option>
                                                                                <option value="PK">Pakistan</option>
                                                                                <option value="PS">Palestinian
                                                                                    Territories</option>
                                                                                <option value="PA">Panama</option>
                                                                                <option value="PG">Papua New Guinea
                                                                                </option>
                                                                                <option value="PY">Paraguay</option>
                                                                                <option value="PE">Peru</option>
                                                                                <option value="PH">Philippines</option>
                                                                                <option value="PN">Pitcairn Islands
                                                                                </option>
                                                                                <option value="PL">Poland</option>
                                                                                <option value="PT">Portugal</option>
                                                                                <option value="QA">Qatar</option>
                                                                                <option value="RE">Réunion</option>
                                                                                <option value="RO">Romania</option>
                                                                                <option value="RW">Rwanda</option>
                                                                                <option value="WS">Samoa</option>
                                                                                <option value="SM">San Marino</option>
                                                                                <option value="ST">São Tomé &amp;
                                                                                    Príncipe</option>
                                                                                <option value="SA">Saudi Arabia</option>
                                                                                <option value="SN">Senegal</option>
                                                                                <option value="RS">Serbia</option>
                                                                                <option value="SC">Seychelles</option>
                                                                                <option value="SL">Sierra Leone</option>
                                                                                <option value="SG">Singapore</option>
                                                                                <option value="SX">Sint Maarten</option>
                                                                                <option value="SK">Slovakia</option>
                                                                                <option value="SI">Slovenia</option>
                                                                                <option value="SB">Solomon Islands
                                                                                </option>
                                                                                <option value="SO">Somalia</option>
                                                                                <option value="ZA">South Africa</option>
                                                                                <option value="GS">South Georgia &amp;
                                                                                    South Sandwich Islands</option>
                                                                                <option value="KR">South Korea</option>
                                                                                <option value="SS">South Sudan</option>
                                                                                <option value="ES">Spain</option>
                                                                                <option value="LK">Sri Lanka</option>
                                                                                <option value="BL">St. Barthélemy
                                                                                </option>
                                                                                <option value="SH">St. Helena</option>
                                                                                <option value="KN">St. Kitts &amp; Nevis
                                                                                </option>
                                                                                <option value="LC">St. Lucia</option>
                                                                                <option value="MF">St. Martin</option>
                                                                                <option value="PM">St. Pierre &amp;
                                                                                    Miquelon</option>
                                                                                <option value="VC">St. Vincent &amp;
                                                                                    Grenadines</option>
                                                                                <option value="SD">Sudan</option>
                                                                                <option value="SR">Suriname</option>
                                                                                <option value="SJ">Svalbard &amp; Jan
                                                                                    Mayen</option>
                                                                                <option value="SE">Sweden</option>
                                                                                <option value="CH">Switzerland</option>
                                                                                <option value="TW">Taiwan</option>
                                                                                <option value="TJ">Tajikistan</option>
                                                                                <option value="TZ">Tanzania</option>
                                                                                <option value="TH">Thailand</option>
                                                                                <option value="TL">Timor-Leste</option>
                                                                                <option value="TG">Togo</option>
                                                                                <option value="TK">Tokelau</option>
                                                                                <option value="TO">Tonga</option>
                                                                                <option value="TT">Trinidad &amp; Tobago
                                                                                </option>
                                                                                <option value="TA">Tristan da Cunha
                                                                                </option>
                                                                                <option value="TN">Tunisia</option>
                                                                                <option value="TR">Turkey</option>
                                                                                <option value="TM">Turkmenistan</option>
                                                                                <option value="TC">Turks &amp; Caicos
                                                                                    Islands</option>
                                                                                <option value="TV">Tuvalu</option>
                                                                                <option value="UM">U.S. Outlying Islands
                                                                                </option>
                                                                                <option value="UG">Uganda</option>
                                                                                <option value="UA">Ukraine</option>
                                                                                <option value="AE">United Arab Emirates
                                                                                </option>
                                                                                <option value="UY">Uruguay</option>
                                                                                <option value="UZ">Uzbekistan</option>
                                                                                <option value="VU">Vanuatu</option>
                                                                                <option value="VA">Vatican City</option>
                                                                                <option value="VE">Venezuela</option>
                                                                                <option value="VN">Vietnam</option>
                                                                                <option value="WF">Wallis &amp; Futuna
                                                                                </option>
                                                                                <option value="EH">Western Sahara
                                                                                </option>
                                                                                <option value="YE">Yemen</option>
                                                                                <option value="ZM">Zambia</option>
                                                                                <option value="ZW">Zimbabwe</option>
                                                                            </select></label>
                                                                        <div class="ref-row ref-row-region"><label
                                                                                style="display: none;"><span>State</span><select
                                                                                    class="ref-form-control ref-field-details-region"
                                                                                    name="shipping-state"
                                                                                    data-state-src="shipping-state"
                                                                                    required
                                                                                    disabled></select></label><label
                                                                                style="display: none;"><span>Postal
                                                                                    Code</span><input
                                                                                    class="ref-form-control ref-field-details-postcode"
                                                                                    type="text" name="shipping-postcode"
                                                                                    data-state-src="shipping-postcode"
                                                                                    value required disabled /></label>
                                                                        </div>
                                                                        <div class="ref-validation-error"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ref-billing-container">
                                                                <div class="ref-button ref-add-billing"
                                                                    style="display: inline-block;">Add Billing Info
                                                                </div>
                                                                <fieldset class="ref-billing-address" disabled
                                                                    style="display: none;">
                                                                    <div class="ref-row">
                                                                        <div class="ref-heading-small">Billing Address
                                                                        </div>
                                                                        <div class="ref-button ref-remove-billing">
                                                                            Remove</div>
                                                                    </div>
                                                                    <div class="ref-billing-address-holder">
                                                                        <div class="ref-address-widget">
                                                                            <label><span>Name</span><input
                                                                                    class="ref-form-control ref-field-details-name"
                                                                                    type="text" value
                                                                                    name="billing-name"
                                                                                    data-state-src="billing-name"
                                                                                    required minlength="5" />
                                                                                <div class="ref-validation-error"></div>
                                                                            </label><label><span>Address</span><textarea
                                                                                    class="ref-form-control ref-field-details-address-line"
                                                                                    row="2" name="billing-address"
                                                                                    data-state-src="billing-address"
                                                                                    required minlength="5"></textarea>
                                                                                <div class="ref-validation-error"></div>
                                                                            </label><label><span>City</span><input
                                                                                    class="ref-form-control ref-field-details-city"
                                                                                    type="text" value
                                                                                    name="billing-city"
                                                                                    data-state-src="billing-city"
                                                                                    required minlength="2" />
                                                                                <div class="ref-validation-error"></div>
                                                                            </label>
                                                                            <div class="ref-error-parent">
                                                                                <label><span>Country</span><select
                                                                                        class="ref-form-control ref-field-details-country"
                                                                                        name="billing-country"
                                                                                        data-state-src="billing-country"
                                                                                        required>
                                                                                        <option value>Select Country
                                                                                        </option>
                                                                                        <option value="US">United States
                                                                                        </option>
                                                                                        <option value="CA">Canada
                                                                                        </option>
                                                                                        <option value="GB">United
                                                                                            Kingdom</option>
                                                                                        <option value="FR">France
                                                                                        </option>
                                                                                        <option value="DE">Germany
                                                                                        </option>
                                                                                        <option value="JP">Japan
                                                                                        </option>
                                                                                        <option value="RU">Russia
                                                                                        </option>
                                                                                        <option value="AF">Afghanistan
                                                                                        </option>
                                                                                        <option value="AX">Åland Islands
                                                                                        </option>
                                                                                        <option value="AL">Albania
                                                                                        </option>
                                                                                        <option value="DZ">Algeria
                                                                                        </option>
                                                                                        <option value="AD">Andorra
                                                                                        </option>
                                                                                        <option value="AO">Angola
                                                                                        </option>
                                                                                        <option value="AI">Anguilla
                                                                                        </option>
                                                                                        <option value="AG">Antigua &amp;
                                                                                            Barbuda</option>
                                                                                        <option value="AR">Argentina
                                                                                        </option>
                                                                                        <option value="AM">Armenia
                                                                                        </option>
                                                                                        <option value="AW">Aruba
                                                                                        </option>
                                                                                        <option value="AC">Ascension
                                                                                            Island</option>
                                                                                        <option value="AU">Australia
                                                                                        </option>
                                                                                        <option value="AT">Austria
                                                                                        </option>
                                                                                        <option value="AZ">Azerbaijan
                                                                                        </option>
                                                                                        <option value="BS">Bahamas
                                                                                        </option>
                                                                                        <option value="BH">Bahrain
                                                                                        </option>
                                                                                        <option value="BD">Bangladesh
                                                                                        </option>
                                                                                        <option value="BB">Barbados
                                                                                        </option>
                                                                                        <option value="BY">Belarus
                                                                                        </option>
                                                                                        <option value="BE">Belgium
                                                                                        </option>
                                                                                        <option value="BZ">Belize
                                                                                        </option>
                                                                                        <option value="BJ">Benin
                                                                                        </option>
                                                                                        <option value="BM">Bermuda
                                                                                        </option>
                                                                                        <option value="BT">Bhutan
                                                                                        </option>
                                                                                        <option value="BO">Bolivia
                                                                                        </option>
                                                                                        <option value="BA">Bosnia &amp;
                                                                                            Herzegovina</option>
                                                                                        <option value="BW">Botswana
                                                                                        </option>
                                                                                        <option value="BR">Brazil
                                                                                        </option>
                                                                                        <option value="IO">British
                                                                                            Indian Ocean Territory
                                                                                        </option>
                                                                                        <option value="VG">British
                                                                                            Virgin Islands</option>
                                                                                        <option value="BN">Brunei
                                                                                        </option>
                                                                                        <option value="BG">Bulgaria
                                                                                        </option>
                                                                                        <option value="BF">Burkina Faso
                                                                                        </option>
                                                                                        <option value="BI">Burundi
                                                                                        </option>
                                                                                        <option value="KH">Cambodia
                                                                                        </option>
                                                                                        <option value="CM">Cameroon
                                                                                        </option>
                                                                                        <option value="CV">Cape Verde
                                                                                        </option>
                                                                                        <option value="BQ">Caribbean
                                                                                            Netherlands</option>
                                                                                        <option value="KY">Cayman
                                                                                            Islands</option>
                                                                                        <option value="CF">Central
                                                                                            African Republic</option>
                                                                                        <option value="TD">Chad</option>
                                                                                        <option value="CL">Chile
                                                                                        </option>
                                                                                        <option value="CN">China
                                                                                        </option>
                                                                                        <option value="CX">Christmas
                                                                                            Island</option>
                                                                                        <option value="CC">Cocos
                                                                                            (Keeling) Islands</option>
                                                                                        <option value="CO">Colombia
                                                                                        </option>
                                                                                        <option value="KM">Comoros
                                                                                        </option>
                                                                                        <option value="CG">Congo -
                                                                                            Brazzaville</option>
                                                                                        <option value="CD">Congo -
                                                                                            Kinshasa</option>
                                                                                        <option value="CK">Cook Islands
                                                                                        </option>
                                                                                        <option value="CR">Costa Rica
                                                                                        </option>
                                                                                        <option value="HR">Croatia
                                                                                        </option>
                                                                                        <option value="CW">Curaçao
                                                                                        </option>
                                                                                        <option value="CY">Cyprus
                                                                                        </option>
                                                                                        <option value="CZ">Czechia
                                                                                        </option>
                                                                                        <option value="CI">Côte d’Ivoire
                                                                                        </option>
                                                                                        <option value="DK">Denmark
                                                                                        </option>
                                                                                        <option value="DJ">Djibouti
                                                                                        </option>
                                                                                        <option value="DM">Dominica
                                                                                        </option>
                                                                                        <option value="DO">Dominican
                                                                                            Republic</option>
                                                                                        <option value="EC">Ecuador
                                                                                        </option>
                                                                                        <option value="EG">Egypt
                                                                                        </option>
                                                                                        <option value="SV">El Salvador
                                                                                        </option>
                                                                                        <option value="GQ">Equatorial
                                                                                            Guinea</option>
                                                                                        <option value="ER">Eritrea
                                                                                        </option>
                                                                                        <option value="EE">Estonia
                                                                                        </option>
                                                                                        <option value="SZ">Eswatini
                                                                                        </option>
                                                                                        <option value="ET">Ethiopia
                                                                                        </option>
                                                                                        <option value="FK">Falkland
                                                                                            Islands</option>
                                                                                        <option value="FO">Faroe Islands
                                                                                        </option>
                                                                                        <option value="FJ">Fiji</option>
                                                                                        <option value="FI">Finland
                                                                                        </option>
                                                                                        <option value="GF">French Guiana
                                                                                        </option>
                                                                                        <option value="PF">French
                                                                                            Polynesia</option>
                                                                                        <option value="TF">French
                                                                                            Southern Territories
                                                                                        </option>
                                                                                        <option value="GA">Gabon
                                                                                        </option>
                                                                                        <option value="GM">Gambia
                                                                                        </option>
                                                                                        <option value="GE">Georgia
                                                                                        </option>
                                                                                        <option value="GH">Ghana
                                                                                        </option>
                                                                                        <option value="GI">Gibraltar
                                                                                        </option>
                                                                                        <option value="GR">Greece
                                                                                        </option>
                                                                                        <option value="GL">Greenland
                                                                                        </option>
                                                                                        <option value="GD">Grenada
                                                                                        </option>
                                                                                        <option value="GP">Guadeloupe
                                                                                        </option>
                                                                                        <option value="GT">Guatemala
                                                                                        </option>
                                                                                        <option value="GG">Guernsey
                                                                                        </option>
                                                                                        <option value="GN">Guinea
                                                                                        </option>
                                                                                        <option value="GW">Guinea-Bissau
                                                                                        </option>
                                                                                        <option value="GY">Guyana
                                                                                        </option>
                                                                                        <option value="HT">Haiti
                                                                                        </option>
                                                                                        <option value="HN">Honduras
                                                                                        </option>
                                                                                        <option value="HK">Hong Kong SAR
                                                                                        </option>
                                                                                        <option value="HU">Hungary
                                                                                        </option>
                                                                                        <option value="IS">Iceland
                                                                                        </option>
                                                                                        <option value="IN">India
                                                                                        </option>
                                                                                        <option value="ID">Indonesia
                                                                                        </option>
                                                                                        <option value="IQ">Iraq</option>
                                                                                        <option value="IE">Ireland
                                                                                        </option>
                                                                                        <option value="IM">Isle of Man
                                                                                        </option>
                                                                                        <option value="IL">Israel
                                                                                        </option>
                                                                                        <option value="IT">Italy
                                                                                        </option>
                                                                                        <option value="JM">Jamaica
                                                                                        </option>
                                                                                        <option value="JE">Jersey
                                                                                        </option>
                                                                                        <option value="JO">Jordan
                                                                                        </option>
                                                                                        <option value="KZ">Kazakhstan
                                                                                        </option>
                                                                                        <option value="KE">Kenya
                                                                                        </option>
                                                                                        <option value="KI">Kiribati
                                                                                        </option>
                                                                                        <option value="XK">Kosovo
                                                                                        </option>
                                                                                        <option value="KW">Kuwait
                                                                                        </option>
                                                                                        <option value="KG">Kyrgyzstan
                                                                                        </option>
                                                                                        <option value="LA">Laos</option>
                                                                                        <option value="LV">Latvia
                                                                                        </option>
                                                                                        <option value="LB">Lebanon
                                                                                        </option>
                                                                                        <option value="LS">Lesotho
                                                                                        </option>
                                                                                        <option value="LR">Liberia
                                                                                        </option>
                                                                                        <option value="LY">Libya
                                                                                        </option>
                                                                                        <option value="LI">Liechtenstein
                                                                                        </option>
                                                                                        <option value="LT">Lithuania
                                                                                        </option>
                                                                                        <option value="LU">Luxembourg
                                                                                        </option>
                                                                                        <option value="MO">Macao SAR
                                                                                        </option>
                                                                                        <option value="MG">Madagascar
                                                                                        </option>
                                                                                        <option value="MW">Malawi
                                                                                        </option>
                                                                                        <option value="MY">Malaysia
                                                                                        </option>
                                                                                        <option value="MV">Maldives
                                                                                        </option>
                                                                                        <option value="ML">Mali</option>
                                                                                        <option value="MT">Malta
                                                                                        </option>
                                                                                        <option value="MQ">Martinique
                                                                                        </option>
                                                                                        <option value="MR">Mauritania
                                                                                        </option>
                                                                                        <option value="MU">Mauritius
                                                                                        </option>
                                                                                        <option value="YT">Mayotte
                                                                                        </option>
                                                                                        <option value="MX">Mexico
                                                                                        </option>
                                                                                        <option value="MD">Moldova
                                                                                        </option>
                                                                                        <option value="MC">Monaco
                                                                                        </option>
                                                                                        <option value="MN">Mongolia
                                                                                        </option>
                                                                                        <option value="ME">Montenegro
                                                                                        </option>
                                                                                        <option value="MS">Montserrat
                                                                                        </option>
                                                                                        <option value="MA">Morocco
                                                                                        </option>
                                                                                        <option value="MZ">Mozambique
                                                                                        </option>
                                                                                        <option value="MM">Myanmar
                                                                                            (Burma)</option>
                                                                                        <option value="NA">Namibia
                                                                                        </option>
                                                                                        <option value="NR">Nauru
                                                                                        </option>
                                                                                        <option value="NP">Nepal
                                                                                        </option>
                                                                                        <option value="NL">Netherlands
                                                                                        </option>
                                                                                        <option value="NC">New Caledonia
                                                                                        </option>
                                                                                        <option value="NZ">New Zealand
                                                                                        </option>
                                                                                        <option value="NI">Nicaragua
                                                                                        </option>
                                                                                        <option value="NE">Niger
                                                                                        </option>
                                                                                        <option value="NG">Nigeria
                                                                                        </option>
                                                                                        <option value="NU">Niue</option>
                                                                                        <option value="NF">Norfolk
                                                                                            Island</option>
                                                                                        <option value="MK">North
                                                                                            Macedonia</option>
                                                                                        <option value="NO">Norway
                                                                                        </option>
                                                                                        <option value="OM">Oman</option>
                                                                                        <option value="PK">Pakistan
                                                                                        </option>
                                                                                        <option value="PS">Palestinian
                                                                                            Territories</option>
                                                                                        <option value="PA">Panama
                                                                                        </option>
                                                                                        <option value="PG">Papua New
                                                                                            Guinea</option>
                                                                                        <option value="PY">Paraguay
                                                                                        </option>
                                                                                        <option value="PE">Peru</option>
                                                                                        <option value="PH">Philippines
                                                                                        </option>
                                                                                        <option value="PN">Pitcairn
                                                                                            Islands</option>
                                                                                        <option value="PL">Poland
                                                                                        </option>
                                                                                        <option value="PT">Portugal
                                                                                        </option>
                                                                                        <option value="QA">Qatar
                                                                                        </option>
                                                                                        <option value="RE">Réunion
                                                                                        </option>
                                                                                        <option value="RO">Romania
                                                                                        </option>
                                                                                        <option value="RW">Rwanda
                                                                                        </option>
                                                                                        <option value="WS">Samoa
                                                                                        </option>
                                                                                        <option value="SM">San Marino
                                                                                        </option>
                                                                                        <option value="ST">São Tomé
                                                                                            &amp; Príncipe</option>
                                                                                        <option value="SA">Saudi Arabia
                                                                                        </option>
                                                                                        <option value="SN">Senegal
                                                                                        </option>
                                                                                        <option value="RS">Serbia
                                                                                        </option>
                                                                                        <option value="SC">Seychelles
                                                                                        </option>
                                                                                        <option value="SL">Sierra Leone
                                                                                        </option>
                                                                                        <option value="SG">Singapore
                                                                                        </option>
                                                                                        <option value="SX">Sint Maarten
                                                                                        </option>
                                                                                        <option value="SK">Slovakia
                                                                                        </option>
                                                                                        <option value="SI">Slovenia
                                                                                        </option>
                                                                                        <option value="SB">Solomon
                                                                                            Islands</option>
                                                                                        <option value="SO">Somalia
                                                                                        </option>
                                                                                        <option value="ZA">South Africa
                                                                                        </option>
                                                                                        <option value="GS">South Georgia
                                                                                            &amp; South Sandwich Islands
                                                                                        </option>
                                                                                        <option value="KR">South Korea
                                                                                        </option>
                                                                                        <option value="SS">South Sudan
                                                                                        </option>
                                                                                        <option value="ES">Spain
                                                                                        </option>
                                                                                        <option value="LK">Sri Lanka
                                                                                        </option>
                                                                                        <option value="BL">St.
                                                                                            Barthélemy</option>
                                                                                        <option value="SH">St. Helena
                                                                                        </option>
                                                                                        <option value="KN">St. Kitts
                                                                                            &amp; Nevis</option>
                                                                                        <option value="LC">St. Lucia
                                                                                        </option>
                                                                                        <option value="MF">St. Martin
                                                                                        </option>
                                                                                        <option value="PM">St. Pierre
                                                                                            &amp; Miquelon</option>
                                                                                        <option value="VC">St. Vincent
                                                                                            &amp; Grenadines</option>
                                                                                        <option value="SD">Sudan
                                                                                        </option>
                                                                                        <option value="SR">Suriname
                                                                                        </option>
                                                                                        <option value="SJ">Svalbard
                                                                                            &amp; Jan Mayen</option>
                                                                                        <option value="SE">Sweden
                                                                                        </option>
                                                                                        <option value="CH">Switzerland
                                                                                        </option>
                                                                                        <option value="TW">Taiwan
                                                                                        </option>
                                                                                        <option value="TJ">Tajikistan
                                                                                        </option>
                                                                                        <option value="TZ">Tanzania
                                                                                        </option>
                                                                                        <option value="TH">Thailand
                                                                                        </option>
                                                                                        <option value="TL">Timor-Leste
                                                                                        </option>
                                                                                        <option value="TG">Togo</option>
                                                                                        <option value="TK">Tokelau
                                                                                        </option>
                                                                                        <option value="TO">Tonga
                                                                                        </option>
                                                                                        <option value="TT">Trinidad
                                                                                            &amp; Tobago</option>
                                                                                        <option value="TA">Tristan da
                                                                                            Cunha</option>
                                                                                        <option value="TN">Tunisia
                                                                                        </option>
                                                                                        <option value="TR">Turkey
                                                                                        </option>
                                                                                        <option value="TM">Turkmenistan
                                                                                        </option>
                                                                                        <option value="TC">Turks &amp;
                                                                                            Caicos Islands</option>
                                                                                        <option value="TV">Tuvalu
                                                                                        </option>
                                                                                        <option value="UM">U.S. Outlying
                                                                                            Islands</option>
                                                                                        <option value="UG">Uganda
                                                                                        </option>
                                                                                        <option value="UA">Ukraine
                                                                                        </option>
                                                                                        <option value="AE">United Arab
                                                                                            Emirates</option>
                                                                                        <option value="UY">Uruguay
                                                                                        </option>
                                                                                        <option value="UZ">Uzbekistan
                                                                                        </option>
                                                                                        <option value="VU">Vanuatu
                                                                                        </option>
                                                                                        <option value="VA">Vatican City
                                                                                        </option>
                                                                                        <option value="VE">Venezuela
                                                                                        </option>
                                                                                        <option value="VN">Vietnam
                                                                                        </option>
                                                                                        <option value="WF">Wallis &amp;
                                                                                            Futuna</option>
                                                                                        <option value="EH">Western
                                                                                            Sahara</option>
                                                                                        <option value="YE">Yemen
                                                                                        </option>
                                                                                        <option value="ZM">Zambia
                                                                                        </option>
                                                                                        <option value="ZW">Zimbabwe
                                                                                        </option>
                                                                                    </select></label>
                                                                                <div class="ref-row ref-row-region">
                                                                                    <label
                                                                                        style="display: none;"><span>State</span><select
                                                                                            class="ref-form-control ref-field-details-region"
                                                                                            name="billing-state"
                                                                                            data-state-src="billing-state"
                                                                                            required
                                                                                            disabled></select></label><label
                                                                                        style="display: none;"><span>Postal
                                                                                            Code</span><input
                                                                                            class="ref-form-control ref-field-details-postcode"
                                                                                            type="text"
                                                                                            name="billing-postcode"
                                                                                            data-state-src="billing-postcode"
                                                                                            value required
                                                                                            disabled /></label></div>
                                                                                <div class="ref-validation-error"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="ref-heading-shipping-methods ref-heading-small"
                                                                style="display: none;">Shipping Method</div>
                                                            <div class="ref-shipping-methods ref-error-parent"></div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="ref-tax-note" style="display: none;">
                                                    <hr />
                                                    <div class="ref-field-collapsible open"><span
                                                            class="ref-field-toggle"><span
                                                                class="ref-field-toggle-title">Apply a Tax
                                                                Exemption</span></span>
                                                        <div class="ref-collapse">
                                                            <div class="ref-tax-exemption-file">
                                                                <div class="ref-old-tax-file"><a class="ref-tax-file-dl"
                                                                        href="#">Tax Exemption File</a><span
                                                                        class="ref-remove-tax-file">Remove</span></div>
                                                                <label class="ref-new-tax-file"><span
                                                                        class="ref-tax-file-label">Attach a document or
                                                                        photo of your tax exemption</span><input
                                                                        id="ref-field-exemption-file"
                                                                        class="ref-form-control" type="file"
                                                                        name="tax-exemption-file"
                                                                        accept=".doc,.docx,.pdf,.jpg,.jpeg,.png"
                                                                        disabled />
                                                                    <div class="ref-validation-error"></div>
                                                                </label>
                                                            </div><label class="ref-tax-exemption-text"><span>Enter your
                                                                    EU VAT number</span><input
                                                                    id="ref-field-exemption-text"
                                                                    class="ref-form-control" type="text"
                                                                    name="tax-exemption-text" maxlength="30" disabled />
                                                                <div class="ref-validation-error"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="ref-field-collapsible ref-note-to-seller open"><span
                                                        class="ref-field-toggle"><span
                                                            class="ref-field-toggle-title">Note to
                                                            Seller</span></span><label class="ref-collapse"><textarea
                                                            id="ref-field-note-seller" class="ref-form-control"
                                                            name="note-to-seller" row="4" maxlength="1000"
                                                            placeholder="If you have any specific instructions you want to give to the seller, write them here."
                                                            data-state-src="note"></textarea></label>
                                                    <div class="ref-validation-error"></div>
                                                </div>
                                                <hr />
                                                <div>
                                                    <div class="ref-heading ref-heading-payment"
                                                        style="display: block;">Payment</div>
                                                    <div class="ref-paypal-payment-holder" style="display: block;">
                                                        <div
                                                            class="paypal-button paypal-button-gold button-demo-payment">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="22"
                                                                viewBox="0 0 101 32"
                                                                preserveAspectRatio="xMinYMin meet">
                                                                <path fill="#003087"
                                                                    d="M 12.237 2.8 L 4.437 2.8 C 3.937 2.8 3.437 3.2 3.337 3.7 L 0.237 23.7 C 0.137 24.1 0.437 24.4 0.837 24.4 L 4.537 24.4 C 5.037 24.4 5.537 24 5.637 23.5 L 6.437 18.1 C 6.537 17.6 6.937 17.2 7.537 17.2 L 10.037 17.2 C 15.137 17.2 18.137 14.7 18.937 9.8 C 19.237 7.7 18.937 6 17.937 4.8 C 16.837 3.5 14.837 2.8 12.237 2.8 Z M 13.137 10.1 C 12.737 12.9 10.537 12.9 8.537 12.9 L 7.337 12.9 L 8.137 7.7 C 8.137 7.4 8.437 7.2 8.737 7.2 L 9.237 7.2 C 10.637 7.2 11.937 7.2 12.637 8 C 13.137 8.4 13.337 9.1 13.137 10.1 Z">
                                                                </path>
                                                                <path fill="#003087"
                                                                    d="M 35.437 10 L 31.737 10 C 31.437 10 31.137 10.2 31.137 10.5 L 30.937 11.5 L 30.637 11.1 C 29.837 9.9 28.037 9.5 26.237 9.5 C 22.137 9.5 18.637 12.6 17.937 17 C 17.537 19.2 18.037 21.3 19.337 22.7 C 20.437 24 22.137 24.6 24.037 24.6 C 27.337 24.6 29.237 22.5 29.237 22.5 L 29.037 23.5 C 28.937 23.9 29.237 24.3 29.637 24.3 L 33.037 24.3 C 33.537 24.3 34.037 23.9 34.137 23.4 L 36.137 10.6 C 36.237 10.4 35.837 10 35.437 10 Z M 30.337 17.2 C 29.937 19.3 28.337 20.8 26.137 20.8 C 25.037 20.8 24.237 20.5 23.637 19.8 C 23.037 19.1 22.837 18.2 23.037 17.2 C 23.337 15.1 25.137 13.6 27.237 13.6 C 28.337 13.6 29.137 14 29.737 14.6 C 30.237 15.3 30.437 16.2 30.337 17.2 Z">
                                                                </path>
                                                                <path fill="#003087"
                                                                    d="M 55.337 10 L 51.637 10 C 51.237 10 50.937 10.2 50.737 10.5 L 45.537 18.1 L 43.337 10.8 C 43.237 10.3 42.737 10 42.337 10 L 38.637 10 C 38.237 10 37.837 10.4 38.037 10.9 L 42.137 23 L 38.237 28.4 C 37.937 28.8 38.237 29.4 38.737 29.4 L 42.437 29.4 C 42.837 29.4 43.137 29.2 43.337 28.9 L 55.837 10.9 C 56.137 10.6 55.837 10 55.337 10 Z">
                                                                </path>
                                                                <path fill="#009cde"
                                                                    d="M 67.737 2.8 L 59.937 2.8 C 59.437 2.8 58.937 3.2 58.837 3.7 L 55.737 23.6 C 55.637 24 55.937 24.3 56.337 24.3 L 60.337 24.3 C 60.737 24.3 61.037 24 61.037 23.7 L 61.937 18 C 62.037 17.5 62.437 17.1 63.037 17.1 L 65.537 17.1 C 70.637 17.1 73.637 14.6 74.437 9.7 C 74.737 7.6 74.437 5.9 73.437 4.7 C 72.237 3.5 70.337 2.8 67.737 2.8 Z M 68.637 10.1 C 68.237 12.9 66.037 12.9 64.037 12.9 L 62.837 12.9 L 63.637 7.7 C 63.637 7.4 63.937 7.2 64.237 7.2 L 64.737 7.2 C 66.137 7.2 67.437 7.2 68.137 8 C 68.637 8.4 68.737 9.1 68.637 10.1 Z">
                                                                </path>
                                                                <path fill="#009cde"
                                                                    d="M 90.937 10 L 87.237 10 C 86.937 10 86.637 10.2 86.637 10.5 L 86.437 11.5 L 86.137 11.1 C 85.337 9.9 83.537 9.5 81.737 9.5 C 77.637 9.5 74.137 12.6 73.437 17 C 73.037 19.2 73.537 21.3 74.837 22.7 C 75.937 24 77.637 24.6 79.537 24.6 C 82.837 24.6 84.737 22.5 84.737 22.5 L 84.537 23.5 C 84.437 23.9 84.737 24.3 85.137 24.3 L 88.537 24.3 C 89.037 24.3 89.537 23.9 89.637 23.4 L 91.637 10.6 C 91.637 10.4 91.337 10 90.937 10 Z M 85.737 17.2 C 85.337 19.3 83.737 20.8 81.537 20.8 C 80.437 20.8 79.637 20.5 79.037 19.8 C 78.437 19.1 78.237 18.2 78.437 17.2 C 78.737 15.1 80.537 13.6 82.637 13.6 C 83.737 13.6 84.537 14 85.137 14.6 C 85.737 15.3 85.937 16.2 85.737 17.2 Z">
                                                                </path>
                                                                <path fill="#009cde"
                                                                    d="M 95.337 3.3 L 92.137 23.6 C 92.037 24 92.337 24.3 92.737 24.3 L 95.937 24.3 C 96.437 24.3 96.937 23.9 97.037 23.4 L 100.237 3.5 C 100.337 3.1 100.037 2.8 99.637 2.8 L 96.037 2.8 C 95.637 2.8 95.437 3 95.337 3.3 Z">
                                                                </path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="ref-standard-payment-buttons">
                                                        <div class="ref-button ref-payment-button button-demo-payment"
                                                            data-method="custom" data-payment-id="1137928518">Bank
                                                            Transfer</div>
                                                        <div class="ref-button ref-payment-button button-demo-payment"
                                                            data-method="stripe">Credit Card</div>
                                                        <div class="ref-button ref-payment-button button-demo-payment"
                                                            data-method="stripe">Apple Pay / Google Pay</div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="ref-instructions" style="display: none;">
                                                <div class="ref-heading ref-payment-method-name"></div>
                                                <div class="ref-payment-method-instructions"></div>
                                            </div>
                                            <div class="ref-links"><a href="https://google.com" target="_blank">Terms
                                                    &amp; Conditions</a><a href="https://google.com"
                                                    target="_blank">Privacy Policy</a><a href="https://google.com"
                                                    target="_blank">Refund Policy</a></div>
                                        </div>
                                        <div class="ref-checkout-summary">
                                            <div class="ref-heading">Order Summary</div>
                                            <div class="ref-products">
                                                <div class="ref-product" data-id="494001057">
                                                    <div class="ref-product-col"><img class="ref-product-photo"
                                                            src="https://cdn.bootstrapstudio.io/products/product-21_sm.jpg"
                                                            alt="Vintage Clock" />
                                                        <div>
                                                            <div class="ref-product-name">Vintage Clock</div>
                                                            <div class="ref-product-secondary">$20.41 x 2</div>
                                                            <div class="ref-product-personalization-holder"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="ref-product-total">$40.82</div>
                                                    </div>
                                                </div>
                                                <div class="ref-product" data-id="2095884274"
                                                    data-variant_id="199976733_s">
                                                    <div class="ref-product-col"><img class="ref-product-photo"
                                                            src="https://cdn.bootstrapstudio.io/products/product-18_sm.jpg"
                                                            alt="Reusable Cup (S)" />
                                                        <div>
                                                            <div class="ref-product-name">Reusable Cup (S)</div>
                                                            <div class="ref-product-secondary">$46.03 x 1</div>
                                                            <div class="ref-product-personalization-holder"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="ref-product-total">$46.03</div>
                                                    </div>
                                                </div>
                                                <div class="ref-product" data-id="2095884274"
                                                    data-variant_id="199976733_m">
                                                    <div class="ref-product-col"><img class="ref-product-photo"
                                                            src="https://cdn.bootstrapstudio.io/products/product-18_sm.jpg"
                                                            alt="Reusable Cup (M)" />
                                                        <div>
                                                            <div class="ref-product-name">Reusable Cup (M)</div>
                                                            <div class="ref-product-secondary">$46.03 x 1</div>
                                                            <div class="ref-product-personalization-holder"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="ref-product-total">$46.03</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="ref-coupon-code">
                                                <div class="ref-coupon-container">
                                                    <div class="ref-coupon-input-holder"><input id="ref-coupon-input"
                                                            class="ref-form-control" name="coupon-code" type="text"
                                                            maxlength="32" autocomplete="off"
                                                            placeholder="Enter coupon or promo code" /><span
                                                            class="ref-coupon-input-clear" title="Clear">✕</span></div>
                                                    <div class="ref-button ref-button-success ref-add-code inactive">
                                                        Apply</div>
                                                </div>
                                                <div class="ref-validation-error"></div>
                                            </div>
                                            <hr style="display: block;" />
                                            <div class="ref-totals">
                                                <div class="ref-subtotal">
                                                    <div class="ref-row"><span>Subtotal</span><span>$132.88</span></div>
                                                </div>
                                                <div class="ref-applied-coupon" style="display: none;">
                                                    <div class="ref-row">
                                                        <div class="ref-row"><span></span><span
                                                                class="ref-remove-coupon">Remove</span></div>
                                                        <span></span>
                                                    </div>
                                                    <div class="ref-applied-coupon-error"></div>
                                                </div>
                                                <div class="ref-shipping" style="display: block;">
                                                    <div class="ref-row"><span>Shipping (Worldwide Flat
                                                            Rate)</span><span>$0.00</span></div>
                                                </div>
                                                <div class="ref-taxes" style="display: none;">
                                                    <div class="ref-row"><span></span><span></span></div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="ref-total">
                                                <div class="ref-row"><span>Total</span><span>$132.88</span></div>
                                                <div class="ref-total-note">All prices are in USD</div>
                                            </div>
                                        </div>
                                        <div class="ref-summary-toggle ref-field-collapsible"><span
                                                class="ref-field-toggle"><span class="ref-field-toggle-title">Show
                                                    Summary</span><span class="ref-summary-total">$132.88</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="assets/js/theme.js"></script>
</body>

</html>