<section class="tattoo-content-wrap">

    <div style="margin-left: 400px; margin-right: 400px">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
        <input id="id" type="hidden" value="{{$id}}">
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    </div>
    <div class="reservation-info">
        <span class="reservation-info-disclaimer">Für Terminabsagen behalten wir uns vor eine Umtriebsentschädigung in Rechnung
                    zu stellen.</span>
        <a href="{{ URL::route('form') }}" class="reservation-info-btn">Book</a>
        <div class="reservation-slots"></div>
    </div>
</section>
