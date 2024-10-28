<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailCheckoutController extends Controller
{
    public function index()
    {
        return view('detailcheckout');
    }
}
