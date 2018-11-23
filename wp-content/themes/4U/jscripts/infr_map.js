function infrMapall() {
    var map = new google.maps.Map(document.getElementById('infr_map_all'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
		['Магазин', 50.53002747, 30.60069998, '/wp-content/themes/4U/img/infr_icon_1b.png'],
		['Остановка', 50.52928477, 30.59279384, '/wp-content/themes/4U/img/infr_icon_2b.png'],
		['Парк', 50.52900893,  30.59235176, '/wp-content/themes/4U/img/infr_icon_3b.png'],
		['Школа', 50.53043831, 30.60428729, '/wp-content/themes/4U/img/infr_icon_4b.png'],
		['Детский садик', 50.52741143, 30.59715787, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Магазин', 50.53360216, 30.60055223, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Аптека', 50.52835001, 30.60061238, '/wp-content/themes/4U/img/icon-aptekapng.png'],
        ['Магазин', 50.53222815, 30.60207491, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Магазин', 50.53221451, 30.60819035, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Школа', 50.52668644, 30.60568095, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Почта', 50.52517881, 30.60022144, '/wp-content/themes/4U/img/icon-po4ta.png'],
        ['Аптека', 50.52410794, 30.60066132, '/wp-content/themes/4U/img/icon-aptekapng.png'],
        ['Почта', 50.53064544, 30.59405942, '/wp-content/themes/4U/img/icon-po4ta.png'],
        ['Остановка', 50.53055678, 30.59314747, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Аптека', 50.5302567, 30.59874793, '/wp-content/themes/4U/img/icon-aptekapng.png'],
        ['Магазин', 50.52635043, 30.60203045, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Остановка', 50.53104277, 30.59882642, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.52833906, 30.58656723, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.52657932, 30.59729772, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.52474437, 30.60126759, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Парк', 50.53020052,  30.60261988, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Парк', 50.52719961,  30.60580559, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Детский садик', 50.53079469, 30.59507792, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Детский садик', 50.52532896, 30.60339574, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Школа', 50.52144182, 30.60203888, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.52028901, 30.60170629, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.53208924, 30.61206049, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.52865879, 30.61464614, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Парк', 50.52198754,  30.620932, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Парк', 50.51964098,  30.58651389, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Детский садик', 50.53405541, 30.60065172, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Детский садик', 50.52690863, 30.61295624, '/wp-content/themes/4U/img/infr_icon_5b.png'],
    ];
    var marker, i;
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });
    for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            icon: locations[i][3],
            title: locations[i][0],
            zIndex: i
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
           if(i!=locations.length-1){
               infowindow.setContent(locations[i][0]);

               infowindow.open(map, marker);
               }
           }
        })(marker, i));
		markers.push(marker);
	}
}












/*--------------------------------------*/











function infrMapshop() {
    var map = new google.maps.Map(document.getElementById('infr_map_shop'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
        ['Магазин', 50.53002747, 30.60069998, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Магазин', 50.53360216, 30.60055223, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Магазин', 50.53222815, 30.60207491, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Магазин', 50.53221451, 30.60819035, '/wp-content/themes/4U/img/infr_icon_1b.png'],
        ['Магазин', 50.52635043, 30.60203045, '/wp-content/themes/4U/img/infr_icon_1b.png']
    ];
    var marker, i;
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });
    for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            icon: locations[i][3],
            title: locations[i][0],
            zIndex: i
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
           if(i!=locations.length-1){
               infowindow.setContent(locations[i][0]);

               infowindow.open(map, marker);
               }
           }
        })(marker, i));
		markers.push(marker);
	}
}

/*---------------------------------------------------*/

function infrMaphalt() {
    var map = new google.maps.Map(document.getElementById('infr_map_halt'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
        ['Остановка', 50.52928477, 30.59279384, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.53055678, 30.59314747, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.53104277, 30.59882642, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.52833906, 30.58656723, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.52657932, 30.59729772, '/wp-content/themes/4U/img/infr_icon_2b.png'],
        ['Остановка', 50.52474437, 30.60126759, '/wp-content/themes/4U/img/infr_icon_2b.png'],
    ];
    var marker, i;
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });
    for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            icon: locations[i][3],
            title: locations[i][0],
            zIndex: i
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
           if(i!=locations.length-1){
               infowindow.setContent(locations[i][0]);

               infowindow.open(map, marker);
               }
           }
        })(marker, i));
		markers.push(marker);
	}
}

/*------------------------------------------*/

function infrMappark() {
    var map = new google.maps.Map(document.getElementById('infr_map_park'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
        ['Парк', 50.52900893,  30.59235176, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Парк', 50.53020052,  30.60261988, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Парк', 50.52719961,  30.60580559, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Парк', 50.52198754,  30.620932, '/wp-content/themes/4U/img/infr_icon_3b.png'],
        ['Парк', 50.51964098,  30.58651389, '/wp-content/themes/4U/img/infr_icon_3b.png'],
    ];
    var marker, i;
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });
    for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            icon: locations[i][3],
            title: locations[i][0],
            zIndex: i
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
           if(i!=locations.length-1){
               infowindow.setContent(locations[i][0]);

               infowindow.open(map, marker);
               }
           }
        })(marker, i));
		markers.push(marker);
	}
}

/*------------------------------------------*/

function infrMapschool() {
    var map = new google.maps.Map(document.getElementById('infr_map_school'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
        ['Школа', 50.53043831, 30.60428729, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.52668644, 30.60568095, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.52144182, 30.60203888, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.52028901, 30.60170629, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.53208924, 30.61206049, '/wp-content/themes/4U/img/infr_icon_4b.png'],
        ['Школа', 50.52865879, 30.61464614, '/wp-content/themes/4U/img/infr_icon_4b.png'],
    ];
    var marker, i;
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });
    for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            icon: locations[i][3],
            title: locations[i][0],
            zIndex: i
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
           if(i!=locations.length-1){
               infowindow.setContent(locations[i][0]);

               infowindow.open(map, marker);
               }
           }
        })(marker, i));
		markers.push(marker);
	}
}


/*----------------------------------------------------------*/

function infrMapchild() {
    var map = new google.maps.Map(document.getElementById('infr_map_child'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
        ['Детский садик', 50.52741143, 30.59715787, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Детский садик', 50.53079469, 30.59507792, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Детский садик', 50.52532896, 30.60339574, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Детский садик', 50.53405541, 30.60065172, '/wp-content/themes/4U/img/infr_icon_5b.png'],
        ['Детский садик', 50.52690863, 30.61295624, '/wp-content/themes/4U/img/infr_icon_5b.png'],
    ];
    var marker, i;
    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });
    for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
            position: {lat: locations[i][1], lng: locations[i][2]},
            map: map,
            icon: locations[i][3],
            title: locations[i][0],
            zIndex: i
        });
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
           return function() {
           if(i!=locations.length-1){
               infowindow.setContent(locations[i][0]);

               infowindow.open(map, marker);
               }
           }
        })(marker, i));
		markers.push(marker);
	}
}

var markers = [];
google.maps.event.addDomListener(window, 'load', infrMapall);
google.maps.event.addDomListener(window, 'load', infrMapshop);
google.maps.event.addDomListener(window, 'load', infrMaphalt);
google.maps.event.addDomListener(window, 'load', infrMappark);
google.maps.event.addDomListener(window, 'load', infrMapschool);
google.maps.event.addDomListener(window, 'load', infrMapchild);