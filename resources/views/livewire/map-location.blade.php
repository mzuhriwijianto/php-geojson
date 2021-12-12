<div class="container-fluid">

<div class="row">
    <div class="col-md-8">
        <div class="card-header bg-white shadow-sm">
            Peta Kabupaten Bojonegoro
        </div>
        <div class="card-body">
        <div wire:ignore id='map' style='width: 100%; height: 70vh;'></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-header bg-white shadow-sm">
            Form
        </div>
        <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>


</div>

@push('scripts')

<script>
    document.addEventListener('livewire:load', () => {
    const defaultLocation = [111.87041794010162, -7.159341771086332]

    mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
    var map = new mapboxgl.Map({
        container: 'map',
        center:defaultLocation,
        zoom: 11.15
    });

    const geoJson = {
        "type": "FeatureCollection",
        "features": [
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.89192849857062",
                "-7.156782996467101"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "Mantap",
                "iconSize": [
                50,
                50
                ],
                "locationId": 30,
                "title": "Hello new",
                "image": "https://icon2.cleanpng.com/20180403/caq/kisspng-google-map-maker-google-maps-computer-icons-openst-map-marker-5ac30986b07bc7.8541015415227313987229.jpg",
                "description": "Mantap"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.94963283510384",
                "-7.1528957623056755"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "oke mantap Edit",
                "iconSize": [
                50,
                50
                ],
                "locationId": 29,
                "title": "Rumah saya Edit",
                "image": "https://icon2.cleanpng.com/20180403/caq/kisspng-google-map-maker-google-maps-computer-icons-openst-map-marker-5ac30986b07bc7.8541015415227313987229.jpg",
                "description": "oke mantap Edit"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.81843716903137",
                "-7.162720156433281"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "Update Baru",
                "iconSize": [
                50,
                50
                ],
                "locationId": 22,
                "title": "Update Baru Gambar",
                "image": "https://icon2.cleanpng.com/20180403/caq/kisspng-google-map-maker-google-maps-computer-icons-openst-map-marker-5ac30986b07bc7.8541015415227313987229.jpg",
                "description": "Update Baru"
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.89074553940748",
                "-7.159585622897609"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                "iconSize": [
                50,
                50
                ],
                "locationId": 19,
                "title": "awdwad",
                "image": "f0b88ffd980a764b9fca60d853b300ff.png",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.95682351052972",
                "-7.208755030465468"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                "iconSize": [
                50,
                50
                ],
                "locationId": 18,
                "title": "adwawd",
                "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            }
            },
            {
            "type": "Feature",
            "geometry": {
                "coordinates": [
                "111.91110289414672",
                "-7.154122027522945"
                ],
                "type": "Point"
            },
            "properties": {
                "message": "awdwad",
                "iconSize": [
                50,
                50
                ],
                "locationId": 12,
                "title": "adawd",
                "image": "https://icon2.cleanpng.com/20180403/caq/kisspng-google-map-maker-google-maps-computer-icons-openst-map-marker-5ac30986b07bc7.8541015415227313987229.jpg",
                "description": "awdwad"
            }
            }
        ]
        }

    const loadLocations = () => {
        geoJson.features.forEach((location) => {
            const {geometry, properties} = location
            const {iconSize, locationId, title, image, description} = properties

            let markerElement = document.createElement('div')
            markerElement.className = 'marker' + locationId
            markerElement.id = locationId
            markerElement.style.backgroundImage = 'url(https://icon2.cleanpng.com/20180403/caq/kisspng-google-map-maker-google-maps-computer-icons-openst-map-marker-5ac30986b07bc7.8541015415227313987229.jpg)'
            markerElement.style.backgroundSize = 'cover'
            markerElement.style.width = '50px'
            markerElement.style.heigth = '50px'

            new mapboxgl.Marker(markerElement)
            .setLngLat(geometry.coordinates)
            .addTo(map)
        })
    }

    loadLocations()

    const style = "navigation-night-v1"
    map.setStyle(`mapbox://styles/mapbox/${style}`)

    map.addControl (new mapboxgl.NavigationControl())
    //map.addControl (new mapboxgl.MapboxGeocoder())

    map.on('click', (e) => {
            const longtitude = e.lngLat.lng
            const lattitude = e.lngLat.lat

            @this.long = longtitude
            @this.lat = lattitude
        })
    })
</script>

@endpush
