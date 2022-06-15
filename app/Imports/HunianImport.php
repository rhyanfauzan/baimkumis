<?php

namespace App\Imports;


use App\Models\Hunian;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class HunianImport implements ToCollection, WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $row = array_values($row->toArray());
            $hasNKK = Hunian::where("no_kk_pemilik", $row[3])->first();
            if($hasNKK) continue;
            $kecamatan = DB::table("kecamatans")->where('nama', 'like', '%' . $row[1] . '%')->first();
            $desa = DB::table("desas")->where('nama', 'like', '%' . $row[2] . '%')->first();
            $status_kepemilikan = DB::table("status_kepemilikans")->where('nama', 'like', '%' . $row[11] . '%')->first();
            $bentuk_bangunan = DB::table('bentuk_bangunans')->where('nama', 'like', '%' . $row[12] . '%')->first();
            $pendapatan_keluarga = DB::table('pendapatan_keluargas')->where('nama', 'like', '%' . $row[13] . '%')->first();
            // print_r($desa);
            // print_r($kecamatan);
            // print_r($status_kepemilikan);
            // print_r($bentuk_bangunan);
            // print_r($pendapatan_keluarga);
            Hunian::create([
                'desa_id' => $desa->id,
                'status_kepemilikan_id' => $status_kepemilikan->id,
                'bentuk_bangunan_id' => $bentuk_bangunan->id,
                'pendapatan_keluarga_id' => $pendapatan_keluarga->id,
                'luas_tanah' => $row[14],
                'luas_bangunan' => $row[15],
                'tersedia_listrik' => $row[17],
                'nama_pemilik' => $row[5],
                'nik_pemilik' => strval($row[4]) ,
                'no_kk_pemilik' => strval($row[3]) ,
                'tanggal_lahir_pemilik' => $row[6],
                'no_telepon_pemilik' => strval($row[7]),
                'email_pemilik' => $row[8],
                'jumlah_keluarga' => $row[9],
                'alamat_detail' => $row[10],
                'septic_tank' => $row[18],
                'luas_bangunan_perkapita' => ((int)$row[15] / (int)$row[9]),
            ]);

        }
    }

    
}
