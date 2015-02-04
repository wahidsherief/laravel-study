<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
                'username'   => 'admin',
                'password'   => Hash::make('admin'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
 
}