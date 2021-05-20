@extends('layouts.app')
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
                <div class="row">
                    <div class="col-8 col-md-6"><label class="pay">Card Number</label> <input type="text" name="cardno"
                                                                                              id="cr_no"
                                                                                              placeholder="0000-0000-0000-0000"
                                                                                              minlength="19"
                                                                                              maxlength="19"></div>
                    <div class="col-4 col-md-6"><label class="pay">CVC</label> <input type="password" name="cvcpwd"
                                                                                      placeholder="&#9679;&#9679;&#9679;"
                                                                                      class="placeicon" minlength="3"
                                                                                      maxlength="3"></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><label class="pay">Expiration Date</label></div>
                    <div class="col-md-12"><input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5"
                                                  maxlength="5"></div>
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
