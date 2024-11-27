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

var kaylaGroup = L.layerGroup([Kayla1, kayla2, kayla3]);


var maps = L.map('map', {
    center: [14.795139927032492, 121.01890818023107],
    zoom: 19,
    layers: [osm, cities]
});




