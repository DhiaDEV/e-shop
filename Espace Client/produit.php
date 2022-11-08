<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    
    <link rel="stylesheet" href="css/style2.css">
</head>
<br><br><br>
<body>
    <br><br><br><br><br>
    <h1 class="heading"> <span>about</span> product </h1>
    <section class="desc" id="desc">

        <?php 
        $bdd= new PDO('mysql:host=localhost; dbname=topnet_store;','root','');
        if(isset($_GET['id_produit']) AND $_GET['id_produit']>0){
            $getid= intval($_GET['id_produit']); //intval pour sécuriser l'id 
            //Récupérer les données de produit par l id qui entrer
            $recupProduit= $bdd->prepare('SELECT * FROM produits WHERE id_produit= ?');
            $recupProduit->execute(array($getid));
            $ProduitInfo= $recupProduit->fetch();
        
        ?>


        <div class="row">
        <div class="image">

            <img src="../Espace Admin/files/<?php echo $ProduitInfo['imagep']?>"  > 
        </div>
            <div class="content">

                <h3><?php echo $ProduitInfo['nomp']?><h3>
                        <div class="price"> <?php echo $ProduitInfo['prixp'] ?> TND</div>
                         <a href="#content" class="btn">More details</a>
                            <a href="#contact" class="btn">Order Now </a>
                        </div>
            </div>
        </div>
    </section>

    <section class="detail" id="detail">



        <div class="row">



            <div class="content" id="content">
                <h3><?php echo $ProduitInfo['descdet'] ?><h3> <br>
                        <ul>
                            <li><?php echo $ProduitInfo['descp'] ?></li>
                        </ul>



                        <!-- <ul>
                            <li> Avantages : <br></li>

                            <li> - Détection de mouvements <br></li>

                            <li> - Alarme sonore et lumineuse <br></li>

                            <li> - Vision Nocturne <br></li>

                            <li> - 1080p Image claire et précise <br></li>

                            <li> - Jusqu'à 128 Go (carte non incluse) <br></li>

                            <li> - Mode Privé</p>
                            </li>
                            <a href="" class="btn">Order Now </a>
                        </ul> -->
            </div>
        </div>

        </div>

    </section>

    <!-- contact section starts  -->
<?php 
if(isset($_POST['order'])){
    if(!empty($_POST['nomc'])
    AND !empty($_POST['mailc'])
    AND !empty($_POST['numc'])
    AND !empty($_POST['adrc'])
    AND !empty($_POST['nomP'])


    ){
        $nomClient=htmlspecialchars($_POST['nomc']);
        $mailClient=htmlspecialchars($_POST['mailc']);
        $numClient=htmlspecialchars($_POST['numc']);
        $adrClient=htmlspecialchars($_POST['adrc']);
        $prod=htmlspecialchars($_POST['nomP']);

        $insertOrder=$bdd->prepare('INSERT INTO commandes(nom_client ,mail_client ,num_tel_client ,adress_client,nomP)VALUES(?,?,?,?,?)');
        $insertOrder->execute(array($nomClient ,$mailClient ,$numClient ,$adrClient,$prod));
?>
<script>
            alert('Bien enregistrer');
        </script>
        <?php


    }else{
        echo "<p style='color=: white ;' > echec </>" ;
      }
}


?>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>ORDER</span> HERE </h1>

        <div class="row">


            <form method="POST">

                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name" name="nomc">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email" name="mailc">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number" name="numc">
                </div>
                <div class="inputBox">
                    <span class="fas fa-location-arrow"></span>
                    <input type="text" placeholder="address" name="adrc">
                </div>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Name Product" name="nomP">
                </div>

                <input type="submit" value="ORDER" class="btn" name="order">
            </form>

        </div>

    </section>

</body>

</html>
<?php
}
?>