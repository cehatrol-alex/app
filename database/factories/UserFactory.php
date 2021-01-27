<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravolt\Avatar\Avatar;


class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    protected $image = Image::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $avatar = new Avatar();
            $img = new Image();
            $img->image = $avatar->create($user->name)->toBase64();
            $img->user_id = $user->id;
            $img->save();

            $user->image = $img->id;
            $user->save();
        });
    }
}
