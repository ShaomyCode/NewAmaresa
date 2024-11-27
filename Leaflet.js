var map = L.map('map').setView([14.795139927032492, 121.01890818023107], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


// MAP RANGE
var circle = L.circle([14.795139927032492, 121.01890818023107], {
    color: 'blue',
    fillColor: 'grey',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);

// //  MARKER
var marker = L.marker([14.795139927032492, 121.01890818023107]).addTo(map).bindPopup("Amaresa Office");

var Kayla1 = L.marker([14.795200678955283, 121.01855774191154]).addTo(map).bindPopup("Kayla 1, For sale"),
	kayla2 = L.marker([14.79524211186549, 121.0183254295377]).addTo(map).bindPopup("Kayla 2, For sale"),
	kayla3 = L.marker([14.795713318203749, 121.01735910253636]).addTo(map).bindPopup("Kayla 3, For sale");

var Arya1 = L.marker([14.795264672681167, 121.01847160058828]).addTo(map).bindPopup("Arya 1, For sale"),
    Arya2 = L.marker([14.79531864172611, 121.01824832145628]).addTo(map).bindPopup("Arya 2, For sale"),
    Arya3 = L.marker([14.795713318203749, 121.01735910253636]).addTo(map).bindPopup("Arya 3, For sale");

var Alexandria1 = L.marker([14.795927442321682, 121.01678108706795]).addTo(map).bindPopup("Alexandria 1, For sale"),
    Alexandria2 = L.marker([14.795832088887716, 121.01680194975634]).addTo(map).bindPopup("Alexandria 2, For sale"),
    Alexandria3 = L.marker([14.795742236571822, 121.01681143279679]).addTo(map).bindPopup("Alexandria 3, For sale");

var Amara1 = L.marker([14.795771576107638, 121.0165307347997]).addTo(map).bindPopup("Amara 1, For sale"),
    Amara2 = L.marker([14.795608866019476, 121.01653607080397]).addTo(map).bindPopup("Amara 2, For sale"),
    Amara3 = L.marker([14.796283761497897, 121.01754232139562]).addTo(map).bindPopup("Amara 3, For sale");

var kaylaGroup = L.layerGroup([Kayla1, kayla2, kayla3]);


// var maps = L.map('map', {
//     center: [14.795139927032492, 121.01890818023107],
//     zoom: 19,
//     layers: [osm, cities]
// });




