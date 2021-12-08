@extends('layouts.app')

@section('title', 'Checkout')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Check out</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
{{-- <div class="single-product-area"> --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <h3 id="order_review_heading">Your order</h3>
                        <div id="order_review" style="position: relative;">
                            <table class="shop_table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Detail</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">Product Name <strong class="product-quantity">×
                                                5</strong> </td>
                                        <td class="product-total">
                                            <span class="amount">$15.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>

                                    <tr class="cart-subtotal">
                                        <td class="product-name"><strong>Subtotal</strong></td>
                                        <td><span class="amount">$15.00</span>
                                        </td>
                                    </tr>

                                    <tr class="shipping">
                                        <td class="product-name"><strong>Shipping</strong></td>
                                        <td><span class="amount">Free Shipping</span>
                                        </td>
                                    </tr>


                                    <tr class="order-total">
                                        <td class="product-name"><strong>Total</strong></td>
                                        <td><span class="amount">$15.00</span>
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <button type="button" class="btn btn-primary btn-lg">Place Order</button>
            </div>
        </div>

    </div>
    @endsection