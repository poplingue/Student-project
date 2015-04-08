<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {
    
    public function __construct()
    {
        //verrou de sécuristion du dashboard
        $this->middleware('auth');
    }
    
    public function getIndex()
    {
        return view ('dashboard.index');
    }

}
