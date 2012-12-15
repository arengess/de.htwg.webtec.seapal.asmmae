var map;
var mapOptions;
var inte = 0;
var alleMarken = [];

function initialize() {

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
	//LatLong - Center Listener	google.maps.event.addListener(map, 'center_changed', function() {
		document.getElementById("lat").firstChild.nodeValue = map.getCenter().lat();
		document.getElementById("long").firstChild.nodeValue = map.getCenter().lng();
	})
	//Marker Listener
	google.maps.event.addListener(map, 'click', function(event) {
		setMarker(event);
	});

	var infowindow = new google.maps.InfoWindow({
		content : "<p>Marker-Info</p>"
	});
	google.maps.event.addListener(marker, 'click', function() {
		alert("!");
		infowindow.open(map, marker);
	});
}

function setMarker(event) {
	//Marker
	inte++;
	var marker = new google.maps.Marker({
		position : event.latLng,
		title : inte.toString()
	});
	
	marker.setMap(map);
	alleMarken.push(marker);
	
	for(var i = 0; i<alleMarken.length; i++){
		alert(alleMarken[i].getTitle());
	}
}
