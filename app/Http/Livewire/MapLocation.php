<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Models\location;
use Livewire\Component;

class MapLocation extends Component
{

    use WithFileUploads;

    public $long, $lat, $title, $description, $image;
    public $geoJson;

    private function loadlocations()
    {
        $locations = location::orderBy('created_at', 'desc')->get();

        $customlocations = [];

        foreach ($locations as $location) {
            $customlocations[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$location->long, $location->lat],
                    'type' => 'Point'
                ],
                'properties' => [
                    'locationId' => $location->id,
                    'title' => $location->title,
                    'image' => $location->image,
                    'description' => $location->description
                ]
            ];
        }

        $geolocations = [
            'type' => 'FeatureCollection',
            'features' => $customlocations
        ];

        $geoJson = collect($geolocations)->toJson();
        $this->geoJson = $geoJson;
    }


    private function clearForm()
    {
        $this->long = '';
        $this->lat = '';
        $this->title = '';
        $this->description = '';
        $this->image = '';
    }


    public function savelocation()
    {
        $this->validate([
            'long' => 'required',
            'lat' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:2048|required',
        ]);

        $imageName = md5($this->image . microtime()) . '.' . $this->image->extension();

        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );

        location::create([
            'long' => $this->long,
            'lat' => $this->lat,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
        ]);

        $this->clearForm();
        $this->loadlocations();
        $this->dispatchBrowserEvent('locationAdded', $this->geoJson);
    }



    public function render()
    {
        $this->loadlocations();
        return view('livewire.map-location');
    }
}
