<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE HTML>
<html lang="hr">
	<head>
        <link rel="stylesheet" href="zastita_za_zaslon.css">
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
        <h1>Zaštita za zaslon</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#Zaštitna stakla za Iphone 14">Zaštitna stakla za Iphone 14</a></li> <br>
            <li><a href="#Zaštitna stakla za Iphone 14 Plus">Zaštitna stakla za Iphone 14 Plus</a></li> <br>
            <li><a href="#Zaštitna stakla za Iphone 14 Pro">Zaštitna stakla za Iphone 14 Pro</a></li> <br>
            <li><a href="#Zaštitna stakla za Iphone 14 Pro Max">Zaštitna stakla za Iphone 14 Pro Max</a></li> <br>

        </ul>
    </nav>
    <main>
        <h2 id="Zaštitna stakla za Iphone 14">Zaštitna stakla za Iphone 14</h2>
        <section>
            <div>
                <figure id="Next One Tempered glass screen protector za iPhone 14">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14-tmp-4_3.jpg" alt="Next One Tempered glass screen protector za iPhone 14" title="Next One Tempered glass screen protector za iPhone 14" >
                </figure> 
                <h2>Next One Tempered glass screen protector za iPhone 14</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One screen protector od kaljenog stakla lagan je, ali čvrst, jednostavan, ali pouzdan. Korisnik više ne mora brinuti o otiscima prstiju.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 21,10 &euro;</p>
            </div>

            <div>
                <figure id="Next One All-rounder glass screen protector za iPhone 14">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14-alr-2_2.jpg" alt="Next One All-rounder glass screen protector za iPhone 14" title="Next One All-rounder glass screen protector za iPhone 14" >
                </figure> 
                <h2>Next One All-rounder glass screen protector za iPhone 14</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Svestrani glass screen protectori tvrtke Next One dizajnirani su da 100% odgovaraju obliku uređaja. Originalni dodir nešto je što korisnici najviše cijene. Korištenje tvog uređaja bit će potpuno isto, samo sigurnije.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 31,72 &euro;</p>
            </div>

            <div>
                <figure id="NEXT ONE All-rounder privacy glass screen protector za iPhone 14">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14-prv-3.png" alt="NEXT ONE All-rounder privacy glass screen protector za iPhone 14" title="NEXT ONE All-rounder privacy glass screen protector za iPhone 14" >
                </figure> 
                <h2>NEXT ONE All-rounder privacy glass screen protector za iPhone 14</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One All-rounder privacy glass screen protector pruža privatnost i zaštitu protiv ogrebotina i povremenih padova. Privatnost znači da je sadržaj displeja tvog telefona vidljiv samo onima koji direktno gledaju u njega, što znači da efikasno štiti osobne podatke.</p>
                <p>Samoljepljivost osigurava jednostavnu instalaciju na tvoj telefon. Jednostavno i za neiskusne korisnike. U paketu dolazi i aplikator kojim ga lako možeš instalirati na svoj telefon u samo 5 koraka. Oleofobni nano premaz osigurava zaštitu od otisaka prstiju, prašine i odbija masnoću. Rezolucija pruža vizualni užitak i štiti oči. Ova zaštita se lako koristi uz bilo koju masku.</p>
                <p>Zaštitno staklo je dizajnirano za iPhone i štiti ga zahvaljujući 9H ocjeni tvrdoće. Ako ti telefon slučajno ispadne, kaljeno staklo pruža savršenu zaštitu displeju tvog uređaja.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 41,01 &euro;</p>
            </div>
        
        </section>
        <br> <br> <br> <br> <br>
        <h2 id="Zaštitna stakla za Iphone 14 Plus">Zaštitna stakla za Iphone 14 Plus</h2>
        <section>
            <div>
                <figure id="Next One Tempered glass screen protector za iPhone 14 Plus">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14max-tmp-4_3.jpg" alt="Next One Tempered glass screen protector za iPhone 14 Plus" title="Next One Tempered glass screen protector za iPhone 14 Plus" >
                </figure> 
                <h2>Next One Tempered glass screen protector za iPhone 14 Plus</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One screen protector od kaljenog stakla lagan je, ali čvrst, jednostavan, ali pouzdan. Korisnik više ne mora brinuti o otiscima prstiju.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 21,10 &euro;</p>
            </div>

            <div>
                <figure id="Next One All-rounder glass screen protector za iPhone 14 Plus">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14max-alr-2_3.jpg" alt="Next One All-rounder glass screen protector za iPhone 14 Plus" title="Next One All-rounder glass screen protector za iPhone 14 Plus" >
                </figure> 
                <h2>Next One All-rounder glass screen protector za iPhone 14 Plus</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Svestrani glass screen protectori tvrtke Next One dizajnirani su da 100% odgovaraju obliku uređaja. Originalni dodir nešto je što korisnici najviše cijene. Korištenje tvog uređaja bit će potpuno isto, samo sigurnije.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 31,72 &euro;</p>
            </div>

            <div>
                <figure id="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Plus">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14max-prv-3.png" alt="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Plus" title="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Plus" >
                </figure> 
                <h2>NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Plus</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One All-rounder privacy glass screen protector pruža privatnost i zaštitu protiv ogrebotina i povremenih padova. Privatnost znači da je sadržaj displeja tvog telefona vidljiv samo onima koji direktno gledaju u njega, što znači da efikasno štiti osobne podatke.</p>
                <p>Samoljepljivost osigurava jednostavnu instalaciju na tvoj telefon. Jednostavno i za neiskusne korisnike. U paketu dolazi i aplikator kojim ga lako možeš instalirati na svoj telefon u samo 5 koraka. Oleofobni nano premaz osigurava zaštitu od otisaka prstiju, prašine i odbija masnoću. Rezolucija pruža vizualni užitak i štiti oči. Ova zaštita se lako koristi uz bilo koju masku.</p>
                <p>Zaštitno staklo je dizajnirano za iPhone i štiti ga zahvaljujući 9H ocjeni tvrdoće. Ako ti telefon slučajno ispadne, kaljeno staklo pruža savršenu zaštitu displeju tvog uređaja.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 41,01 &euro;</p>
            </div>
        
        </section>
        <br> <br> <br> <br>
        <h2 id="Zaštitna stakla za Iphone 14 Pro">Zaštitna stakla za Iphone 14 Pro</h2>
        <section>
            <div>
                <figure id="Next One Tempered glass screen protector za iPhone 14 Pro">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14pro-tmp-5_1.jpg" alt="Next One Tempered glass screen protector za iPhone 14 Pro" title="Next One Tempered glass screen protector za iPhone 14 Pro" >
                </figure> 
                <h2>Next One Tempered glass screen protector za iPhone 14 Pro</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One screen protector od kaljenog stakla lagan je, ali čvrst, jednostavan, ali pouzdan. Korisnik više ne mora brinuti o otiscima prstiju.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 21,10 &euro;</p>
            </div>

            <div>
                <figure id="Next One All-rounder glass screen protector za iPhone 14 Pro">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14pro-alr-2_2.jpg" alt="Next One All-rounder glass screen protector za iPhone 14 Pro" title="Next One All-rounder glass screen protector za iPhone 14 Pro" >
                </figure> 
                <h2>Next One All-rounder glass screen protector za iPhone 14 Pro</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Svestrani glass screen protectori tvrtke Next One dizajnirani su da 100% odgovaraju obliku uređaja. Originalni dodir nešto je što korisnici najviše cijene. Korištenje tvog uređaja bit će potpuno isto, samo sigurnije.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 31,72 &euro;</p>
            </div>

            <div>
                <figure id="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14pro-prv-4.png" alt="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro" title="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro" >
                </figure> 
                <h2>NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One All-rounder privacy glass screen protector pruža privatnost i zaštitu protiv ogrebotina i povremenih padova. Privatnost znači da je sadržaj displeja tvog telefona vidljiv samo onima koji direktno gledaju u njega, što znači da efikasno štiti osobne podatke.</p>
                <p>Samoljepljivost osigurava jednostavnu instalaciju na tvoj telefon. Jednostavno i za neiskusne korisnike. U paketu dolazi i aplikator kojim ga lako možeš instalirati na svoj telefon u samo 5 koraka. Oleofobni nano premaz osigurava zaštitu od otisaka prstiju, prašine i odbija masnoću. Rezolucija pruža vizualni užitak i štiti oči. Ova zaštita se lako koristi uz bilo koju masku.</p>
                <p>Zaštitno staklo je dizajnirano za iPhone i štiti ga zahvaljujući 9H ocjeni tvrdoće. Ako ti telefon slučajno ispadne, kaljeno staklo pruža savršenu zaštitu displeju tvog uređaja.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 41,01 &euro;</p>
            </div>
        
        </section>
        <br> <br> <br> <br>
        <h2 id="Zaštitna stakla za Iphone 14 Pro Max">Zaštitna stakla za Iphone 14 Pro Max</h2>
        <section>
            <div>
                <figure id="Next One Tempered glass screen protector za iPhone 14 Pro Max">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14promax-tmp-5_1.jpg" alt="Next One Tempered glass screen protector za iPhone 14 Pro Max" title="Next One Tempered glass screen protector za iPhone 14 Pro Max" >
                </figure> 
                <h2>Next One Tempered glass screen protector za iPhone 14 Pro Max</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One screen protector od kaljenog stakla lagan je, ali čvrst, jednostavan, ali pouzdan. Korisnik više ne mora brinuti o otiscima prstiju.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 21,10 &euro;</p>
            </div>

            <div>
                <figure id="Next One All-rounder glass screen protector za iPhone 14 Pro Max">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14-alr-2_1.jpg" alt="Next One All-rounder glass screen protector za iPhone 14 Pro Max" title="Next One All-rounder glass screen protector za iPhone 14 Pro Max" >
                </figure> 
                <h2>Next One All-rounder glass screen protector za iPhone 14 Pro Max</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Svestrani glass screen protectori tvrtke Next One dizajnirani su da 100% odgovaraju obliku uređaja. Originalni dodir nešto je što korisnici najviše cijene. Korištenje tvog uređaja bit će potpuno isto, samo sigurnije.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 31,72 &euro;</p>
            </div>

            <div>
                <figure id="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro Max">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iph-14promax-prv-4.png" alt="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro Max" title="NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro Max" >
                </figure> 
                <h2>NEXT ONE All-rounder privacy glass screen protector za iPhone 14 Pro Max</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Next One All-rounder privacy glass screen protector pruža privatnost i zaštitu protiv ogrebotina i povremenih padova. Privatnost znači da je sadržaj displeja tvog telefona vidljiv samo onima koji direktno gledaju u njega, što znači da efikasno štiti osobne podatke.</p>
                <p>Samoljepljivost osigurava jednostavnu instalaciju na tvoj telefon. Jednostavno i za neiskusne korisnike. U paketu dolazi i aplikator kojim ga lako možeš instalirati na svoj telefon u samo 5 koraka. Oleofobni nano premaz osigurava zaštitu od otisaka prstiju, prašine i odbija masnoću. Rezolucija pruža vizualni užitak i štiti oči. Ova zaštita se lako koristi uz bilo koju masku.</p>
                <p>Zaštitno staklo je dizajnirano za iPhone i štiti ga zahvaljujući 9H ocjeni tvrdoće. Ako ti telefon slučajno ispadne, kaljeno staklo pruža savršenu zaštitu displeju tvog uređaja.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 41,01 &euro;</p>
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