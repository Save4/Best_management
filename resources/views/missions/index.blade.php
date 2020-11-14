@extends('layouts.layout')
@section('content')


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add mission</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('missions')}}" method="POST">

                                             @csrf
                    <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 label-align ">Vehicule :</label>
                      <div class="col-md-6 col-sm-6 ">
                      <select name="vehicule_id" id="" class="form-control" class="@error('vehicule_id') is-invalid @enderror">
                                   @foreach($vehicules as $Vehicule)
                                          <option value="{{$Vehicule->id}}">{{$Vehicule->plaque}}</option>
                                            @endforeach
                                 </select>
                                            @error('vehicule_id')
                             <button class="btn-danger">{{$message}}</button>
                                            @enderror
                         </div>
                         </div>

                         <div class="form-group row">
                         <label class="col-form-label col-md-3 col-sm-3 label-align ">Chauffeur :</label>
                           <div class="col-md-6 col-sm-6 ">
                           <select name="chauffeur_id" id="" class="form-control" class="@error('chauffeur_id') is-invalid @enderror">
                                        @foreach($chauffeurs as $Chauffeur)
                                               <option value="{{$Chauffeur->id}}">{{$Chauffeur->nom}} {{$Chauffeur->prenom}}</option>
                                                 @endforeach
                                      </select>
                                                 @error('chauffeur_id')
                                  <button class="btn-danger">{{$message}}</button>
                                                 @enderror
                              </div>
                              </div>

                              <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align ">Departement :</label>
                                <div class="col-md-6 col-sm-6 ">
                                <select name="departement_id" id="" class="form-control" class="@error('departement_id') is-invalid @enderror">
                                             @foreach($departements as $Departement)
                                                    <option value="{{$Departement->id}}">{{$Departement->nom_departement}}</option>
                                                      @endforeach
                                           </select>
                                                      @error('departement_id')
                                       <button class="btn-danger">{{$message}}</button>
                                                      @enderror
                                   </div>
                                   </div>
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Mission :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="type_mission" id="first-name" required="required" class="form-control " class="@error('type_mission') is-invalid @enderror"
                                     placeholder="Entre la misssion" value="">
                                     @error('type_mission')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>


                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Debut :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="date" name="date_debut" id="first-name" required="required" class="form-control " class="@error('date_debut') is-invalid @enderror"
                                     placeholder="" value="">
                                     @error('date_debut')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>

                      <div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fin :<span class="required"></span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="date" name="date_fin" id="first-name" required="required" class="form-control " class="@error('date_fin') is-invalid @enderror"
                                     placeholder="" value="">
                                     @error('date_fin')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
  											</div>
  										</div>

                      <div class="form-group row{{ $errors->has('etat') ? ' has-error' : '' }}">
                      <label class="col-form-label col-md-3 col-sm-3 label-align ">Etat :</label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="etat" id="etat" class="form-control">
                          <option value="1" @if (old('etat') == 1) selected @endif>Mission en cours</option>
                          <option value="0" @if (old('etat') == 0) selected @endif>Mission termine</option>


                                   </select>



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

                                  <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">

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
                        <th>Edit</th>
                        <th>Delete</th>

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
                        <td>
                          <button>  <a href="missions/edit/{{$Mission->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="missions/destroy/{{$Mission->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>

                        @endforeach
                        <a href="{{url('missions/show/{Mission}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>

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
