@extends('layouts.layout')
@section('content')


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add modele</small></h2>
  									<ul class="nav navbar-right panel_toolbox">
  										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
  										</li>
  										<li class="dropdown">
  											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>

  										</li>
  										<li><a class="close-link"><i class="fa fa-close"></i></a>
  										</li>
  									</ul>
  									<div class="clearfix"></div>
  								</div>
  								<div class="x_content">
  									<br />
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('modeles')}}" method="POST">

                                             @csrf
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom du modele <span class="required">*</span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_modele" id="first-name" required="required" class="form-control " class="@error('nom_modele') is-invalid @enderror"
                                     placeholder="Entre le modele" value="">
                                     @error('nom_modele')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>

  										<div class="item form-group">
  											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date d'enregistrement</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input name="temp_actuel" id="middle-name" class="form-control" type="date" name="middle-name" class="@error('temp_actuel') is-invalid @enderror"
                                     placeholder="Entre le temps d'enregistrement du modele" value="">
                                     @error('temp_actuel')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>
                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

  												<button class="btn btn-primary" type="reset">Reset</button>
  												<button type="submit" id="submit" class="btn btn-success">Save</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>



              <div class="col-md-12 col-sm-12 ">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Liste des modeles</small></h2>
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

                                  <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">

                      <thead>
                    <tr>
                        <th>ID</th>
                        <th>Modele</th>
                        <th>Date d'enregistrement</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($modeles as $Modele)
                    <tr>
                        <td>{{$Modele->id}}</td>
                        <td>{{$Modele->nom_modele}}</td>
                        <td>{{$Modele->temp_actuel}}</td>
                        <td>
                      <button>      <a href="modeles/show/{{$Modele->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa fa-eye"></i></a>
                      </button></td>
                        <td>
                          <button>  <a href="modeles/edit/{{$Modele->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="modeles/destroy/{{$Modele->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

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
