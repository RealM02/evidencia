<?php

namespace Database\Seeders;
use App\Model\staff;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staff1 = new staff;
        $staff1->id = "1CN";
        $staff1->active = "Active";
        $staff1->role = "";
        $staff1->name = "Cassandra Naveda";
        $staff1->tax_id = "CNA1223";
        $staff1->email = "cassandra.naveda@evidencia2.com";
        $staff1->password = "Guacamaya123";

        $staff2 = new staff;
        $staff2->id = "1EM";
        $staff2->active = "Active";
        $staff2->role = "";
        $staff2->name = "Emilio Medel";
        $staff2->tax_id = "EMC0210";
        $staff2->email = "emilio.medel@evidencia2.com";
        $staff2->password = "Hiena123";

        $staff3 = new staff;
        $staff3->id = "1AF";
        $staff3->active = "Active";
        $staff3->role = "";
        $staff3->name = "Andres Flores";
        $staff3->tax_id = "AFU9001";
        $staff3->email = "andres.flores@evidencia2.com";
        $staff3->password = "Águila123";



    }
}