@extends('layouts.app')
<script src="https://js.stripe.com/v3/"></script>
<style>
    h1.checkout-heading {
        margin-top: 40px;
    }

    .checkout-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
    / / grid-column-gap: 10 px;
        grid-gap: 30px;
        margin: 40px auto 80px;
    }

    .checkout-table-container {
        margin-left: 404px;
        float:right;
        position:absolute;
        top: 50px;
        right: -420px;
    }

    .order-h2 {
        margin-bottom: 28px;
        color: darkgray;
        font-size: 25px;
    }

    .checkout-table-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid;
        padding: 14px 0;
    }


    .checkout-table-row-left, .checkout-table-row-right {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .checkout-table-row-left {
        width: 75%;
    }

    .checkout-table-row-right {
    // width: 24%;
    // padding-top: 10px;
    }

    .checkout-table-price {
        padding-top: 6px;
    }


    .checkout-totals {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid;
        padding: 18px 0;
        line-height: 2;
    }

    .checkout-totals-right {
        text-align: right;
    }

    .checkout-totals-total {
        font-weight: bolder;
        font-size: 22px;
        line-height: 2.2;
    }

    .StripeElement {
        background-color: white;
        padding: 16px 16px;
        border: 1px solid #ccc;

    }

    .StripeElement--focus {
    // box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

    #card-errors {
        color: #fa755a;
    }
</style>
@section('content')
    <div class="col-md-7 col-sm-12 p-0 box">
        <div class="card rounded-0 border-0 card2" id="paypage">
            <div class="form-card">
                <h2 id="heading2" class="card-title" style="color: darkgray;">Payment Method </h2><br>
                <form action="{{ route('checkout-store') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <label for="email">Email Address</label>
                    @if (auth()->user())
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                    @else
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @endif
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <label class="pay">Name on Card</label>
                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    <div class="form-group">
                        <label class="col-form-label" for="card-element">
                            Credit or debit card
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display Element errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>
                    <button type="button" class="button-primary full-width"><a href="{{ route('shopping-cart') }}" style="color:black;">Back to Cart</a></button>
                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>
                </form>
                <div class="checkout-table-container">
                    <h2 class="order-h2 card-title">Your Order</h2>

                    <div class="checkout-table">
                        @foreach (Cart::content() as $item)
                            <div class="checkout-table-row">
                                <div class="checkout-table-row-left">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                                                  src="https://www.cnet.com/a/img/soqWZZN3F4TLP33JL7bjeWnbtF0=/470x836/2021/01/05/c038963b-027d-40e5-a158-2d0d0617b4e3/black-widow-marvel-poster-crop.jpg"
                                                                                  style="width: 120px; height: 120px;"> </a>
                                    <div class="checkout-item-details">
                                        <div class="checkout-table-item">{{ $item->model->title }}</div>

                                    </div>
                                </div> <!-- end checkout-table -->

                                <div class="checkout-table-row-right">
                                    <div class="checkout-table-price">{{ '$' . $item->model->rentalPrice }}</div>                                </div>
                            </div> <!-- end checkout-table-row -->
                        @endforeach

                    </div> <!-- end checkout-table -->

                    <div class="checkout-totals">
                        <div class="checkout-totals-right">
                            <span class="checkout-totals-total"><span>Total: </span>{{ '$' . Cart::total() }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script>
        (function(){
            var stripe = Stripe('pk_test_51ItfstFz7LNCofGp9uY4O5GIeqQtzfor2y40t6e4rvnbDVifgmvhIGG12gKPulQwvJBs2Cz4dZdIwAgzVVvuXcgE007cirW7FL');

            var elements = stripe.elements();

            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
            card.mount('#card-element');
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                document.getElementById('complete-order').disabled = true;
                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('province').value,
                    address_zip: document.getElementById('postalcode').value
                }
                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        document.getElementById('complete-order').disabled = false;
                    } else {
                        stripeTokenHandler(result.token);
                    }
                });
            });
            function stripeTokenHandler(token) {
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        })();
    </script>
@endsection

