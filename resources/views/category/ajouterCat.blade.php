
@extends('dashboard')

@section('content')

<?php
echo Form::open(array('action' => 'CategoryController@ajouter_succes', 'method' => 'get'))
?>
  <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajouter Menu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom Menu</label>
                      <input type="text" class="form-control" id="nom_cat" name="nom_cat" placeholder="Entrer catégorie" required>
                    </div>


                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
@endsection