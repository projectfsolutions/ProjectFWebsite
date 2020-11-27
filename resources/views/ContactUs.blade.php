@extends('layouts.fLayout')

@section('content')

<section class="contactus-sec">
    <div class="contactus-main-div container">
        <div class="row">
            <div class="contactus-info container col-lg-6 text-center">
                <div class="container contactus-hd">
                    <h1>Let's Get In Touch!</h1>
                    <hr>
                </div>

                <div class="contactus-msg container">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>

                <div class="contactus-details container row">

                    <div class="col-lg-12">
                        <i class="fas fa-phone fa-lg"></i>

                        <p>Globe:(0905)137-9350<br>
                            Smart:(0930)563-5500
                        </p>
                    </div>

                    <div class="col-lg-12">
                        <i class="fas fa-envelope fa-lg"></i>
                        <p>inquiries@projectfsoftwaresolutions.net</p>
                    </div>
                </div>
            </div>

            <div class="contactus-mail container col-lg-6">
                <form action="/sendMail" method="POST">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="inpName">Name</label>
                            <input type="text" name="name" class="form-control" id="inpName" value="">
                            <small class="error-text">{{ $errors->first('name') }}</small>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="inpEmail">Email</label>
                            <input type="email" name="email" class="form-control" id="inpEmail" value="">
                            <small class="error-text">{{ $errors->first('email') }}</small>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="inpContact">Contact Number</label>
                            <input type="text" name="contact" class="form-control" id="inpContact" value="">
                            <small class="error-text">{{ $errors->first('contact') }}</small>
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="inpCompany">Company/Institution</label>
                            <input type="text" name="company" class="form-control" id="inpCompany" value="">
                            <small class="error-text">{{ $errors->first('company') }}</small>
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="inpMsg">Message</label>
                            <textarea type="text" name="message" class="form-control" id="inpMsg"></textarea>
                            <small class="error-text">{{ $errors->first('message') }}</small>
                        </div>

                        @csrf

                        <input class="btn btn-primary" type="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
