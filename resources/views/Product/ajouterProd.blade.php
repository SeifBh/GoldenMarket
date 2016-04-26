
@extends('dashboard')

@section('content')

        <form action="/Admin/AjouterProduit_succes" method="post" enctype="multipart/form-data">

  <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajouter un produit</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">SKU Produit</label>
                      <input type="text" class="form-control" id="skup_prod" name="sku_prod" placeholder="Entrer sku" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom Produit</label>
                      <input type="text" class="form-control" id="nom_prod" name="nom_prod" placeholder="Entrer nom" size="13" required>
                    </div>
                    <div class="form-group">
                      <label>Select</label>
                      <select name = "cat" id="cat"  class="form-control">
                      @foreach($res as $cat)

                        <option value="{{$cat->id}}" required>{{ $cat->name_cat }}</option>
                       @endforeach

                      </select>
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description Produit</label>
                      <textarea type="text" class="form-control" rows="5" id="des_prod" name="des_prod" placeholder="Entrer description" required></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Prix Produit</label>
                      <input type="text" class="form-control" id="price_prod" name="price_prod" placeholder="Entrer prix" required>
                    </div>

          <label>Select image to upload:</label>
            <input type="file" name="image" id="image">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            </br>
            <center>
                          <input class="btn btn-primary" type="submit" value="Upload" name="submit">

            </center>

<input type="hidden" name="_token" value="{!! csrf_token() !!}">

                  </div>
                </form>
              </div><!-- /.box -->
@endsection