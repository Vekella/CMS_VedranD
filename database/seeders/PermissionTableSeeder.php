<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'Pregled Uloga',
           'Stvaranje Uloga',
           'Uredjivanje Uloga',
           'Brisanje Uloga',
           'Pregled Korisnika',
           'Stvaranje Korisnika',
           'Uredjivanje Korisnika',
           'Brisanje Korisnika',
           'Pregled Objava',
           'Stvaranja Objava',
           'Uredjivanje Objava',
           'Brisanje Objava'
        ];
   
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
