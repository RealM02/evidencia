<?php

namespace Database\Seeders;
use App\Model\products;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juice = new products;
        $juice->id = "1";
        $juice->name = "Organic Juice";
        $juice->description = "Orange Juice from organic oranges";
        $juice->photo = "https://www.unclematts.com/wp-content/uploads/2021/08/52-oz-With-Pulp.png";
        $juice->price = "$5.00 dlls";
        $juice->active = "Active";
        $juice->stock = "58 units";
        


    }
}