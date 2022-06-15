<?php

namespace App\Exports;

use App\Models\Usulan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class UsulanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $type = DB::table('usulan')->select('id','hunian_id', 'sumber_dana_bantuan_id'
        , 'status', 'pesan', 'rencana_tahun_penanganan', 'nominal',
        'foto_rumah', 'foto_mck', 'verifikator_id', 'pengusul_id', )->get();
        return $type ;
    }

    public function headings(): array
    {
        return [
            'id',
            'Hunian id',
            'Sumber Dana Bantuan',
            'Status',
            'Pesan',
            'Rencana Tahun Penanganan',
            'Nominal',
            'Foto Rumah',
            'Foto MCK',
            'Verifikator ID',
            'Pengusul ID'
        ];
    }
}
