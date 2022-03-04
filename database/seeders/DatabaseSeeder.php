<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// User::create([
		// 	'name' => 'Muhamad Rezky Rizaldi',
		// 	'email' => 'rezkyrizaldi30@gmail.com',
		// 	'password' => bcrypt('12345'),
		// ]);

		// User::create([
		// 	'name' => 'Dinar Abdul Holik Firdaus',
		// 	'email' => 'dinartrevor_@gmail.com',
		// 	'password' => bcrypt('12345'),
		// ]);

		User::factory(3)->create();

		Category::create([
			'name' => 'Web Programming',
			'slug' => 'web-programming',
		]);

		Category::create([
			'name' => 'Web Design',
			'slug' => 'web-design',
		]);

		Category::create([
			'name' => 'Personal',
			'slug' => 'personal',
		]);

		Post::factory(20)->create();

		// Post::create([
		// 	'title' => 'Judul Pertama',
		// 	'slug' => 'judul-pertama',
		// 	'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae quidem harum esse, accusantium ipsam debitis sunt similique ipsum odio, illo nemo dicta assumenda ducimus suscipit.',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tenetur inventore qui repellat? Unde aperiam alias amet animi perferendis minima consequuntur sint, recusandae nulla illo mollitia sit voluptas in quia sed sapiente. Unde, tempore ut, vero expedita iste eveniet a, est velit dolorum labore saepe vel! Laborum rerum nisi magnam error. Ut nisi sed dicta veritatis! Laboriosam, debitis saepe consectetur autem repellat minima, quia eligendi delectus corrupti reprehenderit illum repudiandae! Quos ab consequuntur voluptas delectus aspernatur aliquam odio rem sapiente reprehenderit tenetur porro animi consectetur id deserunt officia eligendi saepe distinctio eius, iusto eaque non doloribus pariatur corporis eum. Possimus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione labore? Neque, tempora ab, dolorum impedit odio fuga placeat eveniet odit quisquam omnis ut, quas labore! Soluta possimus deleniti deserunt enim quibusdam libero quo, fuga eum sunt hic. Molestias obcaecati error explicabo, sint iure, optio, sequi voluptates facilis inventore tempora maiores iste quo. Eaque aliquid repellat voluptatibus. Recusandae, officia alias laborum quis non incidunt, repellendus, a vitae assumenda eos excepturi aliquid. Dicta soluta voluptate aspernatur animi doloribus, laborum qui magni, odit quam facere placeat laudantium illo quisquam, et perferendis voluptas nostrum commodi ipsam impedit quaerat at alias! Vel, fuga molestiae.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At cupiditate impedit inventore necessitatibus suscipit? Iste libero delectus nihil dignissimos incidunt quod assumenda minus obcaecati dolorum nemo. Ut, incidunt, veritatis asperiores molestiae dicta voluptates nihil, aspernatur ipsam neque amet deserunt laudantium doloremque tenetur maxime sit natus impedit suscipit. Amet delectus reprehenderit nostrum perferendis aperiam deleniti assumenda repudiandae suscipit sunt, rem at nemo dicta. Distinctio, saepe voluptatum enim minima iste delectus ut dolorum aspernatur consectetur? Quisquam voluptatum nihil ducimus, blanditiis nemo ad dicta tenetur nostrum. Impedit, ad quas atque sequi maxime modi consectetur tempore quidem laborum magni praesentium magnam commodi excepturi temporibus.</p>',
		// 	'category_id' => 1,
		// 	'user_id' => 1,
		// ]);

		// Post::create([
		// 	'title' => 'Judul Kedua',
		// 	'slug' => 'judul-kedua',
		// 	'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae quidem harum esse, accusantium ipsam debitis sunt similique ipsum odio, illo nemo dicta assumenda ducimus suscipit.',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tenetur inventore qui repellat? Unde aperiam alias amet animi perferendis minima consequuntur sint, recusandae nulla illo mollitia sit voluptas in quia sed sapiente. Unde, tempore ut, vero expedita iste eveniet a, est velit dolorum labore saepe vel! Laborum rerum nisi magnam error. Ut nisi sed dicta veritatis! Laboriosam, debitis saepe consectetur autem repellat minima, quia eligendi delectus corrupti reprehenderit illum repudiandae! Quos ab consequuntur voluptas delectus aspernatur aliquam odio rem sapiente reprehenderit tenetur porro animi consectetur id deserunt officia eligendi saepe distinctio eius, iusto eaque non doloribus pariatur corporis eum. Possimus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione labore? Neque, tempora ab, dolorum impedit odio fuga placeat eveniet odit quisquam omnis ut, quas labore! Soluta possimus deleniti deserunt enim quibusdam libero quo, fuga eum sunt hic. Molestias obcaecati error explicabo, sint iure, optio, sequi voluptates facilis inventore tempora maiores iste quo. Eaque aliquid repellat voluptatibus. Recusandae, officia alias laborum quis non incidunt, repellendus, a vitae assumenda eos excepturi aliquid. Dicta soluta voluptate aspernatur animi doloribus, laborum qui magni, odit quam facere placeat laudantium illo quisquam, et perferendis voluptas nostrum commodi ipsam impedit quaerat at alias! Vel, fuga molestiae.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At cupiditate impedit inventore necessitatibus suscipit? Iste libero delectus nihil dignissimos incidunt quod assumenda minus obcaecati dolorum nemo. Ut, incidunt, veritatis asperiores molestiae dicta voluptates nihil, aspernatur ipsam neque amet deserunt laudantium doloremque tenetur maxime sit natus impedit suscipit. Amet delectus reprehenderit nostrum perferendis aperiam deleniti assumenda repudiandae suscipit sunt, rem at nemo dicta. Distinctio, saepe voluptatum enim minima iste delectus ut dolorum aspernatur consectetur? Quisquam voluptatum nihil ducimus, blanditiis nemo ad dicta tenetur nostrum. Impedit, ad quas atque sequi maxime modi consectetur tempore quidem laborum magni praesentium magnam commodi excepturi temporibus.</p>',
		// 	'category_id' => 2,
		// 	'user_id' => 1,
		// ]);

		// Post::create([
		// 	'title' => 'Judul Ketiga',
		// 	'slug' => 'judul-ketiga',
		// 	'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est beatae quidem harum esse, accusantium ipsam debitis sunt similique ipsum odio, illo nemo dicta assumenda ducimus suscipit.',
		// 	'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tenetur inventore qui repellat? Unde aperiam alias amet animi perferendis minima consequuntur sint, recusandae nulla illo mollitia sit voluptas in quia sed sapiente. Unde, tempore ut, vero expedita iste eveniet a, est velit dolorum labore saepe vel! Laborum rerum nisi magnam error. Ut nisi sed dicta veritatis! Laboriosam, debitis saepe consectetur autem repellat minima, quia eligendi delectus corrupti reprehenderit illum repudiandae! Quos ab consequuntur voluptas delectus aspernatur aliquam odio rem sapiente reprehenderit tenetur porro animi consectetur id deserunt officia eligendi saepe distinctio eius, iusto eaque non doloribus pariatur corporis eum. Possimus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ratione labore? Neque, tempora ab, dolorum impedit odio fuga placeat eveniet odit quisquam omnis ut, quas labore! Soluta possimus deleniti deserunt enim quibusdam libero quo, fuga eum sunt hic. Molestias obcaecati error explicabo, sint iure, optio, sequi voluptates facilis inventore tempora maiores iste quo. Eaque aliquid repellat voluptatibus. Recusandae, officia alias laborum quis non incidunt, repellendus, a vitae assumenda eos excepturi aliquid. Dicta soluta voluptate aspernatur animi doloribus, laborum qui magni, odit quam facere placeat laudantium illo quisquam, et perferendis voluptas nostrum commodi ipsam impedit quaerat at alias! Vel, fuga molestiae.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At cupiditate impedit inventore necessitatibus suscipit? Iste libero delectus nihil dignissimos incidunt quod assumenda minus obcaecati dolorum nemo. Ut, incidunt, veritatis asperiores molestiae dicta voluptates nihil, aspernatur ipsam neque amet deserunt laudantium doloremque tenetur maxime sit natus impedit suscipit. Amet delectus reprehenderit nostrum perferendis aperiam deleniti assumenda repudiandae suscipit sunt, rem at nemo dicta. Distinctio, saepe voluptatum enim minima iste delectus ut dolorum aspernatur consectetur? Quisquam voluptatum nihil ducimus, blanditiis nemo ad dicta tenetur nostrum. Impedit, ad quas atque sequi maxime modi consectetur tempore quidem laborum magni praesentium magnam commodi excepturi temporibus.</p>',
		// 	'category_id' => 2,
		// 	'user_id' => 2,
		// ]);
	}
}
