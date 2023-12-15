<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planta;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Storage;


class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = FacadesStorage::disk('local')->get("/json/plants.json");
        $plants = json_decode($json, true);
        //$path = env('LOCAL_HOST').env('ASSET_URL');
        $path = "https://raw.githubusercontent.com/Frankito14/plants_vs_zombies_api/main/storage/app/public/assets";
        $imageExt = ".webp";

        foreach($plants as $plant){
            Planta::query()->updateOrCreate([
                'name' => (isset($plant['name'])) ? $plant['name'] : "",
                'cost' => (isset($plant['cost'])) ? $plant['cost'] : 0,
                'damage' => (isset($plant['damage'])) ? $plant['damage'] : "None",
                'range' => (isset($plant['range'])) ? $plant['range'] : "Contact",
                'usage' => (isset($plant['usage'])) ? $plant['usage'] : "Normal",
                'special' => (isset($plant['special'])) ? $plant['special'] : "",
                'description' => (isset($plant['description'])) ? $plant['description'] : "",
                'image' => (isset($plant['name'])) ? $path."/plants/".$plant['name'].$imageExt : "",
            ]);
        }
    }
}
