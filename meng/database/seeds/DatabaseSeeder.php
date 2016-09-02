<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'uname' => 'admin',
            'uemail' => '123@qq.com',
            'upwd' => '0192023a7bbd73250516f069df18b500',
            'ubtime'=>date('Y-m-d H:i:s'),
            'uip'=>'::1',
        ]);
    }
}
