<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUserSamples();
    }
    public function createUserSamples()
    {
        $users = $this->getUser();
        foreach ($users as $user){
            User::updateOrCreate($user);
        }
    }
    public function getUser()
    {
        id
        primary key
        currency_id
    avatar
    name
    email
    password
    verification_token
    remember_token
    language
    theme
    weekly_report
    created_at
    updated_at
    picture
    telephone
    skills
    role
    department
    organization
    location
    zone_id
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
