<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'name' => 'risk management',
                'category' => 'Innovation',
            ],
            [
                'name' => 'strategic communication',
                'category' => 'Consulting',
            ],
            [
                'name' => 'personnel management',
                'category' => 'Consulting',
            ],
            [
                'name' => 'project management',
                'category' => 'Consulting',
            ],
            [
                'name' => 'marketing',
                'category' => 'Consulting',
            ],
            [
                'name' => 'sales',
                'category' => 'Consulting',
            ],
            [
                'name' => 'law',
                'category' => 'Consulting',
            ],
            [
                'name' => 'repositioning',
                'category' => 'Innovation',
            ],
            [
                'name' => 'planning',
                'category' => 'Innovation',
            ],
            [
                'name' => 'storytelling',
                'category' => 'Innovation',
            ],
            [
                'name' => 'journalism',
                'category' => 'Innovation',
            ],
            [
                'name' => 'startups',
                'category' => 'Consulting',
            ],
            [
                'name' => 'digital marketing',
                'category' => 'Innovation',
            ],
            [
                'name' => 'creative strategist',
                'category' => 'Strategy',
            ],
            [
                'name' => 'digital strategist',
                'category' => 'Strategy',
            ],
            [
                'name' => 'digital design',
                'category' => 'Design',
            ],
            [
                'name' => 'digital development',
                'category' => 'Tech',
            ],
            [
                'name' => 'content strategist',
                'category' => 'Tech',
            ],
            [
                'name' => 'branding',
                'category' => 'Design',
            ],
            [
                'name' => 'front-end development',
                'category' => 'Design'
            ],
            [
                'name' => 'multimedia design',
                'category' => 'Design'
            ],
            [
                'name' => 'client communication',
                'category' => 'Strategy'
            ],
            [
                'name' => 'data structures & algorithms',
                'category' => 'Tech'
            ],
            [
                'name' => 'back-end development',
                'category' => 'Tech'
            ],
            [
                'name' => 'tech project lead',
                'category' => 'Tech'
            ],
            [
                'name' => 'web development',
                'category' => 'Tech',
            ],
            [
                'name' => 'Electronics',
                'category' => 'Tech'
            ],
            [
                'name' => 'Laravel',
                'category' => 'Tech'
            ],
            [
                'name' => 'React',
                'category' => 'Tech'
            ],
            [
                'name' => 'concurrency',
                'category' => 'Tech'
            ],
            [
                'name' => 'web accessibility',
                'category' => 'Tech'
            ]


        ]);
    }
}
