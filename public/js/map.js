mapboxgl.accessToken = 'pk.eyJ1Ijoiam92YW5yZWRsaSIsImEiOiJja2p1anY2bjIwM2h5MzFsZzB3MjdsZDE4In0.YPXB6Pd62UMd5jf_qH-dHA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/jovanredli/ckjyccn2t1nmk17s47o4bcmks',
    center: [9.417542977100425, 47.51225465841176],
    zoom: 14,    
});
    var marker = new mapboxgl.Marker()
    .setLngLat([9.422390920844691, 47.5094283279231])
    .addTo(map);