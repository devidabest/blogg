<?php include("path.php"); 
include ('../database/topics.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odyssey</title>
    <link rel="stylesheet" href="style.css">
    <script src="web.js"></script>
</head>
<body>

    <header>
        <div class="logo">
            <a href=""> <span>Odys</span> sey</a>
        </div>
        <ul class="menu">
            <li><a href="#">Accueil</a></li>
            <li><a href="#vol">vol</a></li>
            <li><a href="#a-propos">À propos</a></li>
            <li><a href="#popular-destination">Destinations</a></li>
            <li><a href="#hotels">Hotels</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if(isset($_SESSION['id'])): ?>

            <li><a><?php echo $_SESSION['username']; ?></a></li>
            <?php endif; ?>

            

        </ul>
        <?php if(isset($_SESSION['id'])): ?>

        <a href="<?php echo BASE_URL . '../database/out.php'?>">Déconnexion</a>
        <?php else:?>
            <a href="<?php echo BASE_URL . '../pages/register.php'?>">Connexion</a>
        <?php endif; ?>
    </header>
    
    <section id="home">
        <h2>nous suivre</h2>
        <h4>Voyagez en Sécurité</h4>
        <p>Réservez dès maintenant votre escapade de rêve en un simple clic !</p>
        <a href="#" class="btn-reservation">Réserver Maintenant</a>
    </section>
    <!--vol-->
    
   
    
<!-- section#apropos -->
<section id="a-propos">
    <h1 class="title">À propos</h1>
    <div class="img-desc">
        <!-- .left -->
        <div class="left">
            <video src="image/video.mp4" controls>
            Votre navigateur ne prend pas en charge la balise vidéo.
            </video>
        </div>
        <div class="right">
            <h3>Découvrez la beauté du monde, une destination à la fois.</h3>
           <section id="p"> <p >Bienvenue sur Odyssey, votre passerelle vers des expériences de voyage extraordinaires à travers le monde! 🌍✈️

                Chez Odyssey, nous croyons que chaque voyage est une aventure en soi, une opportunité de découvrir de nouveaux horizons, de vivre des moments inoubliables et de créer des souvenirs durables.
                <span id="moreText" style="display: none;"> Notre mission est de vous accompagner à chaque étape de votre voyage, en vous offrant un service exceptionnel et en veillant à ce que votre expérience de voyage soit aussi enrichissante que possible. 🌟
                
                Que vous recherchiez une escapade relaxante sur une plage de sable blanc 🏖️, une exploration passionnante de destinations exotiques 🏝️, une immersion dans des cultures fascinantes 🕌 ou une aventure en plein air pleine d'adrénaline 🏞️, Odyssey est là pour vous guider. Notre équipe dévouée d'experts en voyage est là pour vous aider à planifier et à organiser chaque détail de votre voyage, en veillant à ce que vos besoins et vos désirs soient pleinement satisfaits. 🧳
                
                Chez Odyssey, nous sommes fiers de notre engagement envers l'excellence du service client. Nous nous efforçons de dépasser vos attentes à chaque étape de votre voyage, en vous offrant des conseils personnalisés, des recommandations sur mesure et un soutien continu tout au long de votre séjour. Votre satisfaction et votre confort sont notre priorité absolue. 🤝
                
                En plus de notre service de réservation de voyages, nous proposons également une gamme d'outils et de ressources pour vous aider à planifier votre voyage en toute tranquillité d'esprit. Notre site web convivial regorge d'informations utiles sur les destinations, les activités et les hébergements, et notre équipe d'assistance est disponible 24h/24 et 7j/7 pour répondre à toutes vos questions et préoccupations. 💼
                
                Que vous soyez un voyageur solo en quête d'aventure, un couple en lune de miel à la recherche de romance, une famille désireuse de créer des souvenirs ensemble ou un groupe d'amis en quête de divertissement, Odyssey a tout ce qu'il vous faut pour créer des vacances parfaites, adaptées à vos besoins et à votre budget. 🌟
                
                Explorez notre site web dès aujourd'hui pour découvrir nos destinations passionnantes, consulter nos offres spéciales et commencer à planifier votre prochaine aventure avec Odyssey. Nous sommes impatients de vous aider à créer des souvenirs de voyage inoubliables! 🎉🌟
            </span>
             <a href="#moreText" class="read-more" onclick="toggleText()">lire plus</a></p>
            </section>
        </div>
    </div>
</section>


<section id="popular-destination">
    <h1 class="title">Destinations Populaires</h1>
    <!--div.content-->
    <div class="content">
        <div class="box">
            <img src="image/paris.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Paris</h4>
                    <p>Plongez dans l'atmosphère unique de Paris ! Réservez dès maintenant et laissez-vous séduire par cette ville emblématique.</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="image/dubai.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Dubai</h4>
                    <p>Découvrez Dubaï, un paradis moderne où le luxe rencontre la culture. Réservez dès maintenant et plongez dans une expérience unique au cœur de cette ville dynamique et captivante.</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="image/miamii.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Miami</h4>
                    <p>Envie de soleil et de détente à Miami ? Réservez dès maintenant et laissez-vous séduire par les plages et l'ambiance animée de cette destination de rêve !</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="image/tokio.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Tokyo</h4>
                    <p>Découvrez Tokyo, une ville fascinante où la tradition rencontre la modernité. Réservez maintenant et plongez dans une expérience unique au cœur du Japon !</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="image/turky.jpeg" alt="">
            <div class="content">
                <div>
                    <h4>Turky</h4>
                    <p>Explorez la magie de la Turquie ! De l'histoire captivante d'Istanbul aux plages de sable doré, chaque coin du pays vous réserve une expérience unique. Réservez dès maintenant et laissez-vous charmer par la beauté de la Turquie !</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="image/brezil.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Brezil</h4>
                    <p>Découvrez le Brésil : plages ensoleillées, forêts tropicales et une culture vibrante. Réservez dès maintenant pour une aventure inoubliable !</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="image/saudi.webp" alt="">
            <div class="content">
                <div>
                    <h4>Saudi arabia</h4>
                    <p>Discover the wonders of Saudi Arabia and embark on an unforgettable journey filled with rich history, breathtaking landscapes, and vibrant culture</p>
                    <a href="#">Lire Plus</a>
                </div>
            </div>
            <div class="box">
                <img src="image/maldives.jpeg" alt="">
                <div class="content">
                    <div>
                        <h4>Maldives/h4>
                        <p>Experience the exotic beauty of Saudi Arabia and the tranquil paradise of the Maldives - book your journey now for the ultimate adventure!</p>
                        <a href="#">Lire Plus</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image/rome.jpg" alt="">
                    <div class="content">
                        <div>
                            <h4>Rome</h4>
                            <p>Embark on an unforgettable journey to Saudi Rome and discover the beauty of two rich cultures intertwined.</p>
                            <a href="#">Lire Plus</a>
                        </div>
                    </div>
        </div>
    </div>
</section>


<section id="hotels">
    <h1 class="title">Hôtels</h1>
    <div class="content">
        <div class="box">
            <img src="image/h1.jpg" alt="">
            <div class="content">
                <p>Ouvrez la porte à des expériences inoubliables et créez des souvenirs précieux en réservant votre hôtel par le biais de notre agence.</p>
            </div>
        </div>
        <div class="box">
            <img src="image/h2.jpeg" alt="">
            <div class="content">
                <p>Partez à l'aventure et explorez notre sélection de hôtels soigneusement choisis pour une expérience de voyage ultime !</p>
            </div>
        </div>
        <div class="box">
            <img src="image/h3.jpeg" alt="">
            <div class="content">
                <p>Évadez-vous vers le luxe et le confort en réservant dès maintenant votre séjour à l'hôtel avec nous !</p>
            </div>
        </div>
    </div>
    <a href="hotels.html">Voir les hôtels</a>
</section>


<section id="contact">
    <h1 class="title">Contactez-nous</h1>
    <form action="submitvol.php" method="POST" onsubmit="return verif(this)" >

        <div class="left">
            <!-- Left side of the form -->
            <label >Nom complet</label>
            <input type="text" id="nom" name="nom">

            <br>
            <label >Objet</label>
            <input type="text" id="objet" name="objet">
            <br>
            <label >Email</label>
            <input type="text" id="email" name="email">
            <br>
            <br>
            <label >Message</label>
            <textarea name="message" id="message" cols="40" rows="10"></textarea>
        </div>
        <div class="right">
            <!-- Right side of the form -->
            <label >Numero</label>
            <input type="text" id="Numero" name="numero">
            <br>
            <label >Date</label>
            <input type="date" id="date" name="date">
            <br>
            <label >Adresse</label>
            <input type="text" id="adr" name="adr">
            <br>
            <iframe id="adresse" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388599.480341614!2d6.92077296613842!3d33.96223378677483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x125595448316a4e1%3A0x3a84333aaa019bef!2sTunisie!5e0!3m2!1sfr!2stn!4v1711053366251!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <button  type="submit">Envoyer</button>
    </form>
    

 <!-- Footer Section -->
 <section class="footer">
    <fieldset>
    <div class="box-container">
        <div class="box">
            <h3>Liens rapides</h3>
            <a href="#"><i class=""></i>Accueil </a>
            <a href="#a-propos"><i class=""></i>A propos de nous </a>
            <a href="#"><i class=""></i>Reservation </a>
        </div>
        <div class="box">
            <h3>Liens extra</h3>
            
            <a href="#Politique de confidentialité"><i class=""></i>Politique de confidentialité </a>
            <a href="#Nos termes"><i class=""></i>Nos termes </a>
        </div>
        <div class="box">
            <h3>Info contact</h3>
            <a href="#"><i class=""></i>+216 74 934 817 </a>
            <a href="#"><i class=""></i> +216 70 755 819 </a>
            <a href="#"><i class=""></i>Odyssey@gmail.com </a>
            
        </div>
        <div class="box">
            <h3>Suivez-nous</h3>
            <a href="https://www.facebook.com/login.php/"><i class=""></i>Facebook </a>
            <a href="https://twitter.com/i/flow/login"><i class=""></i>Twitter </a>
            <a href="https://www.instagram.com/?hl=en"><i class=""></i>Instagram </a>
            <a href="https://www.linkedin.com/login"><i class=""></i>LinkedIn </a>
        </div>
    </div>
    <div class="home-right">
        Realisé par  Odys<span>sey</span> team <span>| </span>Tous  les droits dont réservés.
    </div>
</fieldset>


</footer>

</section>

<div class="text">
    <!--politique t confidentialite-->
    <section id="Politique de Confidentialité">
    <h1>Politique de Confidentialité</h1>
    <p> Odyssey s'engage à protéger la confidentialité et la sécurité de vos informations personnelles. Cette Politique de Confidentialité décrit comment nous collectons, utilisons et divulguons les informations personnelles que nous obtenons par le biais de notre site web, de notre application mobile et d'autres services (collectivement, les "Services").</p>
    
    <h2>Informations que Nous Collectons</h2>
    <p>Nous pouvons collecter des informations personnelles vous concernant lorsque vous interagissez avec nous, par exemple lorsque vous :</p>
    <ul>
        <li>Effectuez une réservation ou achetez un service de voyage.</li>
        <li>Créez un compte ou un profil.</li>
        <li>Vous abonnez à notre newsletter ou à nos communications marketing.</li>
        <li>Contactez le service client ou fournissez des commentaires.</li>
        <li>Participez à des enquêtes, concours ou promotions.</li>
    </ul>
    <ul>
    <p> Les types d'informations personnelles que nous pouvons collecter comprennent :</p>
    <li>Coordonnées (par exemple, nom, adresse e-mail, numéro de téléphone).</li>
    <li>Informations de paiement (par exemple, détails de carte de crédit).</li>
    <li>Préférences de voyage et détails de réservation.</li>
    <li>Informations démographiques (par exemple, âge, sexe, nationalité).</li>
    <li>Informations sur l'appareil et la navigation (par exemple, adresse IP, type de navigateur, cookies).</li>
</ul>
    <h2>Comment Nous Utilisons Vos Informations</h2>
    <ul><li>Fournir et personnaliser nos Services.</li>
    <li>Traiter les réservations et les paiements.</li>
    <li>Communiquer avec vous au sujet de vos réservations et demandes de renseignements.</li>
    <li>Vous envoyer des offres promotionnelles, des mises à jour et des newsletters.</li>
    <li>Améliorer nos produits, services et expérience client.</li>
    <li>Se conformer aux obligations légales et faire respecter nos politiques.</li>
</ul>
    <h2>Partage et Divulgation des Informations</h2>
    <ul><p>Nous pouvons partager vos informations personnelles avec des tiers dans les circonstances suivantes :</p>
    <li>Avec des prestataires de services et des partenaires qui nous aident à fournir nos Services.</li>
    <li>Avec des fournisseurs de voyages (par exemple, compagnies aériennes, hôtels, tour-opérateurs) pour remplir vos réservations.</li>
    <li>Avec des partenaires marketing et publicitaires pour vous envoyer des communications promotionnelles.</li>
    <li>Avec les autorités légales ou selon les exigences de la loi pour protéger nos droits et intérêts.</li>
    

    </ul><h2>Sécurité des Données</h2>
    <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos informations personnelles contre l'accès, la divulgation, l'altération ou la destruction non autorisés.</p>
    <!--nos termes-->
    </section>
    <section id="Nos termes">
    <h1>Nos termes</h1>
    <!--infromations qu nous collectons -->
    <h2>Informations que Nous Collectons sur Nos Utilisateurs</h2>
<p>Nous collectons plusieurs types d'informations personnelles afin de fournir nos services de manière efficace et personnalisée. Ces informations peuvent inclure :</p>
<ul>
    <li>Noms et prénoms</li>
    <li>Numéros de téléphone</li>
    <li>Localisations</li>
    <li>Pays de destination pour les vols</li>
</ul>
<p>Ces données sont essentielles pour traiter les réservations, personnaliser l'expérience utilisateur et assurer une communication efficace concernant les voyages et les services connexes.</p>

<!--comment nous utilisons vos informations-->
<h1>Comment Nous Utilisons Vos Informations</h1>
        <p>Nous utilisons les informations que nous collectons de différentes manières afin de vous fournir des services de qualité et une expérience utilisateur optimale :</p>
        
            <li><strong>Personnalisation des services :</strong> Nous utilisons vos informations pour personnaliser nos services en fonction de vos préférences et besoins spécifiques.</li>
            <li><strong>Traitement des réservations :</strong> Vos informations sont utilisées pour traiter vos réservations de manière efficace et sécurisée.</li>
            <li><strong>Communication avec vous :</strong> Nous utilisons vos coordonnées pour vous informer sur vos réservations, répondre à vos demandes de renseignements et vous envoyer des mises à jour pertinentes.</li>
            <li><strong>Offres promotionnelles :</strong> Nous pouvons vous envoyer des offres promotionnelles et des newsletters pour vous informer sur nos produits et services, ainsi que sur les promotions en cours.</li>
            <li><strong>Amélioration continue :</strong> Vos retours et informations nous aident à améliorer nos produits, services et votre expérience globale en tant qu'utilisateur.</li>
            <li><strong>Conformité légale :</strong> Nous utilisons vos informations pour nous conformer aux obligations légales et réglementaires en vigueur, ainsi que pour faire respecter nos politiques internes.</li>




</div>


<div id="comments">
    <!-- Existing comments will be displayed here -->
</div>



<script src="https://giscus.app/client.js"
        data-repo="devidabest/web"
        data-repo-id="R_kgDOLrn2_g"
        data-category="Announcements"
        data-category-id="DIC_kwDOLrn2_s4Cejvc"
        data-mapping="pathname"
        data-strict="0"
        data-reactions-enabled="1"
        data-emit-metadata="0"
        data-input-position="bottom"
        data-theme="preferred_color_scheme"
        data-lang="fr"
        crossorigin="anonymous"
        async>


    document.getElementById("commentForm").addEventListener("submit", function(event) {
        event.preventDefault(); 

        // Get values from the form
        var name = document.getElementById("name").value;
        var comment = document.getElementById("comment").value;

        // Create a new comment element
        var newComment = document.createElement("div");
        newComment.classList.add("comment");
        newComment.innerHTML = "<p><strong>" + name + ":</strong> " + comment + "</p>";

        // Append the new comment to the comments container
        document.getElementById("comments").appendChild(newComment);

        // Clear the form fields
        document.getElementById("name").value = "";
        document.getElementById("comment").value = "";
    });
</script>
</section>



</body>
</body>
</html>
