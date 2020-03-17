<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class JenisPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 3; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('jenis_prestasi')->insert([
                'nama_jenis' => array_rand(array('pkm'=>'pkm','konferensi'=>'konferensi','LKTI Nasional'=>'LKTI Nasional')),
	        	]);
 
        }
    }
}
