@extends('layouts.layout')
@section('content')

  @section('title','Reparation | '    config('app.name'))




  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Liste des vehicules</h2>
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
                        <th>Plaque</th>
                        <th>Chauffeur</th>
                        <th>Fournisseur</th>
                        <th>Type de reparation</th>
                        <th>Piece</th>
                        <th>Nombre de piece</th>
                        <th>Prix</th>
                        <th>Montant total</th>
                        <th>Date d'enregistrement</th>
        </tr>
        </thead>


          <tbody>
            @foreach($reparations as $Reparation)
                    <tr>
                        <td>{{$Reparation->id}}</td>
                        <td>{{$Reparation->plaque}}</td>
                        <td>{{$Reparation->nom}} {{$Reparation->prenom}}</td>
                        <td>{{$Reparation->nom_societe}}</td>
                        <td>{{$Reparation->type_reparation}}</td>
                        <td>{{$Reparation->piece}}</td>
                        <td>{{$Reparation->nombre_piece}}</td>
                        <td>{{$Reparation->prix_total}}{{$Reparation->monaie}}</td>
                        <td>{{$Reparation->montant_total}}{{$Reparation->monaie}}</td>
                        <td>{{$Reparation->created_at}}</td>

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
