<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/%s+/', '-',$title)), 0, -1);
        return [
            'title' => $title,
            'body'  => $this->faker->paragraph(100, true),
            'slug'  => $slug,
            'img'   => 'https://via.placeholder.com/600/5F113B/FFFFFF/?text=LARAVEL:8.*',
            'created_at'    => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
