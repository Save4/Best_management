@extends('layouts.layout')
@section('content')

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modele</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modele</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier le modele</h3>
              </div>


                    <div class="col-md-12">
                        <form role="form" action="/modeles/{{$Modele->id}}" method="post">
                      @csrf
                      @method('PUT')

                        <div class="form-group">
                            <label>Modele :</label>
                            <input type="text" name="nom_modele" class="form-control"
                                class="@error('nom_modele') is-invalid @enderror" placeholder=""
                                value="{{ $Modele->nom_modele }}">
                            @error('nom_modele')
                            <button class="btn-danger">{{ $message }}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Temp :</label>
                            <input type="text" name="temp_actuel" class="form-control"
                                class="@error('temp_actuel') is-invalid @enderror" placeholder=""
                                value="{{ $Modele->temp_actuel }}">
                            @error('temp_actuel')
                            <button class="btn-danger">{{ $message }}</button>
                            @enderror
                        </div>

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Modifier</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
    </div>
</section><!-- /.col-->


@endsection()
