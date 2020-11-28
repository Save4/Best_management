@extends('layouts.layout')
@section('content')
  @section('title','Modele | '.env('APP_NAME'))
  


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add modele</small></h2>
  									<ul class="nav navbar-right panel_toolbox">
  										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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

                    <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 label-align ">Marque :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="marque_id" id="" class="select2_single form-control" tabindex="-1" class="@error('marque_id') is-invalid @enderror">
                          <option value="0" disabled="true" selected="true">Selectionner la marque</option>
                                   @foreach($marques as $Marque)
                                          <option value="{{$Marque->id}}">{{$Marque->nom_marque}}</option>
                                            @endforeach
                                 </select>
                                            @error('modele_id')
                             <button class="btn-danger">{{$message}}</button>
                                            @enderror
                         </div>
                         </div>
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Modele :</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_modele" id="first-name" required="required" class="form-control " class="@error('nom_modele') is-invalid @enderror"
                                     placeholder="Entre le modele" value="">
                                     @error('nom_modele')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

                          <button type="submit" id="submit" class="btn btn-round btn-success btn-xs">Save</button>
  												<button class="btn btn-round btn-primary btn-xs" type="reset">Reset</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>

              <div class="row">


              <div class="col-md-12 col-sm-12 ">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Liste des modeles</small></h2>
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

                                  <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">

                      <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marque</th>
                        <th>Modele</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($modeles as $Modele)
                    <tr>
                        <td>{{$Modele->id}}</td>
                        <td>{{$Modele->nom_marque}}</td>
                        <td>{{$Modele->nom_modele}}</td>

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
  <a href="{{url('modeles/show/{Modele}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>
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
