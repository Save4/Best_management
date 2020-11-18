@foreach($modeles as $Modele)
         <option value="{{$Modele->id}}">{{$Modele->nom_modele}}</option>
           @endforeach
           @error('modele_id')
<button class="btn-danger">{{$message}}</button>
           @enderror
