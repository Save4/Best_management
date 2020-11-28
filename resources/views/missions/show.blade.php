@extends('layouts.layout')
@section('content')
  @section('title','Mission | '.env('APP_NAME'))
  
  <div class="row">

  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Liste des missions</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
            <th>Plaque</th>
            <th>Departement</th>
            <th>Chauffeur</th>
            <th>Mission</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Etat</th>

        </tr>
        </thead>


          <tbody>
        @foreach($missions as $Mission)
        <tr>
            <td>{{$Mission->id}}</td>
            <td>{{$Mission->nom_marque}}</td>
            <td>{{$Mission->nom_modele}}</td>
            <td>{{$Mission->plaque}}</td>
            <td>{{$Mission->nom_departement}}</td>
            <td>{{$Mission->nom}}</td>
            <td>{{$Mission->type_mission}}</td>
            <td>{{$Mission->date_debut}}</td>
            <td>{{$Mission->date_fin}}</td>
            <td>{{$Mission->etat}}</td>
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
</div>



@endsection()
