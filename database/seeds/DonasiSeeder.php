<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('donasi')->insert([
                'no_rek_asal' => $faker->PhoneNumber,
                'nama' => $faker->name,
                'jumlah' => array_rand(array('1000'=>'1000','2000'=>'2000','3000'=>'3000','4000'=>'4000')),
                'tanggal' => $faker->dateTimeBetween('now','+1 years'),
                'keterangan' => $faker->address,
                'file_foto' => array_rand(array('foto A'=>'foto A','foto B'=>'foto B','foto AB'=>'foto AB','foto O'=>'foto O')),
                'rekening_id' => array_rand(array('1'=>'1','2'=>'2','3'=>'3','4'=>'4')),
                'created_by' => array_rand(array('1'=>'1','2'=>'2','3'=>'3','4'=>'4')),
	        	]);
 
        }
    }
}
