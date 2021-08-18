<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSupletivo;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    private $objSupletivo;
    private $objUser;
    public function __construct()
    {
        $this->objUser=new User();
        $this->objSupletivo= new ModelSupletivo();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
{      
        return view('home');
}

public function searchaluno(Request $request)
{      
        return view('searchaluno');
}



public function searchresulaluno(Request $request)
{ 
    $search_name = request('search_name');
    
    $search_name = ModelSupletivo::where('sup_nome', 'like', "%$search_name%")->GET();        
    
    return view('search', compact('search_name'));
}

public function searchamae(Request $request)
{      
        return view('searchmae');
}



public function searchresulmae(Request $request)
{ 
    $search_name = request('search_name');
    
    $search_name = ModelSupletivo::where('sup_nome_mae', 'like', "%$search_name%")->GET();        
    
    return view('search', compact('search_name'));
}


/*     public function search(Request $request)
    { 
       $search_name = request('search_name');
       $search_matricula = request('search_matricula');

       if ($search_name) {
        $search_name = ModelSupletivo::where('sup_nome', 'like', "%$search_name%")->get();
       }else {
        $search_matricula = ModelSupletivo::where('sup_num_aluno', "$search_matricula")->get();

    }
            

        return view('search_aluno_resul', compact('search_name'));
    } */



}