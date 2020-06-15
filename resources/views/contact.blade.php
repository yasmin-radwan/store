@extends('layouts.master')
@section('title')
    Contact Us Page
@stop

@section('content')
    <!-- Page Content -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            <div class="contact-form " >
                <form id="contact" method="post" >
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name"
                                       placeholder="Full Name" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <fieldset>
                                <input name="email" type="text" class="form-control" id="email"
                                       placeholder="E-Mail Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <fieldset>
                                <input name="subject" type="text" class="form-control" id="subject"
                                       placeholder="Subject" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                                  placeholder="Your Message" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="filled-button">Send Message
                                </button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
@section('jsCode')
    <script>
        $(document).ready(function () {
            $('.navbar-nav > li').removeClass("active");
            $('.contactus').addClass("active");
        });
    </script>
@endsection