@extends('dashboard')

@section('content')

<?php
echo Form::open(array('action' => 'TelopController@AjouterTelop_succes', 'method' => 'get'))
?>
<div class="container">
    <div class="col-sm-6" style="height:130px;">

                <input type='text' name="nom_telop" placeholder="Enter nom téleoperateur"/>
                <input type='text' name="code_telop" placeholder="Enter numéro téleoperateur"/>
                <input type='submit' value="Ajouter"  />

    </div>

</div>
@endsection