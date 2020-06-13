<?php 
  $path="./views/layout/inc/header.inc.php";
  require_once($path);
?>
        <div class=" ml-5 mt-2 mb-2 rounded" style="width:94%; " >
            <div class="row" style="background-color:#48d1cc; height:90px;">
                <div class="col-9 float-right">
                    <h3 class="text-white font-weight-bold float-right m-0 p-4">CREER ET PARAMETRER VOS QUIZZ</h3>
                </div>
                <div class="col-3">
                    <button name="" value="" type="submit" class="btn float-right text-white mt-4  shadow-sm" style="text-shadow: 1px 1px 2px black; color:#40e0d0;">Deconnexion</button>
                </div>
            </div>

            <div class="row " style="background-color:#f5f5f5; height:710px;">
                <div class="col-4 ">
                    <div class="container rounded p-auto mt-5 bg-light"  style="width:95%; height:75%;">
                        <div class="row" style=" height:40%; background:linear-gradient(white,#48d1cc)">
                            <div class="col-5">
                                <div class="border border-dark  mt-4 rounded-circle" style="width:110px; height:110px;">
                                    <div class="  bg-secondary">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 ">
                               <h4 class="font-weight-bold text-white mt-5"> Gustavie</h4>
                            </div>
                        </div>
                        <div class="row ">
                            <nav class="nav flex-column " >
                                <a class="nav-link active" href="#">
                                    <div>
                                        Liste Question
                                    </div>
                                </a>
                                <a class="nav-link" href="#">
                                    <div>
                                        Créer Admin
                                    </div>
                                </a>
                                <a class="nav-link" href="#">
                                    <div>
                                        Liste Joueurs
                                    </div>
                                </a>
                                <a class="nav-link" href="#">
                                    <div>
                                        Créer Question
                                    </div>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-8 " style="height:500px;">
                    <?php echo $content_for_layout;?>
                </div>
            </div>
        </div>
<?php 
  $path="./views/layout/inc/footer.inc.php";
  require_once($path);
?>
 