<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSupletivo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

    public function index()
    {
        $produto=$this->objUser->all();
        $show = Gate::allows('ver-form'); // envia se é adm para a view
        return view('home', compact('produto','show'));

    }

public function searchaluno(Request $request)
{      
    $search_name = request('search_name');
    $search_data = request ('search_data');
    $search = null;
   if (!empty($search_name)){
        $search = ModelSupletivo::   where('sup_nome', 'like', "%$search_name%")
        ->  Where('sup_data_nasc', 'like', "%$search_data%")->GET();
        // dd($search_data);
   }   
        return view('searchaluno', compact('search'));
}

public function searchamae(Request $request)
{      
    $search_name = request('search_name');
    $search = null;
    if (!empty($search_name)){
        $search = ModelSupletivo::where('sup_nome_mae', 'like', "%$search_name%")->GET();
        //dd($search_data);
   }   
        return view('searchmae', compact('search'));
}



/* public function searchresulaluno(Request $request)
{ 
    $search_name = request('search_name');
    $search_data = request ('search_data');
    

        $search = 0;
        $search = ModelSupletivo::   where('sup_nome', 'like', "%$search_name%")
                             Where('sup_data_nasc', 'like', "%$search_data%")->GET(); 
                                     
    return view('searchaluno'); 
} */






 
/* public function searchresulmae(Request $request)
{ 
    $search_name = request('search_name');
    
    $search = ModelSupletivo::where('sup_nome_mae', 'like', "%$search_name%")->GET();        
    
    return view('searchmae', compact('search'));
} */


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

    // public function logout(){
    //     Auth::logout();
    //     return redirect()->route('register');
  
    //   }

}