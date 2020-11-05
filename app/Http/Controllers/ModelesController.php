<?php
namespace App\Http\Controllers;
use App\Modele;
use App\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModelesController extends Controller{
  function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
{
    $modeles= DB::table('modeles')
           ->join('marques', 'modeles.marque_id', 'marques.id')
           ->select('marques.*','modeles.*')
           ->get();

    $marques = Marque::all();

  return view('modeles/index',[

    'modeles'=> $modeles,
    'marques'=>$marques
  ]);

}
public function create()
{

     $marques = Marque::all();
     return view('modeles/create',[

        'marques'=>$marques
        ]);
}


  public function store(Request $request)
  {

     //validation
     $request->validate([
         'marque_id' =>'required',
         'nom_modele' =>'required',

            ]);

     $marques = Marque::all();
     $Modele= new Modele();
     $Modele->marque_id= $request->marque_id;
     $Modele->nom_modele= $request->nom_modele;
     $Modele->save();
     return redirect('modeles');
}
  //dependance injection
  public function edit(Modele $Modele)
  {
      $marques= Marque::all();
      $Modele=Modele::find($Modele->id);
      return view('modeles/edit',[
        'Modele' => $Modele,
        'Marque' => $Marque
      ]);
  }
  public function show()
  {
    $modeles= DB::table('modeles')
           ->join('marques', 'modeles.marque_id', 'marques.id')
           ->select('marques.*','modeles.*')
           ->get();

    $marques = Marque::all();
    return view('modeles/show',[

      'modeles'=> $modeles,
      'marques'=>$marques
    ]);
  }


  public function update(Request $request,Modele $Modele)
  {
    $request->validate([
       'marque_id' =>'required',
        'nom_modele'=>'required',

   ]);
      $Modele->marque_id=$request->marque_id;
      $Modele->nom_modele=$request->nom_modele;
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
