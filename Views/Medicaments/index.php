<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Ressources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Ressources/fontawesome/css/all.css">
    <script src="../Ressources/fontawesome/js/all.js"></script>
</head>
<body>
    <ul class="nav justify-content-center alert alert-primary">
        <li class="nav-item">
            
          <a class="nav-link active" aria-current="page" href="Views/TableauDeBord/"><i class="fas fa-home"></i> Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Views/Medicaments/"><i class="fa-solid fa-flask"></i> Medicament</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Views/Categories/"><i class="fa-solid fa-suitcase-medical"></i> Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Views/Ventes/"><i class="fa-solid fa-cart-shopping"></i> Vente</a>
        </li>
    </ul>



    
        <div class="container bg-light " style="min-height: 96vh;">
        <div class="alert alert-primary" role="alert">
            <div class="d-flex justify-content-between">
                <p class="fs-3">Listes des medicaments</p>
                <button class="btn btn-outline-primary"><i class="fa fa-plus"></i>Ajouter</button>
            </div>
        </div>

            <div class="d-flex justify-content-center mt-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Taper la mot clée!" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search">Search</i> </button>
                </form>
            </div>

            <table class="table mt-5">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom medicament</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><div class="d-flex justify-content-around" ><i class="fa fa-edit"></i><i class="fa fa-trash"></i></div></td>
                        </tr>
                        
                    </tbody>
            </table>
                
        </div>
</body>
</html>