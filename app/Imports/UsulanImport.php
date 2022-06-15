<?php

namespace App\Imports;

use App\Models\Usulan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsulanImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    /**
     * @return int
     */

    public function startRow(): int
    {
        return 2;
    }
    
    public function model(array $row)
    {
        return new Usulan([
        'hunian_id' => $row[1],
        'sumber_dana_bantuan_id' => $row[2],
        'status' => $row[3],
        'pesan' => $row[4],
        'rencana_tahun_penanganan' => $row[5],
        'nominal' => $row[6],
        'foto_rumah' => $row[7],
        'foto_mck' => $row[8],
        'verifikator_id' => $row[9],
        'pengusul_id' => $row[10]
        ]);
    }
}
