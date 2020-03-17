<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x = 11; $x <= 16; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('anggota')->insert([
        		'nama' => $faker->name,
	            'tanggal_lahir' => $faker->dateTimeBetween('now','+1 years'),
	            'daerah_asal' => $faker->address,
	            'no_hp' => $faker->PhoneNumber,
	            'riwayat_sakit' => array_rand(array('mencret'=>'mencret', 'tipes'=>'tipes', 'bisul'=>'bisul', 'kutil'=>'kutil', 'jantung'=>'jantung', 'usus buntu'=>'usus buntu')),
	            'jurusan_ipb' => array_rand(array('AGH'=>'AGH', 'MSL'=>'MSL', 'PTN'=>'PTN', 'ARL'=>'ARL')),
	            'angkatan_ipb' => array_rand(array('43'=>'43','45'=>'45','47'=>'47','50'=>'50','52'=>'52','54'=>'54','56'=>'56')),
	            'masuk_pondasi' => $faker->dateTimeBetween('now','+1 years'),
	            'gol_darah' => array_rand(array('A'=>'A','B'=>'B','AB'=>'AB','O'=>'O')),
	            'status' => array_rand(array('pengurus'=>'pengurus','member'=>'member')),
	            'jk' => array_rand(array('laki-laki'=>'laki-laki','perempuan'=>'perempuan')),
	        	]);
 
        }
    }
}
