<section class="tattoo-content-wrap">

    <div style="margin-left: 400px; margin-right: 400px">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
        <input id="id" type="hidden" value="{{$id}}">
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    </div>

    <script>

        $(document).on('click',".fc-day",function(){

            let date = $(this).data('date');
            var service_type_id = $('#id').val();

            $.ajax({
                type: "POST",
                url: '/reservations/free/dates',
                data: { date, service_type_id, "_token": $('#csrf-token')[0].content },
                success: function (response) {
                    console.log(response)
                },
                error: function () {
                },
            });
        });

    </script>
</section>
