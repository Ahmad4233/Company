<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stat;

class StatSeeder extends Seeder
{
    public function run()
    {
        $stats = [
            [
                'title' => 'Projects Completed',
                'value' => 250,
                'icon' => 'fas fa-project-diagram',
                'suffix' => '+',
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'Happy Clients',
                'value' => 150,
                'icon' => 'fas fa-users',
                'suffix' => '+',
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'Years Experience',
                'value' => 5,
                'icon' => 'fas fa-award',
                'suffix' => '+',
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => 'Support',
                'value' => 24,
                'icon' => 'fas fa-clock',
                'suffix' => '/7',
                'is_active' => true,
                'order' => 4
            ]
        ];

        foreach ($stats as $stat) {
            Stat::create($stat);
        }
    }
}
