<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Stylist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Shirts',
            'slug' => 'shirts'
        ]);

        Category::create([
            'name' => 'Pants',
            'slug' => 'pants'
        ]);

        Category::create([
            'name' => 'Suits',
            'slug' => 'suits'
        ]);

        Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes'
        ]);

        Category::create([
            'name' => 'Accesories',
            'slug' => 'accesories'
        ]);

        User::create([
            'name' => 'Bryan Hanuga',
            'email' => 'bryanhanuga@gmail.com',
            'password' => bcrypt('12345678'),
            'gender' => 'Male',
            'DOB' => date('2001-03-20'),
            'country' => 'Indonesia',
            'role' => 'admin'
        ]);

        User::factory(4)->create();

        Product::create([
            'name' => 'H&M Blue T Shirt',
            'slug' => 'h&m-blue-t-shirt',
            'category_id' => 1,
            'full_description' => 'This T-shirt is in soft jersey made from cotton, some of which is recycled, and dyed with natural, plant-based dye. It has a round, rib-trimmed neckline, dropped shoulders, and a straight hem. Style with other pieces from the collection for a complete look. Best quality design for style and comfort on daily life.',
            'short_description' => 'This T-shirt is in soft jersey made from cotton, some of which is recycled, and dyed with natural, plant-based dye.',
            'price' => '379900',
            'image' => 'product-images/H&M_Blue_TShirt.JPG'
        ]);


        Product::create([
            'name' => 'Uniqlo White Striped Polo Shirt',
            'slug' => 'uniqlo-white-striped-polo-shirt',
            'category_id' => 1,
            'full_description' => 'The Uniqlo polo shirt is a must-have for any fashion-conscious man. Made from high-quality, breathable cotton, this polo shirt is comfortable to wear and perfect for any occasion. It is made from soft, breathable fabrics that are perfect for everyday wear. It is also known for their affordable prices and durability. They are perfect for people of all ages.',
            'short_description' => 'The Uniqlo polo shirt is a must-have for any fashion-conscious man.',
            'price' => '299900',
            'image' => 'product-images/Uniqlo_White_Striped_Polo.JPG'
        ]);

        Product::create([
            'name' => 'Pull&Bear Black T Shirt',
            'slug' => 'pull&bear-black-t-shirt',
            'category_id' => 1,
            'full_description' => 'The Pull and Bear black t-shirt is a classic and versatile item of clothing. It is made from a soft and comfortable cotton fabric and features a simple, black color that makes it easy to pair with a variety of outfits. It has a traditional crew neckline and short sleeves, making it suitable for casual wear. The t-shirt has a regular fit and is likely made of 100% cotton. It can be machine washed for easy care.',
            'short_description' => 'The Pull and Bear black t-shirt is a classic and versatile item of clothing.',
            'price' => '230000',
            'image' => 'product-images/PullAndBear_Black_TShirt.JPG'
        ]);

Product::create([
            'name' => 'Zara Gray Polo Shirt',
            'slug' => 'zara-gray-polo-shirt',
            'category_id' => 1,
            'full_description' => 'The Zara gray polo shirt is a stylish and sophisticated piece of clothing. It is made from a soft and breathable cotton blend fabric that ensures comfort throughout the day. The gray color gives it a versatile and timeless look, making it easy to pair with a variety of different outfits. The shirt features a traditional polo collar and button-up front, along with short sleeves. It has a slim fit cut, which gives it a modern and polished look. This polo shirt is perfect for a casual but fit for any occasion.',
            'short_description' => 'The Zara gray polo shirt is a stylish and sophisticated piece of clothing.',
            'price' => '330000',
            'image' => 'product-images/Zara_Gray_Polo.JPG'
        ]);

Product::create([
            'name' => 'Hugo Boss Navy Polo Shirt',
            'slug' => 'hugo-boss-navy-polo-shirt',
            'category_id' => 1,
            'full_description' => 'The Hugo Boss navy polo shirt is a perfect blend of style and luxury. Made from high-quality, premium cotton fabric, this polo shirt is designed to provide ultimate comfort and durability. The deep navy color gives it a sophisticated and professional look, making it suitable for any occasion. This shirt features a classic polo collar and button-up front, along with short sleeves. The shirt is embellished with the iconic Hugo Boss logo on the chest, adding a touch of brand recognition and exclusivity.',
            'short_description' => 'The Hugo Boss navy polo shirt is a perfect blend of style and luxury.',
            'price' => '2100000',
            'image' => 'product-images/Hugo_Navy_Polo.JPG'
        ]);

Product::create([
            'name' => 'Celcius Black Long Sleeves Shirt',
            'slug' => 'celcius-black-long-sleeves-shirt',
            'category_id' => 1,
            'full_description' => 'The Celcius black formal long sleeves shirt is a perfect addition to any professional wardrobe. Made from high-quality cotton, this shirt is designed to provide ultimate comfort and durability. The black color gives it a sleek and sophisticated look, making it suitable for any formal occasion. It is versatile enough to be worn with a suit and tie or dressed down with chinos for a more casual look. Whether it is for a job interview, a business meeting, or any formal events, this black formal long sleeves shirt will make you look and feel confident and professional.',
            'short_description' => 'The Celcius black formal long sleeves shirt is a perfect addition to any professional wardrobe.',
            'price' => '450000',
            'image' => 'product-images/Celcius_Black_Long_Sleeves_Shirt.JPG'
        ]);

Product::create([
            'name' => 'Lacoste Green Polo Shirt',
            'slug' => 'lacoste-green-polo-shirt',
            'category_id' => 1,
            'full_description' => 'The Lacoste green polo shirt is a must-have for any fashion-conscious individual. Made from high-quality cotton, this shirt is designed to provide ultimate comfort and durability. The vibrant green color gives it a unique and stylish look, making it suitable for any casual occasion. The shirt is embellished with the iconic Lacoste crocodile logo on the chest, adding a touch of brand recognition and exclusivity.',
            'short_description' => 'The Lacoste green polo shirt is a must-have for any fashion-conscious individual.',
            'price' => '1500000',
            'image' => 'product-images/Lacoste_Green_Polo.JPG'
        ]);

Product::create([
            'name' => 'Lacoste Green Polo Shirt',
            'slug' => 'lacoste-green-polo-shirt',
            'category_id' => 1,
            'full_description' => 'The Lacoste red polo shirt is a must-have for any fashion-conscious individual. Made from high-quality cotton, this shirt is designed to provide ultimate comfort and durability. The light red color gives it a unique and stylish look, making it suitable for any casual occasion. The shirt is embellished with the iconic Lacoste crocodile logo on the chest, adding a touch of brand recognition and exclusivity.',
            'short_description' => 'The Lacoste red polo shirt is a must-have for any fashion-conscious individual.',
            'price' => '1350000',
            'image' => 'product-images/Lacoste_Red_Polo.JPG'
        ]);

Product::create([
            'name' => 'SaltNPepper White T Shirt',
            'slug' => 'saltnpepper-white-t-shirt',
            'category_id' => 1,
            'full_description' => 'The Salt n Pepper white t-shirt is a classic and essential item of clothing. Made from high-quality cotton, this t-shirt is designed to provide ultimate comfort and durability. The crisp white color gives it a clean and fresh look, making it suitable for any casual occasion. Upgrade your wardrobe with this essential piece of clothing from Salt n Pepper, a brand known for its quality and timeless design.',
            'short_description' => 'The Salt n Pepper white t-shirt is a classic and essential item of clothing.',
            'price' => '275000',
            'image' => 'product-images/SaltNPepper_White_TShirt.JPG'
        ]);

Product::create([
            'name' => 'Daniel Wellington Classic Black Cornwall 36mm Silver',
            'slug' => 'daniel-wellington-classic-black-cornwall-36mm-silver',
            'category_id' => 5,
            'full_description' => 'The Daniel Wellington Classic Black Cornwall 36mm watch is a perfect blend of elegance and simplicity. This watch is part of the Classic collection, known for its timeless design and high-quality craftsmanship. The watch features a black dial with silver hour markers and hands, giving it a sleek and sophisticated look. The watch comes with a black genuine leather strap, which is comfortable to wear and adds a touch of elegance.',
            'short_description' => 'The Daniel Wellington Classic Black Cornwall 36mm watch is a perfect blend of elegance and simplicity.',
            'price' => '2990000',
            'image' => 'product-images/DW_Black_Silver.JPG'
        ]);

Product::create([
            'name' => 'Alexandre Christie Chronograph Blue Dial Brown Leather',
            'slug' => 'alexandre-christie-chronograph-blue-dial-brown-leather',
            'category_id' => 5,
            'full_description' => 'The Alexandre Christie chronograph watch is a perfect blend of style and functionality. This watch is designed with a sleek and modern aesthetic, making it suitable for any occasion. The watch features a blue dial with light hour markers and hands, giving it a unique and stylish look. The Alexandre Christie blue rosegold watch is a perfect accessory for any occasion, whether it is for a casual day out, a formal meeting or a night out.',
            'short_description' => 'The Alexandre Christie chronograph watch is a perfect blend of style and functionality.',
            'price' => '2350000',
            'image' => 'product-images/AC_Blue_Brown.JPG'
        ]);

Product::create([
            'name' => 'Fossil Townsman Automatic Chronograph Black Skeleton Dial Brown Leather Strap',
            'slug' => 'fossil-townsman-automatic-chronograph-black-skeleton-dial-brown-leather-strap',
            'category_id' => 5,
            'full_description' => 'The Fossil Townsman Chronograph is a mens watch with a black dial and brown leather strap. The dial features three subdials for chronograph functionality, as well as stick hour markers and hands with luminous fill. The case is made of stainless steel and is water resistant up to 50 meters. The brown leather strap is adjustable and fastens with a buckle clasp. The watch also features a quartz movement and a mineral crystal. This watch is a classic and elegant timepiece that is suitable for both casual and formal occasions.',
            'short_description' => 'The Fossil Townsman Chronograph is a mens watch with a black dial and brown leather strap.',
            'price' => '3100000',
            'image' => 'product-images/Fossil_Skeleton_Brown.JPG'
        ]);

Product::create([
            'name' => 'Victorinox Swiss Army Chrono Classic',
            'slug' => 'victorinox-swiss-army-chrono-classic',
            'category_id' => 5,
            'full_description' => 'The Victorinox Swiss Army Chrono Classic is a mens watch that combines both style and functionality. The watch features a sleek stainless steel case with a diameter of 42mm. The dial is white with black hands, hour markers and a date window at the 6 oclock position. The watch is powered by a Swiss-made quartz movement and is water-resistant up to 100 meters. It also features a chronograph function, with a 60-minute and 24-hour subdial and a stopwatch function.',
            'short_description' => 'The Victorinox Swiss Army Chrono Classic is a mens watch that combines both style and functionality.',
            'price' => '10000000',
            'image' => 'product-images/Victorinox_Swis_Gray.JPG'
        ]);

Product::create([
            'name' => 'Rastalcat Onyx II Black Gold',
            'slug' => 'rastalcat-onyx-II-black-gold',
            'category_id' => 5,
            'full_description' => 'Rastalcat Onyx II Black Gold is a bracelet that can make your style better. It can also be used for shoe laces in case you need stylish shoe laces. This bracelet is very magnificent and very suitable for casual and formal occasion. The gold color gives luxury vibes and black color gives manly atmoshphere.',
            'short_description' => 'Rastalcat Onyx II Black Gold is a bracelet that can make your style better.',
            'price' => '100000',
            'image' => 'product-images/Rastalcat_Black_Gold.JPG'
        ]);

Product::create([
            'name' => 'OffWhite Ring',
            'slug' => 'offwhite-ring',
            'category_id' => 5,
            'full_description' => 'The Off-White ring is a fashion accessory that is part of the Off-White brands collection. The design of this ring is minimalistic and modern, featuring a clean and sleek look. The ring is made of high-quality metal, possibly stainless steel, and is available in different finishes such as gold, silver, and black. The rings band is thin and simple, with Off-Whites recognizable diagonal stripes embossed on it. This ring is perfect for those who want to add a touch of luxury and street-style to their look.',
            'short_description' => 'The Off-White ring is a fashion accessory that is part of the Off-White brands collection.',
            'price' => '1750000',
            'image' => 'product-images/Offwhite_Ring.JPG'
        ]);

Product::create([
            'name' => 'Metal Bracelet Black',
            'slug' => 'metal-bracelet-black',
            'category_id' => 5,
            'full_description' => 'The Metal Bracelet in Black Color is a simple yet stylish accessory. The bracelet is made of high-quality metal, such as stainless steel, and has been coated in a black color. The black color gives the bracelet a sleek and modern look. The bracelet is designed to be a thick band, with a smooth and glossy finish. The closure is usually a fold-over clasp or a toggle-clasp. This bracelet is perfect for those who prefer a minimalist and versatile look. The black color matches with any outfit and the durable metal construction ensures that it will last for a long time. It also makes a great gift for someone looking for a simple yet sophisticated accessory.',
            'short_description' => 'The Metal Bracelet in Black Color is a simple yet stylish accessory.',
            'price' => '250000',
            'image' => 'product-images/Metal_Bracelet_Black.JPG'
        ]);

Product::create([
            'name' => 'Metal Bracelet White',
            'slug' => 'metal-bracelet-white',
            'category_id' => 5,
            'full_description' => 'The Metal Bracelet in White Color is a simple yet stylish accessory. The bracelet is made of high-quality metal, such as stainless steel, and has been coated in a white color. The white color gives the bracelet a clean and modern look. The bracelet is designed to be a thick band, with a smooth and glossy finish. The closure is usually a fold-over clasp or a toggle-clasp. This bracelet is perfect for those who prefer a minimalist and versatile look. The white color matches with any outfit and the durable metal construction ensures that it will last for a long time. It also makes a great gift for someone looking for a simple yet sophisticated accessory.',
            'short_description' => 'The Metal Bracelet in White Color is a simple yet stylish accessory.',
            'price' => '250000',
            'image' => 'product-images/Metal_Bracelet_White.JPG'
        ]);

Product::create([
            'name' => 'Men Ring Black Circle',
            'slug' => 'men-ring-black-circle',
            'category_id' => 5,
            'full_description' => 'The Men Ring Black Circle is a versatile and stylish piece of jewelry for men. The ring can be made of various materials such as metal, wood, stone, or silicone. It can feature a simple or elaborate design, depending on the style and preference of the wearer. They are lightweight, comfortable, and durable. The ring can be worn as a statement piece or as a subtle accent to complement an outfit. It can also hold a symbolic or sentimental value.',
            'short_description' => 'The Men Ring Black Circle is a versatile and stylish piece of jewelry for men.',
            'price' => '300000',
            'image' => 'product-images/Men_Ring.JPG'
        ]);

        Product::create([
            'name' => 'Nike Dri-FIT Challenger',
            'slug' => 'nike-dri-fit-challenger',
            'category_id' => 2,
            'full_description' => 'Step up and take on your run in soft comfort. The Nike Dri-FIT Challenger Trousers are made with details like sweat-wicking technology and press studs to keep your gear close. A tapered fit means they wont get in your way. This product is made from 100% recycled polyester fibres.',
            'short_description' => 'Step up and take on your run in soft comfort. The Nike Dri-FIT Challenger Trousers are made with details like sweat-wicking technology and press studs to keep your gear close',
            'price' => '799000',
            'image' => 'product-images/Celana1.jpg'
        ]);

Product::create([
            'name' => 'WRANGLER® RIGGS WORKWEAR® RIPSTOP RANGER CARGO PANT IN BARK',
            'slug' => 'wrangler®-riggs-workwear®-ripstop-ranger-cargo-pant-in-bark',
            'category_id' => 2,
            'full_description' => 'When you need pants that are tough enough to keep up with you both on and off the job, Wrangler® work pants have you covered. Wrangler® mens RIGGS Workwear® pants combine the comfort and durability you need to get the job done with complete confidence. Our most popular work pants feature roomy side cargo pockets with flaps and concealed snaps as well as side slant pockets and deep back pockets to help keep your essentials secure.',
            'short_description' => 'When you need pants that are tough enough to keep up with you both on and off the job, Wrangler® work pants have you covered.',
            'price' => '664000',
            'image' => 'product-images/Celana2.jpg'
        ]);

Product::create([
            'name' => 'MENS WRANGLER® OUTDOOR RUGGED UTILITY PANT IN BRINDLE',
            'slug' => 'mens-wrangler®-outdoor-rugged-utility-pant-in-brindle',
            'category_id' => 2,
            'full_description' => 'Rugged and outdoorsy, these Wrangler® mens utility pants offer outdoor function and comfort to help you make the most of time spent in the great outdoors. Theyre made from a comfortable blend of cotton with a bit of stretch to prioritize maximum mobility at all times. The pants slash front pockets, welt hip pockets, side patch cargo pocket, and side welt pocket give you plenty of storage space for all the essentials—phone, keys, wallet, and more.',
            'short_description' => 'Rugged and outdoorsy, these Wrangler® mens utility pants offer outdoor function and comfort to help you make the most of time spent in the great outdoors',
            'price' => '377000',
            'image' => 'product-images/Celana3.jpg'
        ]);

Product::create([
            'name' => '75TH ANNIVERSARY SWEATPANTS IN MID GREY HEATHER',
            'slug' => '75th-anniversary-sweatpants-in-mid-grey-heather',
            'category_id' => 2,
            'full_description' => 'You can blaze your own trails in casual style and total comfort, wearing our men’s horse sweatpants. These classic sweatpants are crafted from a cotton blend that’s so comfortable you’ll never want to change. They come with an elastic waist for the right amount of give and take as you make your moves. On the left leg, you’ll find the iconic bronco, rearing and ready for the ride of life.',
            'short_description' => 'You can blaze your own trails in casual style and total comfort, wearing our men’s horse sweatpants. These classic sweatpants are crafted from a cotton blend that’s so comfortable you’ll never want to change',
            'price' => '588000',
            'image' => 'product-images/Celana4.jpg'
        ]);

Product::create([
            'name' => 'MENS CASEY JONES OVERSIZED CHINO PANT IN SADDLE',
            'slug' => 'mens-casey-jones-oversized-chino-pant-in-saddle',
            'category_id' => 2,
            'full_description' => 'When it comes to busy or low-key days, chinos always rise to the occasion. Our mens Casey Jones oversized chino pant will quickly become your favorite alternative to your everyday jeans. Theyre crafted from a comfortable blend of cotton, recycled cotton, and stretch for flexibility in your day-to-day without sacrificing the substantial feel you want. These classic chinos are made with an oversized fit to give you more room through the thighs and a tapered leg for a tailored look that pairs well with sneakers or boots for a solid combo.',
            'short_description' => 'When it comes to busy or low-key days, chinos always rise to the occasion. Our mens Casey Jones oversized chino pant will quickly become your favorite alternative to your everyday jeans',
            'price' => '1055000',
            'image' => 'product-images/Celana5.jpg'
        ]);

Product::create([
            'name' => 'MENS FIVE STAR PREMIUM CARGO SHORT IN ELM',
            'slug' => 'mens-five-star-premium-cargo-short-in-elm',
            'category_id' => 2,
            'full_description' => 'With a functional design and a bunch of convenient features, cargo shorts are easily the best solution for work, play, and everything in between. Our mens cargo shorts come fully equipped with a stretch twill construction with flex fabric and ripstop reinforcement, so accidental rips and tears dont stand a chance of spreading. These classic cargo shorts feature a relaxed fit through the seat, thigh, and knee.',
            'short_description' => 'With a functional design and a bunch of convenient features, cargo shorts are easily the best solution for work, play, and everything in between',
            'price' => '377000',
            'image' => 'product-images/Celana6.jpg'
        ]);

Product::create([
            'name' => 'MENS WRANGLER® FIVE STAR PREMIUM 5-POCKET RELAXED DENIM SHORT IN LIGHT BLEACH.',
            'slug' => 'mens-wrangler®-five-star-premium-pocket-relaxed-denim-short-in-light-bleach',
            'category_id' => 2,
            'full_description' => 'When a heat wave sets in, there is nothing better than throwing on a pair of shorts. Wrangler® Five Star Premium mens denim shorts provide an all-in-one solution for your spring and summer wardrobe: comfort, durability, and no shortage of style. These mens relaxed denim shorts sit at the natural waist and end at the knee, but they also come with extra room through the seat, thigh, and knee so you can move freely throughout the day.',
            'short_description' => 'When a heat wave sets in, there is nothing better than throwing on a pair of shorts. Wrangler® Five Star Premium mens denim shorts provide an all-in-one solution for your spring and summer wardrobe: comfort, durability, and no shortage of style',
            'price' => '347000',
            'image' => 'product-images/Celana7.jpg'
        ]);

Product::create([
            'name' => 'MENS WRANGLER AUTHENTICS® RELAXED JEAN SHORT IN DARK RINSE',
            'slug' => 'mens-wrangler-authentics®-relaxed-jean-short-in-dark-risen',
            'category_id' => 2,
            'full_description' => 'Enjoy the look and feel of your favorite jean in a length that is perfect for longer, warmer days. This mens Wrangler Authentics® relaxed jean short offers the comfort and durability needed to take on each day with total confidence. It is made of a sturdy cotton blend containing just a little bit of stretch for added flexibility. Plus, a relaxed fit means more room where you need it most.',
            'short_description' => 'Enjoy the look and feel of your favorite jean in a length that is perfect for longer, warmer days. This mens Wrangler Authentics® relaxed jean short offers the comfort and durability needed to take on each day with total confidence',
            'price' => '332000',
            'image' => 'product-images/Celana8.jpg'
        ]);

Product::create([
            'name' => 'Adidas Essentials Box Logo French Terry Short Pants',
            'slug' => 'adidas-essentials-box-logo-french-terry-short-pants',
            'category_id' => 2,
            'full_description' => 'With adidas Essentials Box Logo French Terry Short Pants, it guarantees the best fitness equipment. In addition, at traininn you can find the best quality with best prices of the sector. Choose us as your fitness store and focus only on enjoying of the comfort that the best brands give you like adidas.',
            'short_description' => 'With adidas Essentials Box Logo French Terry Short Pants, it guarantees the best fitness equipment',
            'price' => '570000',
            'image' => 'product-images/Celana9.jpg'
        ]);

Product::create([
            'name' => 'VARSITY LOGO HOUNDSTOOTH BLAZER',
            'slug' => 'varsity-logo-houndstooth-blazer',
            'category_id' => 3,
            'full_description' => 'Crafted from a compact houndstooth wool, this single-breasted blazer has a partial lining for a casual, slim fit. With a notched lapel and a two-button closure, this sartorial style is detailed with an embroidered Varsity logo at the chest pocket—a proud symbol of belonging to the Versace family.',
            'short_description' => 'Crafted from a compact houndstooth wool, this single-breasted blazer has a partial lining for a casual, slim fit',
            'price' => '41710000',
            'image' => 'product-images/Jas1.jpg'
        ]);

Product::create([
            'name' => 'SILVER BAROQUE CHECKED WOOL BLAZER',
            'slug' => 'silver-baroque-checked-wool-blazer',
            'category_id' => 3,
            'full_description' => 'A Versace takeon tailoring, this checked blazer is crafted from virgin wool with the Silver Baroque printed embroidered across the piece. The single-breasted piece is cut in the Heritage fit and has a notched lapel with two front-flap pockets.',
            'short_description' => 'A Versace takeon tailoring, this checked blazer is crafted from virgin wool with the Silver Baroque printed embroidered across the piece',
            'price' => '27200000',
            'image' => 'product-images/Jas2.jpg'
        ]);

Product::create([
            'name' => 'Thom Browne Single-breasted wool-twill suit and tie',
            'slug' => 'thom-browne-single-breasted-wool-twill-suit-and-tie',
            'category_id' => 3,
            'full_description' => 'Thom Brownes grey wool suit is expertly tailored to the founders exacting standards in Italy. The single-breasted jacket is shaped with long darts and slender notch lapels, then lined with striped satin to ensure a clean drape. The trousers are shaped for a slim fit with a mid-rise waist and finished with slip pockets and label’s signature tricolour motif.',
            'short_description' => 'Thom Brownes grey wool suit is expertly tailored to the founders exacting standards in Italy',
            'price' => '44484000',
            'image' => 'product-images/Jas3.jpg'
        ]);

Product::create([
            'name' => 'Thom Browne Super 120s wool-twill suit and tie',
            'slug' => ' thom-browne-super-120s-wool-twill-suit-and-tie ',
            'category_id' => 3,
            'full_description' => 'Italian-crafted Super 120s wool twill makes Thom Browne’s charcoal-grey suit impeccably smooth and lightweight. The jacket is shaped to the label’s inimitable shrunken silhouette with notch lapels, surgeons cuffs and striped satin lining, teamed with a black tie and trousers with overlocked cuffs that are ready for custom tailoring.',
            'short_description' => 'Italian-crafted Super 120s wool twill makes Thom Browne’s charcoal-grey suit impeccably smooth and lightweight',
            'price' => '44484000',
            'image' => 'product-images/Jas4.jpg'
        ]);

Product::create([
            'name' => 'Saint Laurent Single-breasted wool-crepe suit',
            'slug' => 'saint-laurent-single-breasted-wool-crepe-suit',
            'category_id' => 3,
            'full_description' => 'Saint Laurents Italian-crafted black suit features satin-faced peak lapels as a tribute to 1920s and 1930s tailoring. The jacket is cut to a single-breasted silhouette with roped shoulders and side darts to create a V-shaped torso, then teamed with slim-leg trousers accented by satin side stripes. Wear it with a printed shirt and ankle boots for a rock n roll-inspired take.',
            'short_description' => 'Saint Laurents Italian-crafted black suit features satin-faced peak lapels as a tribute to 1920s and 1930s tailoring',
            'price' => '43159000',
            'image' => 'product-images/Jas5.jpg'
        ]);

Product::create([
            'name' => 'Gucci London single-breasted wool-blend suit',
            'slug' => 'gucci-london-single-breasted-wool-blend-suit',
            'category_id' => 3,
            'full_description' => 'A classic straight silhouette defines gucci navy London suit, which was first introduced in the houses Resort 2020 collection. Crafted in Italy from a fine wool-blend twill, it consists of a single-breasted jacket that’s detailed with fishmouth-notch lapels and a burgundy satin-faille lining and has flattering flat-front trousers with overlocked cuffs that are ready for custom tailoring.',
            'short_description' => 'A classic straight silhouette defines Gucci navy London suit, which was first introduced in the houses Resort 2020 collection',
            'price' => '36401000',
            'image' => 'product-images/Jas6.jpg'
        ]);

Product::create([
            'name' => 'Thom Browne Single-breasted wool-fresco suit and tie',
            'slug' => 'thom-browne-single-breasted-wool-fresco-suit-and-tie',
            'category_id' => 3,
            'full_description' => 'Thom Browne’s grey suit comes complete with a matching tie for a fully curated look. Italian crafted from fine wool fresco, the slim-fitting jacket features notch lapels while the trousers are neatly pressed for a sharp finish. Style the tie with a white shirt left unbuttoned at the top, as the designer himself suggests.',
            'short_description' => 'Thom Browne’s grey suit comes complete with a matching tie for a fully curated look',
            'price' => '799000',
            'image' => 'product-images/Jas7.jpg'
        ]);

Product::create([
            'name' => 'Dolce and Gabbana',
            'slug' => 'dolce-and-gabbana',
            'category_id' => 3,
            'full_description' => 'Domenico Dolce and Stefano Gabbana are at the height of Italian luxury. Along with iconic prints and signature floral blooms, the notorious Italian designer duo are experts at fashioning timeless classics for the debonair uomo. This black virgin wool classic suit features peaked lapels, a front button fastening, long sleeves, a chest pocket, side flap pockets, button cuffs, a full lining, back pockets and a straight leg.',
            'short_description' => 'Domenico Dolce and Stefano Gabbana are at the height of Italian luxury. Along with iconic prints and signature floral blooms, the notorious Italian designer duo are experts at fashioning timeless classics for the debonair uomo',
            'price' => '21038000',
            'image' => 'product-images/Jas8.jpg'
        ]);

Product::create([
            'name' => 'Navy Blue Woven Italian Tuxedo Suit-RK1587',
            'slug' => 'navy-blue-woven-italian-tuxedo-suit-rk1587',
            'category_id' => 3,
            'full_description' => 'For indisputable elegance wear this navy blue color italian tuxedo suit. A perfect outfit for an grand wedding reception or dinner party. The blazer features shawl lapel, a single button clouser. This designer blazer is complimented with white color cotton shirt, navy blue color bottom and matching waistcoat. There might be a little color variation in the image and original product due to photographic lighting sources or your monitor settings.',
            'short_description' => 'For indisputable elegance wear this navy blue color italian tuxedo suit. A perfect outfit for an grand wedding reception or dinner party',
            'price' => '4053000',
            'image' => 'product-images/Jas9.jpg'
        ]);

        Product::create([
            'name' => 'Converse All Star Chuck Taylor 70 Black',
            'slug' => 'converse-all-star-chuck-taylor-70-black',
            'category_id' => 4,
            'full_description' => 'Chuck Taylor 70 has thicker canvas, higher rubber foxing, better cushioning, improved arch support, and greater durability. Converse Chuck 70 are comfortable because they are have a lot of cushioning in the insole and have more arch support ',
            'short_description' => 'Chuck Taylor 70 has thicker canvas, higher rubber foxing, better cushioning, improved arch support, and greater durability.',
            'price' => '900000',
            'image' => 'product-images/taylor70.jpg'
        ]);

Product::create([
            'name' => 'Nike Air force 1 White',
            'slug' => 'nike-air-force-1-white',
            'category_id' => 4,
            'full_description' => 'The Air Force 1 features an upper that is most frequently dressed in leather, a large Swoosh across the lateral and medial sides, perforated toe boxes, metal lace dubraes, and an Air-encapsulated midsole with signature “AIR” text near the rear',
            'short_description' => 'The Air Force 1 features an upper that is most frequently dressed in leather, a large Swoosh across the lateral and medial sides, perforated toe boxes.',
            'price' => '2500000',
            'image' => 'product-images/nikeairforce1.jpg'
        ]);


Product::create([
            'name' => 'Nike Air Max 90',
            'slug' => 'nike-air-max-90',
            'category_id' => 4,
            'full_description' => 'The Max Air unit in the heel adds unbelievable cushioning. The low-top design combines with a padded collar for a sleek look that feels soft and comfortable',
            'short_description' => 'The Max Air unit in the heel adds unbelievable cushioning. The low-top design combines with a padded collar for a sleek look that feels soft and comfortable',
            'price' => '2000000',
            'image' => 'product-images/airmax90.jpg'
        ]);

Product::create([
            'name' => 'Air Jordan 1 Retro',
            'slug' => 'air-jordan-1-retro',
            'category_id' => 4,
            'full_description' => 'The Air Jordan 1 High debuted in 1985 as the first signature sneaker developed by Nike for Michael Jordan. The Peter Moore designed performance basketball sneaker featured a simple Nike Dunk inspired design that incorporated the Nike Swoosh',
            'short_description' => 'The Air Jordan 1 High debuted in 1985 as the first signature sneaker developed by Nike for Michael Jordan.',
            'price' => '6000000',
            'image' => 'product-images/jordan1.jpg'
        ]);




Product::create([
            'name' => '1 High OG Yellow Toe',
            'slug' => '1-high-og-yellow-toe',
            'category_id' => 4,
            'full_description' => 'A long-rumoured elusive colourway, the Air Jordan 1 High OG Yellow Toe comes with stylish deep yellow tones on its perforated toe box, heel and ankle collar. The upper showcases strong black contrasts on its toe cap, eyestays and Nike Swooshes sitting over the white tumbled leather side walls',
            'short_description' => 'A long-rumoured elusive colourway, the Air Jordan 1 High OG Yellow Toe comes with stylish deep yellow tones on its perforated toe box, heel and ankle collar.',
            'price' => '4500000',
            'image' => 'product-images/Retrohigh1.jpg'
        ]);

Product::create([
            'name' => 'Adidas NMD R1 White',
            'slug' => 'adidas-nmd-r1-white',
            'category_id' => 4,
            'full_description' => 'The adidas NMD R1 is a casual sneaker which combines modern-day Boost comfort with retro running shoe aesthetics and old design concepts that will make your style fit with any outfit',
            'short_description' => 'The adidas NMD R1 is a casual sneaker which combines modern-day Boost comfort with retro running shoe aesthetics',
            'price' => '2500000',
            'image' => 'product-images/AdidasNMDR1.jpg'
        ]);

Product::create([
            'name' => ' Adidas Ultraboost 1.0',
            'slug' => 'adidas-ultraboost-1.0',
            'category_id' => 4,
            'full_description' => 'The lightweight outsole provides grip for all kinds of weather and surfaces, and enough flexibility to move in harmony with the midsole for a smooth, secure stride.',
            'short_description' => ' The lightweight outsole provides grip for all kinds of weather and surfaces, and enough flexibility.',
            'price' => '3300000',
            'image' => 'product-images/Ultraboost.jpg'
        ]);

Product::create([
            'name' => 'Yeezy Boost 350',
            'slug' => 'yeezy-boost-350',
            'category_id' => 4,
            'full_description' => 'The YEEZY BOOST 350 V2 features an upper composed of re-engineered Primeknit. The post-dyed monofilament side stripe is woven into the upper. Reflective threads are woven into the laces. The midsole utilizes adidas innovative BOOST™ technology.',
            'short_description' => 'The YEEZY BOOST 350 V2 features an upper composed of re-engineered Primeknit. The post-dyed monofilament side stripe is woven into the upper. Reflective threads are woven into the laces.',
            'price' => '5000000',
            'image' => 'product-images/yeezyboost350.jpg'
        ]);

Product::create([
            'name' => 'Vans Old Skool Navy Blue',
            'slug' => 'vans-old-skool-navy-blue',
            'category_id' => 4,
            'full_description' => 'Constructed with durable suede and canvas uppers in a range of fresh colorways, the Old Skool pays homage to our heritage while ensuring that this low top, lace-up shoe remains as iconic as ever. It also features re-enforced toe caps, supportive padded collars, and signature rubber waffle outsoles.',
            'short_description' => ' Constructed with durable suede and canvas uppers in a range of fresh colorways, the Old Skool pays homage to our heritage while ensuring that this low top, lace-up shoe remains as iconic as ever.',
            'price' => '1500000',
            'image' => 'product-images/VansOldSkoolBlue.jpg'
        ]);


        Stylist::create([
            'name' => 'Charlotte Dolorez',
            'slug' => 'charlotte-dolorez',
            'description' => 'I am a huge fashion lover ! My whole life, I have been helping my friends and family with their styling and shopping. From now on I want to help everyone who wants to make a better version of themselves. Being stylish has nothing to do with spending a lot of money. All you have to do is to find what is best for your body type and have confidence! I hope I can help you all and make you happy so you will start feeling more and more stylish everyday!',
            'experience' => '5 years',
            'rating' => '4.9',
            'rate' => '150000',
            'photo' => 'stylist-photos/Charlotte.jpg'
        ]);

        Stylist::create([
            'name' => 'Vincent Rahardja',
            'slug' => 'vincent-rahardja',
            'description' => 'Hi! I´m a fashion designer and fashion stylist with experience in costume design, wardrobe styling and personal styling! Aso, I am a makeup artist and I would love to help you out creating the best looks based on your needs, likes, body types and style. I am very committed and passionate about fashion and makeup, the last trends and creating looks mixing garments, colors and styles. I am a very good at teamwork, listening and understanding a client. I would love to be part of your project!',
            'experience' => '4 years',
            'rating' => '4.8',
            'rate' => '100000',
            'photo' => 'stylist-photos/Vincent.jpg'
        ]);

        Stylist::create([
            'name' => 'Thalia Wijaksana',
            'slug' => 'thalia-wijaksana',
            'description' => 'I offer an in depth styling experience, in which I gather all the information from you- your inspiration photos, measurements, budget, etc- and put together outfits tailored to your needs. All information needed will be in your order requirements. You will receive your outfits in visual style boards as well as all the links to the pieces in a document with style instructions and fun extras.',
            'experience' => '3 years',
            'rating' => '4.7',
            'rate' => '85000',
            'photo' => 'stylist-photos/Thalia.jpg'
        ]);

    }
}
