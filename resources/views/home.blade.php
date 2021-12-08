@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta</title>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
</head>
<body>
<div class="container" box-shadow>
    <div class="row">
        <div class="col-4 col-md-3 col-lg-2">
            <a href="{{route('maps.create')}}" class="btn btn-dark btn-block-mb-2">Tambah Wisata</a>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <caption>Peta Kabupaten Bojonegoro</caption>
                </div>
                    <div id="peta" style="width: 100%;height: 70vh;"></div>
                </div>
        </div>
    </div>
</div>
</body>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<script>
        mapboxgl.accessToken = 'pk.eyJ1IjoienVocml3aWppYW50byIsImEiOiJja3d3Z3I1bWswM2d4Mm9xMTh5NHJyeGg5In0.icvBOqiaiRT1f9bzjVFiMw';
        var map = new mapboxgl.Map({
            container: 'peta',
            style: 'mapbox://styles/zuhriwijianto/ckwwgd35oft0x15nvr7zegihf',
            center: [111.88028062855591, -7.149526000599138],
            zoom: 16
        });

        new mapboxgl.Marker().setLngLat([106.69972796989238, -6.238601629433243])
                        .addTo(map)

        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            marker:true,
            placeholder: 'Masukan kata kunci...',
            zoom:20
        });

        map.addControl(
            geocoder
        );

        var draw = new MapboxDraw({
            displayControlsDefault: false,
            controls: {
                        polygon: true,
                        trash: true
                        }
        });
        var geocoder = new MapboxGeocoder({
                    accessToken: mapboxgl.accessToken,
                    mapboxgl: mapboxgl
                });
        var nav = new mapboxgl.NavigationControl();

        mymap.addControl(geocoder);
        mymap.addControl(nav,'top-left');
        mymap.addControl(draw);
    </script>
</html>
@endsection
