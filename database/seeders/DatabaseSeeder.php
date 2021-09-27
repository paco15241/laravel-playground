<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // 取消外键约束（后面章节将介绍外键约束）
        Schema::disableForeignKeyConstraints();
        Post::truncate();

        Post::factory(30)->create();

        // 开启外键约束
        Schema::enableForeignKeyConstraints();
    }
}
