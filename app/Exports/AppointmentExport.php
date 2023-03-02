<?php

namespace App\Exports;

use App\Models\Appointment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class AppointmentExport implements FromCollection, WithMapping,WithHeadings,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Appointment::when(request()->search,function ($q){
            $q->where(function ($q){
                $q->where('email','like' , '%'.request()->search.'%')
                    ->orWhere('name','like' , '%'.request()->search.'%')
                    ->orWhere('phone','like' , '%'.request()->search.'%')
                    ->orWhere('government','like' , '%'.request()->search.'%')
                    ->orWhere('position','like' , '%'.request()->search.'%')
                    ->orWhere('school_name','like' , '%'.request()->search.'%')
                    ->orWhere('how_you_heard_about_us','like' , '%'.request()->search.'%');
            });
        })->when(request()->date,function ($q){
            $q->whereDate('created_at',request()->date);
        })->when(request()->position,function ($q){
            $q->where('position','like' , '%'.request()->position.'%');
        })->when(request()->gov,function ($q){
            $q->where('government',request()->gov);
        })->when(request()->how_you_heard_about_us,function ($q){
            $q->where('how_you_heard_about_us',request()->how_you_heard_about_us);
        })->get();
    }

    public function map($data): array
    {
        return [
            $data->created_at?->format('Y-m-d'),
            $data->name,
            $data->email,
            $data->phone,
            $data->school_name,
//            $data->position,
            $data->government,
            $data->how_you_heard_about_us,
        ];
    }

    public function headings(): array
    {
        return [
            'date',
            'name',
            'email',
            'phone',
            'school name',
//            'position',
            'government',
            'how you heard about us',
        ];
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {

//                $event->sheet->getDelegate()->getRowDimension('1')->setRowHeight(40);
                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(25);
                $event->sheet->getDelegate()->getColumnDimension('c')->setWidth(25);
                $event->sheet->getDelegate()->getColumnDimension('d')->setWidth(20);
                $event->sheet->getDelegate()->getColumnDimension('e')->setWidth(15);
//                $event->sheet->getDelegate()->getColumnDimension('e')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('g')->setWidth(15);
                $event->sheet->getDelegate()->getColumnDimension('h')->setWidth(20);

            },
            BeforeSheet::class => function (BeforeSheet $event) {
                $event->sheet
                    ->getPageSetup()
                    ->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
            }
        ];
    }

}
