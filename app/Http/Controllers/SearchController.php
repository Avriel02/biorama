<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        // Logika pencarian berdasarkan $searchTerm
        // Misalnya, mengembalikan hasil pencarian ke tampilan
        return view('beranda', ['searchResults' => $searchTerm]);
    }
}
