$(document).on('click', '.start', function () {
    $.ajax({
        url: '/warming-up/countdown-start',
        type: 'get',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (response) {
            let time_start = new Date();
            let taskContent = '<div class="task_content_inner card">'
                + '<div class="card-body">'
                + '<p class="card-text">' + response.task + '</p>'
                + '<p data-time="' + time_start + '" class="time_start d-none"></p>'
                + '<button type="button" class="btn btn-primary close_task">' + response.button + '</button>'
                + '</div>'
                + '</div>';
            $('#task_content').append(taskContent);
        },
        error: function (response) {
            console.log('Error:', response);
        }
    });
});

$(document).on('click', '.close_task', function () {

    let time_start = new Date($(this).parent().find('.time_start').attr('data-time')),
        time_end = new Date(),
        time_start_sc = (time_start.getMinutes() * 60) + time_start.getSeconds(),
        time_end_sc = (time_end.getMinutes() * 60) + time_end.getSeconds(),
        inner = $(this).closest('.task_content_inner');

    alert('Вы прошли это задание за: ' + Math.ceil(time_end_sc - time_start_sc) + 'сек.');
    inner.remove();
});
