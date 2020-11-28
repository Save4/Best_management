@extends('layouts.layout')
@section('content')
  @section('title','Fournisseur | '.env('APP_NAME'))


  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Add fournisseur</h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('fournisseurs')}}" method="POST">

                                             @csrf
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Societe: </label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_societe" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess2" class="@error('nom_societe') is-invalid @enderror"
                                     placeholder="Entre le societe" value="">
                                     @error('nom_societe')

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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Province: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="province" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('province') is-invalid @enderror"
                                     placeholder="Entre le province" value="">
                                     @error('province')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Commune: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="commune" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('commune') is-invalid @enderror"
                                     placeholder="Entre le commune" value="">
                                     @error('commune')
                              <button class="btn-danger">{{$message}}</button>
                              @enderror
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Colline: </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="colline" id="first-name" required="required" class="form-control has-feedback-left" id="inputSuccess4" class="@error('colline') is-invalid @enderror"
                                     placeholder="Entre le colline" value="">
                                     @error('colline')
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
                                  <h2>Liste des fournisseurs</small></h2>
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
                        <th>Societe</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Province</th>
                        <th>Commune</th>
                        <th>Colline</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                      <tbody>
                    @foreach($fournisseurs as $Fournisseur)
                    <tr>
                      <td>{{$Fournisseur->id}}</td>
                      <td>{{$Fournisseur->nom_societe}}</td>
                      <td>{{$Fournisseur->email}}</td>
                      <td>{{$Fournisseur->telephone}}</td>
                      <td>{{$Fournisseur->province}}</td>
                      <td>{{$Fournisseur->commune}}</td>
                      <td>{{$Fournisseur->colline}}</td>

                        <td>
                          <button>  <a href="fournisseurs/edit/{{$Fournisseur->id}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </button></td>
                        <td>

                          <form action="fournisseurs/destroy/{{$Fournisseur->id}}" method="post" class="form-inline">
                          @csrf
                           <button type="submit" onclick="return confirm('Supprimer?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                         </form>

                        </td>

                    </tr>
                        @endforeach
  <a href="{{url('fournisseurs/show/{Fournisseur}')}}" class="btn btn-round btn-success btn-xs">Rapport</a>
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
