<?php
namespace App\Http\Controllers;
use App\Marque;
use Illuminate\Http\Request;

class MarquesController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $marques = Marque::all();
        return view('marques/index',[
            'marques' => $marques
        ]);
    }



    public function create(){
        return view('marques/create');
    }

  public function store(Request $request)
  {

     //validation
     $request->validate([
         'nom_marque' =>'required',
         'temp_actuel' =>'required'
            ]);

     $Marque= new Marque();
     $Marque->nom_marque= $request->nom_marque;
     $Marque->temp_actuel= $request->temp_actuel;
     $Marque->save();
     return redirect('marques');
}
  //dependance injection
  public function edit(Marque $Marque)
  {
      $Marque=Marque::find($Marque->id);
      return view('marques/edit',[
        'Marque' => $Marque]);
  }
  public function show()
  {
      $marques = Marque::all();
    return view('marques/show',[
        'marques' => $marques
    ]);
  }


  public function update(Request $request,Marque $Marque)
  {
      $Marque->nom_marque=$request->nom_marque;
      $Marque->temp_actuel=$request->temp_actuel;
      $Marque->save();
      return redirect('marques');
  }

  public function destroy(Marque $Marque)
  {
      $Marque=Marque::find($Marque->id);
      $Marque->delete();
      return redirect('marques');
  }


}
