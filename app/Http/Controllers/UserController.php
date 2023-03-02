<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\AppointmentExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        if (request()->ajax()) {
            $query = Appointment::when(request()->search,function ($q){

                $q->where(function ($q){
                    $q->where('email','like' , '%'.request()->search.'%')
                        ->orWhere('name','like' , '%'.request()->search.'%')
                        ->orWhere('phone','like' , '%'.request()->search.'%')
                        ->orWhere('service','like' , '%'.request()->search.'%')
                        ->orWhere('doctor','like' , '%'.request()->search.'%')
                        ->orWhere('date','like' , '%'.request()->search.'%');
                });

            })->when(request()->date,function ($q){
                $q->whereDate('date',request()->date);
            })->when(request()->email,function ($q){
                $q->where('email','like' , '%'.request()->email.'%');
            })->when(request()->service,function ($q){
                $q->where('service',request()->service);
            })->when(request()->doctor,function ($q){
                $q->where('doctor',request()->doctor);
            })
                ->select('*');

            $table = Datatables::of($query);

            $table->addColumn('actions', function ($row) {
                $link = route('delete-appointment',[$row->id]);
                return '<a href="'.$link.'" class="btn-style-3">
                    <svg width="20" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M216 48H40a8 8 0 0 0 0 16h8v144a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V64h8a8 8 0 0 0 0-16Zm-24 160H64V64h128ZM80 24a8 8 0 0 1 8-8h80a8 8 0 0 1 0 16H88a8 8 0 0 1-8-8Z" />
                    </svg>
                </a>';
            });

            $table->addColumn('created_at', function ($row) {
                return $row->created_at?->format('Y-m-d');
            });

            $table->rawColumns([
                'created_at',
                'actions',
            ]);


            return $table->make(true);
        }

        return view('users');
    }

    public function delete($id){
        Appointment::findOrFail($id)->delete();

        return redirect()->back()->with([
            'success' => 'Deleted Successfully'
        ]);
    }

    public function exportPDF(){
        return Excel::download(new AppointmentExport, 'users.pdf', \Maatwebsite\Excel\Excel::TCPDF);
    }

    public function exportExcel(){
        return Excel::download(new AppointmentExport, 'users.csv');
    }
}
