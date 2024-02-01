<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => 'ROYKE',
            'whatsapp' => '',
            'city' => 'MINAHASA',
            'province' => 'Sulawesi Utara',
            'sumber' => 'Facebook',
            'ads_name' => '',
            'date' => '2023-06-24 14:18:00',
        ]);
        Employee::create([
            'name' => 'Meds',
            'whatsapp' => '',
            'city' => 'Kota Manado',
            'province' => 'Sulawesi Utara',
            'sumber' => 'Whatsapp',
            'ads_name' => '',
            'date' => '2023-06-24 19:42:00',
        ]);
        Employee::create([
            'name' => 'DEDEN',
            'whatsapp' => '',
            'city' => 'Kabupaten Sumedang',
            'province' => 'Jawa Barat',
            'sumber' => 'Iklan',
            'ads_name' => 'IKLAN PAKET USAHA DISTRO TERBARU',
            'date' => '2023-06-24 13:10:00',
        ]);
        Employee::create([
            'name' => 'BOGAT',
            'whatsapp' => '',
            'city' => 'Kabupaten Lombok Timur',
            'province' => 'Nusa Tenggara Barat',
            'sumber' => 'Facebook',
            'ads_name' => '',
            'date' => '2023-06-24 11:47:00',
        ]);
        Employee::create([
            'name' => 'FEBRI',
            'whatsapp' => '',
            'city' => 'Kabupaten Klaten',
            'province' => 'Jawa Tengah',
            'sumber' => 'Instagram',
            'ads_name' => 'IKLAN PAKET USAHA DISTRO TERBARU',
            'date' => '2023-06-26 05:51:00',
        ]);
        Employee::create([
            'name' => 'DEDEN',
            'whatsapp' => '',
            'city' => 'Kabupaten Klaten',
            'province' => 'Jawa Tengah',
            'sumber' => 'Instagram',
            'ads_name' => 'IKLAN PAKET USAHA DISTRO TERBARU',
            'date' => '2023-06-26 05:51:00',
        ]);
        Employee::create([
            'name' => 'KHOLIS',
            'whatsapp' => '',
            'city' => 'Kabupaten Klaten',
            'province' => 'Jawa Tengah',
            'sumber' => 'Instagram',
            'ads_name' => 'IKLAN PAKET USAHA DISTRO TERBARU',
            'date' => '2023-06-26 05:51:00',
        ]);
    }
}
