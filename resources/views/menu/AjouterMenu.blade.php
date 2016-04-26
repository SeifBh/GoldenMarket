
@extends('dashboard')

@section('content')

        <form action="/Admin/AjouterMenu_succes" method="get" enctype="multipart/form-data">

  <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajouter un menu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom Menu</label>
                      <input type="text" class="form-control" id="nommenu" name="nommenu" placeholder="Entrer nom" >
                    </div>
                    <div class="form-group">
                      <label>Select</label>
                      <select name = "cat" id="cat"  class="form-control">
                      @foreach($res as $cat)

                        <option value="{{$cat->id}}" >{{ $cat->name_cat }}</option>
                       @endforeach

                      </select>
                    </div>                    



            <input type="submit" class="btn btn-primary" value="Ajouter" name="submit">
          <input type="hidden" value="{{ csrf_token() }}" name="_token">

                  </div>
                </form>
              </div><!-- /.box -->
@endsection