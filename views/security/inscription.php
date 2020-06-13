<div class="container d-flex justify-content-center align-items-stretch col-12  rounded shadow-sm bg-white mt-1" style=" margin-bottom: 10px;">
      <div class="container col-7 bg-white m-2 text-muted font-weight-bold">
        <h2 class="w-100 pl-5">S'inscrire</h2>
        <p class="w-100 pl-5 mt-0">Pour tester votre niveau de culture génerale</p>

        <form method="post" action="" enctype="multipart/form-data" class="col-10 p-0 pl-5">
          <div class="form-group">
            <label for="formGroupExampleInput">Prénom</label>
            <input type="text" class="form-control " name="prenom" placeholder="Entrez votre prénom" style="height: 50px;">
            
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" style="height: 50px;">
            
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Login</label>
            <input type="text" class="form-control " name="login" placeholder="Entrez votre login" style="height: 50px;">
            
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Entrez votre password" style="height: 50px;">
            
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Confirmer Password</label>
            <input type="password" class="form-control" name="cPassword" placeholder="Confirmez votre password" style="height: 50px;">
            
          </div>
          

          <div class="form-group">
            <label class="custom-file">
              <p class="d-inline text-dark float-left"> Avatar </p>
              <input type="file" name="imgUser" id="imgUser" placeholder="" class="custom-file-input" aria-describedby="fileHelpId">
              <span class="custom-file-control border p-2 text-white float-right " style="background-color:#51bfd0;margin-top:-70px;"> Choisir un fichier</span>
            </label>
            
          </div>
         
          <div class="mt-2 d-flex justify-content-center align-items-center">

            <button type="submit" name="form-inscription" value="" class="btn bgcolor1 border-bgcolor1 text-white font-weight-bold shadow-sm">Créer compte</button>
          </div>
        </form>

      </div>


      <div class="bg-white col-5 mt-2">
        <div class="container  rounded-circle"  style="height: 250px; width: 250px; border:solid #51bfd0; border-width: 2px;">
          <img src="" style="height: 250px; width: 250px; " class=" rounded-circle " id="avatar" alt="">
        </div>
        <span class="justify-content-center align-items-center">Avatar du joueur</span>
      </div>

  <script type="text/javascript">

    const inputs = document.getElementsByTagName("input");
    for(let input of inputs){
      input.addEventListener("keyup", function(event){
        if(event.target.hasAttribute("error")){
          //recuperer la valeur de l'atribut error
          let idSmall = event.target.getAttribute("error")
          //recuperer l'objet small
          const errorSmall = document.getElementById(idSmall)
          errorSmall.innerText = ""
        }
      });
    }

    document.getElementById("form-inscription").addEventListener("submit", function(event){
      let valid = true;
      for(let input of inputs){
        if(!input.value.trim()){
          valid = false;
                        
          if(input.hasAttribute("error")){
            //recuperer la valeur de l'atribut error
            let idSmall = input.getAttribute("error")
            //recuperer l'objet small
            const errorSmall = document.getElementById(idSmall)
            errorSmall.innerText = "Champ Obligatoire";
          }
        }
      }
      if(valid == false){
        event.preventDefault();
        return false;
      }
    });

    // Chargement de l'image
    const imgUpload = document.querySelector("#imgUser");

    const prevUpload=()=>{
      // recuperation de l'image du champ
      let fileImg = imgUpload.files[0]
      // transformer l'image en flux d'octets
      let reader = new FileReader();
      if(fileImg){
        reader.readAsDataURL(fileImg)
        reader.onloadend=function(){
          const avatar = document.querySelector("#avatar")
          avatar.src=reader.result
          
        }
      }
    }




    // ecouteur evenement
    imgUpload.addEventListener("change", prevUpload)


  </script>
    </div>

    