<?php

use Illuminate\Database\Seeder;
use App\Zone;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createZoneSamples();
    }
    public function createZoneSamples()
    {
        $zones = $this->getZone();
        foreach ($zones as $zone){
            Zone::updateOrCreate($zone);
        }
    }
    public function getZone()
    {
        return array(
            array(
                'user_id'    => 1,
                'admin_user_id'    => 1,
                'name'  => "Skyhub"
            ),
            array(
                'user_id'    => 1,
                'admin_user_id'    => 2,
                'name'  => "Esmart"
            ),
            array(
                'user_id'    => 1,
                'admin_user_id'    => 3,
                'name'  => "Sieve"
            ),
            array(
                'user_id'    => 1,
                'admin_user_id'    => 4,
                'name'  => "SiteBlindado"
            ),
            array(
                'user_id'    => 1,
                'admin_user_id'    => 5,
                'name'  => "Direct"
            ),
            array(
                'user_id'    => 1,
                'admin_user_id'    => 6,
                'name'  => "Marketplace"
            )
        );
    }
}
