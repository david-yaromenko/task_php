<?php

namespace Database\Seeders;

use App\Models\RegionModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RegionModel::create(['region_name' => 'Відділ у Чернівецькій області']);
        RegionModel::create(['region_name' => 'Відділ у Вінницькій області']);
        RegionModel::create(['region_name' => 'Відділ у Волинській області']);
        RegionModel::create(['region_name' => 'Відділ у Дніпропетровській області']);
        RegionModel::create(['region_name' => 'Відділ у Донецькій області']);
        RegionModel::create(['region_name' => 'Відділ у Житомирській області']);
        RegionModel::create(['region_name' => 'Відділ у Закарпатській області']);
        RegionModel::create(['region_name' => 'Відділ у Запорізькій області']);
        RegionModel::create(['region_name' => 'Відділ у Івано-Франківській області']);
        RegionModel::create(['region_name' => 'Відділ у Київській області']);
        RegionModel::create(['region_name' => 'Відділ у Кіровоградській області']);
        RegionModel::create(['region_name' => 'Відділ у Луганській області']);
        RegionModel::create(['region_name' => 'Відділ у Львівській області']);
        RegionModel::create(['region_name' => 'Відділ у Миколаївській області']);
        RegionModel::create(['region_name' => 'Відділ у Одеській області']);
        RegionModel::create(['region_name' => 'Відділ у Полтавській області']);
        RegionModel::create(['region_name' => 'Відділ у Рівненській області']);
        RegionModel::create(['region_name' => 'Відділ у Сумській області']);
        RegionModel::create(['region_name' => 'Відділ у Тернопільській області']);
        RegionModel::create(['region_name' => 'Відділ у Харківській області']);
        RegionModel::create(['region_name' => 'Відділ у Херсонській області']);
        RegionModel::create(['region_name' => 'Відділ у Хмельницькій області']);
        RegionModel::create(['region_name' => 'Відділ у Черкаській області']);
        RegionModel::create(['region_name' => 'Відділ у Чернігівській області']);
    }
}
