<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PostsSeeder::class);
    }
}

class PostsSeeder extends Seeder{
    public function run()
    {
        DB::table('posts')->delete();

        Post::create([
             'title' => 'Первая запись'
            ,'slug' => 'first-item2'
            ,'content' => '<p>Первая запись охохо</p>'
            ,'tymbler' => true
            ,'published_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        Post::create([
             'title' => 'Вторая запись'
            ,'slug' => 'second-item2'
            ,'content' => '<p>Вторая запись охохо</p>'
            ,'tymbler' => false
            ,'published_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
