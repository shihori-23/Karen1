<?php

use Illuminate\Database\Seeder;

class PersonalworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //
            $faker = Faker\Factory::create("ja_JP");
                
            $data = [
                [
                    'file' => "storage/personal_img/1.jpg",
                    'sort' => 10,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/2.jpg",
                    'sort' => 20,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/3.jpg",
                    'sort' => 30,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/4.jpg",
                    'sort' => 40,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/5.jpg",
                    'sort' => 50,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/6.jpg",
                    'sort' => 60,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/7.jpg",
                    'sort' => 70,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/9.jpg",
                    'sort' => 80,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/10.jpg",
                    'sort' => 90,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/11.jpg",
                    'sort' => 100,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/12.jpg",
                    'sort' => 110,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/13.jpg",
                    'sort' => 120,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/14.jpg",
                    'sort' => 130,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/15.jpg",
                    'sort' => 140,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/16.jpg",
                    'sort' => 150,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/18.jpg",
                    'sort' => 160,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/19.jpg",
                    'sort' => 170,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/20_1.jpg",
                    'sort' => 180,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/20_2.jpg",
                    'sort' => 190,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/20_3.jpg",
                    'sort' => 200,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/21.jpg",
                    'sort' => 210,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/22.jpg",
                    'sort' => 220,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/23.jpg",
                    'sort' => 230,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/24.jpg",
                    'sort' => 240,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/25.jpg",
                    'sort' => 250,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/26.jpg",
                    'sort' => 260,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/28.jpg",
                    'sort' => 270,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img/29.jpg",
                    'sort' => 280,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/3.jpg",
                    'sort' => 290,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/4_1.jpg",
                    'sort' => 300,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/4_2.jpg",
                    'sort' => 310,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/4_3.jpg",
                    'sort' => 320,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/5.jpg",
                    'sort' => 330,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/9.jpg",
                    'sort' => 340,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/10.jpg",
                    'sort' => 350,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/11.jpg",
                    'sort' => 360,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/12.jpg",
                    'sort' => 370,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/13.jpg",
                    'sort' => 380,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/15.jpg",
                    'sort' => 390,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/16.jpg",
                    'sort' => 400,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/17.jpg",
                    'sort' => 410,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/18.jpg",
                    'sort' => 420,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/19.jpg",
                    'sort' => 430,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/20.jpg",
                    'sort' => 440,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/1.jpg",
                    'sort' => 450,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/2.jpg",
                    'sort' => 460,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/21.jpg",
                    'sort' => 470,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                [
                    'file' => "storage/personal_img2/24.jpg",
                    'sort' => 480,
                    "created_at" => $faker->dateTime("now"),
                    "updated_at" => $faker->dateTime("now"),
                ],
                
            ];
            DB::table('personalworks')->insert($data);
        }
    }
