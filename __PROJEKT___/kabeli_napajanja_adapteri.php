<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE HTML>
<html lang="hr">
	<head>
        <link rel="stylesheet" href="kabeli_napajanja_adapteri.css">
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Projektni zadatak">
		<meta name="keywords" content="">
		<meta name="author" content="Tin Navrboc">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    
    
    </head>


<body>
    <nav class="uvjeti">
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
        <h1>Adapteri i kabeli</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#Adapteri">Adapteri</a></li> <br>
            <li><a href="#Kabeli">Kabeli</a></li> <br>
        </ul>
    </nav>
    <main>
        <h2 id="Adapteri">Adapteri</h2>
        <section>
            <div>
                <figure id="20W USB-C Power Adapter">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/u/mu7v2_geo_emea_1.jpg" alt="20W USB-C Power Adapter" title="20W USB-C Power Adapter" >
                </figure> 
                <h2>20W USB-C Power Adapter</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple USB-C adapter za napajanje od 20 W omogućuje brzo i učinkovito punjenje kod kuće, u uredu ili na putu. Iako je adapter za napajanje kompatibilan s bilo kojim uređajem s podrškom za USB-C.</p>
                <p>Kabel za punjenje prodaje se zasebno.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 34,38 &euro;</p>
            </div>

            <div>
                <figure id="Apple 35W Dual USB-C Port Power Adapter">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/n/mnwp3_geo_emea.jpeg" alt="Apple 35W Dual USB-C Port Power Adapter" title="Apple 35W Dual USB-C Port Power Adapter" >
                </figure> 
                <h2>Apple 35W Dual USB-C Port Power Adapter</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Power adapter s dva USB‑C priključka od 35W omogućuje ti punjenje dva uređaja u isto vrijeme, bilo da si kod kuće ili u uredu.</p>
                <p>U kombinaciji s Apple Travel Adapter Kitom, ovaj adapter možete koristiti za punjenje bilo gdje u svijetu.</p>
                <p>Kabel za punjenje prodaje se zasebno.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 75,52 &euro;</p>
            </div> 

        </section>
        <br> <br> <br> <br> <br>
        <h2 id="Kabeli">Kabeli</h2>
        <section>
            <div>
                <figure id="Apple Lightning USB Kabel 0,5m">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/d/md818_1.jpeg" alt="Apple Lightning USB Kabel 0,5m" title="Apple Lightning USB Kabel 0,5m" >
                </figure> 
                <h2>Apple Lightning USB Kabel 0,5m</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple Lightning to USB Cable Vam omogućava spajanje Vašeg iPhone uređaja s Lightning konektorom s USB utorom na Vašem računalu za sinkronizaciju i punjenje, ili s Apple USB Power Adapterom za ugodnije punjenje uređaja preko zidne utičnice.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 30,39 &euro;</p>
            </div> 

            <div>
                <figure id="Apple USB-C to Lightning Cable (1 m)">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/m/mm0a3.jpeg" alt="Apple USB-C to Lightning Cable (1 m)" title="Apple USB-C to Lightning Cable (1 m)" >
                </figure> 
                <h2>Apple USB-C to Lightning Cable (1 m)</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>USB-C kabel s Lightning priključkom omogućuje punjenje i sinkroniziranje iPhone uređaja.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 29,07 &euro;</p>
            </div>

            <div>
                <figure id="Apple Lightning to USB Cable (1m)">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/x/mxly2zma-01_big.jpg" alt="Apple Lightning to USB Cable (1m)" title="Apple Lightning to USB Cable (1m)" >
                </figure> 
                <h2>Apple Lightning to USB Cable (1m)</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Ovaj USB kabel iz Applea vam omogućuje da povežete vaše različite iPhone modele koji imaju Lightning konektor s USB priključkom računala kako biste omogućili sinkronizaciju i punjenje.</p>
                <p>Moguće je napuniti uređaje putem zidne utičnice u slučaju da je kabel povezan s Apple USB Power Adapterom. Jedan od glavnih naglasaka Appleovog Lightning to USB kabla dužine od 1 metra je neizmjenjiv dizajn.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 30,39 &euro;</p>
            </div>

            <div>
                <figure id="Apple USB-C to Lightning Cable (2 m)">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/a/p/apple_usb-c_lightning_cable_retina_1_6.jpg" alt="Apple USB-C to Lightning Cable (2 m)" title="Apple USB-C to Lightning Cable (2 m)" >
                </figure> 
                <h2>Apple USB-C to Lightning Cable (2 m)</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>USB-C kabel s Lightning priključkom omogućuje punjenje i sinkroniziranje iPhone uređaja.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 46,32 &euro;</p>
            </div>

        </section>
        <br> <br> <br> <br>

   
    </main>

    <footer>
        Copyright &copy; 2024 Tin Navrboc.
        <a href="https://github.com/TinNavrboc" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>



</body>



</html>