<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DataTables as DataTables;
// use DataTables;
use Excel;
// use Maatwebsite\Excel\Excel;
use App\DataTables\FilterUserExport;

class YajraDatatableController extends Controller
{
    public function requestAjax(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            // return Datatables::of($data)->make(true);
            // return DataTables::of($model)->toJson();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->addColumn('checkbox', function ($data) {
                        return $data->id;
                    })
                    ->rawColumns(['action', 'checkbox'])
                    ->make(true);
        }
        return view('yajrabox');
    }

    public function filteredData()
    {
        $users = app(User::class)->newQuery();
        if ( request()->has('search') && !empty(request()->get('search')) ) {
            $search = request()->query('search');
            $users->where(function ($query) use($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }
        $data = $users->get();
        return Excel::download(new FilterUserExport($data), 'filtered-data.xlsx');
    }
}
