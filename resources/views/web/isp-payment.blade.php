@extends('web.layouts.main')
@section('page_title','ISP - Isp-Payment')
@section('content')
    <!-- Isp-portal start -->

    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/portal-bg1.png')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">ISP Payment </h1>
                                            <p>For help, please email <a
                                                    href="mailto:admin@isphomestays.com">admin@isphomestays.com</a> or
                                                call 650-947-8879.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
    <!-- sec start  -->
    <section class="Portal2_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 centerCol">
                    <div class="Portal_2heading">
                    <h4>Credit Card</h4>
                    </div>
                    <form role="form" action="{{route('web_stripe_post',$user->id,$price)}}" method="post"
                          class="require-validation" data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class='form-row row portal-fild'>
                            <input type="text" id="finaltotal" name="finaltotal" value="0" hidden/>
                            <div class='col-md-12 col-sm-12 col-xs-12 form-group required'>
                                <div class="my_re">
                                    <label class='control-label'>Name on Card</label>
                                    <input class='form-control' size='4' type='text' id="name">
                                </div>
                            </div>
                        </div>
                        <div class='form-row row portal-fild'>
                            <div class='col-md-12 col-sm-12 col-xs-12 form-group '>
                                <div class="my_re">
                                    <label class='control-label'>Card Number</label>
                                    <input autocomplete='off' class='form-control card-number' maxlength="16" size='20'
                                           type='text' id="cart_no">
                                </div>
                            </div>
                        </div>

                        <div class="my_re portal-fild">
                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                    class='form-control card-cvc'
                                                                                    placeholder='ex. 311' maxlength="3"
                                                                                    type='password' id="cvc">
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' maxlength="2" placeholder='MM' size='2'
                                        type='text' id="e_month">
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' maxlength="4" placeholder='YYYY' size='4'
                                        type='text' id="e_year">
                                </div>
                            </div>
                        </div>

                        <div class='form-row row portal-fild'>
                            <div class='col-md-12 error form-group d-none'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="agreedcheck">
                                    <label class="form-check-label" for="agreedcheck">
                                        I Agreed to the Terms.
                                    </label>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 sign_btn portal-button my-pull-left">

                                <button id="paynow" class="btn  btn-lg btn-block" type="submit" onClick="myFunction()">
                                    Pay
                                    Now
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 centerCol">
                    <div class="order_table mytabstyle">
                        <div class="Portal_2heading">
                        <h4>Payment Invoice</h4>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>{{$invoice_title}}</td>
                            </tr>
                            <tr>
                                <th>Student Name</th>
                                <td>{{$user->username}}</td>
                            </tr>
                            <tr>
                                <th>Payment Amount</th>
                                <td>${{number_format($price,2)}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec end  -->

    <div class="preloader d-none" id="test">
        <img src="{{asset('web/images/loader.gif')}}" alt="loader" class="img-fluid">
    </div>

    <!-- isp portal end -->
    @push('js')

        <!-- For stripe -->
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script>

            function myFunction() {
                $('.preloader').removeClass('d-none').addClass('d-block');
            }


            $(function () {
                var $form = $(".require-validation");
                $('form.require-validation').bind('submit', function (e) {
                    var $form = $(".require-validation"),
                        inputSelector = ['input[type=email]',
                            'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'
                        ].join(', '),
                        $inputs = $form.find('.required').find(
                            inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid = true;
                    $errorMessage.addClass('hide');

                    $('.has-error').removeClass('has-error');
                    $inputs.each(function (i, el) {
                        var $input = $(el);
                        if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorMessage.removeClass('hide');
                            e.preventDefault();
                        }
                    });

                    if (!$form.data('cc-on-file')) {
                        e.preventDefault();
                        Stripe.setPublishableKey($form.data(
                            'stripe-publishable-key'));
                        Stripe.createToken({
                            number: $('.card-number').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month')
                                .val(),
                            exp_year: $('.card-expiry-year').val()
                        }, stripeResponseHandler);
                    }
                });
                $('#paynow').prop('disabled', true);
                $('#agreedcheck').click(function () {
                    let checkvalues = false;
                    if ($('#name').val() == '' ||
                        $('#cart_no').val() == '' ||
                        $('#cvc').val() == '' ||
                        $('#e_month').val() == '' ||
                        $('#e_year').val() == ''
                    ) {
                        checkvalues = false;
                        $('#agreedcheck').prop('checked', false);
                    } else {
                        checkvalues = true;
                    }
                    if (checkvalues == true) {
                        if ($(this).is(':checked')) {
                            $('#paynow').prop('disabled', false);
                        } else {
                            $('#paynow').prop('disabled', true);
                        }
                    } else {
                        alert('Fill all input fields');
                    }
                });


                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        $('.error').removeClass('d-none').find('.alert').text(response.error.message);
                        $('.preloader').removeClass('block').addClass('d-none');
                    } else {
                        // token contains id, last4, and card type
                        var token = response['id'];
                        // insert the token into the form so it gets submitted to the server
                        $form.find('input[type=text]').empty();
                        $form.append(
                            "<input type='hidden' name='stripeToken' value='" +
                            token + "'/>");
                        $form.get(0).submit();
                    }
                }

            });
        </script>
    @endpush

@endsection
