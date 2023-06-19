<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
         ['id' => 2, 'name' => 'John', 'type' => 'vendor','vendor_id'=>1,
            'mobile' => '97000000000',
            'email' => 'john@admin.com','password'=> '$2y$10$hBsyT23Qynl7iEH21EdkdOWxZulRLG3c5Rr6ScvZeA86TYM3fXI7a','image'=>'','status'=>0],
        ];
        //
        //     ['id' => 1, 'name' => 'Super  Admin', 'type' => 'superadmin','vendor_id'=>0,
        //     'mobile' => '9800000000',
        //     'email' => 'admin@admin.com','password'=> '$2a$12$Svo2CxoCKSPAZ7/z1lpqWeQiIg23tbAncLNlCMk2Js63yzdifhxt.','image'=>'','status'=>1],
        // ];
         Admin::insert($adminRecords);
    }
}
