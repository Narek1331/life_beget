<?php

namespace App\Imports;

// use App\Models\Product;
// use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToArray, WithHeadingRow
{


    /**
     * @param array $array
     *
     */
    public function array(array $array)
    {
        return $array;
    }
}