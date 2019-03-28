<?php

use Illuminate\Database\Seeder;

class FakerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Entities\Test',50)->create();// valla y busque la informacion en la ruta especificada y ejecutala 50 veces
    }
}
