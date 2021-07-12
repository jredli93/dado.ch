$(document).on('click',".fc-day",function(){

    let date = $(this).data('date');
    let service_type_id = $('#serviceTypeId').val();
    let reservationSlots = $(".reservation-slots");
    let reservationSlot = ''
    localStorage.setItem('date', date);

    let userRoleName = $('#userRoleName')[0].content;

    $.ajax({
        type: "POST",
        url: '/reservations/free/dates',
        data: { date, service_type_id, "_token": $('#csrf-token')[0].content },
        success: function (response) {
            reservationSlots.innerHtml = '';
            $.each(response, function (index) {
                reservationSlot += `<div class="reservation-slot" data-slot=${response[index]}>${response[index]}</div>`;
                if (userRoleName && userRoleName == 'Super Admin'){
                    reservationSlot += `<a href="#" id="blockTermin" data-id="${index}" class="reservation-info-btn fb-like${index}">Block Termin</a>`
                }
            })
            reservationSlots.html(reservationSlot);
        },
        error: function () {
        },
    });
});

$(document).on('click', ".reservation-slot", function () {
    localStorage.setItem("time", this.dataset.slot);
});

$(document).on('click', "#blockTermin", function () {

    let prevDiv = $(this).prev("div")[0]
    let time = prevDiv.dataset.slot;
    let fullDate = localStorage.getItem('date');
    let blockButton = $( ".fb-like" + $(this)[0].dataset.id);
    let serviceTypeId = $('#serviceTypeId').val();

    $.ajax({
        type: "POST",
        url: '/admin/block',
        data: { fullDate, time, serviceTypeId, "_token": $('#csrf-token')[0].content },
        success: function (response) {
            prevDiv.remove();
            blockButton.remove();
        },
        error: function () {
        },
    });

});

$('.time-slot-reservation').on('click', function () {
    localStorage.setItem("service-type-id", $(this).data('service'));
})


$(document).on('click', ".form-submit", function () {
    let time = localStorage.getItem('time');
    let date = localStorage.getItem('date');
    let service_type_id = $('.serviceTypeId').val();
    let phone = $('.contact-phone').val();
    let email = $('.contact-email').val();
    let comment = $('.contact-ta').val();
    let fullname = $('.contact-name').val();

    $.ajax({
        type: "POST",
        url: '/reservations/create',
        data: {
            name: fullname,
            time,
            service_type_id,
            phone,
            comment,
            email,
            status: 'Active',
            date,
            "_token": $('#csrf-token')[0].content
        },
        success: function (res) {
            console.log('res: ', res)
            localStorage.removeItem('date');
            localStorage.removeItem('time');
            localStorage.removeItem('service-type-id');
        },
        error: function (err) {
            console.log('err: ' ,err)
        },
    });
});
