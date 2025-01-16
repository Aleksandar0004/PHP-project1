<?php
namespace Database\Seeders;
use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    public function run()
    {
        Store::create([
            'name' => 'Централен магазин',
            'address' => 'ул. Главна 1',
            'phone' => '0888123456'
        ]);

        Store::create([
            'name' => 'Мол магазин',
            'address' => 'бул. Мол 10',
            'phone' => '0888789012'
        ]);
    }
}
