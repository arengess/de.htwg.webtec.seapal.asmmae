var map;
var mapOptions;

function initialize() {

	mapTypeIds = ["roadmap", "satellite", "OSM"];

	var crosshairShape = {
		coords : [64, 64, 64, 64],
		type : 'rect'
	};

	//Marker

	var latlng = new google.maps.LatLng(47.66, 9.16);

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

	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

	//OpenStreetMap
	map.mapTypes.set("OSM", new google.maps.ImageMapType({
		getTileUrl : function(coord, zoom) {
			return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
		},
		tileSize : new google.maps.Size(256, 256),
		maxZoom : 18,
		name : "OpenStreetMap"
	}))

	var marker = new google.maps.Marker({
		map : map,
		icon : 'http://www.daftlogic.com/images/cross-hairs.gif',
		shape : crosshairShape
	});
	marker.bindTo('position', map, 'center');

	//LatLong
	google.maps.event.addListener(map, 'center_changed', function() {
		document.getElementById("lat").firstChild.nodeValue = map.getCenter().lat();
		document.getElementById("long").firstChild.nodeValue = map.getCenter().lng();
	})
}