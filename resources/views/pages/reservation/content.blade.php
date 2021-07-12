<section class="tattoo-content-wrap">

    <div style="margin-left: 400px; margin-right: 400px">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
        <input id="serviceTypeId" type="hidden" value="{{$id}}">
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-token" id="userRoleName" content="{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->role->name : false}}">
    </div>
    <div class="reservation-info">
        <span class="reservation-info-disclaimer">Für Terminabsagen behalten wir uns vor eine Umtriebsentschädigung in Rechnung
                    zu stellen.</span>
        <a href="{{route('form', $id)}}" class="reservation-info-btn">Book</a>
        <div class="reservation-slots"></div>
    </div>
</section>
