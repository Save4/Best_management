@extends('layouts.layout')
@section('content')

  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification des modeles</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/modeles/{{$Modele->id}}" method="post">

                      @csrf
                      @method('PUT')
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom du modele <span class="required">*</span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_modele" id="first-name" required="required" class="form-control "class="@error('nom_modele') is-invalid @enderror" placeholder=""
                            value="{{ $Modele->nom_modele }}">
                        @error('nom_modele')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>

  										<div class="item form-group">
  											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date d'enregistrement</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input name="temp_actuel" id="middle-name" class="form-control" type="date" name="middle-name"   class="@error('temp_actuel') is-invalid @enderror" placeholder=""
                            value="{{ $Modele->temp_actuel }}">
                        @error('temp_actuel')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>
                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

  												<button class="btn btn-primary" type="reset">Reset</button>
  												<button type="submit" id="submit" class="btn btn-success">Modify</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>

@endsection()
