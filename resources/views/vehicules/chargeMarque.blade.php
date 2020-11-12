@foreach($marques as $Marque)
<option value="{{$Marque->id}}">{{$Marque->nom_marque}}</option>
@endforeach
@error('marque_id')

<div class="alert alert-danger">{{$message}}</div>
@enderror
