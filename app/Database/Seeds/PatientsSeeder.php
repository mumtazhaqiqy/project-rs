<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PatientsSeeder extends Seeder
{
    public function run()
    {
        for($i=0; $i < 50; $i++){
            $this->db->table('patients')->insert($this->generateTestPatients());
        }
    }

    public function generateTestPatients()
    {
        $faker = Factory::create();

        return [
           'noRekamMedis' => $faker->randomNumber(5, true),
           'namaLengkap' => $faker->name(),
           'alias' => $faker->lastName(),
           'tempatLahir' => $faker->city,
           'tanggalLahir' => $faker->date,
           'jenisKelamin' => $this->getKelamin(rand(0,1)),
           'agama'  => 'Islam',
           'statusMenikah' => $this->getStatusMenikah(rand(0,3)),
           'pendidikanTerakhir' => rand(0,8),
           'noHandphone' => $faker->phoneNumber(),
           'ktp' => $faker->randomNumber(5, true)
        ];

    }

    public function getKelamin($index){
        $jenisKelamin = ['laki', 'perempuan'];
        return $jenisKelamin[$index];
    }

    public function getStatusMenikah($index){
        $statusMenikah = ['duda','janda','belum nikah','sudah nikah'];
        return $statusMenikah[$index];
    }
}
