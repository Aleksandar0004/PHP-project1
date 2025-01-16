<?php
namespace Database\Seeders;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    public function run()
    {
        Phone::create([
            'brand' => 'Samsung',
            'model' => 'Galaxy S21',
            'price' => 999.99,
            'color' => 'Black',
            'in_stock' => true
        ]);

        Phone::create([
            'brand' => 'iPhone',
            'model' => '13',
            'price' => 1099.99,
            'color' => 'White',
            'in_stock' => true
        ]);
    }
}
