@component('mail::message')

Please Comfirme Your Booking!

@component('mail::button', ['url' => route('roomdetails', ['Rent_House_ID' => $bookroom->rent_house_id]) ])
See Your Booking Room
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
