<div class="container-fluid">
<div class="row">
    <div class="col-md-8">
        <div class="card-header bg-white shadow-sm">
            Peta Kabupaten Bojonegoro
        </div>
        <div class="card-body">
        <div wire:ignore id='map' style='width: 100%; height: 80vh;'></div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="accordion accordion-flush bg-white shadow-sm" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                Form
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Longtitude</label>
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Lattitude</label>
                            <input wire:model="lat" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            Nama Wisata
                            <input id="nama" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="overflow-y, auto;max-height">

</div>
@push('scripts')

<script>
    document.addEventListener('livewire:load', () => {
    const defaultLocation = [111.8834409080842, -7.1529622913238455]

    mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
    var map = new mapboxgl.Map({
        container: 'map',
        center:defaultLocation,
        zoom: 11.15
    });
    // var geocoder = new MapboxGeocoder({
    //         accessToken: mapboxgl.accessToken,
    //         mapboxgl: mapboxgl
    //     });

    const geoJson = {
        "type": "FeatureCollection",
        "features": [
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.97897716892481", "-7.169424104950622"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "Mantap",
                "iconSize": [
                50,
                50
                ],
                "locationId": 1,
                "title": "Hello new",
                "image": "https://www.clipartmax.com/png/small/117-1179307_filemap-pin-icon-green-map-marker-png-green.png",
                "description": "Wisata Taman Pinggir Nggawan (TPG) Desa Pilanggede"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.88581541094817", "-7.154683661813749"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "Mantap",
                "iconSize": [
                50,
                50
                ],
                "locationId": 2,
                "title": "Hello new",
                "image": "https://www.clipartmax.com/png/small/117-1179307_filemap-pin-icon-green-map-marker-png-green.png",
                "description": "Alun Alun Kota Bojonegoro"
            }
            },
        ]
        }

    //dd();
    const loadLocations = () => {
        geoJson.features.forEach((location) => {
            const {geometry, properties} = location
            const {iconSize, locationId, title, image, description} = properties

            let markerElement = document.createElement('div')
            markerElement.className = 'marker' + locationId
            markerElement.id = locationId
            markerElement.style.backgroundImage = 'url(https://docs.mapbox.com/help/demos/custom-markers-gl-js/mapbox-icon.png)'
            markerElement.style.backgroundSize = 'cover'
            markerElement.style.width = '50px'
            markerElement.style.height = '50px'

            const content = `

            `

            const popUp = new mapboxgl.Popup({
                offset:25
            }).setHTML(description).setMaxWidth("400px")

            new mapboxgl.Marker(markerElement)
            .setLngLat(geometry.coordinates)
            .setPopup(popUp)
            .addTo(map)
        })
    }

    loadLocations()

    const style = "dark-v10"
    map.setStyle(`mapbox://styles/mapbox/${style}`)

    map.addControl (new mapboxgl.NavigationControl())

    //map.addControl (new mapboxgl.MapboxGeocoder())

    map.on('click', (e) => {
            var longtitude = e.lngLat.lng
            var lattitude = e.lngLat.lat

            @this.long = longtitude
            @this.lat = lattitude
        })
    })
</script>

@endpush
