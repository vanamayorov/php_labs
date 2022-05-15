<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-1.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-2.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-3.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-1.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-2.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-3.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-1.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-2.jpg',
                'price' => '11000',
            ],
            [
                'title' => 'Станки и оборудование',
                'description' => 'Lorem ipsum dolor sit amet, c onsectetur adipiscing elit, sed do eiusmod ut.',
                'image' => 'img/our-works/works-3.jpg',
                'price' => '11000',
            ],
        ]);
    }
}
