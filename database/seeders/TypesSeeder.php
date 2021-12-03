<?php

namespace Database\Seeders;
use App\Models\Types;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeArr = ['Fiction', 'Non-Fiction', 'Sci-Fi', 'Biography', 'autobiography'];
        for ($i = 0; $i < count($typeArr); $i++) {
            $type_name = new Types;
            $type_name->type = $typeArr[$i];
            $type_name->save();
    }
}
}
