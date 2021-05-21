@extends('layouts.app')
<script src="https://js.stripe.com/v3/"></script>
@section('content')
    <div class="col-md-7 col-sm-12 p-0 box">
        <div class="card rounded-0 border-0 card2" id="paypage">
            <div class="form-card">
                <h2 id="heading2" class="text-danger" style="margin-left: 190px;">Payment Method </h2><br>
                <div class="radio-group" style="margin-left: 100px;">
                    <div class='radio' data-value="credit">
                        <img
                            src="{{ asset('img/visa.jpg') }}"
                            width="200px" height="60px">
                    </div>
                    <div class='radio' data-value="paypal">
                        <img
                            src="{{ asset('img/paypal.jpg') }}"
                            width="200px" height="60px"></div>
                    <br>
                </div>
                <label class="pay">Name on Card</label> <input type="text" name="holdername" placeholder="John Smith">
                <div class="form-group">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><input type="submit" value="PAY &nbsp; &#xf178;"
                                                 class="btn btn-info placeicon"></div>
                    <div class="col-md-6"><h3>Total: 000.000</h3></div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var style = {
        base: {
            // Add your base input styles here. For example:
            fontSize: '16px',
            color: '#32325d',
        },
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the customer that there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>
