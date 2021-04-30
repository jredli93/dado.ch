@component('mail::message')
    # Dobrodošli,

    Podaci o rezervaciji termina:
    Service type: {{$data->serviceType->service_name}}
    Name: {{$data->name}}
    Email: {{$data->email}}
    Date: {{$data->date}}
    Time: {{$data->time}}
    Phone number: {{$data->phone}}
    Comment: {{$data->comment}}

    Hvala na ukazanom poverenju,
    DadoTattoo
@endcomponent
