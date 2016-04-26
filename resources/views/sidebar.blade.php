
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/images/logf.png") }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->

    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Administrateur</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="/Admin/dashboard"><span>Tableau de bord</span></a></li>

      <li id="treeview1" class="treeview">
        <a href=""><span>Gestion prospects</span> <i class="fa fa-angle-left pull-right"></i></a>

        <ul class="treeview-menu">

          <li><a href="/Admin/AjouterProspect">Ajouter Prospect</a></li>
          <li><a href="#">Modifier Prospect</a></li>
          <li><a href="#">Supprimer Prospect</a></li>
        </ul>
      </li>

      <li  id="treeview2"  class="treeview">
        <a href="AjouterProduit"><span>Gestion Produit</span> <i class="fa fa-angle-left pull-right"></i></a>

        <ul class="treeview-menu">

          <li><a href="/Admin/AjouterProduit">Ajouter Produit</a></li>
          <li><a href="#">Modifier Produit</a></li>
          <li><a href="#">Supprimer Produit</a></li>
        </ul>
      </li>      


      <li  id="treeview3"  class="treeview">
        <a href="#"><span>Gestion Teleoperateur</span> <i class="fa fa-angle-left pull-right"></i></a>

        <ul class="treeview-menu">

          <li><a href="/Admin/AjouterTelop">Ajouter Teleoperateur</a></li>
          <li><a href="#">Modifier Teleoperateur</a></li>
          <li><a href="#">Supprimer Teleoperateur</a></li>
        </ul>
      </li>  

      <li  id="treeview4"  class="treeview">
        <a href="#"><span>Gestion Menu</span> <i class="fa fa-angle-left pull-right"></i></a>

        <ul class="treeview-menu">

          <li><a href="/Admin/AjouterMenu">Ajouter Menu</a></li>
          <li><a href="#">Modifier Menu</a></li>
          <li><a href="#">Supprimer Menu</a></li>
        </ul>
      </li>  

      <li  id="treeview5"  class="treeview">
        <a href="#"><span>Gestion Ligne</span> <i class="fa fa-angle-left pull-right"></i></a>

        <ul class="treeview-menu">

          <li><a href="/Admin/AjouterLigne">Ajouter Ligne</a></li>
          <li><a href="#">Modifier Ligne</a></li>
          <li><a href="#">Supprimer Ligne</a></li>
        </ul>
      </li>  




      <li><a href="Compteur"><span>Ajout Compteur a rebours</span></a></li>





    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

    <script type="text/javascript">
$('.tree-toggle').click(function () {
    $(this).parent().children('ul.tree').toggle(200);
}); 
//add this line:
$('.tree-toggle').parent().children('ul.tree').toggle(1000);
    </script>