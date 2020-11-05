@extends('layouts.layout')
@section('content')

  <div class="clearfix"></div>
  					<div class="row">
  						<div class="col-md-12 col-sm-12 ">
  							<div class="x_panel">
  								<div class="x_title">
  									<h2>Modification des marques</small></h2>
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
  									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/marques/{{$Marque->id}}" method="post">

                      @csrf
                      @method('PUT')
  										<div class="item form-group">
  											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom du marque <span class="required">*</span>
  											</label>
  											<div class="col-md-6 col-sm-6 ">
  												<input type="text" name="nom_marque" id="first-name" required="required" class="form-control "class="@error('nom_marque') is-invalid @enderror" placeholder=""
                            value="{{ $Marque->nom_marque }}">
                        @error('nom_marque')
                        <button class="btn-danger">{{ $message }}</button>
                        @enderror
  											</div>
  										</div>

  									
                      <div class="item form-group">
  											<div class="col-md-6 col-sm-6 offset-md-3">

  												<button class="btn btn-round btn-primary btn-xs" type="reset">Reset</button>
  												<button type="submit" id="submit" class="btn btn-round btn-success btn-xs">Modify</button>
  											</div>
  										</div>


  										</div>
  										<div class="ln_solid"></div>


  									</form>
  								</div>
  							</div>
  						</div>

@endsection()