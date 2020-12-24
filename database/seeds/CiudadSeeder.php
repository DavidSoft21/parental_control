<?php
use App\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades=[

            ['id' => 1,'nombre' => 'Cali'], 
            ['id' => 2,'nombre' => 'Bogotá DC'], 
            ['id' => 3,'nombre' => 'Medellín'], 
            ['id' => 4,'nombre' => 'Barranquilla'], 
            ['id' => 5,'nombre' => 'Cartagena'], 
            ['id' => 6,'nombre' => 'Pasto']
        ];

        foreach ($ciudades as $ciudad) {
            Ciudad::updateOrcreate(['id' => $ciudad['id']],$ciudad);
        }
    }
}
