<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body>
      <div class="container " style=" width:500px;" >
        <h2 class="font-weight-bold mb-3"style=" font-size:1.4em; color:#48d1cc;"> PARAMETRER VOTRE QUESTION</h2>
      
        <form method="post" action="" class=" rounded p-3" style="border:solid 1px #48d1cc;">
            <div class="form-group row">
                <label for="" class="col-sm-2 text-secondary font-weight-bold col-form-label m-auto" style="font-size:0.9em;"> Questions </label>
                <div class="col-sm-10">
                    <input type="text" name="" id="" class="form-control rounded-0" style=" height:70px; box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;" placeholder="" aria-describedby="helpId">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 text-secondary font-weight-bold col-form-label" style="font-size:0.9em;"> Nbre de Points </label>
                <select class="custom-select col-sm-2 rounded-0" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">3</option>
                    <option value="3">5</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 text-secondary font-weight-bold  col-form-label" style="font-size:0.9em;"> Types de réponses </label>
                <select class="custom-select col-sm-7 rounded-0" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;">
                    <option selected>Donnez le type de réponse</option>
                    <option value="1">Bouton radio </option>
                    <option value="2">Bouton checkbox</option>
                    <option value="3">Champ de saisie</option>
                </select>
                <div class="col-sm-1">
                    <img src=" ../images/ic-ajout-réponse.png" style="margin-left:-10px;">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 text-secondary font-weight-bold col-form-label" style="font-size:0.9em;"> Réponse1 </label>
                <div class="col-sm-7">
                    <input type="text" name="" id="" class="form-control rounded-0" style="box-shadow: 1px 1px #48d1cc; background-color:#f5f5f5;" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-sm-1 m-auto" >
                    <div class="checkbox mt-2" style=" "> 
                        <label ><input type="checkbox" style="width:20px; height:20px;  box-shadow:1px 1px #c0c0c0;  " value=""></label>
                    </div>
                </div>
                <div class="col-sm-1 m-auto ">
                    <div class="radio mt-2" > 
                        <label ><input type="radio" style="width:20px; height:20px; " name="optradio" ></label>
                    </div>
                </div>
                <div class="col-sm-1 mt-1">
                    <img src=" ../images/ic-supprimer.png">
                </div>
            </div>
            <div class="row " style="margin-top:100px;">
                <div class="col-sm-9"> </div>
                <div class="col-sm-3" style="margin-left:-5px;">
                    <button type="submit" class="btn btn-primary rounded-0" style="background-color:#48d1cc; border:none;">Enregistrer</button>
                </div>
            </div>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>