$(function () {

    var site = location.host;

    var month_s = 5;
    var day_s = 2;

    // console.log(site);
    var note = $('#note'),
        day_s = day_s+2;
    if (day_s == 16) {
        day_s = 8;
    }
    ts = new Date(2018, month_s, day_s),
        newYear = true;
    console.log(ts);
    var year = 2018;
    var month = ts.getUTCMonth();
    var day = ts.getUTCDate();
    if ((month == 00) || (month == 0)) {
        month = 11;
    }
    else {
        month -= 1;
    }
    ts = new Date(year, month, day);

    console.log(year, month, day);

    if ((new Date()) > ts) {
        // Задаем точку отсчета для примера. Пусть будет очередной Новый год или дата через 10 дней.
        ts = (new Date()).getTime();
        newYear = false;
    }
    console.log(ts);
    //console.log(new Date(year, month, day));
    $('#countdown').countdown({
        timestamp: ts,
        callback: function (days, hours, minutes, seconds) {
            var message = "";
            message += "Дней: " + days + ", ";
            message += "часов: " + hours + ", ";
            message += "минут: " + minutes + " и ";
            message += "секунд: " + seconds + " <br />";

            if (newYear) {
                message += "осталось до Нового года!";
            }
            else {
                message += "осталось до повышения";
            }

            note.html(message);
        }
    });
    var count_second = $('span.countDays').children('span.position:last').children('span').html();
    var count_first = $('span.countDays').children('span.position:first').children('span').html();
    var text_before = $('span.count_before').html();


    if ((count_first > 0) && (count_second > 5)) {
        $('span.count_after').append('дней');
    }

    else if (((count_first == 0) || (count_first == 2)) && (count_second == 1)) {
        $('span.count_after').append('день');

    }
    else if ((count_first == 0) && (count_second <= 4) && (count_second >= 1)) {
        $('span.count_after').append('дня');

    }
    else if ((count_first == 0) && (count_second == 0)) {
        $('div#countdown').css('display', 'none');
    }
    else {
        $('span.count_after').append('дней');
    }
    if ((text_before == 'осталось') && (count_first == 0) && (count_second == 1)) {

        $('span.count_before').empty();
        $('span.count_before').append('остался');
    }


    $('span.position:first').css('margin-right', '7px');


});