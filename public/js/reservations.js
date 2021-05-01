$(document).on('click',".fc-day",function(){

    let date = $(this).data('date');
    var service_type_id = $('#id').val();
    let reservationSlots = $(".reservation-slots");

    $.ajax({
        type: "POST",
        url: '/reservations/free/dates',
        data: { date, service_type_id, "_token": $('#csrf-token')[0].content },
        success: function (response) {
            $.each(response, function (index) {
                // reservationSlot.append(
                //     `<div class="reservation-slot">${response[index]}</div`
                // )
            })

            reservationSlots.innerHtml = "testing";
        },
        error: function () {
        },
    });
});