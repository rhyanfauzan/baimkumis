<?php

namespace App\Repository;

use App\Models\Bantuan;
use App\Models\Perekaman;
use App\Models\SumberDanaBantuan;

class PerekamanRepository
{
    public function statistik5Tahun()
    {
        $sumberDanaBantuans  = SumberDanaBantuan::all();
        $result = [
            'values' => [],
            'labels' => [],
            'colors' => []
        ];
        foreach ($sumberDanaBantuans as $sumberDanaBantuan)
        {
            $result['labels'][] = $sumberDanaBantuan->nama;
            $result['values'][] = Perekaman::where('tahun', '>=', date('Y') - 5)
                ->whereHas('usulan', function ($query) use ($sumberDanaBantuan) {
                    $query->where('sumber_dana_bantuan_id', $sumberDanaBantuan->id);
                })->count();
            $color = dechex(rand(0x000000, 0xFFFFFF));
            $result['colors'][] = "#$color";
        }

        return $result;
    }
}
