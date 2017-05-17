<?php

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gulden Draak',
            'description' => 'The legend says the gilded dragon first featured on the prow of the ship with which the Norwegian king Sigrid Magnusson left on a crusade in 1111. He offered the statue to the emperor of Constantinople (the current Istanbul) to put it on the cupola of the Aya Sophia. Some hundred years later, the Flemish count Baldwin IX had the showpiece transported to our regions. ',
            'color' => 'amber',
            'percentage' => '10,5',
            'brewery_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Gulden Draak 9000 Quadrupel',
            'description' => 'The unsurpassed Gulden Draak as dark tripel of 10,5% alcohol gets, after 25 years of growing success, quite an addition, the Gulden Draak 9000 Quadruple.',
            'color' => 'quadrupel',
            'percentage' => '12',
            'brewery_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Augustijn blond',
            'description' => 'In 1295 the Augustinian friars started to brew Augustijn in their Ghent monastery. In the Middle Ages many monks and priests brewed and sold their own beer. Often, the water was contaminated and that’s why it was safer to drink beer, since it was boiled during the brewing process.',
            'color' => 'blond',
            'percentage' => '7,5',
            'brewery_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Augustijn bruin',
            'description' => 'The Augustijn Dark is the logical addition to the existing beers Augustijn Blonde and Augustijn Grand Cru and is a true beer of 8% alc. that appeals both the occasional as the seasoned beer lover!',
            'color' => 'dubbel',
            'percentage' => '8',
            'brewery_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Westmalle dubbel',
            'description' => 'Het donker, roodbruine trappistenbier van Westmalle, de Dubbel, bevat dankzij nagisting op fles (7%) een rijke en complexe smaak. Die wordt gekenmerkt door toetsen van karamel, mout en fruitige esters die doen denken aan rijpe banaan. ',
            'color' => 'dubbel',
            'percentage' => '8',
            'brewery_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Westmalle tripel',
            'description' => 'De Tripel van Westmalle is een helder, goudgeel trappistenbier van 9,5°. Het langzame brouwproces en de nagisting op fles leveren een complex bier op, met een fruitige geur van rijpe banaan en een mooie, genuanceerde hopneus.',
            'color' => 'tripel',
            'percentage' => '9.5',
            'brewery_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Affligem blond',
            'description' => 'Een helder, goudkleurig bier wordt bekroond met een stevige schuimkraag. Na de zachte smaak van de eerste slok leidt de ronde smaak van tropisch fruit tot een verfrissende afdronk.',
            'color' => 'blond',
            'percentage' => '6.8',
            'brewery_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Affligem dubbel',
            'description' => 'Een complexe combinatie van kruidnagel en anijs wordt bekroond met een mooie schuimkraag.',
            'color' => 'dubbel',
            'percentage' => '6.8',
            'brewery_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Affligem tripel',
            'description' => 'Dit heldere, amberkleurige biertje heeft een aardachtige, rijke smaak en een romige schuimkraag. Als je de bokaal optilt, komen de aroma\'s van versgebakken brood, banaan en rijp fruit je tegemoet.',
            'color' => 'tripel',
            'percentage' => '9',
            'brewery_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Delirium',
            'description' => 'pale blond, the fine and regular effervesce ensures a fine and stable head. ',
            'color' => 'tripel',
            'percentage' => '8.5',
            'brewery_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'La Guillotine',
            'description' => 'Golden blond, multigrain beer with a very persistent, lacing head. ',
            'color' => 'blond',
            'percentage' => '8.5',
            'brewery_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'Maredsous 7',
            'description' => 'geraffineerd bloemig aroma',
            'color' => 'blond',
            'percentage' => '7',
            'brewery_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Maredsous 8',
            'description' => 'geraffineerd bloemig aroma',
            'color' => 'bruin',
            'percentage' => '8',
            'brewery_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Maredsous tripel',
            'description' => 'geraffineerd bloemig aroma',
            'color' => 'tripel',
            'percentage' => '10',
            'brewery_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Chimay Goud',
            'description' => 'Ons recept is onveranderd ten opzichte van het begin en we zijn transparant over de ingrediënten in onze bieren. Water, gerstemout, suiker, hop, gist, bittere sinaasappelschil en koriander. De suiker is nodig voor de creatie van kooldioxide door de tweede gisting. Chimay Gold is een bovengistend bier fles die gist bevat.',
            'color' => 'blond',
            'percentage' => '4.8',
            'brewery_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Chimay Rood',
            'description' => 'De Rode Chimay is het oudste bier van Chimay. Het heeft een mooie koperkleur en een fruitige en zachte smaak, die dit bruin bier bijzonder lekker maken. De smaak van het bier is zijdeachtig met een lichte toets bitterheid.',
            'color' => 'Amber',
            'percentage' => '7',
            'brewery_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Chimay Tripel',
            'description' => 'De Chimay Tripel (of Cinq Cents in een fles van 75 cl) heeft een goudgele kleur en koppelt zachtheid aan bitterheid in een zeldzaam evenwicht.',
            'color' => 'tripel',
            'percentage' => '8',
            'brewery_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Chimay Blauw',
            'description' => 'De Blauwe Chimay is een donker bier met een krachtig aroma en een complexe smaak die met de jaren beter wordt. Het bier heeft een geur van fijne kruiden. De afdronk is relatief droog met een toets van karamel.',
            'color' => 'dubbel',
            'percentage' => '9',
            'brewery_id' => 6
        ]);

    }
}
