


<div class="m-auto " style=" width:500px; height:360px; padding-top:150px; ">
        
    <div class="" style="height:85px; background-color:#48d1cc">
        <p style=" color:#f5f5f5;"> Login Form</p>

    </div>
    <form method="post" action="security/seConnecter" class="pb-5" style=" background-color:#f5f5f5; padding-top:20px;">
        <?php
            if(isset($err_login)){
        ?>
        <small id="HelpId" class="text-danger ml-4"> <?=$err_login ?></small>
        <?php 
            }
        ?>
        <div class="form-group" >
            <input type="text" name="login" id="" class="form-control" style=" width:90%; height:65px; margin:auto; " placeholder=" Login " aria-describedby="helpId">
            <?php
                if(isset($erreurs['login'])){
            ?>
            <small id="HelpId" class="text-danger ml-4"> <?=$erreurs['login'] ?></small>
            <?php 
                }
            ?>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" class="form-control" style=" width:90%; height:65px; margin:auto; " placeholder=" Password " aria-describedby="helpId">
            <?php
                if(isset($erreurs['password'])){
            ?>
            <small id="HelpId" class="text-danger ml-4"> <?=$erreurs['password'] ?></small>
            <?php 
                }
            ?>
        </div>
        <div style=" width:90%; margin:auto;">
            <button type="submit" class="btn " name="btn_connexion" style="background-color:#48d1cc; color:#f5f5f5;"> Connexion </button>
            <a href="security/loadViewInscription">
                <span style=" color:#a9a9a9; margin-left:30px;"> S'inscrire pour jouer? </span>
            </a>
        </div>

    </form>
</div>

                
         
    

       