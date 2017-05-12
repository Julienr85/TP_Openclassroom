<?php include 'header_admin.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="center-block text-center">
          <h1>Bienvenue sur la page de gestion des Machines Virtuelles.</h1>
          <p class="lead">Vous pouvez ajouter des machines virtuelles</p>
      </div>
    </div>
  </div><!--/row-->
    <hr>
<form name="ajout_vm" id="ajout_vm" action="ajout_vm_recup_donne.php" method="post">
  <div class="row">
    <p class="lead">Provider</p>
      <div class="col-sm-4 col-sm-offset-0">
        <div class="radio">
          <label><input type="radio" name="providChoice" value="VirtualBox" required>VirtualBox</label>
          </div>
          <div class="radio">
          <label><input type="radio" name="providChoice" value="VMWare Fusion">VMWare Fusion</label>
          </div>
          <div class="radio">
          <label><input type="radio" name="providChoice" value="Parallels Desktop">Parallels Desktop</label>
          </div>
          <div class="radio">
          <label><input type="radio" name="providChoice" value="VMWare Workstation">VMWare Workstation</label>
          </div>
      </div><!--/col-->
  </div><!--/row-->
  <hr>
  <!--Distro-->
  <div class="row">
    <p class="lead">Distro</p>
      <div class="col-sm-4 col-sm-offset-0">
          <div class="radio">
          <label><input type="radio" name="DistroChoice" value="CentOS 6 x64" required>CentOS 6 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
          </div>
          <div class="radio">
          <label><input type="radio" name="DistroChoice" value="CentOS 7 x64 ">CentOS 7 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
          </div>
          <div class="radio">
          <label><input type="radio" name="DistroChoice" value="Ubuntu Trusty 14.04 LTS x64">Ubuntu Trusty 14.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
          </div>
          <div class="radio">
          <label><input type="radio" name="DistroChoice" value="Ubuntu Xenial 16.04 LTS i386">  Ubuntu Xenial 16.04 LTS i386 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
          </div>
          <div class="radio ">
          <label><input type="radio" name="DistroChoice" value="Ubuntu Xenial 16.04 LTS i386">Ubuntu Xenial 16.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
          </div>
      </div><!--/col-->
  </div><!--/row-->
  <hr>
  <!--Machine-->
  <p class="lead">Machines</p>
  <div class="form-group">
    <label for="Version">Version</label>
    <input class="form-control" name ="Version" id="Version" type="text" placeholder="" required />
  </div>
  <div class="form-group">
    <label for="poids">Poids</label>
    <input class="form-control" name ="Poids" id="Poids" type="text" placeholder="" required />
  </div>
  <div class="form-group">
    <label for="Prix">Prix</label>
    <input class="form-control" name ="Prix" id="Prix" type="text" placeholder="" required />
  </div>
  <div class="form-group">
    <label for="Nom">Nom</label>
    <input class="form-control" name ="Nom" id="Nom" type="text" placeholder="" required />
  </div>
  <div class="form-group">
    <label for="Image">Image de la VM</label>
    <input class="form-control" name ="Image" id="Image" type="file"  placeholder="" required />
  </div>

  <div class="footer" align ="right">
     <input type="submit" class="btn btn-primary" value="Valider" ></input>
     <input type="reset" class="btn btn-warning" value="Reset" ></input>
  </div>
</form>
</div><!--/container-->
<?php include 'footer.php'; ?>
