@extends('layouts.layout')
@section('content')

  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Liste des vehicules</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
        <p class="text-muted font-13 m-b-30">

        </p>
        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
          <thead>
        <tr>
          <th>ID</th>
          <th>Marque</th>
          <th>Modele</th>
          <th>Categorie</th>
          <th>Type de moteur</th>
          <th>Boite de vitesse</th>
          <th>Plaque</th>
          <th>Nombre de place</th>
        </tr>
        </thead>


          <tbody>
        @foreach($vehicules as $Vehicule)
        <tr>
          <td>{{$Vehicule->id}}</td>
          <td>{{$Vehicule->nom_marque}}</td>
          <td>{{$Vehicule->nom_modele}}</td>
          <td>{{$Vehicule->nom_categorie}}</td>
          <td>{{$Vehicule->type_moteur}}</td>
          <td>{{$Vehicule->boite_vitesse}}</td>
          <td>{{$Vehicule->plaque}}</td>
          <td>{{$Vehicule->nombre_place}}</td>
        </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>


@endsection()
