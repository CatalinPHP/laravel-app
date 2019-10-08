<?php

namespace App\Imports;

use App\Dictionary;
use Maatwebsite\Excel\Concerns\ToModel;

class DictionaryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dictionary([
            'word' => $row[0],
            "translated_word" => $row[1],
        ]);
    }
}
