<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamMember = DB::table('team_member')->insert([
            'name' => 'Patrick Ronning',
            'title' => 'Partner & Brand Strategist',
            'bio' => "As a founding partner of Signifly, Patrick has many years of experience in strategic communication, personnel management, and the creation of a large network and collaboration with a wide range of partners and customers, public as well as private. Through Signifly, Patrick has run projects of all sizes - from the idea phase to a successful execution and implementation.\nPatrick holds a bachelor’s degree in Business Administration & Organisational Communication and a master’s degree in Business administration & Organisational Communication from Copenhagen Business School.\nPatrick has previously provided communication advice for, among others, TDC, the Road Directorate, the Capital Region of Denmark, Google, the City of Copenhagen, the Prison and Probation Service and the Pharmaceutical Industry Association. As partner, Patrick also makes important, strategic decisions at all levels of the company, including contracts, customer relationships, and resource allocation.",
            'years_with_signifly' => 10,
            'phone' => '+45 4031 2498',
            'email' => 'plr@signifly.com',
        ]);




    }
}
