<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $seller = Seller::has('products')->get['id']->random()->id;
        return [
            'quantity' => $this->faker->numberBetween(1,3),
            'buyer_id' => User::where('id','!=',$seller)->get(['id'])->random()->id,
            'seller_id' => $seller,
            'product_id' => $seller->products->random()->id,             
        ];
    }
}
