<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $created = $this->faker->dateTimeBetween('-5 years', 'now');
        $updated = $this->faker->dateTimeBetween($created, 'now');
        if(rand(0,3)){
            $updated = $created;
        }

        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(6,true),
            'created_at'=>$created,
            'updated_at'=>$updated
        ];
    }
}
