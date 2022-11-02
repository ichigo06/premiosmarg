<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Sales;
use App\Models\Objective;
use App\Models\Consumer;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        Consumer::create([
            'cliente' => 'Margperu',
            'ruc' => '20609717379',
            'distrito' => 'Surco',
            'region' => 'Lima',      
            'zona' => 'Lima Perifería',            
        ]);
        User::create([
            'name' => 'Brenda Veliz',
            'email' => 'bveliz@margperu.com',
            'dni' => '70832617',
            'whatsapp' => '983280536',
            'tel' => '983280536',
            'password' => bcrypt('Marg.peru2060'),       
            'id_consumers' => '1',   
        ])->assignRole('Administrador');
        Objective::create([
            'objective' => '10000',
            'id_objective' => '1',
        ]);
        Sales::create([
            'venta' => '10000',
            'id_consumers_sales' => '1',
            'id_users_sales' => '1',
        ]);
        //    User::factory(9)->create();
        // $data = [
        //     'name' => 'rogger',
        //     'email' => 'rogger@hotmail.com',
        //     'password' => bcrypt('12345678')
        // ];
        // DB::table('users') -> insert($data);
        // }
    }
}
