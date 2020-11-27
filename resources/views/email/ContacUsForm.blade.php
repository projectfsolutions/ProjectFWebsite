@component('mail::message')
# Inquiry Mail

<strong>Company: </strong> {{ $data['company'] }}
<br>
<strong>Email: </strong> {{ $data['email'] }}
<br>
<strong>Contact No.: </strong> {{ $data['contact'] }}

<strong>Message:</strong><br>
{{ $data['message'] }}

Thanks regards,<br>
<strong>{{ $data['name'] }}</strong>

@endcomponent
