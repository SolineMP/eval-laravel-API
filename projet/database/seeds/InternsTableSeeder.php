<?php

use Illuminate\Database\Seeder;

class InternsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interns')->insert([
            'lastname' => 'Belardi',
            'firstname' => 'Océane',
            'email' => 'o.belardi@it-students.fr',
            'age' => 32,
            'phone_number' => '0601010101'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Perus',
            'firstname' => 'Benoît',
            'email' => 'b.perus@it-students.fr',
            'age' => 32,
            'phone_number' => '0602020202'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Wachani',
            'firstname' => 'Norhen',
            'email' => 'n.wachani@it-students.fr',
            'age' => 26,
            'phone_number' => '0603030303'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Selcuk',
            'firstname' => 'Orkun',
            'email' => 'o.selcuk@it-students.fr',
            'age' => 26,
            'phone_number' => '0604040404'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Dessartine',
            'firstname' => 'Quentin',
            'email' => 'q.dessartine@it-students.fr',
            'age' => 26,
            'phone_number' => '0605050505'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Molowa',
            'firstname' => 'Soline',
            'email' => 's.molowa@it-students.fr',
            'age' => 36,
            'phone_number' => '0606060606'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Agoune',
            'firstname' => 'Adam',
            'email' => 'a.agoune@it-students.fr',
            'age' => 26,
            'phone_number' => '0607070707'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Hoarau',
            'firstname' => 'Elisabeth',
            'email' => 'e.hoarau@it-students.fr',
            'age' => 26,
            'phone_number' => '0608080808'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Rathipanya',
            'firstname' => 'Lasmy',
            'email' => 'l.rathipanya@it-students.fr',
            'age' => 26,
            'phone_number' => '0609090909'
        ]);
        
        DB::table('interns')->insert([
            'lastname' => 'Palmer',
            'firstname' => 'Quentin',
            'email' => 'q.palmer@it-students.fr',
            'age' => 16,
            'phone_number' => '0610101010'
        ]);

        DB::table('interns')->insert([
            'lastname' => 'Magisson',
            'firstname' => 'Claire',
            'email' => 'c.magisson@it-students.fr',
            'age' => 26,
            'phone_number' => '0611111111'
        ]);
    }
}
