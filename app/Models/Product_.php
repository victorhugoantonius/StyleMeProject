<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product 
{
    private static $products_shop = [
        [
            "name" => "Azarine Water",
            "slug" => "azarine-water",
            "category" => "Men",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam omnis nemo modi magnam delectus harum, nobis saepe dicta autem maxime eos voluptates officia labore et veniam corrupti inventore! Saepe veritatis eveniet esse asperiores est quae! Nisi dolorum neque architecto cum corrupti eum minus ipsum, blanditiis necessitatibus officiis libero, nobis ab saepe a debitis distinctio. Ex exercitationem tenetur architecto delectus rerum, est soluta repellendus ea obcaecati officiis quod quo! Ipsam maxime tempora natus ab id odio quisquam quo quos qui sequi!",
            "price" => 50000
        ],
        [
            "name" => "Azarine Oil",
            "slug" => "azarine-oil",
            "category" => "Women",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam omnis nemo modi magnam delectus harum, nobis saepe dicta autem maxime eos voluptates officia labore et veniam corrupti inventore! Saepe veritatis eveniet esse asperiores est quae! Nisi dolorum neque architecto cum corrupti eum minus ipsum, blanditiis necessitatibus officiis libero, nobis ab saepe a debitis distinctio. Ex exercitationem tenetur architecto delectus rerum, est soluta repellendus ea obcaecati officiis quod quo! Ipsam maxime tempora natus ab id odio quisquam quo quos qui sequi!",
            "price" => 70000
        ]
        ];

        public static function all(){
            return collect(self::$products_shop);
        }

        public static function find($slug){
            $products = static::all();



            return $products->firstWhere('slug', $slug);
        }
}
