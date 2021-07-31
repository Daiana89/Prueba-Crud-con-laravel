<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facades\PDF;
use Database\Seeders\UsersTableSeeder;

//use App\Exports\UsersExport;<---borar

class PDFController extends Controller

{
/*    public function PDF(){
        
        $pdf = \PDF::loadView('pdf\export');
        return $pdf->stream('export.pdf');
    }
*/  
    public function exportPDF(){
        $users = User::all();
        return view( 'pdf\export', compact('users'));
}

    public function PDF(){
        $users = User::all();
        $pdf = \PDF::loadView('pdf\export',compact('users'));
        return $pdf->stream('export.pdf');
}
   
}
