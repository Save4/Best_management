@extends('layouts.layout')
@section('content')

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
          <th>Type de mission</th>
          <th>Fournisseur</th>
          <th>Produit</th>
          <th>Quantite</th>
          <th>Prix</th>
        </tr>
        </thead>


          <tbody>
            @foreach($carburants as $Carburant)
            <tr>
                <td>{{$Carburant->id}}</td>
                <td>{{$Carburant->type_mission}}</td>
                <td>{{$Carburant->nom_societe}}</td>
                <td>{{$Carburant->produit}}</td>
                <td>{{$Carburant->quantite}}{{$Carburant->unite}}</td>
                <td>{{$Carburant->prix_total}}{{$Carburant->monaie}}</td>
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
