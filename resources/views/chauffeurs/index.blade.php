@extends('layouts.layout')
@section('content')

  @section('title','Chauffeur | '.config('app.name'))




  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add chauffeur</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('chauffeurs')}}" method="POST">

                                             @csrf
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mom: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('nom') is-invalid @enderror"
                                     placeholder="Entre le nom" value="">
                                     <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                     @error('nom')

                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Prenom: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="prenom" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('prenom') is-invalid @enderror"
                                     placeholder="Entre le prenom" value="">
                                     <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                     @error('prenom')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="email" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('email') is-invalid @enderror"
                                     placeholder="Entre l'email" value="">
                                     <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                     @error('email')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Telephone: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="telephone" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('telephone') is-invalid @enderror"
                                     placeholder="Entre le telephone" value="">
                                     <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                     @error('telephone')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID du permis de conduire: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="id_permis_conduire" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('id_permis_conduire') is-invalid @enderror"
                                     placeholder="Entre le permis de conduire" value="">
                                     @error('id_permis_conduire')
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



              <div class="col-md-12 col-sm-12 ">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Liste des chauffeur</small></h2>
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
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>ID permis de conduire</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($chauffeurs as $Chauffeur)
                    <tr>
                      <td>{{$Chauffeur->id}}</td>
                      <td>{{$Chauffeur->nom}}</td>
                      <td>{{$Chauffeur->prenom}}</td>
                      <td>{{$Chauffeur->email}}</td>
                      <td>{{$Chauffeur->telephone}}</td>
                      <td>{{$Chauffeur->id_permis_conduire}}</td>

                        <td>
                          <button>  <a href="chauffeurs/edit/{{$Chauffeur->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="chauffeurs/destroy/{{$Chauffeur->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>
                        @endforeach
  <a href="{{url('chauffeurs/show/{Chauffeur}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>




@endsection()
