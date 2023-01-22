mapboxgl.accessToken =
    "pk.eyJ1IjoidGl0YW5jb25jZXB0IiwiYSI6ImNsZDZmNGp4ZDAzbzEzcXBkZTJkOG56encifQ.NUfbhbBYnx1zvhq6YFlO-A";
var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/titanconcept/ckjbcqywna01x19p373n0jeug",
    center: [9.422200654996999, 47.509329461499306],
    zoom: 16
});
var marker = new mapboxgl.Marker()
    .setLngLat([9.422200654996999, 47.509329461499306])
    .addTo(map);
