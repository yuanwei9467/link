
<?php 
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email' => 'admin@bar.com','name'=>'admin','password'=> Hash::make('admin')));
    }

}
?>