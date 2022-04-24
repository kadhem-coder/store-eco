<?php

namespace App\Http\Controllers\AdminMerchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    // الصفحة الرئيسية
    public function index ()
    {
        return view('admin-merchant.index');
    }
}
