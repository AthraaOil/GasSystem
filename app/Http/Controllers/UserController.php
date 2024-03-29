<?php

namespace App\Http\Controllers;
use config\barcode;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
//        $user1 = DNS2D::getBarcodeHTML('4445645656', 'QRCODE');
        return view('users.index' , compact('users'));
    }

    public function create () {

    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
