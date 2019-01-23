<?php

use App\Entity\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    public function run(): void
    {

        //1
        Region::create([
            'name' => 'Чуйская область',
            'slug' => str_slug("Чуйская область", "-"),
            'parent_id' => null,
        ]);

        //2
        Region::create([
            'name' => 'Иссык-Кульская область‎',
            'slug' => str_slug("Иссык-Кульская область‎", "-"),
            'parent_id' => null,
        ]);

        //3
        Region::create([
            'name' => 'Ошская область‎‎',
            'slug' => str_slug("Ошская область‎‎", "-"),
            'parent_id' => null,
        ]);


        //4
        Region::create([
            'name' => 'Баткенская область‎',
            'slug' => str_slug("Баткенская область", "-"),
            'parent_id' => null,
        ]);


        //5
        Region::create([
            'name' => 'Джалал-Абадская область‎‎',
            'slug' => str_slug("Джалал-Абадская область‎", "-"),
            'parent_id' => null,
        ]);

        //6
        Region::create([
            'name' => 'Нарынская область‎‎',
            'slug' => str_slug("Нарынская область‎‎", "-"),
            'parent_id' => null,
        ]);


        //7
        Region::create([
            'name' => 'Таласская область‎',
            'slug' => str_slug("Таласская область‎‎", "-"),
            'parent_id' => null,
        ]);


        //1 1
        Region::create([
            'name' => 'Бишкек‎',
            'slug' => str_slug("Бишкек", "-"),
            'parent_id' => 1,
        ]);

        //1 1
        Region::create([
            'name' => 'Токмок',
            'slug' => str_slug("Токмок", "-"),
            'parent_id' => 1,
        ]);



        //1 1
        Region::create([
            'name' => 'Кант',
            'slug' => str_slug("Кант", "-"),
            'parent_id' => 1,
        ]);



        //1 1
        Region::create([
            'name' => 'Кара-Балта',
            'slug' => str_slug("Кара-Балта", "-"),
            'parent_id' => 1,
        ]);


        //1 1
        Region::create([
            'name' => 'Кемин',
            'slug' => str_slug("Кемин", "-"),
            'parent_id' => 1,
        ]);

        //1 1
        Region::create([
            'name' => 'Каинды',
            'slug' => str_slug("Каинды", "-"),
            'parent_id' => 1,
        ]);



        //1 1
        Region::create([
            'name' => 'Шопоков',
            'slug' => str_slug("Шопоков", "-"),
            'parent_id' => 1,
        ]);

        //2 2
        Region::create([
            'name' => 'Балыкчы',
            'slug' => str_slug("Балыкчы", "-"),
            'parent_id' => 2,
        ]);

        //2 2
        Region::create([
            'name' => 'Каракол',
            'slug' => str_slug("Каракол", "-"),
            'parent_id' => 2,
        ]);

        //2 2
        Region::create([
            'name' => 'Чолпон-Ата',
            'slug' => str_slug("Чолпон-Ата", "-"),
            'parent_id' => 2,
        ]);




        //3 3
        Region::create([
            'name' => 'Ош',
            'slug' => str_slug("Ош", "-"),
            'parent_id' => 3,
        ]);

        //3 3
        Region::create([
            'name' => 'Кара-Суу',
            'slug' => str_slug("Кара-Суу", "-"),
            'parent_id' => 3,
        ]);


        //3 3
        Region::create([
            'name' => 'Ноокат',
            'slug' => str_slug("Ноокат", "-"),
            'parent_id' => 3,
        ]);

        //3 3
        Region::create([
            'name' => 'Узген',
            'slug' => str_slug("Узген", "-"),
            'parent_id' => 3,
        ]);




        //4 4
        Region::create([
            'name' => 'Баткен‎',
            'slug' => str_slug("Баткен‎", "-"),
            'parent_id' => 4,
        ]);

        //4 4
        Region::create([
            'name' => 'Сулюкта',
            'slug' => str_slug("Сулюкта", "-"),
            'parent_id' => 4,
        ]);

        //4 4
        Region::create([
            'name' => 'Исфана',
            'slug' => str_slug("Исфана", "-"),
            'parent_id' => 4,
        ]);


        //4 4
        Region::create([
            'name' => 'Айдаркен',
            'slug' => str_slug("Айдаркен", "-"),
            'parent_id' => 4,
        ]);


        //4 4
        Region::create([
            'name' => 'Кызыл-Кия',
            'slug' => str_slug("Кызыл-Кия", "-"),
            'parent_id' => 4,
        ]);




        //5 5
        Region::create([
            'name' => 'Джалал-Абад',
            'slug' => str_slug("Джалал-Абад", "-"),
            'parent_id' => 5,
        ]);


        //5 5
        Region::create([
            'name' => 'Токтогул',
            'slug' => str_slug("Токтогул", "-"),
            'parent_id' => 5,
        ]);


        //5 5
        Region::create([
            'name' => 'Кара-Куль',
            'slug' => str_slug("Кара-Куль", "-"),
            'parent_id' => 5,
        ]);




        //5 5
        Region::create([
            'name' => 'Кербен',
            'slug' => str_slug("Кербен", "-"),
            'parent_id' => 5,
        ]);


        //5 5
        Region::create([
            'name' => 'Кок-Джангак',
            'slug' => str_slug("Кок-Джангак", "-"),
            'parent_id' => 5,
        ]);

        //5 5
        Region::create([
            'name' => 'Кочкор-Ата',
            'slug' => str_slug("Кочкор-Ата", "-"),
            'parent_id' => 5,
        ]);

        //5 5
        Region::create([
            'name' => 'Майлуу-Суу',
            'slug' => str_slug("Майлуу-Суу", "-"),
            'parent_id' => 5,
        ]);



        //5 5
        Region::create([
            'name' => 'Таш-Кумыр',
            'slug' => str_slug("Таш-Кумыр", "-"),
            'parent_id' => 5,
        ]);


        //6 6
        Region::create([
            'name' => 'Нарын',
            'slug' => str_slug("Нарын", "-"),
            'parent_id' => 6,
        ]);



        //7 7
        Region::create([
            'name' => 'Талас',
            'slug' => str_slug("Талас", "-"),
            'parent_id' => 7,
        ]);





        /*        factory(Region::class, 10)->create()->each(function(Region $region) {
                    $region->children()->saveMany(factory(Region::class, random_int(3, 10))->create()->each(function(Region $region) {
                        $region->children()->saveMany(factory(Region::class, random_int(3, 10))->make());
                    }));
                });*/



    }
}
