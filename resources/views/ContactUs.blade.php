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
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label for="inpName">Name</label>
                        <input type="text" class="form-control" id="inpName">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="inpEmail">Email</label>
                        <input type="email" class="form-control" id="inpEmail">
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="inpContact">Contact Number</label>
                        <input type="text" class="form-control" id="inpContact">
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="inpCompany">Company/Institution</label>
                        <input type="text" class="form-control" id="inpCompany">
                    </div>

                    <div class="form-group col-lg-12">
                        <label for="inpMsg">Message</label>
                        <textarea type="text" class="form-control" id="inpMsg"></textarea>
                    </div>

                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
