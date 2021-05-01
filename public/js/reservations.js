$(document).on('click',".fc-day",function(){

    let date = $(this).data('date');
    var service_type_id = $('#id').val();
    let reservationSlots = $(".reservation-slots");
    let reservationSlot = ''

    $.ajax({
        type: "POST",
        url: '/reservations/free/dates',
        data: { date, service_type_id, "_token": $('#csrf-token')[0].content },
        success: function (response) {
            reservationSlots.innerHtml = '';
            $.each(response, function (index) {
                reservationSlot += `<div class="reservation-slot" data-slot=${response[index]}>${response[index]}</div>`;
            })
            reservationSlots.html(reservationSlot);
        },
        error: function () {
        },
    });
});

localStorage.setItem("service_type_id", window.location.pathname.split("/").pop());

$(document).on('click', ".reservation-slot", function () {
    localStorage.setItem("time", this.dataset.slot);
});

$(document).on('click', ".form-submit", function () {
    let time = localStorage.getItem('time');
    let service_type_id = localStorage.getItem('service_type_id');
    let phone = $('.contact-phone').val();
    let email = $('.contact-email').val();
    let comment = $('.contact-ta').val();
    let fullname = $('.contact-name').val();
    let date = "2021-02-22"

    $.ajax({
        type: "POST",
        url: '/reservations/create',
        data: {
            time,
            service_type_id,
            phone,
            comment,
            fullname,
            email,
            date,
            "_token": $('#csrf-token')[0].content
        },
        success: function (response) {
            console.log(`response`, response)
        },
        error: function () {
        },
    });
});