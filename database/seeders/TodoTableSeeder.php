<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTodo = new Todo();
        $newTodo->todo = 'prova todo';
        $newTodo->description = 'prova desctiption della todo';
        $newTodo->save();
    }
}
