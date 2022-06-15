<?php

namespace App\Exports;

use App\Models\Hunian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use DB;

class HunianExport extends DefaultValueBinder implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithCustomValueBinder, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hunian::with('status_kepemilikan','desa.kecamatan','bentuk_bangunan','pendapatan_keluarga')->get();
    }

    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }

    public function columnFormats(): array
    {
        return [
            'D' => NumberFormat::FORMAT_TEXT,
            'E' => NumberFormat::FORMAT_TEXT,
            'G' => NumberFormat::FORMAT_TEXT,
        ];
    }

    public function map($hunian): array
    {
        return [
            $hunian->id,
            $hunian->desa->kecamatan->nama,
            $hunian->desa->nama,
            $hunian->no_kk_pemilik,
            $hunian->nik_pemilik,
            $hunian->nama_pemilik,
            $hunian->tanggal_lahir_pemilik,
            $hunian->no_telepon_pemilik,
            $hunian->email_pemilik,
            $hunian->jumlah_keluarga,
            $hunian->alamat_detail,
            $hunian->status_kepemilikan->nama,
            $hunian->bentuk_bangunan->nama,
            $hunian->pendapatan_keluarga->nama,
            $hunian->luas_tanah,
            $hunian->luas_bangunan,
            $hunian->layak_huni,
            $hunian->tersedia_listrik,
            $hunian->septic_tank
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Kecamatan(excel kecamatan dan desa)',
            'Desa(excel kecamatan dan desa)',
            'NKK(Format Text)',
            'NIK(Format Text)',
            'Nama Lengkap',
            'Tanggal Lahir(Format Text)',
            'No Telepon',
            'Email',
            'Jumlah Keluarga',
            'Alamat Lengkap',
            'Status Kepemilikan(SHM, Hak Guna,Akta Jual Beli)',
            'Bentuk Bangunan(Apartemen, Deret, Kopel, Rusunawa, Tunggal)',
            'Pendapatan Keluarga(0-1 juta, 1-2,5 juta, >2,5 juta)',
            'Luas Tanah',
            'Luas Bangunan',
            'Layak Huni',
            'Tersedia Listrik',
            'Septic Tank'
        ];
    }
}
