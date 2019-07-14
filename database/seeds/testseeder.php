<?php

use Illuminate\Database\Seeder;
use App\test;
class testseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10; $i++){
            $add = new test;
            $add->name  = 'mohamed';
            $add->save();
        }
    }
}
