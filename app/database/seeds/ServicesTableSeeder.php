<?php

class ServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('services')->delete();


        $services = array(
            array(
                'name'      => 'Website Design',
                'description'      => 'I will work with you to create a brand new website or update your current one. The end result will be a professionally built and designed website that is exciting for you and attractive to your Customers.',
                'price'   => 99,
                'unit'   => 'page',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'On-Page SEO',
                'description'      => "Industry standard, Google recommended SEO code will be integrated into your site. This will improve search engines' abilities to understand your site and improve the display of your search result listing. For more information, see <a href='//www.schema.org' target='_blank'>Schema.org</a>.",
                'price'   => 49,
                'unit'   => 'page',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'Site Management',
                'description'      => "Don't let your site get stale! Regular updates to your site allow you to offer more timely and relevant information to your Customers. It's also great for SEO! Under the basic plan, I will update your site up to 4 times a month with information you provide.",
                'price'   => 29,
                'unit'   => 'month',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'CMS',
                'description'      => "If you'd like your site to be easily updateable by you or your staff, I can make it happen. I will create a secure, intuitive way to update the content on your site whenever you want to.",
                'price'   => 79,
                'unit'   => 'page',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'name'      => 'More...',
                'description'      => "Whatever you want, chances are I can make it happen. Let me know what you're looking for, and I can quote you a customized price.",
                'price'   => '',
                'unit'   => '',
                'promise' => 'promise',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
        );

        DB::table('services')->insert( $services );
    }

}