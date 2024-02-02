<?php

namespace App\Http\Controllers;

use PDF;
// use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class UserController extends Controller
{    
    public function index(Request $request) //dompdf
    {
        $users = User::latest()->paginate(5);
        $data = [
            'users' => $users
        ]; 
        if($request->has('download'))
        {
            $pdf = PDF::loadView('dompdf.index', $data);
            return $pdf->download('itsolutionstuff.pdf');
        }
        return view('dompdf.index', compact('users'));
    }
    
    public function snappy(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');
    }
    
    public function scout(Request $request)
    {
        if($request->filled('search')){
            // dd($request->all());
            $users = User::search($request->search)->get();
        }else{
            $users = User::get();
        }
          
        return view('scout.index', compact('users'));
    }
}