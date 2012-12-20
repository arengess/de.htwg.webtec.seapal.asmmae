var map;
var mapOptions;
var marker;
var markNr = 0;
var alleMarken = [];
var tempMarken = [];
var infowindow;
var poly;
var timeout;

function initialize() {

    mapTypeIds = ["roadmap", "satellite", "OSM"];

    // <!-- var crosshairShape = {
    // coords : [64, 64, 64, 64],
    // type : 'rect'
    // };-->

    var latlng = new google.maps.LatLng(47.665, 9.185);

    var myOptions = {
        zoom : 14,
        center : latlng,
        mapTypeId : google.maps.MapTypeId.ROADMAP,
        // <!--draggableCursor : 'crosshair',-->
        mapTypeControlOptions : {
            mapTypeIds : mapTypeIds,
            style : google.maps.MapTypeControlStyle.DROPDOWN_MENU
        }
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    //OpenStreetMap
    map.mapTypes.set("OSM", new google.maps.ImageMapType({
        getTileUrl : function(coord, zoom) {
            return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize : new google.maps.Size(256, 256),
        maxZoom : 18,
        name : "OpenStreetMap"
    }));
    //OpenSeaMap
    map.overlayMapTypes.push(new google.maps.ImageMapType({
        getTileUrl : function(coord, zoom) {
            return "http://tiles.openseamap.org/seamark/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize : new google.maps.Size(256, 256),
        name : "OpenSeaMap",
        maxZoom : 18
    }));
    //LatLong - Center Listener    google.maps.event.addListener(map, 'center_changed', function() {
        document.getElementById("lat").firstChild.nodeValue = map.getCenter().lat();
        document.getElementById("long").firstChild.nodeValue = map.getCenter().lng();
    });

    var polyOptions = {
        strokeColor : '#000000',
        strokeOpacity : 1.0,
        strokeWeight : 3
    };
    poly = new google.maps.Polyline(polyOptions);
    poly.setMap(map);

    //setMarker Listener
    google.maps.event.addListener(map, 'click', setTempMarker);
    // Add a listener for the rightclick event, Polylines
    google.maps.event.addListener(map, 'rightclick', addLatLng);
    //tempMarker Listener
    google.maps.event.addListener(tempMarker, 'click', setMarker);
}

/**
 * Handles click events on a map, and adds a new point to the Polyline.
 * @param {MouseEvent} mouseEvent
 */
function addLatLng(event) {
    var path = poly.getPath();

    // Because path is an MVCArray, we can simply append a new coordinate
    // and it will automatically appear
    path.push(event.latLng);

    // Add a new marker at the new plotted point on the polyline.
    var marker = new google.maps.Marker({
        position : event.latLng,
        title : '#' + path.getLength(),
        map : map
    });
}

function setMarker(event) {
    //Marker
    alert("Marker dauerhaft gesetzt");
    markNr++;
    marker = new google.maps.Marker({
        position : event.latLng,
        title : markNr.toString()
    });

    marker.setMap(map);
    alleMarken.push(marker);

}

function setTempMarker(event) {
    // alte tempMarken löschen
    if (tempMarken) {
        for(i in tempMarken) {
            tempMarken[i].setMap(null);
        }
        tempMarken.length = 0;
    }
    // neuen setzen
    tempMarker = new google.maps.Marker({
        position : event.latLng,
        title : "temp"
    });
    tempMarker.setMap(map);
    tempMarken.push(tempMarker);
    
    //<!-- TimeOut-->
    window.clearTimeout(timeout);
    timeout = window.setTimeout("tempMarker.setMap(null)", 5000);
}
