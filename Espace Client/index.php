<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPNET STORE</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/toplogo.png" alt="">
        </a>


        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">products</a>
        </nav>
        








    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>TOP e-SHOP</h3>
            <p> leader des Fournisseurs d'accès à Internet Tunisiens <br>
                #TOPNET #TOPNETESHOP #VENTEFLASH #ECOMMERCE #BOUTIQUEENLIG</p>
            <a href="#" class="btn">STORE</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/5G.jpg" alt="">
            </div>

            <div class="content">
                <h3>why we are the best<h3>
                        <p>TOPNET is a Tunisian company which started its activities on May 2, 2001, it is the leader,
                            today, of Internet Service Providers in Tunisia
                        </p>
                        <p>TOPNET devient une filiale de groupe Tunisie Télécom, en Juin 2010, cette acquisition est
                            considérée par Tunisie Télécom comme étant une opération stratégique permettant le
                            renforcement de son leadership à travers un acteur qui, en quelques années, a réussi à se
                            hisser en leader sur le marché des fournisseurs de services Internet (FSI).

                            Notre valeur est claire : « Garantir la pérennité de notre entreprise en devenant le
                            Fournisseur de Service Internet préféré de nos clients par notre niveau de Qualité »<br>...
                            <a href="https://www.topnet.tn/pages/qui-sommes-nous" class="btn">learn more</a>...
                        </p>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading" > our <span>store</span> </h1>

        <div class="box-container">

        <?php
    $bdd= new PDO('mysql:host=localhost; dbname=topnet_store;','root','');
  $recupproduit= $bdd->query('SELECT * FROM produits where  id_produit ORDER BY id_produit DESC');
     while($produits = $recupproduit->fetch()){

?>

            <div class="box">
                <img src="../Espace Admin/files/<?php echo $produits['imagep']?>" >
                <h3><?php echo $produits['nomp'] ?></h3>
                <div class="price"><?php echo $produits['prixp'] ?> TND</div>

                <a class="btn" href="produit.php?id_produit=<?= $produits['id_produit'] ?>"> Consulter</a>

            </div>

 <?php
}
?> 














          
        </div>

    </section>

    <!-- menu section ends -->





    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>REGISTER</span> HERE </h1>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12770.938193610267!2d10.196003!3d36.848833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12ef14843c6f4971!2sTopnet!5e0!3m2!1sfr!2stn!4v1664471752233!5m2!1sfr!2stn"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="">
                <h3>LOGIN</h3>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>


                <div class="inputBox">
                    <span class="fas fa-key"></span>
                    <input type="password" placeholder="password">
                </div>
                <input type="submit" value="DONE" class="btn">
                <a href="register.html" class="btn"> REGISTER</a>
            </form>

        </div>

    </section>

    <!-- contact section ends -->


    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="https://www.facebook.com/topnet.officiel" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/topnet_vip" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/topnet_tn/?hl=fr" class="fab fa-instagram"></a>

        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#menu">products</a>
        </div>

        <div class="credit">created by <span>Ayoub Gwadria</span> #ZOOBA3</div>

    </section>

    <!-- footer section ends -->

















    

</body>

</html>