<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cities')->insert([
            'nombre' => 'Mexicali',
            'state_id' => 1
        ]);

        DB::table('cities')->insert([
            'nombre' => 'Ensenada',
            'state_id' => 1
        ]);

        DB::table('cities')->insert([
            'nombre' => 'Playas de Rosarito',
            'state_id' => 1
        ]);

        DB::table('cities')->insert([
            'nombre' => 'San Quintín',
            'state_id' => 1
        ]);

        DB::table('cities')->insert([
            'nombre' => 'Tecate',
            'state_id' => 1
        ]);

        DB::table('cities')->insert([
            'nombre' => 'Tijuana',
            'state_id' => 1
        ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aguascalientes',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asientos',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calvillo',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosío',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Llano',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jesús María',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pabellón de Arteaga',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rincón de Romos',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco de los Romo',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José de Gracia',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepezalá',
        //     'state_id' => 1
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mexicali',
        //     'state_id' => 2
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ensenada',
        //     'state_id' => 2
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Playas de Rosarito',
        //     'state_id' => 2
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Quintín',
        //     'state_id' => 2
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecate',
        //     'state_id' => 2
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tijuana',
        //     'state_id' => 2
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Paz',
        //     'state_id' => 3
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comondú',
        //     'state_id' => 3
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Loreto',
        //     'state_id' => 3
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Cabo',
        //     'state_id' => 3
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mulegé',
        //     'state_id' => 3
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Campeche',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calakmul',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calkiní',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Candelaria',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Carmen',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Champotón',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzitbalché',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Escárcega',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hecelchakán',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hopelchén',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Palizada',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Seybaplaya',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenabo',
        //     'state_id' => 4
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxtla Gutiérrez',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acacoyagua',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Municipio de Acala',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acapetahua',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aldama',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Altamirano',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatenango de la Frontera',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatenango del Valle',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ángel Albino Corzo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arriaga',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bejucal de Ocampo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Belisario Domínguez',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bella Vista',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benemérito de las Américas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Berriozábal',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bochil',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cacahoatán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Capitán Luis Ángel Vidal',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Catazajá',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chalchihuitán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chamula',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chanal',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chapultenango',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chenalhó',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiapa de Corzo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiapilla',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chicoasén',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chicomuselo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chilón',
        //     'state_id' => 5
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Cintalapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coapilla',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comitán de Domínguez',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Copainalá',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Bosque',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Parral',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Porvenir',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Emiliano Zapata',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Escuintla',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Francisco León',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Frontera Comalapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Frontera Hidalgo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huitiupán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huixtán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huixtla',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixhuatán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtacomitán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtapangajoya',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiquipilas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jitotol',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juárez',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Concordia',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Grandeza',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Independencia',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Libertad',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Trinitaria',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Larráinzar',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Las Margaritas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Las Rosas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mapastepec',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maravilla Tenejapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Marqués de Comillas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazapa de Madero',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazatán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Metapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mezcalapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mitontic',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Montecristo de Guerrero',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Motozintla',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nicolás Ruiz',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocosingo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocotepec',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocozocoautla de Espinosa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ostuacán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Osumacinta',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oxchuc',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Palenque',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pantelhó',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pantepec',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pichucalco',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pijijiapan',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pueblo Nuevo Solistahuacán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rayón',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Reforma',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rincón Chamula San Pedro',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sabanilla',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salto de Agua',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Duraznal',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cristóbal de las Casas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Fernando',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Cancuc',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago el Pinar',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Siltepec',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Simojovel',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sitalá',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Socoltenango',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Solosuchiapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soyaló',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Suchiapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Suchiate',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sunuapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tapachula',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tapalapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tapilula',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecpatán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenejapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teopisca',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tila',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonalá',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totolapa',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tumbalá',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxtla Chico',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuzantán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tzimol',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Unión Juárez',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Venustiano Carranza',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Comaltitlán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Corzo',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villaflores',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yajalón',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zinacantán',
        //     'state_id' => 5
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chihuahua',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahumada',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aldama',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Allende',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aquiles Serdán',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ascensión',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bachíniva',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Balleza',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Batopilas',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bocoyna',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Buenaventura',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Camargo',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Carichí',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Casas Grandes',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chínipas',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciudad Juárez',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coronado',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyame',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuauhtémoc',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cusihuiriachi',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Delicias',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Tule',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Galeana',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gómez Farías',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gran Morelos',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guachochi',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe y Calvo',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guazapares',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guerrero',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgo del Parral',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huejotitán',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ignacio Zaragoza',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Janos',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiménez',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Julimes',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Cruz',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'López',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Madera',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maguarichi',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Manuel Benavides',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matachí',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matamoros',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Meoqui',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Morelos',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Moris',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Namiquipa',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nonoava',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Casas Grandes',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocampo',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ojinaga',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Praxedis G. Guerrero',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Riva Palacio',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rosales',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rosario',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco de Borja',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco de Conchos',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco del Oro',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Bárbara',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Isabel',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Satevó',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Saucillo',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temósachi',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Urique',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Uruachi',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle de Zaragoza',
        //     'state_id' => 6
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Álvaro Obregón',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Azcapotzalco',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyoacán',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuajimalpa de Morelos',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuauhtémoc',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gustavo A. Madero',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Iztacalco',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Iztapalapa',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Magdalena Contreras',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miguel Hidalgo',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Milpa Alta',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tláhuac',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalpan',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Venustiano Carranza',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochimilco',
        //     'state_id' => 7
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Abasolo',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acuña',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Allende',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arteaga',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Candela',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Castaños',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuatro Ciénegas',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Escobedo',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Francisco I. Madero',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Frontera',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Cepeda',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guerrero',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgo',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiménez',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juárez',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lamadrid',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matamoros',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Monclova',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Morelos',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Múzquiz',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nadadores',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nava',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocampo',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Parras',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Piedras Negras',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Progreso',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ramos Arizpe',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sabinas',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sacramento',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Buenaventura',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan de Sabinas',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sierra Mojada',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Torreón',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Viesca',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Unión',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zaragoza',
        //     'state_id' => 8
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Colima',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Armería',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comala',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coquimatlán',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuauhtémoc',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlahuacán',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Manzanillo',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Minatitlán',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecomán',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Álvarez',
        //     'state_id' => 9
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Durango',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Canatlán',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Canelas',
        //     'state_id' => 10
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Coneto de Comonfort',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuencamé',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Oro',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Simón Bolívar',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gómez Palacio',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe Victoria',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guanaceví',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Indé',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lerdo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mapimí',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mezquital',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nazas',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nombre de Dios',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Ideal',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocampo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Otáez',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pánuco de Coronado',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Peñón Blanco',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Poanas',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pueblo Nuevo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rodeo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bernardo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Dimas',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan de Guadalupe',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan del Río',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis del Cordero',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro del Gallo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Clara',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Papasquiaro',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Súchil',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamazula',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepehuanes',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlahualilo',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Topia',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vicente Guerrero',
        //     'state_id' => 10
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acambay',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acolman',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aculco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Almoloya de Alquisiras',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Almoloya de Juárez',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Almoloya del Río',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amanalco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amecameca',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apaxco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atenco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atizapán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atizapán de Zaragoza',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlacomulco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlautla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Axapusco',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Ayapango',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Calimaya',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Capulhuac',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Chalco',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Chapa de Mota',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Chapultepec',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Chiautla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chicoloapan',
        //     'state_id' => 11
        // ]);


        // DB::table('cities')->insert([
        //     'nombre' => 'Chiconcuac',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chimalhuacán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coacalco de Berriozábal',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatepec Harinas',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cocotitlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyotepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautitlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautitlán Izcalli',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Donato Guerra',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ecatepec de Morelos',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ecatzingo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Oro',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetoca',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueypoxtla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huixquilucan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Isidro Fabela',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtapaluca',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtapan de la Sal',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtapan del Oro',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlahuaca',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jaltenco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jilotepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jilotzingo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiquipilco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jocotitlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Joquicingo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juchitepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Paz',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lerma',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Luvianos',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Malinalco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Melchor Ocampo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Metepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mexicaltzingo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Morelos',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Naucalpan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nextlalpan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nezahualcóyotl',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nicolás Romero',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nopaltepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocoyoacac',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocuilan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Otumba',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Otzoloapan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Otzolotepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ozumba',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Papalotla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Polotitlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rayón',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio la Isla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe del Progreso',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José del Rincón',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín de las Pirámides',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Atenco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Simón de Guerrero',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Tomás',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soyaniquilpan de Juárez',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sultepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecámac',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tejupilco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temamatla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temascalapa',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temascalcingo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temascaltepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temoaya',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenancingo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenango del Aire',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenango del Valle',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teoloyucan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teotihuacán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetlaoxtoc',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetlixpa',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepotzotlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tequixquiac',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Texcaltitlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Texcalyacac',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Texcoco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tezoyuca',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tianguistenco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Timilpan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalmanalco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalnepantla de Baz',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlatlaya',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonanitla',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonatico',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tultepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tultitlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle de Bravo',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle de Chalco Solidaridad',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Allende',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa del Carbón',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Guerrero',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Victoria',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xalatlaco',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xonacatlán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacazonapan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacualpan',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zinacantepec',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zumpahuacán',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zumpango',
        //     'state_id' => 11
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guanajuato',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Abasolo',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acámbaro',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apaseo El Alto',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apaseo El Grande',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atarjea',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Celaya',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comonfort',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coroneo',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cortazar',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cortazar',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuerámaro',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dolores Hidalgo',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huanímaro',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Irapuato',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jaral del Progreso',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jerécuaro',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juventino Rosas',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'León',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Manuel Doblado',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Moroleón',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocampo',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pénjamo',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pueblo Nuevo',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Purísima del Rincón',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Romita',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salamanca',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salvatierra',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Diego de la Unión',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco del Rincón',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Iturbide',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis de la Paz',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel de Allende',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Maravatío',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Silao',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tarandacuao',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tarimoro',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tierra Blanca',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Uriangato',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle de Santiago',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Victoria',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Doctor Mora',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villagrán',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xichú',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yuriria',
        //     'state_id' => 12
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chilpancingo de los Bravo',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acapulco de Juárez',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatepec',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahuacuotzingo',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ajuchitlán del Progreso',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alcozauca de Guerrero',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alpoyeca',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apaxtla de Castrejón',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arcelia',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atenango del Río',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlamajalcingo del Monte',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlixtac',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atoyac de Álvarez',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayutla',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Azoyú',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Buenavista de Cuéllar',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chilapa de Álvarez',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coahuayutla de José María Izazaga',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cochoapa el Grande',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cocula',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Copala',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Copalillo',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Copanatoyac',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyuca de Benítez',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyuca de Catalán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuajinicuilapa',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cualác',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautepec',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuetzala del Progreso',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cutzamala de Pinzón',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Eduardo Neri',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Florencio Villarreal',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Canuto A. Neri',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Heliodoro Castillo',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huamuxtitlán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huitzuco de los Figueroa',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Iguala de la Independencia',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Igualapa',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Iliatenco',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixcateopan de Cuauhtémoc',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'José Joaquín de Herrera',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juan R. Escudero',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juchitán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Unión de Isidoro Montes de Oca',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Leonardo Bravo',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Malinaltepec',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Marquelia',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mártir de Cuilapan',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Metlatónoc',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mochitlán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Olinalá',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ometepec',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pedro Ascencio Alquisiras',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Petatlán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pilcaya',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pungarabato',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quechultenango',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis Acatlán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Marcos',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totolapan',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Taxco de Alarcón',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecoanapa',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecpan de Galeana',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teloloapan',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepecoacuilco de Trujano',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetipac',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tixtla de Guerrero',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacoachistlahuaca',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacoapa',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalchapa',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maldonado',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comonfort',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlapehuala',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xalpatláhuac',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochihuehuetlán',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochistlahuaca',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán Tablas',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zihuatanejo de Azueta',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zirándaro',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zitlala',
        //     'state_id' => 13
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pachuca de Soto',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acaxochitlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Actopan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Agua Blanca',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ajacuba',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alfajayucan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Almoloya',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atitalaquia',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlapexco',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atotonilco de Tula',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atotonilco el Grande',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calnali',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cardonal',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chapantongo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chapulhuacán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chilcuautla',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautepec de Hinojosa',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Arenal',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Eloxochitlan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Emiliano Zapata',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Epazoyucan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Francisco I. Madero',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huasca de Ocampo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huautla',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huazalingo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetla',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huejutla de Reyes',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huichapan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixmiquilpan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jacala de Ledezma',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jaltocán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juárez Hidalgo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Misión',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lolotla',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Metepec',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Metztitlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mineral de la Reforma',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mineral del Chico',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mineral del Monte',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mixquiahuala de Juárez',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Molango',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nicolás Flores',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nopala de Villagrán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Omitlán de Juárez',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pacula',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pisaflores',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Progreso de Obregón',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Metzquititlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Tlaxiaca',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolo Tutotepec',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe Orizatlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Salvador',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago de Anaya',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tulantepec de Lugo Guerrero',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Singuilucan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tasquillo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecozautla',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenango de Doria',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeapulco',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepehuacán de Guerrero',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeji del Río de Ocampo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetitlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetepango',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tezontepec de Aldama',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tianguistengo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tizayuca',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlahuelilpan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlahuiltepa',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlanalapa',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlanchinol',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaxcoapan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tolcayuca',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tula de Allende',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tulancingo de Bravo',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Tezontepec',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochiatipan',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochicoatlán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yahualica',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacualtipán de Ángeles',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotlán de Juárez',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zempoala',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zimapán',
        //     'state_id' => 14
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalajara',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatic',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatlán de Juárez',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahualulco de Mercado',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amacueca',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatitán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ameca',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arandas',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Brizuela',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atengo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atenguillo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atotonilco el Alto',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atoyac',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Autlán de Navarro',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayotlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayutla',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bolaños',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cabo Corrientes',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cañadas de Obregón',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Casimiro Castillo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chapala',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chimaltitán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiquilistlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cihuatlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cocula',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Colotlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Concepción de Buenos Aires',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautitlán de García Barragán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautla',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuquío',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Degollado',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ejutla',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Arenal',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Grullo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Limón',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Salto',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Encarnación de Díaz',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Etzatlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gómez Farías',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guachinango',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hostotipaquillo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huejúcar',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huejuquilla el Alto',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlahuacán de los Membrillos',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlahuacán del Río',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalostotitlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jamay',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jesús María',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jilotlán de los Dolores',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jocotepec',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juanacatlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juchitlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Barca',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Huerta',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Manzanilla de la Paz',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lagos de Moreno',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mascota',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazamitla',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mexticacán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mezquitic',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mixtlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocotlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ojuelos de Jalisco',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pihuamo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Poncitlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puerto Vallarta',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quitupan',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cristóbal de la Barranca',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Diego de Alejandría',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Gabriel',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ignacio Cerro Gordo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan de los Lagos',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juanito de Escobedo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Julián',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Marcos',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín de Bolaños',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín de Hidalgo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel el Alto',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián del Oeste',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María de los Ángeles',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María del Oro',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sayula',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tala',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Talpa de Allende',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamazula de Gordiano',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tapalpa',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecalitlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecolotlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Techaluta de Montenegro',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenamaxtlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teocaltiche',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teocuitatlán de Corona',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepatitlán de Morelos',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tequila',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teuchitlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tizapán el Alto',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlajomulco de Zúñiga',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaquepaque',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tolimán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tomatlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonalá',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonaya',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonila',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totatiche',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tototlán',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxcacuesco',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxcueca',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxpan',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Unión de San Antonio',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Unión de Tula',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle de Guadalupe',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle de Juárez',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Purificación',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Corona',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Guerrero',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Hidalgo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yahualica de González Gallo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacoalco de Torres',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapopan',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotiltic',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán de Vadillo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotlán del Rey',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotlán El Grande',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotlanejo',
        //     'state_id' => 15
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Morelia',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acuitzio',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aguililla',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Álvaro Obregón',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Angamacutiro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Angangueo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apatzingán',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aporo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aquila',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ario',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arteaga',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Briseñas',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Buenavista',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Carácuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Charapan',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Charo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chavinda',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cherán',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chilchota',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chinicuila',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chucándiro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Churintzio',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Churumuco',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coahuayana',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coalcomán de Vázquez Pallares',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coeneo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cojumatlán de Régules',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Contepec',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Copándaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cotija',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuitzeo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ecuandureo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Epitacio Huerta',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Erongarícuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gabriel Zamora',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huandacareo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huaniqueo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huetamo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huiramba',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Indaparapeo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Irimbo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlán',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jacona',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiménez',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiquilpan',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'José Sixto Verduzco',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juárez',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jungapeo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Huacana',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Piedad',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lagunillas',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lázaro Cárdenas',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Reyes',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Madero',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maravatío',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Marcos Castellanos',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Morelos',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Múgica',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nahuatzen',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nocupétaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Parangaricutiro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Urecho',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Numarán',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocampo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pajacuarán',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Panindícuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Parácuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Paracho',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pátzcuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Penjamillo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Peribán',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Purépero',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puruándiro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Queréndaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quiroga',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sahuayo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salvador Escalante',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Maya',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Senguio',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Susupuato',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tacámbaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tancítaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tangamandapio',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tangancícuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tanhuato',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Taretan',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tarímbaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepalcatepec',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tingambato',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tingüindín',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tiquicheo de Nicolás Romero',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalpujahua',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlazazalca',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tocumbo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tumbiscatío',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Turicato',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxpan',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuzantla',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tzintzuntzan',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tzitzio',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Uruapan',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Venustiano Carranza',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villamar',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vista Hermosa',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yurécuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacapu',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zamora',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zináparo',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zinapécuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ziracuaretiro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zitácuaro',
        //     'state_id' => 16
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuernavaca',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amacuzac',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlatlahucan',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Axochiapan',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayala',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatetelco',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatlán del Río',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautla',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Emiliano Zapata',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueyapan',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huitzilac',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jantetelco',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiutepec',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jojutla',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jonacatepec',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazatepec',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miacatlán',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocuituco',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puente de Ixtla',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temixco',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temoac',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepalcingo',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepoztlán',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetecala',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetela del Volcán',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalnepantla',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaltizapán de Zapata',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaquiltenango',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlayacapan',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totolapan',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochitepec',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xoxocotla',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yautepec',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yecapixtla',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacatepec',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacualpan de Amilpas',
        //     'state_id' => 17
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepic',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acaponeta',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahuacatlán',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatlán de Cañas',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bahía de Banderas',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Compostela',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Del Nayar',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huajicori',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlán del Río',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jala',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yesca',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rosamorada',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ruiz',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Blas',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Lagunillas',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María del Oro',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Ixcuintla',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecuala',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxpan',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xalisco',
        //     'state_id' => 18
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Monterrey',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Abasolo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Agualeguas',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Allende',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Anáhuac',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apodaca',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aramberri',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bustamante',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cadereyta Jiménez',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cerralvo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'China',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciénega de Flores',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Doctor Arroyo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Doctor Coss',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Doctor González',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Carmen',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Galeana',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'García',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Bravo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Escobedo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Terán',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Treviño',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Zaragoza',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Zuazua',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Higueras',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hualahuises',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Iturbide',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juárez',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lampazos de Naranjo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Linares',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Aldamas',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Herreras',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Ramones',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Marín',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Melchor Ocampo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mier y Noriega',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mina',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Montemorelos',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Parás',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pesquería',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rayones',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sabinas Hidalgo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salinas Victoria',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás de los Garza',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Garza García',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vallecillo',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villaldama',
        //     'state_id' => 19
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Abejones',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatlán de Pérez Figueroa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asunción Cacalotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asunción Cuyotepeji ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asunción Ixtaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asunción Nochixtlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asunción Ocotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Asunción Tlacolulita',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayotzintepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Barrio de la Soledad',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calihualá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Candelaria Loxicha',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciénega de Zimatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciudad Ixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatecas Altas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coicoyán de las Flores',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Compañía ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Concepción Buenavista',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Concepción Pápalo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Constancia del Rosario',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosolapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosoltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuilápam de Guerrero',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuyamecalco Villa de Zaragoza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chahuites ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chalcatongo de Hidalgo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiquihuitlán de Benito Juárez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Heroica Ciudad de Ejutla de Crespo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Eloxochitlán de Flores Magón ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Espina',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamazulápam del Espíritu Santo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Fresnillo de Trujano',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe de Ramírez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guelatao de Juárez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guevea de Humboldt',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mesones Hidalgo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Hidalgo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Heroica Ciudad de Huajuapan de León',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huautepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huautla de Jiménez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtlán de Juárez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Heroica Ciudad de Juchitán de Zaragoza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Loma Bonita',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Apasco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Jaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Magdalena Jicotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Mixtepec ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Ocotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Peñasco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Teitipac',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Tequisistlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Tlacotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Zahuatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mariscala de Juárez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mártires de Tacubaya',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matías Romero Avendaño',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazatlán Villa de Flores',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miahuatlán de Porfirio Díaz',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mixistlán de la Reforma',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Monjas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Natividad',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nazareno Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nejapa de Madero',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixpantepec Nieves',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Niltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oaxaca de Juárez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocotlán de Morelos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Pe',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pinotepa de Don Luis',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pluma Hidalgo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José del Progreso',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Putla Villa de Guerrero',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Quioquitani',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Reforma de Pineda',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Reforma',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Reyes Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rojas de Cuauhtémoc',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salina Cruz',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Amatengo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Atenango',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Chayuco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín de las Juntas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Loxicha',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Tlacotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Agustín Yatareni',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Cabecera Nueva',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Dinicuiti',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Huaxpaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Huayápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Ixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Lagunas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Nuxiño',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Paxtlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Sinaxtla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Solaga ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Teotilálpam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Tepetlapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Yaá ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Zabache',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Zautla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonino Castillo Velasco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonino el Alto',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonino Monte Verde',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio Acutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio de la Cal',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio Huitepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio Nanahuatípam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio Sinicahua',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio Tepetlapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Baltazar Chichicápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Baltazar Loxicha',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Baltazar Yatzachi el Bajo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolo Coyotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolomé Ayautla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolomé Loxicha',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolomé Quialana',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolomé Yucuañe',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolomé Zoogocho',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolo Soyaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bartolo Yautepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Bernardo Mixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Blas Atempa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Carlos Yautepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cristóbal Amatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cristóbal Amoltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cristóbal Lachirioag',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cristóbal Suchixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Dionisio del Mar',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Dionisio Ocotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Dionisio Ocotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Esteban Atatlahuca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe Jalapa de Díaz',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe Tejalápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe Usila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Cahuacuá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Cajonos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Chapulapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Chindúa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco del Mar',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Huehuetlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Ixhuatán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Jaltepetongo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Lachigoló',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Logueche',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Nuxaño',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Ozolotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Sola',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Telixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Teopan',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Tlapancingo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Gabriel Mixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ildefonso Amatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ildefonso Sola',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ildefonso Villa Alta',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jacinto Amilpas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jacinto Tlacotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Coatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Silacayoapilla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Sosola',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Taviche',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Tecóatl',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jorge Nuchita',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Ayuquila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Chiltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José del Peñasco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Estancia Grande',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Independencia',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Lachiguiri',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Tenango',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Achiutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Atepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ánimas Trujano',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Atatlahuca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Coixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Cuicatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Guelache',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Jayacatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Lo de Soto',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Suchitepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Tlacoatzintepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Tlachichilco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Tuxtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Cacahuatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Cieneguilla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Coatzóspam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Colorado',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Comaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Cotzocón',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Chicomezúchil',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Chilateca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan del Estado',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan del Río',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Diuxi',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Evangelista Analco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Guelavía',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Guichicovi',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Ihualtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Juquila Mixes ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Juquila Vijanos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Lachao',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Lachigalla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Lajarcia',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Lalana',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan de los Cués',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Mazatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Mixtepec -Dto. 08 -',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Mixtepec -Dto. 26 -',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Ñumí',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Ozolotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Petlapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Quiahije',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Quiotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Sayultepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Tabaá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Tamazola',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Teita',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Teitipac',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Tepeuxila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Teposcolula',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Yaeé',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Yatzona',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Yucuita',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo Albarradas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo Cacaotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo Cuaunecuiltitla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo Texmelúcan',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo Victoria',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas Camotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas Ojitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas Quiaviní',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas Zoquiápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis Amatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Marcial Ozolotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Marcos Arteaga ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín de los Cansecos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Huamelúlpam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Itunyoso',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Lachilá ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Peras',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Tilcajete',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Toxpalan',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Zacatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Cajonos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Capulálpam de Méndez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo del Mar',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Yoloxochitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Etlatongo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Nejápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Peñasco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Piñas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Río Hondo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Sindihui',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Mateo Tlapiltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Melchor Betaza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Achiutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Ahuehuetitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Aloápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Amatitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Amatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Coatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Chicahua',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Chimalapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel del Puerto',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel del Río',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Ejutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel el Grande',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Huautla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Mixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Panixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Peras ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Piedras',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Quetzaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Santa Flor',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Sola de Vega',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Soyaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Suchixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Talea de Castro ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tecomatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tenango',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tequixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tilquiápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tlacamama',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tlacotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Tulancingo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Yotao',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás Hidalgo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Coatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Cuatro Venados',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Huitzo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Huixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Macuiltianguis',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Tijaltepec ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Villa de Mitla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Yaganiza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Amuzgos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Apóstol',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Atoyac',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Cajonos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Coxcaltepec Cántaros',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Comitancillo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro el Alto',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Huamelula',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Huilotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Ixcatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Ixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Jaltepetongo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Jicayán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Jocotipac',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Juchatengo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Mártir',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Mártir Quiechapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Mártir Yucuxaco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Mixtepec -Dto. 22 -',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Mixtepec -Dto. 26 -',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Molinos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Nopala',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Ocopetatillo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Ocotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Pochutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Quiatoni ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Sochiápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Tapanatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Taviche',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Teozacoalco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Teutila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Tidaá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Topiltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Totolapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Tututepec de Melchor Ocampo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Yaneri',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Yólox',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro y San Pablo Ayutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro y San Pablo Teposcolula',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro y San Pablo Tequixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Yucunama',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Raymundo Jalpan',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Abasolo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Coatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Ixcapa ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Nicananduta',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Río Hondo ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Tecomaxtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Teitipac',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Tutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Simón Almolongas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Simón Zahuatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Ateixtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Cuauhtémoc',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana del Valle',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Tavela',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Tlapacoyan',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Yareni',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Zegache',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catalina Quierí',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Cuixtla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Ixtepeji',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Juquila ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Lachatao',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Loxicha',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Mechoacán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Minas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Quiané',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Tayata',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Ticuá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Yosonotú',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Zapoquila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Acatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Amilpas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz de Bravo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Itundujia',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Mixtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Nundaco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Papalutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Tacache de Mina',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Tacahua',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Tayata',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Xitla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Xoxocotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Zenzontepec ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Gertrudis',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Inés del Monte ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Inés Yatzeche',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Lucía del Camino',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Lucía Miahuatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Lucía Monteverde',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Lucía Ocotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Alotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Apazco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María la Asunción',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Heroica Ciudad de Tlaxiaco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayoquezco de Aldama',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Atzompa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Camotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Colotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Cortijo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Coyotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Chachoápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Chilapa de Díaz',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Chilchotla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Chimalapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María del Rosario',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María del Tule',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Ecatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Guelacé',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Guienagati',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Huatulco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Huazolotitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Ipalapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Ixcatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Jacatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Jalapa del Marqués',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Jaltianguis',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Lachixío',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Mixtequilla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Nativitas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Nduayaco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Ozolotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Pápalo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Peñoles',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Petapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Quiegolani',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Sola',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Tataltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Tecomavaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Temaxcalapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Temaxcaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Teopoxco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Tepantlali',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Texcatitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Tlahuitoltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Tlalixtac',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Tonameca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Totolapilla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Xadani',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Yalina',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Yavesía',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Yolotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Yosoyúa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Yucuhiti',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Zacatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Zaniza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María Zoquitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Amoltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Apoala',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Apóstol',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Astata',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Atitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Ayuquililla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Cacaloxtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Camotlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Comaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Chazumba',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Choápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago del Río',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Huajolotitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Huauclilla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Ihuitlán Plumas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Ixcuintepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Ixtayutla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Jamiltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Jocotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Juxtlahuaca',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Lachiguiri',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Lalopa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Laollaga',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Laxopa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Llano Grande',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Matatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Miltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Minas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Nacaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Nejapilla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Nundiche',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Nuyoó',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Pinotepa Nacional',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Suchilquitongo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tamazola',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tapextla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Tejúpam de la Unión',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tenango',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tepetlapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tetepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Texcalcingo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Textitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tilantongo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tillo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tlazoyaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Xanica',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Xiacuí',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Yaitepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Yaveo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Yolomécatl',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Yosondúa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Yucuyachi',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Zacatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Zoochila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Zoquiápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Ingenio',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Albarradas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Armenta',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Chihuitán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo de Morelos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Ixcatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Nuxaá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Ozolotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Petapa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Roayaga',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Tehuantepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Teojomulco',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Tepuxtepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Tlatayápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Tomaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Tonalá',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Tonaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Xagacía',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Yanhuitlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Yodohino',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo Zanatepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santos Reyes Nopala',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santos Reyes Pápalo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santos Reyes Tepejillo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santos Reyes Yucuná',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Tomás Jalieza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Tomás Mazaltepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Tomás Ocotepec',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Tomás Tamazulapan',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Vicente Coatlán',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Vicente Lachixío',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Vicente Nuñú',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Silacayoápam',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sitio de Xitlapehua',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soledad Etla',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Tamazulápam del Progreso',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tanetze de Zaragoza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Taniche',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tataltepec de Valdés',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teococuilco de Marcos Pérez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teotitlán de Flores Magón',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teotitlán del Valle',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teotongo ',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepelmeme Villa de Morelos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tezoatlán de Segura y Luna',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Tlacochahuaya',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacolula de Matamoros',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacotepec Plumas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalixtac de Cabrera',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totontepec Villa de Morelos',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Trinidad Zaachila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Trinidad Vista Hermosa',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Unión Hidalgo',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valerio Trujano',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Bautista Valle Nacional',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Díaz Ordaz',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yaxe',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena Yodocono de Porfirio Díaz',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yogana',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yutanduchi de Guerrero',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Zaachila',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán del Río',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán Lagunas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán Palmas',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Inés de Zaragoza',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zimatlán de Álvarez',
        //     'state_id' => 20
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acajete',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acateno',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Acatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatzingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acteopan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahuacatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahuatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahuazotepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahuehuetitla',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Ajalpan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Albino Zertuche',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aljojuca',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Altepexi',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amixtlán',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Amozoc',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aquixtla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atempan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atexcal',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlixco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atoyatempan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atzala',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atzitzihuacán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atzitzintla',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Axutla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayotoxco de Guerrero',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calpan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Caltepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Camocuautla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Caxhuacan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatepec',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Coatzingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cohetzala',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cohuecan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coronango',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coxcatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyomeapan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyotepec',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Cuapiaxtla de Madero',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautempan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautinchán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuautlancingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuayuca de Andrade',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuetzalan del Progreso',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuyoaco',
        //     'state_id' => 21
        // ]);
        // DB::table('cities')->insert([
        //     'nombre' => 'Chalchicomula de Sesma',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chapulco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiautla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiautzingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiconcuautla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chichiquila',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chietla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chigmecatitlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chignahuapan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chignautla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chila',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chila de la Sal',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Honey',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chilchotla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chinantla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Domingo Arenas',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Eloxochitlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Epatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Esperanza',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Francisco Z. Mena',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Felipe Ángeles',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe Victoria',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hermenegildo Galeana',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huaquechula',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huatlatlauca',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huauchinango',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetlán el Chico',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huejotzingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueyapan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueytamalco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueytlalpan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huitzilan de Serdán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huitziltepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlequizayan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixcamilpa de Guerrero',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixcaquixtla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtacamaxtitlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Izúcar de Matamoros',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalpan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jolalpan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jonotla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jopala',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juan C. Bonilla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juan Galindo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juan N. Méndez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lafragua',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Libres',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Magdalena Tlatlauquitepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazapiltepec de Juárez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mixtla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Molcaxac',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cañada Morelos',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Naupan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nauzontla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nealtican',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nicolás Bravo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nopalucan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocotepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocoyucan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Olintla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oriental',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pahuatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Palmar de Bravo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pantepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Petlalcingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Piaxtla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puebla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quecholac',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quimixtlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rafael Lara Grajales',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Reyes de Juárez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Cholula',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio Cañada',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Diego la Mesa Tochimiltzingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe Teotlalcingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe Tepatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Gabriel Chilac',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Gregorio Atzompa',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Tecuanipan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Xayacatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Chiapa',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Miahuatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Atenco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Atzompa',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Texmelucan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Totoltepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Matías Tlalancaleca',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Ixitlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Miguel Xoxtla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás Buenos Aires',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás de los Ranchos',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo Anicano',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Cholula',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro Yeloixtlahuaca',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Salvador el Seco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Salvador el Verde',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Salvador Huixcolotla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Sebastián Tlacotepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Tlaltempan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Inés Ahuatempan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Isabel Cholula',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Miahuatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetlán el Grande',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Tomás Hueyotlipan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soltepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecali de Herrera',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecamachalco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecomatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tehuacán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tehuitzingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenampulco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teopantlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teotlalco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepanco de López',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepango de Rodríguez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepatlaxco de Hidalgo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeaca',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepemaxalco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeojuma',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetzintla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepexco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepexi de Rodríguez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeyahualco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeyahualco de Cuauhtémoc	',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetela de Ocampo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teteles de Ávila Castillo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teziutlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tianguismanalco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tilapa',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacotepec de Benito Juárez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacuilotepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlachichuca',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlahuapan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaltenango',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlanepantla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaola',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlapacoya',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlapanalá',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlatlauquitepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaxco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tochimilco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tochtepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totoltepec de Guerrero',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tulcingo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuzamapan de Galeana',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tzicatlacoyan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Venustiano Carranza',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vicente Guerrero',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xayacatlán de Bravo',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xicotepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xicotlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xiutetelco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochiapulco',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochiltepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochitlán de Vicente Suárez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xochitlán Todos Santos',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yaonáhuac',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yehualtepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacapala',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacapoaxtla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacatlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zapotitlán de Méndez',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zaragoza',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zautla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zihuateutla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zinacatepec',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zongozotla',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zoquiapan',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zoquitlán',
        //     'state_id' => 21
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amealco de Bonfil',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pinal de Amoles',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arroyo Seco',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cadereyta de Montes',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Colón',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Corregidora',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ezequiel Montes',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huimilpan',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalpan de Serra',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Landa de Matamoros',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Marqués',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pedro Escobedo',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Peñamiller',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Querétaro',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Joaquín',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan del Río',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tequisquiapan',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tolimán',
        //     'state_id' => 22
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Othón P. Blanco',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bacalar',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cozumel',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Felipe Carrillo Puerto',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Isla Mujeres',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'José María Morelos',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lázaro Cárdenas',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puerto Morelos',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Solidaridad',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tulum',
        //     'state_id' => 23
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis Potosí',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahualulco',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alaquines',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aquismón',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Armadillo de los Infante',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Axtla de Terrazas',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cárdenas',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Catorce',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cedral',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cerritos',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cerro de San Pedro',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Charcas',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciudad del Maíz',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciudad Fernández',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciudad Valles',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coxcatlán',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ébano',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Naranjo',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalcázar',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huehuetlán',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lagunillas',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matehuala',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matlapa',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mexquitic de Carmona',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Moctezuma',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rayón',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rioverde',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salinas',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Antonio',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ciro de Acosta',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Martín Chalchicuautla',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás Tolentino',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Vicente Tancuayalab',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María del Río',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santo Domingo',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soledad de Graciano Sánchez',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamasopo',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamazunchale',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tampacán',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tampamolón Corona',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamuín',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tancanhuitz de Santos',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tanlajás',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tanquián de Escobedo',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tierra Nueva',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vanegas',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Venado',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Arista',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Arriaga',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Guadalupe',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de la Paz',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Ramos',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Reyes',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Hidalgo',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Juárez',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xilitla',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zaragoza',
        //     'state_id' => 24
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Culiacán',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ahome',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Angostura',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Badiraguato',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Concordia',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosalá',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Choix',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Fuerte',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Rosario',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Elota',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Escuinapa',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guasave',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazatlán',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mocorito',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Navolato',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Salvador Alvarado',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ignacio',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sinaloa',
        //     'state_id' => 25
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hermosillo',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aconchi',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Agua Prieta',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Álamos',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Altar',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arivechi',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Arizpe',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atil',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bacadéhuachi',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bacanora',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bacerac',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bacoachi',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bácum',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Banámichi',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Baviácora',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bavispe',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benjamín Hill',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Caborca',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cajeme',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cananea',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Carbó',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cucurpe',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cumpas',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Divisaderos',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Empalme',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Etchojoa',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Fronteras',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Plutarco Elías Calles',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Granados',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guaymas',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huachinera',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huásabas',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huatabampo',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huépac',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Imuris',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Colorada',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazatán',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Moctezuma',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Naco',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nácori Chico',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nacozari de García',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Navojoa',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nogales',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Onavas',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Opodepe',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oquitoa',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pitiquito',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puerto Peñasco',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quiriego',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rayón',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rosario',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sahuaripa',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe de Jesús',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Ignacio Río Muerto',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Javier',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis Río Colorado',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pedro de la Cueva',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sáric',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soyopa',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Suaqui Grande',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepache',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Trincheras',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tubutama',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ures',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Hidalgo',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Pesqueira',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yécora',
        //     'state_id' => 26
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Centro',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Balancán',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cárdenas',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Centla',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comalcalco',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cunduacán',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Emiliano Zapata',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huimanguillo',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalapa',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalpa de Méndez',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jonuta',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Macuspana',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nacajuca',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Paraíso',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tacotalpa',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teapa',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenosique',
        //     'state_id' => 27
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Victoria',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Abasolo',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aldama',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Altamira',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Antiguo Morelos',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Burgos',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bustamante',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Camargo',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Casas',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ciudad Madero',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cruillas',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Mante',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gómez Farías',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'González',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Güémez',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guerrero',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gustavo Díaz Ordaz',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgo',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jaumave',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiménez',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Llera',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mainero',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Matamoros',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Méndez',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mier',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miguel Alemán',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miquihuana',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Laredo',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nuevo Morelos',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ocampo',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Padilla',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Palmillas',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Reynosa',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Río Bravo',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Carlos',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Fernando',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Nicolás',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soto la Marina',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tampico',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tula',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valle Hermoso',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villagrán',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xicoténcatl',
        //     'state_id' => 28
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaxcala',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acuamanala de Miguel Hidalgo',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amaxac de Guerrero',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apetatitlán de Antonio Carvajal',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apizaco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlangatepec',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atltzayanca',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calpulalpan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiautempan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Contla de Juan Cuamatzi',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuapiaxtla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuaxomulco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Carmen Tequexquitla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Emiliano Zapata',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Españita',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huamantla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueyotlipan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtacuixtla de Mariano Matamoros',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtenco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Magdalena Tlaltelulco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lázaro Cárdenas',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazatecochco de José María Morelos',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Muñoz de Domingo Arenas',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nanacamilpa de Mariano Arista',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nativitas',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Panotla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Papalotla de Xicohténcatl',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Cosme Xaloztoc',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Damián Texoloc',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Francisco Tetlanohcan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Jerónimo Zacualpan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San José Teacalco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Huactzinco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lorenzo Axocomanitla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Lucas Tecopilco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Luis Teolocholco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Pablo del Monte',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sanctórum de Lázaro Cárdenas',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Ana Nopalucan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Apolonia Teacalco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Catarina Ayometla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Quilehtla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Cruz Tlaxcala',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Isabel Xiloxoxtla',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenancingo',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetitla de Lardizábal',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepeyanco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Terrenate',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetla de la Solidaridad',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetlatlahuca',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaxco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tocatlán',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totolac',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tzompantepec',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xaltocan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xicohtzinco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yauhquemehcan',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacatelco',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zitlaltepec de Trinidad Sánchez Santos',
        //     'state_id' => 29
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xalapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acajete',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acayucan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Actopan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acula',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acultzingo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Agua Dulce',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Álamo Temapache',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alpatláhuac',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alto Lucero de Gutiérrez Barrios',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Altotonga',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Alvarado',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Amatlán de los Reyes',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ángel R. Cabada',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apazapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Aquila',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Astacinga',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atlahuilco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atoyac',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atzacan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atzalan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ayahualulco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Banderilla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Boca del Río',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calcahualco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Camarón de Tejeda',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Camerino Z. Mendoza',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Carlos A. Carrillo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Carrillo Puerto',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Castillo de Teayo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Catemaco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cazones de Herrera',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cerro Azul',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chacaltianguis',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chalma',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiconamel',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chiconquiaco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chicontepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chinameca',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chinampa de Gorostiza',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chocamán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chontla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chumatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Citlaltépetl',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coacoatzintla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coahuitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatzacoalcos',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coatzintla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coetzala',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Colipa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Comapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Córdoba',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosamaloapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosautlán de Carvajal',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coscomatepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cosoleacaque',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cotaxtla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coxquihui',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Coyutla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuichapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuitláhuac',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Higo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Emiliano Zapata',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Espinal',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Filomeno Mata',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Fortín',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Gutiérrez Zamora',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hidalgotitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huatusco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huayacocotla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hueyapan de Ocampo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huiloapan de Cuauhtémoc',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ignacio de la Llave',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ilamatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Isla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixcatepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixhuacán de los Reyes',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixhuatlancillo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixhuatlán del Café',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixhuatlán del Sureste',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixhuatlán de Madero',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixmatlahuacan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixtaczoquitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalacingo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalcolmulco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jáltipan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jamapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jesús Carranza',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jilotepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'José Azueta',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juan Rodríguez Clara',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juchique de Ferrer',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Antigua',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'La Perla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Landero y Coss',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Las Choapas',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Las Minas',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Las Vigas de Ramírez',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Lerdo de Tejada',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Los Reyes',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Magdalena',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maltrata',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Manlio Fabio Altamirano',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mariano Escobedo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Martínez de la Torre',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mecatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mecayapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Medellín',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miahuatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Minatitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Misantla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mixtla de Altamirano',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Moloacán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nanchital de Lázaro Cárdenas',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Naolinco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Naranjal',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Naranjos Amatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nautla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nogales',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oluta',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Omealca',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Orizaba',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Otatitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oteapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ozuluama',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pajapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pánuco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Papantla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Paso de Ovejas',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Paso del Macho',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Perote',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Platón Sánchez',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Playa Vicente',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Poza Rica de Hidalgo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pueblo Viejo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Puente Nacional',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rafael Delgado',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Rafael Lucio',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Río Blanco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Saltabarranca',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Tenejapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Andrés Tuxtla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Juan Evangelista',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Rafael',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Sochiapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santiago Tuxtla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sayula de Alemán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sochiapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soconusco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soledad Atzompa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soledad de Doblado',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Soteapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamalín',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tamiahua',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tampico Alto',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tancoco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tantima',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tantoyuca',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tatahuicapan de Juárez',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tatatila',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecolutla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tehuipango',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tempoal',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenampa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tenochtitlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teocelo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepatlaxco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetzintla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tequila',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Texcatepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Texhuacán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Texistepec',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tezonapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tierra Blanca',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tihuatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlachichilco',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacojalpan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacolulan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacotalpan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlacotepec de Mejía',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalixcoyan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlalnelhuayocan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaltetela',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlapacoyan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaquilpan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlilapan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tomatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tonayán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Totutla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tres Valles',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxpan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tuxtilla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Úrsulo Galván',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Uxpanapa',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vega de Alatorre',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Veracruz',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Aldama',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xico',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xoxocotla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yanga',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yecuatla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacualpan',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zaragoza',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zentla',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zongolica',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zontecomatlán',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zozocolco de Hidalgo',
        //     'state_id' => 30
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mérida',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Abalá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Acanceh',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Akil',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Baca',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Bokobá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Buctzotz',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cacalchén',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calotmul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cansahcab',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cantamayec',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Celestún',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cenotillo',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chacsinkín',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chankom',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chapab',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chemax',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chichimilá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chicxulub Pueblo',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chikindzonot',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chocholá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chumayel',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Conkal',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuncunul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuzamá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzan',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzemul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzidzantún',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzilam de Bravo',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzilam González',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzitás',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Dzoncauich',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Espita',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Halachó',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hocabá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hoctún',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Homún',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huhí',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Hunucmá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ixil',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Izamal',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Kanasín',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Kantunil',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Kaua',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Kinchil',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Kopomá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mama',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maní',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Maxcanú',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mayapán',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mocochá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Motul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Muna',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Muxupip',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Opichén',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Oxkutzcab',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Panabá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Peto',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Progreso',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Quintana Roo',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Río Lagartos',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sacalum',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Samahil',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sanahcat',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'San Felipe',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa Elena',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Seyé',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sinanché',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sotuta',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sucilá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sudzal',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Suma',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tahdziú',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tahmek',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teabo',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tecoh',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tekal de Venegas',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tekantó',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tekax',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tekit',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tekom',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Telchac Pueblo',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Telchac Puerto',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temax',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Temozón',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepakán',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tetiz',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teya',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ticul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Timucuy',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tinúm',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tixcacalcupul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tixkokob',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tixméhuac',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tixpéual',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tizimín',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tunkás',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tzucacab',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Uayma',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ucú',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Umán',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valladolid',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Xocchel',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yaxcabá',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yaxkukul',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Yobaín',
        //     'state_id' => 31
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Zacatecas',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apozol',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Apulco',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Atolinga',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Benito Juárez',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Calera',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cañitas de Felipe Pescador',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Chalchihuites',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Concepción del Oro',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Cuauhtémoc',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Plateado de Joaquín Amaro',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'El Salvador',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Fresnillo',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Genaro Codina',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Enrique Estrada',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Francisco R. Murguía',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'General Pánfilo Natera',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Guadalupe',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Huanusco',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jalpa',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jerez',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Jiménez del Teul',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juan Aldama',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Juchipila',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Loreto',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Luis Moya',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mazapil',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Melchor Ocampo',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Mezquital del Oro',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Miguel Auza',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Momax',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Monte Escobedo',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Morelos',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Moyahua de Estrada',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Nochistlán de Mejía',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Noria de Ángeles',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Ojocaliente',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pánuco',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Pinos',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Río Grande',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Saín Alto',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Santa María de la Paz',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Sombrerete',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Susticacán',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tabasco',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepechitlán',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tepetongo',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Teúl de González Ortega',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Tlaltenango de Sánchez Román',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Trancoso',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Trinidad García de la Cadena',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Valparaíso',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Vetagrande',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa de Cos',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa García',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa González Ortega',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villa Hidalgo',
        //     'state_id' => 32
        // ]);

        // DB::table('cities')->insert([
        //     'nombre' => 'Villanueva',
        //     'state_id' => 32
        // ]);
    }
}
