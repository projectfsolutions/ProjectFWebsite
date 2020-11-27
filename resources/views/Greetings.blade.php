@extends('layouts.fLayout')

@section('content')

<section class="greet-sec text-center">
    <div class="container">
        <div class="greet-icon container">
            <img src="img/check.png" alt="">
        </div>

        <div class="greet-hd container">
            <h1>THANK YOU!</h1>
        </div>

        <div class="greet-text container">
            <p>Your submission is received and we will contact you soon.</p>
        </div>

        <a class="btn btn-success btn-lg" href="/HomePage" role="button">Back to Homepage</a>
    </div>
</section>

@endsection
