<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
           [
               'name' => 'Антон Макаров',
               'position' => 'Руководитель компании',
               'image' => 'img/staff/1.png',
               'inst_link' => '#',
               'vk_link' => '#',
               'linkedin_link' => '#'
           ],
            [
                'name' => 'Елена Валерьева',
                'position' => 'Главный бухгалтер',
                'image' => 'img/staff/2.png',
                'inst_link' => '#',
                'vk_link' => '#',
                'linkedin_link' => '#'
            ],
            [
                'name' => 'Иван Аркадьев',
                'position' => 'Менеджер по закупкам',
                'image' => 'img/staff/3.png',
                'inst_link' => '#',
                'vk_link' => '#',
                'linkedin_link' => '#'
            ],
            [
                'name' => 'Борис Вавилов',
                'position' => 'Бухгалтер',
                'image' => 'img/staff/4.png',
                'inst_link' => '#',
                'vk_link' => '#',
                'linkedin_link' => '#'
            ],
            [
                'name' => 'Алина Кравец',
                'position' => 'Сотрудник отдела кадров',
                'image' => 'img/staff/5.png',
                'inst_link' => '#',
                'vk_link' => '#',
                'linkedin_link' => '#'
            ],
            [
                'name' => 'Виктор Козуб',
                'position' => 'Менеджер по закупкам',
                'image' => 'img/staff/6.png',
                'inst_link' => '#',
                'vk_link' => '#',
                'linkedin_link' => '#'
            ],
        ]);
    }
}
