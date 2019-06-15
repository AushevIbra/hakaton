<?php

use Illuminate\Database\Seeder;

class StoragesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $json = json_decode("[
  {
    \"id\": \"5d04f4c035fa08b83185bf76\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"blue\",
    \"name\": {
      \"first\": \"Lynn\",
      \"last\": \"Knapp\"
    },
    \"company\": \"ASSURITY\",
    \"userId\": 1,
    \"phone\": \"+1 (926) 590-2551\",
    \"address\": \"393 Willoughby Street, Why, South Carolina, 8878\",
    \"about\": \"Anim veniam quis pariatur adipisicing veniam fugiat ad consequat voluptate amet. Culpa Lorem officia exercitation deserunt laboris anim irure cillum. Commodo anim sint nostrud aliquip eu elit commodo eu quis mollit id aute eu. Non sunt pariatur est cillum dolor officia sit aliquip est nisi adipisicing Lorem excepteur. Sit velit nisi minim sunt aliquip incididunt culpa adipisicing commodo reprehenderit officia.\",
    \"registered\": \"Monday, May 14, 2018 7:54 PM\",
    \"latitude\": \"39.242942\",
    \"longitude\": \"-104.545292\"
  },
  {
    \"id\": \"5d04f4c0c85cbd5c5e79eb8e\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"green\",
    \"name\": {
      \"first\": \"Velez\",
      \"last\": \"Mcintyre\"
    },
    \"company\": \"TURNLING\",
    \"userId\": 1,
    \"phone\": \"+1 (971) 457-3680\",
    \"address\": \"543 Bergen Court, Efland, Nebraska, 9561\",
    \"about\": \"Elit dolore adipisicing ad eiusmod ad nostrud quis ut duis cupidatat ea. Ipsum pariatur minim pariatur culpa incididunt sit ullamco nisi. Dolor magna do deserunt do nulla eiusmod ea non cillum.\",
    \"registered\": \"Friday, April 20, 2018 7:13 PM\",
    \"latitude\": \"-44.288731\",
    \"longitude\": \"-16.868864\"
  },
  {
    \"id\": \"5d04f4c0a92cfed04e039135\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"green\",
    \"name\": {
      \"first\": \"Mcfarland\",
      \"last\": \"Koch\"
    },
    \"company\": \"HYPLEX\",
    \"userId\": 1,
    \"phone\": \"+1 (963) 591-3211\",
    \"address\": \"875 Moore Place, Hinsdale, Tennessee, 630\",
    \"about\": \"Lorem nostrud ullamco irure ullamco dolor dolor deserunt sit do et mollit commodo enim. Sint duis labore ex exercitation sunt occaecat est incididunt esse. Ea ex cillum do eu ut nostrud eu aliqua consectetur laboris reprehenderit. Amet nisi qui do et ipsum nulla ullamco elit commodo et excepteur culpa. Et aute reprehenderit enim labore aute ut adipisicing consequat.\",
    \"registered\": \"Friday, July 20, 2018 8:34 PM\",
    \"latitude\": \"-61.929858\",
    \"longitude\": \"154.826744\"
  },
  {
    \"id\": \"5d04f4c084ffefbc5a5ad1fb\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"blue\",
    \"name\": {
      \"first\": \"Manuela\",
      \"last\": \"Horne\"
    },
    \"company\": \"LYRICHORD\",
    \"userId\": 1,
    \"phone\": \"+1 (956) 451-3594\",
    \"address\": \"411 Ocean Court, Mayfair, Pennsylvania, 2462\",
    \"about\": \"Cillum ex elit mollit laborum sit sint dolore non voluptate. Amet cupidatat elit enim commodo. Aliqua aute culpa mollit ipsum amet veniam ad culpa minim. Elit commodo veniam aliqua velit proident est aliquip laboris nulla dolor minim consequat. Consequat cillum amet nulla amet ad ipsum nostrud labore. Adipisicing quis fugiat id nisi labore adipisicing labore occaecat.\",
    \"registered\": \"Saturday, December 30, 2017 3:54 AM\",
    \"latitude\": \"85.14076\",
    \"longitude\": \"19.066587\"
  },
  {
    \"id\": \"5d04f4c03690ab0247a4815c\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"brown\",
    \"name\": {
      \"first\": \"Maude\",
      \"last\": \"Bray\"
    },
    \"company\": \"QUADEEBO\",
    \"userId\": 1,
    \"phone\": \"+1 (887) 548-2378\",
    \"address\": \"829 Saratoga Avenue, Orick, Montana, 6123\",
    \"about\": \"Mollit eiusmod Lorem commodo aute. Aliquip consequat incididunt ut tempor. Est do nulla esse aliqua veniam non anim ad velit adipisicing. Officia labore laboris et nisi aliqua commodo Lorem do tempor commodo cupidatat cupidatat eiusmod. Deserunt ea Lorem dolore cupidatat eu sunt quis. Proident eu elit consectetur officia laboris nostrud ipsum amet sint.\",
    \"registered\": \"Monday, April 11, 2016 6:22 AM\",
    \"latitude\": \"76.573557\",
    \"longitude\": \"-168.097281\"
  },
  {
    \"id\": \"5d04f4c0fbf9ec82ccba415a\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"green\",
    \"name\": {
      \"first\": \"Whitfield\",
      \"last\": \"Avery\"
    },
    \"company\": \"LOCAZONE\",
    \"userId\": 1,
    \"phone\": \"+1 (821) 520-3032\",
    \"address\": \"822 Gaylord Drive, Rosine, Utah, 9204\",
    \"about\": \"Ex cillum Lorem in velit et anim laboris. Dolor eu est nostrud amet aliqua consequat dolor adipisicing laboris sint incididunt in. Consectetur irure ullamco id mollit id ea veniam duis deserunt id dolore pariatur.\",
    \"registered\": \"Tuesday, October 10, 2017 9:58 AM\",
    \"latitude\": \"-68.661534\",
    \"longitude\": \"57.986913\"
  },
  {
    \"id\": \"5d04f4c03e7240f5d36ae013\",
    \"picture\": \"https://source.unsplash.com/random\",
    \"eyeColor\": \"green\",
    \"name\": {
      \"first\": \"Pugh\",
      \"last\": \"Olson\"
    },
    \"company\": \"QUIZKA\",
    \"userId\": 1,
    \"phone\": \"+1 (978) 505-2695\",
    \"address\": \"854 Throop Avenue, Crenshaw, Guam, 2817\",
    \"about\": \"Reprehenderit cillum exercitation minim fugiat labore in consectetur dolor velit minim eiusmod cillum. Irure sint aute qui eu. Aliqua et officia consequat aliquip voluptate pariatur nulla veniam mollit.\",
    \"registered\": \"Thursday, May 22, 2014 6:52 PM\",
    \"latitude\": \"-6.239311\",
    \"longitude\": \"89.334968\"
  }
]");
        foreach($json as $item){
            \App\Storage::create([
                'name'        => $item->company,
                'image'       => $item->picture,
                'user_id'     => 1,
                'address'     => $item->address,
                'description' => $item->about,
                'lat'         => $item->latitude,
                'long'        => $item->longitude,

            ]);

        }
        //
    }
}
