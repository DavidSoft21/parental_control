<?php
use App\Persona;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas =[

            ['id' => 1,'numero_documento' => '1144089078','primer_nombre' => 'Emer','segundo_nombre' => 'David','primer_apellido' => 'Riascos','segundo_apellido' => 'Macuase','direccion' => 'Cr 100 # 72Bis - 210', 'celular' => '3024554814','fecha_nacimiento'=>Carbon::today()->subYears(20),'ciudad_id' => 1,'padre_id' => null,'madre_id' => null, 'sexo' => 'M'], 
            ['id' => 2,'numero_documento' => '1070908947','primer_nombre' => 'Vanny','segundo_nombre' => null,'primer_apellido' => 'Guerrero','segundo_apellido' => 'Smith','direccion' => 'Cr 100 # 75A - 211', 'celular' => '3113142892','fecha_nacimiento'=>Carbon::today()->subYears(24),'ciudad_id' => 1,'padre_id' => null,'madre_id' => null, 'sexo' => 'F'],
            ['id' => 3,'numero_documento' => '1147799098','primer_nombre' => 'Juan','segundo_nombre' => 'Antonio','primer_apellido' => 'Riascos','segundo_apellido' => 'Guerrero','direccion' => 'Cr 100 # 72Bis - 210', 'celular' => '3024554814','fecha_nacimiento'=>Carbon::today()->subYears(5),'ciudad_id' => 1,'padre_id' => 1,'madre_id' => 2, 'sexo' => 'M'],
            ['id' => 4,'numero_documento' => '344689078','primer_nombre' => 'Martha','segundo_nombre' => null,'primer_apellido' => 'Saldaña','segundo_apellido' => 'Avendaño','direccion' => 'Av 6N # 34Bis - 110', 'celular' => '3002455481','fecha_nacimiento'=>Carbon::today()->subYears(30),'ciudad_id' => 1,'padre_id' => null,'madre_id' => null, 'sexo' => 'F'],
            ['id' => 5,'numero_documento' => '244089775','primer_nombre' => 'Edwar','segundo_nombre' => 'Steven','primer_apellido' => 'Clavijo','segundo_apellido' => 'Martinez','direccion' => 'Av 6N # 34Bis - 110', 'celular' => '3187554816','fecha_nacimiento'=>Carbon::today()->subYears(28),'ciudad_id' => 2,'padre_id' => null,'madre_id' => null, 'sexo' => 'M'],
            ['id' => 6,'numero_documento' => '5144039075','primer_nombre' => 'Antonella','segundo_nombre' => null,'primer_apellido' => 'Clavijo','segundo_apellido' => 'Saldaña','direccion' => 'CL 5 # 37 - 115', 'celular' => '3114534815','fecha_nacimiento'=>Carbon::today()->subYears(18),'ciudad_id' => 2,'padre_id' => 5,'madre_id' => 6, 'sexo' => 'F'],
            ['id' => 7,'numero_documento' => '14089078','primer_nombre' => 'Miguel','segundo_nombre' => 'Angel','primer_apellido' => 'Chaux','segundo_apellido' => 'Cabrera','direccion' => 'Cr 46c # 54D - 41', 'celular' => '3209554321','fecha_nacimiento'=>Carbon::today()->subYears(20),'ciudad_id' => 4,'padre_id' => null,'madre_id' => null, 'sexo' => 'M'],
            ['id' => 8,'numero_documento' => '1174089073','primer_nombre' => 'Pedro','segundo_nombre' => 'Antonio','primer_apellido' => 'Chaux','segundo_apellido' => 'Clavijo','direccion' => 'CL 5 # 37 - 115', 'celular' => '3114534815','fecha_nacimiento'=>Carbon::today()->subYears(10),'ciudad_id' => 2,'padre_id' => 7,'madre_id' => 6, 'sexo' => 'M'],
            ['id' => 9,'numero_documento' => '1184089022','primer_nombre' => 'James','segundo_nombre' => 'David','primer_apellido' => 'Chaux','segundo_apellido' => 'Clavijo','direccion' => 'CL 5 # 37 - 115', 'celular' => '3114534815','fecha_nacimiento'=>Carbon::today()->subYears(8),'ciudad_id' => 2,'padre_id' => 7,'madre_id' => 6, 'sexo' => 'M'],
            ['id' => 10,'numero_documento' => '1194089044','primer_nombre' => 'Mercedez','segundo_nombre' => 'Nathalia','primer_apellido' => 'Riascos','segundo_apellido' => 'Macuase','direccion' => 'Cr 100 # 72Bis - 210', 'celular' => '3024554814','fecha_nacimiento'=>Carbon::today()->subYears(20),'ciudad_id' => 1,'padre_id' => 5,'madre_id' => 6, 'sexo' => 'F'],
            ['id' => 11,'numero_documento' => '1344089090','primer_nombre' => 'Lina','segundo_nombre' => 'Briyit','primer_apellido' => 'Riascos','segundo_apellido' => 'Macuase','direccion' => 'Cr 100 # 72Bis - 210', 'celular' => '3024554814','fecha_nacimiento'=>Carbon::today()->subYears(20),'ciudad_id' => 1,'padre_id' => 5,'madre_id' => 6, 'sexo' => 'F']
        ];

        foreach ($personas as $persona) {
            Persona::updateOrcreate(['id' => $persona['id']],$persona);
        }
    }
}
