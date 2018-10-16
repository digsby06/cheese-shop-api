<?php

use Illuminate\Database\Seeder;

class CheesesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if(DB::table('cheeses')->get()->count() == 0){
        $cheeses = [
            [
              'product' => 'Mozzarella',
              'image' => 'https://res.cloudinary.com/whitt-images/image/upload/v1539691088/Cheese%20API/mozzarella.jpg',
              'desc' => 'Mozzarella cheese is a sliceable curd cheese originating in Italy. Traditional Mozzarella cheese is made from milk of water buffalos herded in very few countries such as Italy and Bulgaria. As a result, most of the Mozzarella cheeses available now are made from cow\'s milk.',
              'price' => 4.85,
              'unit' => 'lb',
              'created_at'=>\Carbon\Carbon::now()
            ],
            [
              'product' => 'Parmesan',
              'image' => 'https://res.cloudinary.com/whitt-images/image/upload/v1539691088/Cheese%20API/parm.jpg',
              'desc' => 'The Parmigiano Reggiano or Parmesan cheese as it is called in English is considered to be among the top cheeses by cheese connoisseurs. Today, it is produced by various producers. However, PDO designation states that for a cheese to be called as Parmesan, it has to be produced from cows grazing on fresh grass and hay.',
              'price' => 9.99,
              'unit' => 'lb',
              'created_at'=>\Carbon\Carbon::now()
            ],
            [
              'product' => 'Brie',
              'image' => 'https://res.cloudinary.com/whitt-images/image/upload/v1539691088/Cheese%20API/brie.jpg',
              'desc' => 'Italiano',
              'price' => 12.50,
              'unit' => 'lb',
              'created_at'=>\Carbon\Carbon::now()
            ],
            [
              'product' => 'Havarti',
              'image' => 'https://res.cloudinary.com/whitt-images/image/upload/v1539691088/Cheese%20API/havarti.jpg',
              'desc' => 'Inspired by the Danish cheese making techniques, Havarti is a fresh, semi-soft cheese made using pasteurized cultured milk, cream and natural ingredients. Made by Emmi Roth USA in Wisconsin, the cheese is rich and creamy in flavour. The cheese can be mild to sharp in flavour and buttery depending on its aging.',
              'price' => 8.99,
              'unit' => 'lb',
              'created_at'=>\Carbon\Carbon::now()
            ],
            [
              'product' => 'Swiss',
              'image' => 'https://res.cloudinary.com/whitt-images/image/upload/v1539691088/Cheese%20API/swiss.jpg',
              'desc' => 'Swiss cheese is a generic name for several related varieties of cheese. It is an American version of the Swiss Emmental and is known for being shiny, pale yellow. While it has a firmer texture than baby Swiss, its flavour is mild, sweet and nut-like. It has a savoury, but not very sharp taste. Some types of Swiss cheese have a distinctive appearance. Some cheeses have holes known as \'eyes\' while some do not. Swiss cheese without eyes is known as \'blind\'. But in general, the larger the eyes in a Swiss cheese, the more pronounced its flavour!',
              'price' => 6.99,
              'unit' => 'lb',
              'created_at'=>\Carbon\Carbon::now()
            ],
        ];

        DB::table('cheeses')->insert($cheeses);
      }
    }
}
