@extends('dashboard')

@section('content')

<?php
echo Form::open(array('action' => 'LigneController@AjouterLigne_succes', 'method' => 'get'))
?>
<div class="container">
    <div class="col-sm-6" style="height:130px;">

                <input type='text' name="ligne" placeholder="Enter votre numéro"/>
                <input type='submit' value="Ajouter"  />

    </div>

</div>
@endsection