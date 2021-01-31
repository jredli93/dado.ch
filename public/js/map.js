mapboxgl.accessToken = 'pk.eyJ1Ijoiam92YW5yZWRsaSIsImEiOiJja2p1anY2bjIwM2h5MzFsZzB3MjdsZDE4In0.YPXB6Pd62UMd5jf_qH-dHA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/jovanredli/ckjyccn2t1nmk17s47o4bcmks',
    center: [20.450870113036217, 20.450870113036217],
    zoom: 14,    
});
    var marker = new mapboxgl.Marker()
    .setLngLat([20.450870113036217, 20.450870113036217])
    .addTo(map);