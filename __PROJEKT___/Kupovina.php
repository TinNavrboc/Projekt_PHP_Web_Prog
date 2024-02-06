<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE HTML>
<html lang="hr">
	<head>
        <link rel="stylesheet" href="kupovina.css">
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Projektni zadatak">
		<meta name="keywords" content="">
		<meta name="author" content="Tin Navrboc">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    
    
    
    </head>


<body>
    <nav>
        <ul>
            <li><a href="index.php">Naslovna</a></li>
            <li><a href="Kupovina.php">Mobiteli</a></li>
            <li><a href="maskice.php">Maskice</a></li>
            <li><a href="kabeli_napajanja_adapteri.php">Adapteri i kabeli</a></li>
            <li><a href="Zastita_za_zaslon.php">Zaštita za zaslon</a></li>
            <?php
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                    
                    echo '<li><a href="registration.php">Registracija</a></li>';		  
                    echo '<li><a href="signIn.php">Prijava</a></li>'; 
                
                } else {
                    echo '<li class="greeting-signOut-container">';				
					echo '<a id="signOut-link" href="signOut.php">Odjava</a>';
                    echo '</li>';
                }
            ?>
        </ul>
    </nav>
    <header>
        <h1>Modeli mobitela</h1>
    </header>
    <main>
        <section>
            <div>
                <figure id="IPhone 14">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/c/z/czcs_iphone14_q422_productred_pdp_image_position-1a_t_1_4_3.jpg" alt="Iphone 14" title="Iphone 14" >
                </figure> 
                <h2>Iphone 14</h2>
                <p style="color: red; font-weight: bold;">Glavne specifikacije:</p>
                <p>Najavljen je 7. rujna 2022.godine, a izašao je na tržište 16. rujna 2022.godine.</p>
                <p>Veličina zaslona: 6.1"</p>
                <p>Rezoluzija zaslona: 1170x2532 piksela</p>
                <p>Memorija: 6GB RAM</p>
                <p>Baterija: 3279 mAh</p>
                <p>Glavna kamera: 12MP</p>
                <a href="https://www.gsmarena.com/apple_iphone_14-11861.php" target="_blank">Dodatne Specifikacije</a> <br> <br> 
                <p class="price"><span>128 GB</span> <br> <span>Cijena:</span> 1.118,72 &euro;</p>
                <p class="price"><span>256 GB</span> <br> <span>Cijena:</span> 1.267,37 &euro;</p>
                <p class="price"><span>512 GB</span> <br> <span>Cijena:</span> 1.556,71 &euro;</p>
            </div>
            <div>
                <figure id="iPhone 14 Plus">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/c/z/czcs_iphone14plus_q422_midnight_pdp_image_position-5_t_4.jpg" alt="iPhone 14 Plus" title="iPhone 14 Plus">
                </figure>
                <h2>iPhone 14 Plus</h2>
                <p style="color: red; font-weight: bold;">Glavne specifikacije:</p>
                <p>Najavljen je 7. rujna 2022.godine, a izašao je na tržište 7. listopada 2022.godine.</p>
                <p>Veličina zaslona: 6.7"</p>
                <p>Rezoluzija zaslona: 1284x2778 piksela</p>
                <p>Memorija: 6GB RAM</p>
                <p>Baterija: 4323 mAh</p>
                <p>Glavna kamera: 12MP</p>
                <a href="https://www.gsmarena.com/apple_iphone_14_plus-11862.php" target="_blank">Dodatne Specifikacije</a> <br> <br>
                <p class="price"><span>128 GB</span> <br> <span>Cijena:</span> 1.287,28 &euro;</p>
                <p class="price"><span>256 GB</span> <br> <span>Cijena:</span> 1.437,26 &euro;</p>
                <p class="price"><span>512 GB</span> <br> <span>Cijena:</span> 1.725,26 &euro;</p>
            </div>
            <div>
                <figure id="iPhone 14 Pro">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/c/z/czcs_iphone14pro_q422_silver_pdp-images_position-1a_t_1_4_4.jpg" alt="iPhone 14 Pro" title="iPhone 14 Pro">
                </figure>
                <h2>iPhone 14 Pro</h2>
                <p style="color: red; font-weight: bold;">Glavne specifikacije:</p>
                <p>Najavljen je 7. rujna 2022.godine, a izašao je na tržište 16. rujna 2022.godine.</p>
                <p>Veličina zaslona: 6.1"</p>
                <p>Rezoluzija zaslona: 1179x2556 piksela</p>
                <p>Memorija: 6GB RAM</p>
                <p>Baterija: 3200 mAh</p>
                <p>Glavna kamera: 48MP</p>
                <a href="https://www.gsmarena.com/apple_iphone_14_pro-11860.php" target="_blank">Dodatne Specifikacije</a>
                <p class="price"><span>128 GB</span> <br> <span>Cijena:</span> 1.457,16 &euro;</p>
                <p class="price"><span>256 GB</span> <br> <span>Cijena:</span> 1.605,81 &euro;</p>
                <p class="price"><span>512 GB</span> <br> <span>Cijena:</span> 1.895,15 &euro;</p>
                <p class="price"><span>1 TB</span> <br> <span>Cijena:</span> 2.187,14 &euro;</p>
            </div>
            <div>
                <figure id="iPhone 14 Pro Max">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/c/z/czcs_iphone14promax_q422_gold_pdp-images_position-1a_t_9_4.jpg" alt="iPhone 14 Pro Max" title="iPhone 14 Pro Max">
                </figure>
                <h2>iPhone 14 Pro Max</h2>
                <p style="color: red; font-weight: bold;">Glavne specifikacije:</p>
                <p>Najavljen je 7. rujna 2022.godine, a izašao je na tržište 16. rujna 2022.godine.</p>
                <p>Veličina zaslona: 6.7"</p>
                <p>Rezoluzija zaslona: 1290x2796 piksela</p>
                <p>Memorija: 6GB RAM</p>
                <p>Baterija: 4323 mAh</p>
                <p>Glavna kamera: 48MP</p>
                <a href="https://www.gsmarena.com/apple_iphone_14_pro_max-11773.php" target="_blank">Dodatne Specifikacije</a>
                <p class="price"><span>128 GB</span> <br> <span>Cijena:</span> 1.627,05 &euro;</p>
                <p class="price"><span>256 GB</span> <br> <span>Cijena:</span> 1.775,70 &euro;</p>
                <p class="price"><span>512 GB</span> <br> <span>Cijena:</span> 2.063,71 &euro;</p>
                <p class="price"><span>1 TB</span> <br> <span>Cijena:</span> 2.359,68 &euro;</p>
            </div>

        </section>
    </main>

    <footer>
        Copyright &copy; 2024 Tin Navrboc.
        <a href="https://github.com/TinNavrboc" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>



</body>



</html>