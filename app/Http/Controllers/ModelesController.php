<?php
namespace App\Http\Controllers;
use App\Modele;
use Illuminate\Http\Request;

class ModelesController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $modeles = Modele::all();
        return view('modeles/index',[
            'modeles' => $modeles
        ]);
    }



    public function create(){
        return view('modeles/create');
    }

  public function store(Request $request)
  {

     //validation
     $request->validate([
         'nom_modele' =>'required',
         'temp_actuel' =>'required'
            ]);

     $Modele= new Modele();
     $Modele->nom_modele= $request->nom_modele;
     $Modele->temp_actuel= $request->temp_actuel;
     $Modele->save();
     return redirect('modeles');
}
  //dependance injection
  public function edit(Modele $Modele)
  {
      $Modele=Modele::find($Modele->id);
      return view('modeles/edit',[
        'Modele' => $Modele]);
  }
  public function show()
  {
      $modeles = Modele::all();
    return view('modeles/show',[
        'modeles' => $modeles
    ]);
  }


  public function update(Request $request,Modele $Modele)
  {
      $Modele->nom_modele=$request->nom_modele;
      $Modele->temp_actuel=$request->temp_actuel;
      $Modele->save();
      return redirect('modeles');
  }

  public function destroy(Modele $Modele)
  {
      $Modele=Modele::find($Modele->id);
      $Modele->delete();
      return redirect('modeles');
  }


}
