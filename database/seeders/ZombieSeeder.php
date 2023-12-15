<?php

namespace Database\Seeders;

use App\Models\Zombie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ZombieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = Storage::disk('local')->get("/json/zombies.json");
        $zombies = json_decode($json, true);
        //$path = env('LOCAL_HOST').env('ASSET_URL');
        $path = "https://raw.githubusercontent.com/Frankito14/plants_vs_zombies_api/main/storage/app/public/assets";
        $imageExt = ".webp";

        foreach($zombies as $zombie){
            Zombie::query()->updateOrCreate([
                'name' => (isset($zombie['name'])) ? $zombie['name'] : "",
                'special' => (isset($zombie['special'])) ? $zombie['special'] : "",
                'toughness' => (isset($zombie['toughness'])) ? $zombie['toughness'] : "",
                'speed' => (isset($zombie['speed'])) ? $zombie['speed'] : "Normal",
                'weakness' => (isset($zombie['weakness'])) ? $zombie['weakness'] : "",
                'description' => (isset($zombie['description'])) ? $zombie['description'] : "",
                'image' => (isset($zombie['name'])) ? $path."/zombies/".$zombie['name'].$imageExt : "",
            ]);
        }
    }
}
