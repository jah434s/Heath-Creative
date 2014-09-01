<?php

class ServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('services')->delete();


        $services = array(
            array(
                'name'      => 'Page Creation & Re-Creation',
                'description'      => 'I will work with you to create a brand new website or give new life to your current one. The end result will be a professionally built and designed website that is exciting for you and attractive to your Customers.',
                'price'   => 99,
                'unit'   => 'page',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'On-Page SEO',
                'description'      => 'description',
                'price'   => 49,
                'unit'   => 'page',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'Regular Site Updates & Maintenance',
                'description'      => 'description',
                'price'   => 29,
                'unit'   => 'month',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            
        );

        DB::table('services')->insert( $services );
    }

}