<?php

namespace App\Exports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

class siswaExport implements ShouldAutoSize, WithHeadings, WithEvents,FromQuery,WithColumnFormatting
{
    use Exportable;
    
    private $fileName = 'siswa.xlsx';

    public function query()
    {
       return siswa::query();
    }
    public function headings(): array
    {
        return [
            ['No', 'Nama Siswa','NIS', 'Tanggal Lahir','Tempat Lahir', 'Jenis Kelamin','Alamat Siswa','Nama Orang Tua', 'Alamat Orang Tua','Pekerjaan Orang Tua','Asal Sekolah']
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:K1')->applyFromArray ([
                    'font' =>[
                        'bold' => true
                    ]
                ]);
            }
        ];
    }
    
    public function columnFormats(): array
    {
        return [
            'C' => NumberFormat::FORMAT_NUMBER
        ];
    }

}