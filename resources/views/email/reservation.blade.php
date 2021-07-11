@component('mail::message')
    # Dobrodošli,

    Podaci o rezervaciji termina:
    Service type: {{$data->serviceType ? $data->serviceType->service_name : 'No reservation type'}}
    Name: {{$data->name}}
    Email: {{$data->email}}
    Date: {{$data->date}}
    Time: {{$data->time}}
    Phone number: {{$data->phone}}
    Comment: {{$data->comment}}

    Hvala na ukazanom poverenju,
    DadoTattoo
@endcomponent
