<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Director;
use App\Models\Film;
use App\Models\Movie;
use App\Models\Project;
use App\Models\Task;
use App\Models\User1;
use Database\Factories\TaskFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Заполним данными табличку directors
        // Director::factory(30)->create();

        // Заполним данными табличку films
        // Film::factory(30)->create();

        // Заполним данными табличку authors
//            Author::factory(5)->create();

        // Заполним данными табличку books
//        Book::factory(50)->create();

        // Заполним данными табличку cinema и movie
//        Cinema::factory(8)->create();
//        Movie::factory(30)->create();

        // Заполним данными табличку cinema_movie
//        CinemaMovie::factory(50)->create();

//        User1::factory(5)->create();
//        Project::factory(10)->create();
//        Task::factory(30)->create();

    }

}
