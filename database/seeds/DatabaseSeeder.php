<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('shippings')->get()->count() == 0) {
            DB::table('shippings')->insert([
                [
                    'tracking_code' => '233',
                    'estimated_delivery_date' => '2019-07-07 22:10:00',
                ],
                [
                    'tracking_code' => '234',
                    'estimated_delivery_date' => '2019-07-08 16:20:00',
                ],
                [
                    'tracking_code' => '235',
                    'estimated_delivery_date' => '2019-07-09 17:35:00',
                ],
                [
                    'tracking_code' => '236',
                    'estimated_delivery_date' => '2019-07-10 20:20:00',
                ],
                [
                    'tracking_code' => '237',
                    'estimated_delivery_date' => '2019-07-11 12:15:00',
                ],
                [
                    'tracking_code' => '238',
                    'estimated_delivery_date' => '2019-07-12 13:45:00',
                ],
            ]);
        } else {
            echo 'Table is not empty!';
        }
    }
}
