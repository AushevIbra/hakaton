<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $json = json_decode('[
  {
    "id": "5d050be8a9f9886a0fab149b",
    "image": "https://source.unsplash.com/random",
    "price": 400,
    "category_id": 2,
    "storage_id": 1,
    "count": 99,
    "type": "шт",
    "description": "Eu deserunt laboris aliquip non adipisicing. Ex nostrud aute nisi eu. Est aliqua voluptate nisi duis minim incididunt consequat. Excepteur voluptate cupidatat tempor commodo ipsum incididunt dolore commodo nulla ex magna nostrud. Incididunt aute ex pariatur aute sit.",
    "name": "SNACKTION"
  },
  {
    "id": "5d050be87998b78a38bf9b39",
    "image": "https://source.unsplash.com/random",
    "price": 400,
    "category_id": 3,
    "storage_id": 1,
    "count": 99,
    "type": "кг",
    "description": "Tempor consectetur reprehenderit velit id officia. Officia nisi mollit Lorem deserunt anim. Nulla id aute nostrud ad ex culpa nostrud. Sunt eu enim nostrud non nulla id nostrud veniam non. Lorem laborum exercitation dolore dolore occaecat ex do duis est laboris elit sint ea. Laborum consectetur dolor consequat Lorem occaecat nisi non.",
    "name": "QUIZKA"
  },
  {
    "id": "5d050be82289934966d4f28f",
    "image": "https://source.unsplash.com/random",
    "price": 255,
    "category_id": 4,
    "storage_id": 1,
    "count": 1,
    "type": "шт",
    "description": "Irure quis cillum irure sit pariatur id exercitation sunt nulla cillum. Labore nisi ut labore ipsum qui cupidatat laborum duis ad. Enim tempor magna ut magna consequat eu ipsum ut sunt tempor.",
    "name": "FRENEX"
  },
  {
    "id": "5d050be881145063f0d1a86a",
    "image": "https://source.unsplash.com/random",
    "price": 400,
    "category_id": 4,
    "storage_id": 1,
    "count": 99,
    "type": "кг",
    "description": "Consectetur in id anim irure occaecat deserunt. Officia deserunt ipsum elit ea eiusmod sint fugiat eu magna laboris id aliquip. Nostrud consectetur laboris do in labore tempor laboris excepteur sint in labore minim ullamco. Sunt cupidatat dolor occaecat aliquip dolore laborum elit aliqua ea ut reprehenderit. Fugiat qui minim eiusmod incididunt excepteur exercitation fugiat deserunt sint Lorem labore elit. Aute nisi do ullamco consectetur consectetur Lorem consequat dolor tempor id non Lorem dolor. Occaecat veniam sit eu laborum.",
    "name": "PHOLIO"
  },
  {
    "id": "5d050be8bfa6fd4fa3067384",
    "image": "https://source.unsplash.com/random",
    "price": 300,
    "category_id": 2,
    "storage_id": 1,
    "count": 99,
    "type": "кг",
    "description": "Quis proident non nulla laboris mollit. Dolore mollit ea ipsum fugiat est pariatur. Et incididunt aute voluptate irure aliqua et duis non velit tempor nostrud.",
    "name": "SNIPS"
  },
  {
    "id": "5d050be87c7c012a6cb28ace",
    "image": "https://source.unsplash.com/random",
    "price": 400,
    "category_id": 2,
    "storage_id": 1,
    "count": 99,
    "type": "кг",
    "description": "Anim consequat commodo velit minim labore irure ea eu labore qui sit velit est. Consectetur duis eiusmod laborum anim labore. Sint officia fugiat aliquip magna culpa labore non pariatur laborum nostrud. Mollit labore sint velit aliquip voluptate eu nulla. Duis elit deserunt ut consequat velit nostrud excepteur occaecat enim velit reprehenderit laborum non cupidatat. Commodo aute excepteur minim Lorem exercitation labore pariatur officia reprehenderit dolore irure sint aute.",
    "name": "ZYTRAX"
  },
  {
    "id": "5d050be8efc4d100296d856f",
    "image": "https://source.unsplash.com/random",
    "price": 255,
    "category_id": 4,
    "storage_id": 1,
    "count": 1,
    "type": "кг",
    "description": "Ullamco id veniam ea qui ad sint aute. Amet sunt minim ullamco magna. Minim proident sunt reprehenderit ut minim cillum pariatur eu aute veniam.",
    "name": "GINK"
  },
  {
    "id": "5d050be8b5c6178f38adfb09",
    "image": "https://source.unsplash.com/random",
    "price": 400,
    "category_id": 3,
    "storage_id": 1,
    "count": 99,
    "type": "шт",
    "description": "Aliqua do consequat Lorem ex exercitation cillum non cupidatat cillum in est occaecat eu qui. Et aliqua reprehenderit adipisicing enim. Dolore sunt nostrud quis cillum. Eiusmod esse culpa anim qui incididunt et id sit minim. Nulla nisi duis est reprehenderit sunt labore voluptate. Aliqua nulla eiusmod tempor et consequat eiusmod in non aute exercitation quis officia qui. Cillum exercitation sunt nostrud non in ea.",
    "name": "APEX"
  },
  {
    "id": "5d050be88b4f484800aa8b96",
    "image": "https://source.unsplash.com/random",
    "price": 400,
    "category_id": 3,
    "storage_id": 1,
    "count": 99,
    "type": "шт",
    "description": "Dolor nostrud tempor tempor Lorem sint eu in aliqua aliquip. Officia nostrud est est excepteur commodo enim ipsum ad irure commodo. Duis aliqua id consequat amet quis in ipsum consectetur laboris. Officia nisi mollit mollit aliquip. Adipisicing magna elit ad consequat sunt veniam.",
    "name": "ZANYMAX"
  }
]');

        foreach($json as $item){
            \App\Models\Product::create([
                'name' => $item->name,
                'price' => $item->price,
                'category_id' => $item->category_id,
                'count' => $item->count,
                'storage_id' => $item->storage_id,
                'type' => $item->type,
                'description' => $item->description,
                'image' => $item->image
            ]);
        }
    }
}
