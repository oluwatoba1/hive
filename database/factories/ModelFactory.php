<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Metric::class, function($faker) {

	return [
		'user_id'	=> function() {

						return factory('App\User')->create()->id;
		},

		'name'		=> $faker->word,
		'symbol'	=> $faker->word

	];

});

$factory->define(App\Category::class, function($faker) {

	return [

		'name'	=> $faker->word

	];

});

$factory->define(App\Location::class, function() {

	return [

		'name'	=> $faker->word

	];

});

$factory->define(App\Inventory::class, function() {

	return [
		'category_id'	=> function() {

			return factory('App\Category')->create()->id;

		},

		'user_id'		=> function() {

			return factory('App\User')->create()->id;

		},

		'metric_id'		=> function() {

			return factory('App\Metric')->create()->id;

		},

		'name'			=> $faker->word,
		'description'	=> $faker->paragraph

	];

});

$factory->define(App\InventoryStock::class, function() {

	return[

		'user_id'	=> function() {

			return factory('App\User')->create()->id;

		},

		'inventory_id'	=> function() {

			return factory('App\Inventory')->create()->id;

		},

		'location_id'	=> function() {

			return factory('App\Location')->create()->id;

		},

		'quantity'		=> $faker->randomFloat,
		'cost'			=> $faker->randomFloat,
		'reason'		=> $faker->paragraph

	];

});

$faker->define(App\InventoryStockMovement::class, function() {

	return[

		'stock_id'	=> function() {

			return factory('App\InventoryStock')->create()->id;

		},

		'user_id'	=> function() {

			return factory('App\User')->create()->id;

		},

		'before'	=> $faker->randomFloat,
		'after'		=> $faker->randomFloat,
		'cost'		=> $faker->randomFloat,
		'reason'	=> $faker->sentence

	];

});

$faker->define(App\InventorySku::class, function() {

	return [

		'inventory_id'	=> function() {

			return factory('App\Inventory')->create()->id;
		},

		'code'			=> $faker->regexify

	];

});

$faker->define(App\Supplier::class, function() {

	return [

		'name'				=> $faker->name,
		'address'			=> $faker->address,
		'postal_code'		=> $faker->bothify,
		'zip_code'			=> $faker->postcode,
		'region'			=> $faker->city,
		'city'				=> $faker->city,
		'country'			=> $faker->country,
		'contact_title'		=> $faker->title,
		'contact_name'		=> $faker->name,
		'contact_phone'		=> $faker->tollFreeNumber,
		'contact_fax'		=> $faker->faxNumber,
		'contact_email'		=> $faker->email

	];

});

$faker->define(App\InventoryTransaction::class, function() {

	return [

		'user_id'	=> function() {

			return factory('App\User')->create()->id;

		},

		'stock_id'	=> function() {

			return factory('App\InventoryStock')->create()->id;

		},

		'name'		=> $faker->name,
		'state'		=> $faker->word,
		'quantity'	=> $faker->randomFloat

	];

});

$faker->define(App\InventoryTransactionHistory::class, function() {

	return [

		'user_id'			=> function() {

			return factory('App\User')->create()->id;

		},

		'transaction_id'	=>function() {

			return factory('App\InventoryTransaction')->create()->id;

		}
		'state_before'		=> $faker->word,
		'state_after'		=> $faker->word,
		'quantity_before'	=> $faker->randomFloat,
		'quantity_after'	=> $faker->randomFloat		

	];

});