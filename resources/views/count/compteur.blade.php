
    <title>Compteur | GoldeN Market</title>
@extends('dashboard')

@section('content')

<?php
echo Form::open(array('action' => 'CompteurController@Ajout', 'method' => 'get'))
?>
<div class="container">
    <div class="col-sm-6" style="height:130px;">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Fixer la date du compteur</label>
                      <input type="date" class="form-control" id="date" name="date" placeholder="Entrer date" required>
                    </div>
                <input type='submit' class="btn btn-primary" value="Ajouter"  />

    </div>

</div>
@endsection