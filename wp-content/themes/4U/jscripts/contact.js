function contactMap() {



    var map = new google.maps.Map(document.getElementById('contact_map'), {
        zoom: 14,
        center: {lat: 50.528107, lng: 30.593847},
        disableDefaultUI: true
    });
  
    var locations = [
		['Район 2', 50.528107, 30.593847, '/wp-content/uploads/2018/07/logo-point.svg'],
		
        ['Центральный офис', 50.4337234, 30.445441, '/wp-content/themes/4U/pic/design/mapico.png'],
        
		['4U', 50.471781, 30.353197, '/wp-content/themes/4U/pic/design/fyou.png'],

        ['Станция метро «Академгородок»', 50.465089, 30.355174, '/wp-content/themes/4U/pic/design/contacts-metro-icon.svg'],

        //['Ресторан МакДональдс', 50.462542, 30.354806, '/wp-content/themes/4U/pic/design/contacts-metro-icon.svg'],

        ['Супермаркет «Novus», Ресторан МакДональдс', 50.461498, 30.355459, '/wp-content/themes/4U/pic/design/location-store-icon.png'],

        ['Аптека «Доброго Дня»', 50.461506, 30.356962, '/wp-content/themes/4U/pic/design/location-medicine-icon.png'],

        ['Гимназия №287', 50.458286, 30.350385, '/wp-content/themes/4U/pic/design/location-school-icon.png'],

        ['Фитнес-центр «Олимп»', 50.459256, 30.348774, '/wp-content/themes/4U/pic/design/location-sport-icon.png'],

        ['Сквер имени Федоры Пушиной', 50.455937, 30.353241, '/wp-content/themes/4U/pic/design/location-walk-icon.png'],

        ['КНП ЦПМСП №1 Святошинского района г.Киева ', 50.463839, 30.349135, '/wp-content/themes/4U/pic/design/location-medicine-icon.png'],

        ['Святошинская гимназия ', 50.462341, 30.348953, '/wp-content/themes/4U/pic/design/location-school-icon.png'],

        ['Среднеобразовательная школа №288', 50.461609, 30.350612, '/wp-content/themes/4U/pic/design/location-school-icon.png'],

        ['Кинотеатр «Магнат» ', 50.460391, 30.348468, '/wp-content/themes/4U/pic/design/location-walk-icon.png'],

        ['Рынок «Троицкий»', 50.468331, 30.355179, '/wp-content/themes/4U/pic/design/location-store-icon.png'],

        ['ТРЦ Lavina Mall + кинотеатр Multiplex Lavina Mall', 50.494919, 30.359677, '/wp-content/themes/4U/pic/design/location-store-icon.png'],

        ['Ашан ', 50.497307, 30.360004, '/wp-content/themes/4U/pic/design/location-store-icon.png'],

        ['Эпицентр К ', 50.492617, 30.361013, '/wp-content/themes/4U/pic/design/location-store-icon.png'],

        ['АЗС ОККО ', 50.471441, 30.356168, '/wp-content/themes/4U/pic/design/location-transport-icon.png'],

        ['Супермаркет «Сильпо» ', 50.472069, 30.337767, '/wp-content/themes/4U/pic/design/location-store-icon.png'],

        ['Отделение банка «Ощадбанк» ', 50.473735, 30.341068, '/wp-content/themes/4U/pic/design/location-finance-icon.png'],

        ['Среднеобразовательная школа № 162', 50.475955, 30.345047, '/wp-content/themes/4U/pic/design/location-school-icon.png'],

        ['Нова Пошта ', 50.467350, 30.353576, '/wp-content/themes/4U/pic/design/location-government-icon.png'],

        ['Нова Пошта №293 ', 50.469853, 30.338390, '/wp-content/themes/4U/pic/design/location-government-icon.png'],

        ['Детский сад №200 ', 50.462684, 30.350401, '/wp-content/themes/4U/pic/design/location-school-icon.png'],
        ['Детский сад № 587 ', 50.469953, 30.334165, '/wp-content/themes/4U/pic/design/location-school-icon.png'],
        ['Детский сад №33', 50.466121, 30.349203, '/wp-content/themes/4U/pic/design/location-school-icon.png'],
        ['Среднеобразовательная школа №55 ', 50.466163, 30.346945, '/wp-content/themes/4U/pic/design/location-school-icon.png']


    ];

    var marker, i;
    var infowindow = new google.maps.InfoWindow();

 function renderDirections(result, polylineOpts) {
                var directionsRenderer = new google.maps.DirectionsRenderer();
                directionsRenderer.setMap(map);
                directionsRenderer.setOptions({suppressMarkers: true, preserveViewport: true});
                if(polylineOpts) {
                    directionsRenderer.setOptions({
                        polylineOptions: polylineOpts
                    });
                }

                directionsRenderer.setDirections(result);
            }

            function requestDirections(start, end, polylineOpts, mode) {
                directionsService.route({
                    origin: start,
                    destination: end,
                    travelMode: mode
                }, function(result) {
                    renderDirections(result, polylineOpts);
                });
            }


    google.maps.event.addListener(map, 'click', function () {
        infowindow.close();
    });

    for (i = 0; i < locations.length; i++) {

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
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

            directionsService = new google.maps.DirectionsService();

            requestDirections('55.908129, 37.543743', "55.92062358420448,37.54077016931148", {strokeColor: '#3b6a8c', strokeWeight: 5},google.maps.DirectionsTravelMode.DRIVING);
            requestDirections('55.897850, 37.587008', "55.92062358420448,37.54077016931148", {strokeColor: '#7bc33b', strokeWeight: 5},google.maps.DirectionsTravelMode.TRANSIT);
            requestDirections('55.846680, 37.574360', "55.92062358420448,37.54077016931148", {strokeColor: '#55bbff', strokeWeight: 5},google.maps.DirectionsTravelMode.TRANSIT);



        markers.push(marker);
    }


    $('.contact__rout').on('click', function () {
     if($(this).hasClass('active'))
            {
               map.setZoom(zoom);
               map.setCenter(uluru);
                $('.contact__show-office').text('Показать все офисы ндв');
               $(this).removeClass('active');
            } else
            {
                $(this).addClass('active');
                 map.setZoom(13);
                 map.setCenter({lat: 50.471025, lng: 30.347417});
            }
    })

    $('.contact__show-office').on('click', function () {

        if($(this).hasClass('active'))
        {
           map.setZoom(zoom);
           map.setCenter(uluru);
            $('.contact__show-office').text('Показать все офисы ндв');
           $(this).removeClass('active');
        } else
        {
            $(this).addClass('active');
            map.setZoom(11);
            map.setCenter({lat: 50.4274073, lng: 30.6130542});
           $('.contact__show-office').text('Показать объект');
        }

    });

}


var markers = [];

google.maps.event.addDomListener(window, 'load', contactMap);