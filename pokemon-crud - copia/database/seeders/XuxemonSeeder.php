<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Xuxemon;

class xuxemonSeeder extends Seeder
{
    public function run()
    {
        $xuxemonNames = ['Apleki', 'Avecrem', 'Bambino', 'Beeboo', 'Boo-hoot', 'Cabrales', 'Catua', 'Catyuska', 'Chapapá', 'Chopper', 'Cuellilargui', 'Deskangoo', 'Doflamingo', 'Dolly', 'Elconchudo', 'Eldientes', 'Elgominas', 'Flipper', 'Floppi', 'Horseluis', 'Krokolisko', 'Kurama', 'Ladybug', 'Lengualargui', 'Medusation', 'Meekmeek', 'Megalo', 'Mocha', 'Murcimurci', 'Nemo', 'Oinkcelot', 'Oreo', 'Otto', 'Pinchimott', 'Pollis', 'Posón', 'Quakko', 'Rajoy', 'Rawlion', 'Rexxo', 'Ron', 'Sesssi', 'Shelly', 'Sirucco', 'Torcas', 'Trompeta', 'Trompi', 'Tux'];
        $types = ['Agua', 'Tierra', 'Aire'];
    
        foreach ($xuxemonNames as $name) {
            Xuxemon::create([
                'nombre' => $name,
                'tipo' => $types[array_rand($types)],
                'archivo' => $name.'.png'
            ]);
        }
    }
}
