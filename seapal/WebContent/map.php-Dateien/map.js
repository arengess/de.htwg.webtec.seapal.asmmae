var map;
var mapOptions;
var marker;
var markNr = 0;
var alleMarken = [];
var tempMarken = [];
var poly;
var path = [];
var polyRoute = [];
var tempPath = [];
var markRoute = [];
var tempPathMarker = [];
var tempPolylines = [];
var timeout;
var distTimeout;
var pos;
var activeMarker;

function initialize() {
    //"Menu" buttons:
    $('#bMarkeSetzen').click(function() {
        setMarker(pos);
    });
    $('#bPolylines').click(function() {
        addRoute(pos);
    });
    $('#bEntfernung').click(function() {
        distancePath(pos);
        //TimeOut
        window.clearTimeout(distTimeout);
        distTimeout = window.setTimeout(function() {
            if (tempPathMarker) {
                for (i in tempPathMarker) {
                    tempPathMarker[i].setMap(null);
                }
                tempPathMarker = [];
                tempPath = [];
            }
            if (tempPolylines) {
                for (i in tempPolylines) {
                    tempPolylines[i].setMap(null);
                }
                tempPolylines = [];
            }
            tempPoly = new google.maps.Polyline(tempPolyOptions);
            tempPoly.setMap(map);
        }, 5000);
    });
    $('#bLoeschen').click(function() {
        deleteMarker(activeMarker);
    });
    $('#bRouteLoeschen').click(function() {
        deleteRoute;
    });
    $('#bReset').click(function() {
        initialize();
    })
    mapTypeIds = ["roadmap", "satellite", "OSM"];

    var crosshairShape = {
        coords : [64, 64, 64, 64],
        type : 'rect'
    };

    var latlng = new google.maps.LatLng(47.665, 9.185);

    var myOptions = {
        zoom : 14,
        center : latlng,
        mapTypeId : google.maps.MapTypeId.ROADMAP,
        draggableCursor : 'crosshair',
        mapTypeControlOptions : {
            mapTypeIds : mapTypeIds,
            style : google.maps.MapTypeControlStyle.DROPDOWN_MENU
        }
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    //<!--OpenStreetMap-->
    map.mapTypes.set("OSM", new google.maps.ImageMapType({
        getTileUrl : function(coord, zoom) {
            return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize : new google.maps.Size(256, 256),
        maxZoom : 18,
        name : "OpenStreetMap"
    }));
    //<!--OpenSeaMap-->
    map.overlayMapTypes.push(new google.maps.ImageMapType({
        getTileUrl : function(coord, zoom) {
            return "http://tiles.openseamap.org/seamark/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize : new google.maps.Size(256, 256),
        name : "OpenSeaMap",
        maxZoom : 18
    }));

    //<!--LatLong - Center Listener-->
    google.maps.event.addListener(map, 'center_changed', function() {
        $("#coord").text(getFormattedPosition(map.getCenter()));
    });

    var polyOptions = {
        strokeColor : '#FF0000',
        strokeOpacity : 1.0,
        strokeWeight : 3
    };
    poly = new google.maps.Polyline(polyOptions);
    poly.binder = new MVCArrayBinder(poly.getPath());
    poly.setMap(map);

    var tempPolyOptions = {
        strokeColor : '#000000',
        strokeOpacity : 1.0,
        strokeWeight : 3
    }
    tempPoly = new google.maps.Polyline(tempPolyOptions);
    tempPoly.setMap(map);

    //<!--set Marker Listener-->
    google.maps.event.addListener(map, 'click', setTempMarker);

}

function addRoute(event) {
    deleteMarker(tempMarker);
    $("button").hide(200);

    path = poly.getPath();

    path.push(event.latLng);

    //neuer Marker zur Polyline
    marker = new google.maps.Marker({
        position : event.latLng,
        title : '#' + path.getLength(),
        draggable : true,
        map : map
    });

    markRoute.push(marker);
    polyRoute.push(poly);
    marker.bindTo('position', poly.binder, (path.getLength() - 1).toString());

    var infowindow = new google.maps.InfoWindow();
    
    google.maps.event.addListener(markRoute, 'click', function(event) {
        activeMarker = marker;
        infowindow.setContent(marker.title + "<br>Position: <br>" + getFormattedPosition(event.latlng) + "<br>Gesamtentfernung: " + getEntfernung(path) + "km");
        infowindow.open(map, markRoute);
        setTimeout(function() {
            infowindow.close();
        }, 4000);
    });
    google.maps.event.addListener(marker, 'dragend', function(event) {
        activeMarker = marker;
        infowindow.close();
        infowindow.setContent(marker.title + "<br>Position: <br>" + getFormattedPosition(event.latlng) + "<br>Gesamtentfernung: " + getEntfernung(path) + "km");
    });

    $('#entfernung').text(getEntfernung(path));
}

function deleteRoute(event) {
    event.unbindAll();
    for (var i = 0; i < markRoute.length; i++) {
        markRoute[i].setMap(null);
    }
    path = [];

    for (var i = 0; i < polyRoute.length; i++) {
        polyRoute[i].setMap(null);
    }
    polyRoute = [];
    var polyOptions = {
        strokeColor : "CC0000",
        strokeOpacity : 1.0,
        strokeWeight : 2,
        map : map
    };
    poly = new google.maps.Polyline(polyOptions);
    poly.binder = new MVCArrayBinder(poly.getPath());
}

function distancePath(event) {

    deleteMarker(tempMarker);
    $("button").hide(200);

    tempPath = tempPoly.getPath();

    tempPath.push(event.latLng);

    //neuer Marker zur Polyline
    marker = new google.maps.Marker({
        position : event.latLng,
        title : '#' + tempPath.getLength(),
        map : map
    });
    tempPolylines.push(tempPoly);
    tempPathMarker.push(marker);

    $('#distEntfernung').text(getEntfernung(tempPath));
}

function setMarker(event) {

    deleteMarker(tempMarker);
    $("button").hide(200);
    //Marker
    markNr++;

    //Marker Icon
    var marker_icon = new google.maps.MarkerImage("http://www.lm-design.biz/joomla/images/lm_design/flag.gif", new google.maps.Size(128, 128), //originalgröße
    new google.maps.Point(0, 0), //origin
    new google.maps.Point(10, 38), //anchor
    new google.maps.Size(40, 40) //scaled Size
    );
    var markInfo = new google.maps.InfoWindow({
        content : "Position:<br>" + getFormattedPosition(event.latLng)
    });
    marker = new google.maps.Marker({
        position : event.latLng,
        title : markNr.toString(),
        animation : google.maps.Animation.DROP,
        draggable : true,
        icon : marker_icon
    });
    marker.setMap(map);
    alleMarken.push(marker);

    google.maps.event.addListener(marker, 'click', function() {
        showMarkerMenu();
        activeMarker = marker;
        markInfo.open(map, marker);
        window.setTimeout(function() {
            markInfo.close();
        }, '3000');
    });
    google.maps.event.addListener(marker, 'dragend', function(event) {
        markInfo.close();
        markInfo.setContent("Position: <br>" + getFormattedPosition(event.latLng));
        markInfo.open(map, marker);
    });
}

function setTempMarker(event) {

    pos = event;
    // alte tempMarken löschen
    if (tempMarken) {
        for (i in tempMarken) {
            tempMarken[i].setMap(null);
        }
        tempMarken.length = 0;
    }

    var tempMarkInfo = new google.maps.InfoWindow({
        content : "Position:<br>" + getFormattedPosition(event.latLng)
    });
    // neuen setzen
    tempMarker = new google.maps.Marker({
        position : event.latLng,
        icon : './map.php-Dateien/images/pfeil_nach_unten.jpg',
        title : "temp"
    });
    tempMarker.setMap(map);
    tempMarken.push(tempMarker);
    //Menu zeigen
    showMenu();
    //Listener
    google.maps.event.addListener(tempMarker, 'click', function() {
        tempMarkInfo.open(map, tempMarker);
    });

}

function deleteMarker(event) {
    event.setMap(null);
}

function showMenu() {
    //KontextMenu anzeigen
    $("button").hide(200);
    $(".allgMenu").show(200);

    //TimeOut
    window.clearTimeout(timeout);
    timeout = window.setTimeout(function() {
        tempMarker.setMap(null);
        $("button").hide(200);
    }, 5000);
}

function showMarkerMenu() {
    $("button").hide(200);
    $(".markerOptions").show(200);

    //TimeOut
    window.clearTimeout(timeout);
    timeout = window.setTimeout(function() {
        tempMarker.setMap(null);
        $("button").hide(200);
    }, 5000);
}

function MVCArrayBinder(mvcArray) {
    this.array_ = mvcArray;
}

MVCArrayBinder.prototype = new google.maps.MVCObject();
MVCArrayBinder.prototype.get = function(key) {
    if (!isNaN(parseInt(key))) {
        return this.array_.getAt(parseInt(key));
    } else {
        this.array_.get(key);
    }
};

MVCArrayBinder.prototype.set = function(key, val) {
    if (!isNaN(parseInt(key))) {
        this.array_.setAt(parseInt(key), val);
    } else {
        this.array_.set(key, val);
    }
};

function getEntfernung(event) {
    var entfernung = google.maps.geometry.spherical.computeLength(event);
    return (Math.round(entfernung / 1000 * 1000) / 1000);
}

function getFormattedPosition(position) {

    var fLat = position.lat().toString();
    var fLng = position.lng().toString();

    var vorzeichenLat = 1;
    var vorzeichenLng = 1;
    //bei negative Koordinaten
    if (position.lat() < 0) {
        vorzeichenLat = -1;
    }
    if (position.lng() < 0) {
        vorzeichenLng = -1;
    }

    //Lat
    var latSplit = fLat.split(".");
    var latVK = latSplit[0];
    var latNK = (Math.round(((position.lat() - latVK) * 60 * 100)) / 100) * vorzeichenLat;

    //Lng
    var lngSplit = fLng.split(".");
    var lngVK = lngSplit[0];
    var lngNK = (Math.round(((position.lng() - lngVK) * 60 * 100)) / 100) * vorzeichenLng;

    return "Lat: " + latVK + "°" + latNK + "'N, Lng: " + lngVK + "°" + lngNK + "'E";
}