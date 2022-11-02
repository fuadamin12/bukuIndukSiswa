<?php

namespace App\Exports;

use App\Models\nilai;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\siswa;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class nilaiExport implements FromCollection,ShouldAutoSize, WithHeadings, WithEvents
{
    use Exportable;

    private $fileName = 'nilai.xlsx';

    public function collection()
    {
        return nilai::all();
    }
    public function headings(): array
    {
            return [
                ['No','Nama Siswa','Kelas','Semester','Mata Pelajaran','Nilai']
            ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:F1')->applyFromArray ([
                    'font' =>[
                        'bold' => true
                    ]
                ]);
            }
        ];
    }
}
