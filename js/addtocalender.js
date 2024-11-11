$(".addToCal").on("click", function() {
    $(".addToCalOptions").toggleClass("open");
});

$(".addToCalOptions a").on("click", function() {
    var $this = $(this),
        data = $this.closest(".container").find("button").data("ace"),
        type = $this.data("type"),
        url = "";
    // console.log( data );
    console.log(type);
    switch (type) {
        case "google":
            url = getUrl_google(data);
            break;
        case "yahoo":
            url = getUrl_yahoo(data);
            break;
        case "hotmail":
            url = getUrl_hotmail(data);
            break;
        case "ics":
            url = getUrl_ics(data);
            window.open("data:text/calendar;charset=utf8," + escape(url));

            break;
        default:
            break;
    }
    console.log(url);
    window.open(url, '_blank');
});


function getUrl_google(data) {
    var url = 'https://www.google.com/calendar/event?action=TEMPLATE';
    url += '&text=' + encodeURIComponent(data.title);
    url += '&details=' + encodeURIComponent(data.desc);
    url += '&location=' + encodeURIComponent(data.location);
    url += '&dates=' + encodeURIComponent(_getUTCTime(data.time.start, data.time.zone) + '/' + _getUTCTime(data.time.end, data.time.zone)); // time needs to be sent as UTC and let Google handle converting to local
    url += '&sprop=website:' + encodeURIComponent(data.url);
    url += '&sprop=name:' + encodeURIComponent(data.organizer.name);
    return url;
}

function getUrl_yahoo(data) {
    var url = 'http://calendar.yahoo.com?v=60';
    url += '&TITLE=' + encodeURIComponent(data.title);
    url += '&DESC=' + encodeURIComponent(data.desc);
    url += '&URL=' + encodeURIComponent(data.url);
    url += '&in_loc=' + encodeURIComponent(data.location);
    url += '&ST=' + _getUTCTime(data.time.start, data.time.zone);
    url += '&DUR=' + _getDateDiff(data.time.start, data.time.end);
    return url;
}

function getUrl_hotmail(data) {
    var url = 'https://bay02.calendar.live.com/calendar/calendar.aspx?rru=addevent';
    url += '&dtstart=' + _getUTCTime(data.time.start, data.time.zone);
    url += '&dtend=' + _getUTCTime(data.time.end, data.time.zone);
    url += '&summary=' + encodeURIComponent(data.title);
    url += '&location=' + encodeURIComponent(data.location);
    url += '&description=' + encodeURIComponent(data.desc);
    url += '&allday=' + "false";
    url += '&uid=' + "";
    return url;
}

function getUrl_ics(data) {
    var url = 'BEGIN:VCALENDAR\nVERSION:2.0\nPRODID:-//Our Company//NONSGML v1.0//EN\nBEGIN:VEVENT\nUID:me@google.com\nDTSTAMP:20120315T170000Z\nATTENDEE;CN=My Self ;RSVP=TRUE:MAILTO:me@gmail.com\nORGANIZER;CN=Me:MAILTO::me@gmail.com';
    url += '&nDTSTART=' + _getUTCTime(data.time.start, data.time.zone);
    url += '&nDTEND=' + _getUTCTime(data.time.end, data.time.zone);
    url += '&nSUMMARY=' + encodeURIComponent(data.title);
    url += '&nLOCATION=' + encodeURIComponent(data.location);

    return url;


}



function _getUTCTime(dateObj, zone) {
    var newDateObj = _adjustToUTC(dateObj, zone);
    return _getDatePart(newDateObj.getFullYear(), 4) + _getDatePart(newDateObj.getMonth() + 1, 2) + _getDatePart(newDateObj.getDate(), 2) + 'T' + _getDatePart(newDateObj.getHours(), 2) + _getDatePart(newDateObj.getMinutes(), 2) + _getDatePart(newDateObj.getSeconds(), 2) + 'Z';
}


function _getDatePart(part, digits) {
    part = part.toString();
    while (part.length < digits) {
        part = '0' + part;
    }
    return part;
}

function _adjustToUTC(dateObj, zone) {
    var dateOut = new Date(dateObj),
        hours, mins;

    if (isNaN(dateOut.getTime())) {
        return new Date();
    }

    // adjust to UTC
    hours = zone.substring(1, 3);
    mins = zone.substring(4, 6);
    if (zone.substring(0, 1) === '-') {
        dateOut.setHours(dateOut.getHours() + (hours - 0));
        dateOut.setMinutes(dateOut.getMinutes() + (mins - 0));
    } else {
        dateOut.setHours(dateOut.getHours() - hours);
        dateOut.setMinutes(dateOut.getMinutes() - mins);
    }
    return dateOut;
}

function _getDateDiff(startDate, endDate) {
    var diff = Math.floor((endDate - startDate) / 60000),
        hours = Math.floor(diff / 60),
        mins = diff - (hours * 60);
    return this._getDatePart(hours, 2) + this._getDatePart(mins, 2);
}