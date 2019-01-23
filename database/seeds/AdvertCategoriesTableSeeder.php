<?php

use App\Entity\Adverts\Category;
use Illuminate\Database\Seeder;

class AdvertCategoriesTableSeeder extends Seeder
{
    public function run(): void
    {

        //1
        Category::create([
            'name' => 'Легковые автомобили',
            'slug' => str_slug("Легковые автомобили", "-"),
            'icon' => 'mdi-car',
            'color' => 'blue lighten-2',
            'parent_id' => null,
        ]);


        //2
        Category::create([
            'name' => 'Недвижимость',
            'slug' => str_slug("Недвижимость", "-"),
            'icon' => 'mdi-laptop',
            'color' => 'brown darken-1',
            'parent_id' => null,
        ]);


        //3
        Category::create([
            'name' => 'Компьютерная техника',
            'slug' => str_slug("Компьютерная техника", "-"),
            'icon' => 'mdi-car-door',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);



        //4
        Category::create([
            'name' => 'Телефоны и планшеты',
            'slug' => str_slug("Телефоны и планшеты", "-"),
            'icon' => 'mdi-tshirt-crew-outline',
            'color' => 'cyan accent-4',
            'parent_id' => null,
        ]);





        //5
        Category::create([
            'name' => 'Бытовая техника',
            'slug' => str_slug("Бытовая техника", "-"),
            'icon' => 'mdi-screwdriver',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);





        //6
        Category::create([
            'name' => 'Электроника',
            'slug' => str_slug("Электроника", "-"),
            'icon' => 'mdi-scanner',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);


        //7
        Category::create([
            'name' => 'Фото и видеокамеры',
            'slug' => str_slug("Фото и видеокамеры", "-"),
            'icon' => 'mdi-tractor',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);






        //8
        Category::create([
            'name' => 'Услуги',
            'slug' => str_slug("Услуги", "-"),


            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',


            'parent_id' => null,
        ]);




        //9
        Category::create([
            'name' => 'Вакансии',
            'slug' => str_slug("Вакансии", "-"),
            'icon' => 'mdi-briefcase',
            'color' => 'brown darken-1',
            'parent_id' => null,
        ]);




        //10
        Category::create([
            'name' => 'Запчасти и автотовары',
            'slug' => str_slug("Запчасти и автотовары", "-"),
            'icon' => 'mdi-cellphone-android',
            'color' => 'brown darken-1',
            'parent_id' => null,
        ]);




        //11
        Category::create([
            'name' => 'Спецтехника и мотоциклы',
            'slug' => str_slug("Спецтехника и мотоциклы", "-"),
            'icon' => 'mdi-home',
            'color' => 'brown darken-1',
            'parent_id' => null,
        ]);


        //12
        Category::create([
            'name' => 'Одежда',
            'slug' => str_slug("Одежда", "-"),
            'icon' => 'mdi-hammer',
            'color' => 'deep-purple darken-2',
            'parent_id' => null,
        ]);

        //13
        Category::create([
            'name' => 'Детские товары',
            'slug' => str_slug("Детские товары", "-"),
            'icon' => 'mdi-cellphone-link',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);





        //14
        Category::create([
            'name' => ' Для дома и дачи',
            'slug' => str_slug(" Для дома и дачи", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);


        //15
        Category::create([
            'name' => 'Ремонт и строительство',
            'slug' => str_slug("Ремонт и строительство", "-"),
            'icon' => 'mdi-tag-text-outline',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);


        //16
        Category::create([
            'name' => 'Красота и здоровье',
            'slug' => str_slug("Красота и здоровье", "-"),

            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',

            'parent_id' => null,
        ]);

        //17
        Category::create([
            'name' => 'Спорт и отдых',
            'slug' => str_slug("Спорт и отдых", "-"),

            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);


        //18
        Category::create([
            'name' => 'Хобби и развлечения',
            'slug' => str_slug("Хобби и развлечения", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => null,
        ]);




        //19
        Category::create([
            'name' => 'Для бизнеса',
            'slug' => str_slug("Для бизнеса", "-"),

            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',

            'parent_id' => null,
        ]);



        //20
        Category::create([
            'name' => 'Животные',
            'slug' => str_slug("Животные", "-"),

            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',

            'parent_id' => null,
        ]);



        //21
        Category::create([
            'name' => 'Прочее',
            'slug' => str_slug("Прочее", "-"),

            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',

            'parent_id' => null,
        ]);


        //1 22
        Category::create([
            'name' => ' С пробегом',
            'slug' => str_slug(" С пробегом", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 1,
        ]);







        //1 23
        Category::create([
            'name' => 'Новые',
            'slug' => str_slug("Новые", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 1,
        ]);


        //2 24
        Category::create([
            'name' => 'Новостройки',
            'slug' => str_slug("Новостройки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);

        //2 25
        Category::create([
            'name' => 'Продажа квартиры',
            'slug' => str_slug("Продажа квартиры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);


        //2 26
        Category::create([
            'name' => 'Продажа комнаты',
            'slug' => str_slug("Продажа комнаты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);

        //2 27
        Category::create([
            'name' => 'Продажа дома',
            'slug' => str_slug("Продажа дома", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);


        //2 28
        Category::create([
            'name' => 'Продажа участка',
            'slug' => str_slug("Продажа участка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);

        //2 29
        Category::create([
            'name' => 'Аренда квартиры длительно',
            'slug' => str_slug("Аренда квартиры длительно", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);


        //2 30
        Category::create([
            'name' => 'Аренда комнаты длительно',
            'slug' => str_slug("Аренда комнаты длительно", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);

        //2 31
        Category::create([
            'name' => 'Аренда дома длительно',
            'slug' => str_slug("Аренда дома длительно", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);


        //2 32
        Category::create([
            'name' => 'Аренда квартиры посуточно',
            'slug' => str_slug("Аренда квартиры посуточно", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);

        //2 33
        Category::create([
            'name' => 'Аренда комнаты посуточно',
            'slug' => str_slug("Аренда комнаты посуточно", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);


        //2 34
        Category::create([
            'name' => 'Коммерческая недвижимость',
            'slug' => str_slug("Коммерческая недвижимость", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);

        //2 35
        Category::create([
            'name' => 'Прочие строения',
            'slug' => str_slug("Прочие строения", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 2,
        ]);


        //3 36
        Category::create([
            'name' => 'Ноутбуки',
            'slug' => str_slug("Ноутбуки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);


        //3 37
        Category::create([
            'name' => 'Компьютеры',
            'slug' => str_slug("Компьютеры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 38
        Category::create([
            'name' => 'Мониторы',
            'slug' => str_slug("Мониторы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 39
        Category::create([
            'name' => 'Комплектующие и запчасти',
            'slug' => str_slug("Комплектующие и запчасти", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 40
        Category::create([
            'name' => 'Клавиатуры и мыши',
            'slug' => str_slug("Клавиатуры и мыши", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 41
        Category::create([
            'name' => 'Оргтехника и расходники',
            'slug' => str_slug("Оргтехника и расходники", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);


        //3 42
        Category::create([
            'name' => 'Сетевое оборудование',
            'slug' => str_slug("Сетевое оборудование", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 43
        Category::create([
            'name' => 'Мультимедиа',
            'slug' => str_slug("Мультимедиа", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 44
        Category::create([
            'name' => 'Накопители данных и картридеры',
            'slug' => str_slug("Накопители данных и картридеры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 45
        Category::create([
            'name' => 'Программное обеспечение',
            'slug' => str_slug("Программное обеспечение", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 46
        Category::create([
            'name' => 'Рули, джойстики, геймпады',
            'slug' => str_slug("Рули, джойстики, геймпады", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //3 47
        Category::create([
            'name' => 'Аксессуары',
            'slug' => str_slug("Аксессуары", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);




        //3 48
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 3,
        ]);



        //4 49
        Category::create([
            'name' => 'Планшеты',
            'slug' => str_slug("Планшеты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);





        //4 50
        Category::create([
            'name' => 'Умные часы и браслеты',
            'slug' => str_slug("Умные часы и браслеты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);


        //4 51
        Category::create([
            'name' => 'Стационарные телефоны',
            'slug' => str_slug("Стационарные телефоны", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);





        //4 52
        Category::create([
            'name' => 'Рации и спутниковые телефоны',
            'slug' => str_slug("Рации и спутниковые телефоны", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);

        //4 53
        Category::create([
            'name' => 'Запчасти',
            'slug' => str_slug("Запчасти", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);





        //4 54
        Category::create([
            'name' => 'Внешние аккумуляторы',
            'slug' => str_slug("Внешние аккумуляторы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);
        //4 55
        Category::create([
            'name' => ' Зарядные устройства',
            'slug' => str_slug(" Зарядные устройства", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);





        //4 56
        Category::create([
            'name' => 'Чехлы',
            'slug' => str_slug("Чехлы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);
        //4 57
        Category::create([
            'name' => 'Аксессуары',
            'slug' => str_slug("Аксессуары", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);





        //4 58
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 4,
        ]);

        //5 59
        Category::create([
            'name' => 'Весы',
            'slug' => str_slug("Весы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 60
        Category::create([
            'name' => 'Вытяжки',
            'slug' => str_slug("Вытяжки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 61
        Category::create([
            'name' => 'Измельчение и смешивание',
            'slug' => str_slug("Измельчение и смешивание", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 62
        Category::create([
            'name' => 'Климатическая техника',
            'slug' => str_slug("Климатическая техника", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 63
        Category::create([
            'name' => 'Кулеры и фильтры для воды',
            'slug' => str_slug("Кулеры и фильтры для воды", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 64
        Category::create([
            'name' => 'Плиты и духовые шкафы',
            'slug' => str_slug("Плиты и духовые шкафы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 65
        Category::create([
            'name' => 'Посудомоечные машины',
            'slug' => str_slug("Посудомоечные машины", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 66
        Category::create([
            'name' => 'Приготовление еды',
            'slug' => str_slug("Приготовление еды", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 67
        Category::create([
            'name' => 'Приготовление напитков',
            'slug' => str_slug("Приготовление напитков", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 68
        Category::create([
            'name' => 'Пылесосы и пароочистители',
            'slug' => str_slug("Пылесосы и пароочистители", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 69
        Category::create([
            'name' => 'Стиральные машины',
            'slug' => str_slug("Стиральные машины", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //5 70
        Category::create([
            'name' => 'Утюги и уход за одеждой',
            'slug' => str_slug("Утюги и уход за одеждой", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);



        //5 71
        Category::create([
            'name' => 'Холодильники',
            'slug' => str_slug("Холодильники", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);





        //5 72
        Category::create([
            'name' => 'Швейное оборудование',
            'slug' => str_slug("Швейное оборудование", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);




        //5 73
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 5,
        ]);


        //6 74
        Category::create([
            'name' => 'Телевизоры',
            'slug' => str_slug("Телевизоры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 75
        Category::create([
            'name' => 'Проекторы',
            'slug' => str_slug("Проекторы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);


        //6 76
        Category::create([
            'name' => 'Акустика, колонки, сабвуферы',
            'slug' => str_slug("Акустика, колонки, сабвуферы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);


        //6 77
        Category::create([
            'name' => 'Домашние кинотеатры',
            'slug' => str_slug("Домашние кинотеатры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);


        //6 78
        Category::create([
            'name' => 'DVD, Blu-ray и медиаплееры',
            'slug' => str_slug("DVD, Blu-ray и медиаплееры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);


        //6 79
        Category::create([
            'name' => 'Музыкальные центры и магнитолы',
            'slug' => str_slug("Музыкальные центры и магнитолы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 80
        Category::create([
            'name' => 'MP3-плееры и портативное аудио',
            'slug' => str_slug("MP3-плееры и портативное аудио", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 81
        Category::create([
            'name' => 'Электронные книги',
            'slug' => str_slug("Электронные книги", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 82
        Category::create([
            'name' => 'Спутниковое и цифровое ТВ',
            'slug' => str_slug("Спутниковое и цифровое ТВ", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 83
        Category::create([
            'name' => 'Аудиоусилители и ресиверы',
            'slug' => str_slug("Аудиоусилители и ресиверы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 84
        Category::create([
            'name' => 'Наушники',
            'slug' => str_slug("Наушники", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 85
        Category::create([
            'name' => 'Микрофоны',
            'slug' => str_slug("Микрофоны", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //6 86
        Category::create([
            'name' => 'Аксессуары',
            'slug' => str_slug("Аксессуары", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);






        //6 87
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 6,
        ]);



        //7 88
        Category::create([
            'name' => 'Фотоаппараты',
            'slug' => str_slug("Фотоаппараты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);



        //7 89
        Category::create([
            'name' => 'Видеокамеры',
            'slug' => str_slug("Видеокамеры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //7 90
        Category::create([
            'name' => 'Видеонаблюдение',
            'slug' => str_slug("Видеонаблюдение", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //7 91
        Category::create([
            'name' => 'Объективы',
            'slug' => str_slug("Объективы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //7 92
        Category::create([
            'name' => 'Фотовспышки',
            'slug' => str_slug("Фотовспышки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //7 93
        Category::create([
            'name' => 'Аксессуары',
            'slug' => str_slug("Аксессуары", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //7 94
        Category::create([
            'name' => 'Штативы и стабилизаторы',
            'slug' => str_slug("Штативы и стабилизаторы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);




        //7 95
        Category::create([
            'name' => 'Студийное оборудование',
            'slug' => str_slug("Студийное оборудование", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);




        //7 96
        Category::create([
            'name' => 'Цифровые фоторамки',
            'slug' => str_slug("Цифровые фоторамки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);




        //7 97
        Category::create([
            'name' => 'Компактные фотопринтеры',
            'slug' => str_slug("Компактные фотопринтеры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //7 98
        Category::create([
            'name' => 'Бинокли и оптические приборы',
            'slug' => str_slug("Бинокли и оптические приборы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 7,
        ]);


        //8 100
        Category::create([
            'name' => 'Ремонт и строительство',
            'slug' => str_slug("Ремонт и строительство", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8 ,
        ]);


        //8 101
        Category::create([
            'name' => 'Мастер на час',
            'slug' => str_slug("Мастер на час", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);

        //8 102
        Category::create([
            'name' => 'Перевозки',
            'slug' => str_slug("Перевозки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);


        //8 103
        Category::create([
            'name' => 'Красота и здоровье',
            'slug' => str_slug("Красота и здоровье", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);

        //8 104
        Category::create([
            'name' => 'Компьютерные услуги',
            'slug' => str_slug("Компьютерные услуги", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);

        //8 105
        Category::create([
            'name' => 'Автоуслуги',
            'slug' => str_slug("Автоуслуги", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);

        //8 106
        Category::create([
            'name' => 'Ремонт техники',
            'slug' => str_slug("Ремонт техники", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);



        //8 107
        Category::create([
            'name' => 'Обучение',
            'slug' => str_slug("Обучение", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);



        //8 108
        Category::create([
            'name' => 'Организация праздников',
            'slug' => str_slug("Организация праздников", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);


        //8 109
        Category::create([
            'name' => 'Фото и видеосъемка',
            'slug' => str_slug("Фото и видеосъемка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);


        //8 110
        Category::create([
            'name' => 'Уборка',
            'slug' => str_slug("Уборка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);



        //8 111
        Category::create([
            'name' => 'Пошив одежды и обуви',
            'slug' => str_slug("Пошив одежды и обуви", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);


        //8 112
        Category::create([
            'name' => 'Продукты питания',
            'slug' => str_slug("Продукты питания", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);



        //8 113
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 8,
        ]);






        //10 114
        Category::create([
            'name' => 'Запчасти',
            'slug' => str_slug("Запчасти", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);

        //10 115
        Category::create([
            'name' => 'Шины и диски',
            'slug' => str_slug("Шины и диски", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);




        //10 116
        Category::create([
            'name' => 'Масла и автохимия',
            'slug' => str_slug("Масла и автохимия", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);




        //10 117
        Category::create([
            'name' => 'Автоэлектроника и GPS',
            'slug' => str_slug("Автоэлектроника и GPS", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);

        //10 118
        Category::create([
            'name' => 'Аксессуары и инструменты',
            'slug' => str_slug("Аксессуары и инструменты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);




        //10 119
        Category::create([
            'name' => 'Аудио и видео',
            'slug' => str_slug("Аудио и видео", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);




        //10 120
        Category::create([
            'name' => 'Противоугонные устройства',
            'slug' => str_slug("Противоугонные устройства", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);

        //10 121
        Category::create([
            'name' => 'Багажные системы и прицепы',
            'slug' => str_slug("Багажные системы и прицепы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);




        //10 122
        Category::create([
            'name' => 'Мотоэкипировка',
            'slug' => str_slug("Мотоэкипировка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);




        //10 123
        Category::create([
            'name' => 'Автомобили',
            'slug' => str_slug("Автомобили", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);

        //10 124
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 10,
        ]);



        //11 125
        Category::create([
            'name' => ' Автобусы и грузовики',
            'slug' => str_slug(" Автобусы и грузовики", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 11,
        ]);



        //11 126
        Category::create([
            'name' => 'Водный транспорт',
            'slug' => str_slug("Водный транспорт", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 11,
        ]);





        //11 127
        Category::create([
            'name' => 'Мототехника',
            'slug' => str_slug("Мототехника", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 11,
        ]);





        //11 128
        Category::create([
            'name' => 'Спецтехника',
            'slug' => str_slug("Спецтехника", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 11,
        ]);












        //13 130
        Category::create([
            'name' => 'Автокресла',
            'slug' => str_slug("Автокресла", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 131
        Category::create([
            'name' => 'Здоровье и уход',
            'slug' => str_slug("Здоровье и уход", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 132
        Category::create([
            'name' => 'Игрушки и игры',
            'slug' => str_slug("Игрушки и игры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 133
        Category::create([
            'name' => 'Коляски',
            'slug' => str_slug("Коляски", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);





        //13 134
        Category::create([
            'name' => 'Кормление и питание',
            'slug' => str_slug("Кормление и питание", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 135
        Category::create([
            'name' => 'Купание',
            'slug' => str_slug("Купание", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 136
        Category::create([
            'name' => 'Обустройство детской',
            'slug' => str_slug("Обустройство детской", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 137
        Category::create([
            'name' => 'Подгузники и горшки',
            'slug' => str_slug("Подгузники и горшки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);




        //13 138
        Category::create([
            'name' => 'Радио  и видеоняни',
            'slug' => str_slug("Радио  и видеоняни", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);


        //13 139
        Category::create([
            'name' => 'Товары для мам',
            'slug' => str_slug("Товары для мам", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);


        //13 140
        Category::create([
            'name' => 'Товары для учебы',
            'slug' => str_slug("Товары для учебы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);


        //13 141
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 13,
        ]);





        //14 142
        Category::create([
            'name' => ' Бытовая химия',
            'slug' => str_slug(" Бытовая химия", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);




        //14 143
        Category::create([
            'name' => 'Диваны и кресла',
            'slug' => str_slug("Диваны и кресла", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);



        //14 144
        Category::create([
            'name' => 'Кровати и матрасы',
            'slug' => str_slug("Кровати и матрасы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);




        //14 145
        Category::create([
            'name' => 'Кухонные гарнитуры',
            'slug' => str_slug("Кухонные гарнитуры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);



        //14 146
        Category::create([
            'name' => 'Освещение',
            'slug' => str_slug("Освещение", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);




        //14 147
        Category::create([
            'name' => 'Оформление интерьера',
            'slug' => str_slug("Оформление интерьера", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);



        //14 142
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);




        //14 148
        Category::create([
            'name' => 'Охрана и сигнализации',
            'slug' => str_slug("Охрана и сигнализации", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);


        //14 149
        Category::create([
            'name' => 'Подставки и тумбы',
            'slug' => str_slug("Подставки и тумбы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);




        //14 150
        Category::create([
            'name' => 'Посуда',
            'slug' => str_slug("Посуда", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);


        //14 151
        Category::create([
            'name' => 'Растения и семена',
            'slug' => str_slug("Растения и семена", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);




        //14 152
        Category::create([
            'name' => 'Сад и огород',
            'slug' => str_slug("Сад и огород", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);


        //14 153
        Category::create([
            'name' => 'Садовая мебель',
            'slug' => str_slug("Садовая мебель", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);


        //14 154
        Category::create([
            'name' => 'Столы и стулья',
            'slug' => str_slug("Столы и стулья", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);

        //14 155
        Category::create([
            'name' => 'Текстиль и ковры',
            'slug' => str_slug("Текстиль и ковры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);

        //14 156
        Category::create([
            'name' => 'Шкафы и комоды',
            'slug' => str_slug("Шкафы и комоды", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);


        //14 157
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 14,
        ]);





        //15 158
        Category::create([
            'name' => 'Двери',
            'slug' => str_slug("Двери", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);




        //15 159
        Category::create([
            'name' => 'Измерительные инструменты',
            'slug' => str_slug("Измерительные инструменты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);




        //15 160
        Category::create([
            'name' => 'Окна',
            'slug' => str_slug("Окна", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);



        //15 161
        Category::create([
            'name' => 'Отопление и вентиляция',
            'slug' => str_slug("Отопление и вентиляция", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);


        //15 162
        Category::create([
            'name' => 'Потолки',
            'slug' => str_slug("Потолки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);



        //15 163
        Category::create([
            'name' => 'Ручные инструменты',
            'slug' => str_slug("Ручные инструменты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);



        //15 164
        Category::create([
            'name' => 'Сантехника и водоснабжение',
            'slug' => str_slug("Сантехника и водоснабжение", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);


        //15 165
        Category::create([
            'name' => 'Стройматериалы',
            'slug' => str_slug("Стройматериалы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);

        //15 166
        Category::create([
            'name' => 'Электрика',
            'slug' => str_slug("Электрика", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);

        //15 167
        Category::create([
            'name' => 'Электроинструменты',
            'slug' => str_slug("Электроинструменты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);


        //15 168
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 15,
        ]);

        //16 169
        Category::create([
            'name' => 'Макияж',
            'slug' => str_slug("Макияж", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);



        //16 170
        Category::create([
            'name' => 'Маникюр и педикюр',
            'slug' => str_slug("Маникюр и педикюр", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);




        //16 171
        Category::create([
            'name' => 'Медицинские товары',
            'slug' => str_slug("Медицинские товары", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);



        //16 172
        Category::create([
            'name' => 'Парфюмерия',
            'slug' => str_slug("Парфюмерия", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);

        //16 173
        Category::create([
            'name' => 'Стрижка и удаление волос',
            'slug' => str_slug("Стрижка и удаление волос", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);




        //16 174
        Category::create([
            'name' => 'Уход за волосами',
            'slug' => str_slug("Уход за волосами", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);



        //16 175
        Category::create([
            'name' => 'Уход за кожей',
            'slug' => str_slug("Уход за кожей", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);

        //16 176
        Category::create([
            'name' => 'Фены и укладка',
            'slug' => str_slug("Фены и укладка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);




        //16 178
        Category::create([
            'name' => 'Тату и татуаж',
            'slug' => str_slug("Тату и татуаж", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);



        //16 179
        Category::create([
            'name' => 'Солярии и загар',
            'slug' => str_slug("Солярии и загар", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);



        //16 180
        Category::create([
            'name' => 'Средства для гигиены',
            'slug' => str_slug("Средства для гигиены", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);


        //16 181
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 16,
        ]);





        //17 182
        Category::create([
            'name' => 'Спортивная защита',
            'slug' => str_slug("Спортивная защита", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);






        //17 183
        Category::create([
            'name' => 'Велосипеды',
            'slug' => str_slug("Велосипеды", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);



        //17 184
        Category::create([
            'name' => 'Ролики и скейтбординг',
            'slug' => str_slug("Ролики и скейтбординг", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);





        //17 185
        Category::create([
            'name' => 'Самокаты и гироскутеры',
            'slug' => str_slug("Самокаты и гироскутеры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);



        //17 186
        Category::create([
            'name' => 'Бильярд и боулинг',
            'slug' => str_slug("Бильярд и боулинг", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);

        //17 187
        Category::create([
            'name' => 'Водные виды спорта',
            'slug' => str_slug("Водные виды спорта", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);





        //17 188
        Category::create([
            'name' => 'Единоборства',
            'slug' => str_slug("Единоборства", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);



        //17 189
        Category::create([
            'name' => 'Зимние виды спорта',
            'slug' => str_slug("Зимние виды спорта", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);


        //17 190
        Category::create([
            'name' => 'Игры с мячом',
            'slug' => str_slug("Игры с мячом", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);





        //17 191
        Category::create([
            'name' => 'Охота и рыбалка',
            'slug' => str_slug("Охота и рыбалка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);



        //17 192
        Category::create([
            'name' => 'Туризм и отдых на природе',
            'slug' => str_slug("Туризм и отдых на природе", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);


        //17 193
        Category::create([
            'name' => 'Теннис, бадминтон, дартс',
            'slug' => str_slug("Теннис, бадминтон, дартс", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);


        //17 194
        Category::create([
            'name' => 'Тренажеры и фитнес',
            'slug' => str_slug("Тренажеры и фитнес", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);


        //17 195
        Category::create([
            'name' => 'Спортивное питание',
            'slug' => str_slug("Спортивное питание", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);

        //17 196
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 17,
        ]);





        //18 197
        Category::create([
            'name' => 'Билеты',
            'slug' => str_slug("Билеты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);



        //18 198
        Category::create([
            'name' => 'Видеофильмы',
            'slug' => str_slug("Видеофильмы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);


        //18 199
        Category::create([
            'name' => 'Игровые приставки',
            'slug' => str_slug("Игровые приставки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);


        //18 200
        Category::create([
            'name' => 'Игры для приставок и ПК',
            'slug' => str_slug("Игры для приставок и ПК", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);


        //18 201
        Category::create([
            'name' => 'Книги и журналы',
            'slug' => str_slug("Книги и журналы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);


        //18 203
        Category::create([
            'name' => 'Коллекционирование',
            'slug' => str_slug("Коллекционирование", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);


        //18 204
        Category::create([
            'name' => 'Материалы для творчества',
            'slug' => str_slug("Материалы для творчества", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);



        //18 205
        Category::create([
            'name' => 'Музыка',
            'slug' => str_slug("Музыка", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);



        //18 206
        Category::create([
            'name' => 'Музыкальные инструменты',
            'slug' => str_slug("Музыкальные инструменты", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);



        //18 207
        Category::create([
            'name' => 'Настольные игры',
            'slug' => str_slug("Настольные игры", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);



        //18 208
        Category::create([
            'name' => 'Другое',
            'slug' => str_slug("Другое", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 18,
        ]);



        //19 209
        Category::create([
            'name' => 'Готовый бизнес',
            'slug' => str_slug("Готовый бизнес", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 19,
        ]);


        //19 210
        Category::create([
            'name' => 'Оборудование',
            'slug' => str_slug("Оборудование", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 19,
        ]);



        //20 211
        Category::create([
            'name' => 'Собаки',
            'slug' => str_slug("Собаки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);


        //20 212
        Category::create([
            'name' => 'Кошки',
            'slug' => str_slug("Кошки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);



        //20 213
        Category::create([
            'name' => 'Птицы',
            'slug' => str_slug("Птицы", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);

        //20 214
        Category::create([
            'name' => 'Грызуны',
            'slug' => str_slug("Грызуны", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);


        //20 215
        Category::create([
            'name' => 'Рыбки',
            'slug' => str_slug("Рыбки", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);



        //20 216
        Category::create([
            'name' => 'С/х животные',
            'slug' => str_slug("С/х животные", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);

        //20 217
        Category::create([
            'name' => 'Другие животные',
            'slug' => str_slug("Другие животные", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);


        //20 218
        Category::create([
            'name' => 'Товары для животных',
            'slug' => str_slug("Товары для животных", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);



        //20 219
        Category::create([
            'name' => 'Аквариумистика',
            'slug' => str_slug("Аквариумистика", "-"),
            'icon' => 'mdi-paw',
            'color' => 'indigo accent-3',
            'parent_id' => 20,
        ]);









        /*        factory(Category::class, 10)->create()->each(function(Category $category) {
                    $counts = [0, random_int(3, 7)];
                    $category->children()->saveMany(factory(Category::class, $counts[array_rand($counts)])->create()->each(function(Category $category) {
                        $counts = [0, random_int(3, 7)];
                        $category->children()->saveMany(factory(Category::class, $counts[array_rand($counts)])->create());
                    }));
                });*/
    }
}
