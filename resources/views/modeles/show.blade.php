@extends('layouts.layout')
@section('content')

  @section('title','Modele | '    config('app.name'))




  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Liste des modeles</h2>
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


        </tr>
        </thead>


          <tbody>
        @foreach($modeles as $Modele)
        <tr>
            <td>{{$Modele->id}}</td>
            <td>{{$Modele->nom_marque}}</td>
            <td>{{$Modele->nom_modele}}</td>



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
