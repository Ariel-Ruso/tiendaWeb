<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoSeeder extends Seeder
{
   
    public function run()
    {
        factory(Producto::class, 3)->create();
    }
}
