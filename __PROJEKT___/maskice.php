<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<!DOCTYPE HTML>
<html lang="hr">
	<head>
        <link rel="stylesheet" href="maskice.css">
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
        <h1>Iphone maskice</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#Iphone 14 maskice">Iphone 14 maskice</a></li> <br>
            <li><a href="#Iphone 14 Plus maskice">Iphone 14 Plus maskice</a></li> <br>
            <li><a href="#Iphone 14 Pro maskice">Iphone 14 Pro maskice</a></li> <br>
            <li><a href="#Iphone 14 Pro Max maskice">Iphone 14 Pro Max maske</a></li> <br>
        </ul>
    </nav>
    <main>
        <h2 id="Iphone 14 maskice">Iphone 14 maskice</h2>
        <section>
            <div>
                <figure id="Apple Silicone Case za iPhone 14 - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpt23.jpeg" alt="Apple Silicone Case za iPhone 14 - kompatibilan s MagSafe" title="Apple Silicone Case za iPhone 14 - kompatibilan s MagSafe">
                </figure>
                <h2>Apple Silicone Case za iPhone 14 - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple silikonska maska s MagSafeom je divan način da zaštitiš svoj iPhone. Svilenkasta, na dodir mekana obrada silikonske vanjštine odlično leži u ruci. A s unutarnje strane, tu je meka podstava od mikrovlakana za još veću zaštitu.</p>
                <p>S ugrađenim magnetima koji savršeno odgovaraju tvom iPhone-u, ova maska nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje, svaki put. Kada dođe vrijeme za punjenje, samo ostavi futrolu na svom iPhone-u i priključi MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Apple maska, prošla je tisuće sati testiranja tijekom procesa dizajna i proizvodnje. Dakle, ne samo da izgleda sjajno već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

            <div>
                <figure id="Apple Leather Case za iPhone 14 - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpp83_av3_t.jpg" alt="Apple Leather Case za iPhone 14 - kompatibilan s MagSafe" title="Apple Leather Case za iPhone 14 - kompatibilan s MagSafe">
                </figure>
                <h2>Apple Leather Case za iPhone 14 - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple kožna maska s MagSafeom je divan način da zaštitiš svoj iPhone, ali i dodaš malo stila. Izrađena je od posebno štavljene kože, izvana mekana na dodir, a s vremenom razvija prirodnu patinu. Maska lako sjeda na mjesto i čvrsto pristaje uz iPhone bez dodavanja težine.</p>
                <p>Savršeno postavljeni magneti čine bežično punjenje bržim i lakšim nego ikad prije. A kad dođe vrijeme za punjenje, samo ostavi masku na svom iPhoneu i stavi na MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Appleova maska, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p>Ova maska izrađena je od visokokvalitetne, podatne kože koja štiti tvoj iPhone. Koža je prirodni materijal i poput finog kožnog remena s vremenom može pokazati nabore, tragove ili patinu. Interakcija s MagSafe dodacima ostavit će blage tragove. Ako si zabrinut zbog ovoga, predlažemo da upotrijebiš silikonsku ili prozirnu futrolu za svoj iPhone.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 83,48 &euro;</p>
            </div> 

            <div>
                <figure id="iPhone 14 Clear Case with MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpu13_t.jpg" alt="iPhone 14 Clear Case with MagSafe" title="iPhone 14 Clear Case with MagSafe">
                </figure>
                <h2>iPhone 14 Clear Case with MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Tanak, lagan i jednostavan za rukovanje, Apple Clear Case pokazuje sjajnu boju iPhone-a, a istovremeno pruža dodatnu zaštitu.</p>
                <p>Case je napravljen od mješavine optički prozirnog polikarbonata i fleksibilnih materijala te savršeno pristaje preko gumba za jednostavnu uporabu. Unutarnja i vanjska strana casea imaju premaz otporan na ogrebotine. Svi materijali i premazi optimizirani su kako bi spriječili promjenu boje s vremenom.</p>
                <p>S ugrađenim magnetima koji savršeno prianjaju uz iPhone, Clear Case svaki put nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje. Kad dođe vrijeme za punjenje, samo ostavi case na iPhoneu i pričvrsti MagSafe punjač ili ga postavi na punjač s Qi certifikatom.</p>
                <p>Kao i svaki Apple case, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljen da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

        </section>
        <br> <br> <br> <br> <br>
        <h2 id="Iphone 14 Plus maskice">Iphone 14 Plus maskice</h2>
        <section>
            <div>
                <figure id="Apple Silicone Case za iPhone 14 Plus - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpt53.jpeg" alt="Apple Silicone Case za iPhone 14 Plus - kompatibilan s MagSafe" title="Apple Silicone Case za iPhone 14 Plus - kompatibilan s MagSafe" >
                </figure>
                <h2>Apple Silicone Case za iPhone 14 Plus - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple silikonska maska s MagSafeom je divan način da zaštitiš svoj iPhone. Svilenkasta, na dodir mekana obrada silikonske vanjštine odlično leži u ruci. A s unutarnje strane, tu je meka podstava od mikrovlakana za još veću zaštitu.</p>
                <p>S ugrađenim magnetima koji savršeno odgovaraju tvom iPhone-u, ova maska nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje, svaki put. Kada dođe vrijeme za punjenje, samo ostavi futrolu na svom iPhone-u i priključi MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Apple maska, prošla je tisuće sati testiranja tijekom procesa dizajna i proizvodnje. Dakle, ne samo da izgleda sjajno već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

            <div>
                <figure id="Apple Leather Case za iPhone 14 Plus - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpp93_av4_t.jpg" alt="Apple Leather Case za iPhone 14 Plus - kompatibilan s MagSafe" title="Apple Leather Case za iPhone 14 Plus - kompatibilan s MagSafe">
                </figure>
                <h2>Apple Leather Case za iPhone 14 Plus - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple kožna maska s MagSafeom je divan način da zaštitiš svoj iPhone, ali i dodaš malo stila. Izrađena je od posebno štavljene kože, izvana mekana na dodir, a s vremenom razvija prirodnu patinu. Maska lako sjeda na mjesto i čvrsto pristaje uz iPhone bez dodavanja težine.</p>
                <p>Savršeno postavljeni magneti čine bežično punjenje bržim i lakšim nego ikad prije. A kad dođe vrijeme za punjenje, samo ostavi masku na svom iPhoneu i stavi na MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Appleova maska, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p>Ova maska izrađena je od visokokvalitetne, podatne kože koja štiti tvoj iPhone. Koža je prirodni materijal i poput finog kožnog remena s vremenom može pokazati nabore, tragove ili patinu. Interakcija s MagSafe dodacima ostavit će blage tragove. Ako si zabrinut zbog ovoga, predlažemo da upotrijebiš silikonsku ili prozirnu futrolu za svoj iPhone.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 83,48 &euro;</p>
            </div>

            <div>
                <figure id="iPhone 14 Plus Clear Case with MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpu43_t.jpg" alt="iPhone 14 Plus Clear Case with MagSafe" title="iPhone 14 Plus Clear Case with MagSafe">
                </figure>
                <h2>iPhone 14 Plus Clear Case with MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Tanak, lagan i jednostavan za rukovanje, Apple Clear Case pokazuje sjajnu boju iPhone-a, a istovremeno pruža dodatnu zaštitu.</p>
                <p>Case je napravljen od mješavine optički prozirnog polikarbonata i fleksibilnih materijala te savršeno pristaje preko gumba za jednostavnu uporabu. Unutarnja i vanjska strana casea imaju premaz otporan na ogrebotine. Svi materijali i premazi optimizirani su kako bi spriječili promjenu boje s vremenom.</p>
                <p>S ugrađenim magnetima koji savršeno prianjaju uz iPhone, Clear Case svaki put nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje. Kad dođe vrijeme za punjenje, samo ostavi case na iPhoneu i pričvrsti MagSafe punjač ili ga postavi na punjač s Qi certifikatom.</p>
                <p>Kao i svaki Apple case, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljen da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

        </section>
        <br> <br> <br> <br> <br>
        <h2 id="Iphone 14 Pro maskice">Iphone 14 Pro maskice</h2>
        <section>
            <div>
                <figure id="Apple Silicone Case za iPhone 14 Pro - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mptg3.jpeg" alt="Apple Silicone Case za iPhone 14 Pro - kompatibilan s MagSafe" title="Apple Silicone Case za iPhone 14 Pro - kompatibilan s MagSafe" >
                </figure>
                <h2>Apple Silicone Case za iPhone 14 Pro - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple silikonska maska s MagSafeom je divan način da zaštitiš svoj iPhone. Svilenkasta, na dodir mekana obrada silikonske vanjštine odlično leži u ruci. A s unutarnje strane, tu je meka podstava od mikrovlakana za još veću zaštitu.</p>
                <p>S ugrađenim magnetima koji savršeno odgovaraju tvom iPhone-u, ova maska nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje, svaki put. Kada dođe vrijeme za punjenje, samo ostavi futrolu na svom iPhone-u i priključi MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Apple maska, prošla je tisuće sati testiranja tijekom procesa dizajna i proizvodnje. Dakle, ne samo da izgleda sjajno već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

            <div>
                <figure id="Apple Leather Case za iPhone 14 Pro - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpph3_av1_t.jpg" alt="Apple Leather Case za iPhone 14 Pro - kompatibilan s MagSafe" title="Apple Leather Case za iPhone 14 Pro - kompatibilan s MagSafe">
                </figure>
                <h2>Apple Leather Case za iPhone 14 Pro - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple kožna maska s MagSafeom je divan način da zaštitiš svoj iPhone, ali i dodaš malo stila. Izrađena je od posebno štavljene kože, izvana mekana na dodir, a s vremenom razvija prirodnu patinu. Maska lako sjeda na mjesto i čvrsto pristaje uz iPhone bez dodavanja težine.</p>
                <p>Savršeno postavljeni magneti čine bežično punjenje bržim i lakšim nego ikad prije. A kad dođe vrijeme za punjenje, samo ostavi masku na svom iPhoneu i stavi na MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Appleova maska, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p>Ova maska izrađena je od visokokvalitetne, podatne kože koja štiti tvoj iPhone. Koža je prirodni materijal i poput finog kožnog remena s vremenom može pokazati nabore, tragove ili patinu. Interakcija s MagSafe dodacima ostavit će blage tragove. Ako si zabrinut zbog ovoga, predlažemo da upotrijebiš silikonsku ili prozirnu futrolu za svoj iPhone.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 83,48 &euro;</p>
            </div>

            <div>
                <figure id="iPhone 14 Pro Clear Case with MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpu63_t.jpg" alt="iPhone 14 Pro Clear Case with MagSafe" title="iPhone 14 Pro Clear Case with MagSafe">
                </figure>
                <h2>iPhone 14 Pro Clear Case with MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Tanak, lagan i jednostavan za rukovanje, Apple Clear Case pokazuje sjajnu boju iPhone-a, a istovremeno pruža dodatnu zaštitu.</p>
                <p>Case je napravljen od mješavine optički prozirnog polikarbonata i fleksibilnih materijala te savršeno pristaje preko gumba za jednostavnu uporabu. Unutarnja i vanjska strana casea imaju premaz otporan na ogrebotine. Svi materijali i premazi optimizirani su kako bi spriječili promjenu boje s vremenom.</p>
                <p>S ugrađenim magnetima koji savršeno prianjaju uz iPhone, Clear Case svaki put nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje. Kad dođe vrijeme za punjenje, samo ostavi case na iPhoneu i pričvrsti MagSafe punjač ili ga postavi na punjač s Qi certifikatom.</p>
                <p>Kao i svaki Apple case, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljen da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

        </section>
        <br> <br> <br> <br> <br>
        <h2 id="Iphone 14 Pro Max maskice">Iphone 14 Pro Max maske</h2>
        <section>
            <div>
                <figure id="Apple Silicone Case za iPhone 14 Pro Max - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mptw3_2.jpeg" alt="Apple Silicone Case za iPhone 14 Pro Max - kompatibilan s MagSafe" title="Apple Silicone Case za iPhone 14 Pro Max - kompatibilan s MagSafe" >
                </figure>
                <h2>Apple Silicone Case za iPhone 14 Pro Max - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple silikonska maska s MagSafeom je divan način da zaštitiš svoj iPhone. Svilenkasta, na dodir mekana obrada silikonske vanjštine odlično leži u ruci. A s unutarnje strane, tu je meka podstava od mikrovlakana za još veću zaštitu.</p>
                <p>S ugrađenim magnetima koji savršeno odgovaraju tvom iPhone-u, ova maska nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje, svaki put. Kada dođe vrijeme za punjenje, samo ostavi futrolu na svom iPhone-u i priključi MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Apple maska, prošla je tisuće sati testiranja tijekom procesa dizajna i proizvodnje. Dakle, ne samo da izgleda sjajno već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

            <div>
                <figure id="Apple Leather Case za iPhone 14 Pro Max - kompatibilan s MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mppq3_av2_t.jpg" alt="Apple Leather Case za iPhone 14 Pro Max - kompatibilan s MagSafe" title="Apple Leather Case za iPhone 14 Pro Max - kompatibilan s MagSafe">
                </figure>
                <h2>Apple Leather Case za iPhone 14 Pro Max - kompatibilan s MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Apple kožna maska s MagSafeom je divan način da zaštitiš svoj iPhone, ali i dodaš malo stila. Izrađena je od posebno štavljene kože, izvana mekana na dodir, a s vremenom razvija prirodnu patinu. Maska lako sjeda na mjesto i čvrsto pristaje uz iPhone bez dodavanja težine.</p>
                <p>Savršeno postavljeni magneti čine bežično punjenje bržim i lakšim nego ikad prije. A kad dođe vrijeme za punjenje, samo ostavi masku na svom iPhoneu i stavi na MagSafe punjač ili ga postavi na svoj punjač s Qi certifikatom.</p>
                <p>Kao i svaka Appleova maska, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljena da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p>Ova maska izrađena je od visokokvalitetne, podatne kože koja štiti tvoj iPhone. Koža je prirodni materijal i poput finog kožnog remena s vremenom može pokazati nabore, tragove ili patinu. Interakcija s MagSafe dodacima ostavit će blage tragove. Ako si zabrinut zbog ovoga, predlažemo da upotrijebiš silikonsku ili prozirnu futrolu za svoj iPhone.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 83,48 &euro;</p>
            </div>

            <div>
                <figure id="iPhone 14 Pro Max Clear Case with MagSafe">
                    <img src="https://istyle.hr/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/m/p/mpu73_t.jpg" alt="iPhone 14 Pro Max Clear Case with MagSafe" title="iPhone 14 Pro Max Clear Case with MagSafe">
                </figure>
                <h2>iPhone 14 Pro Max Clear Case with MagSafe</h2>
                <p style="color: red; font-size: 20px;">Detalji:</p>
                <p>Tanak, lagan i jednostavan za rukovanje, Apple Clear Case pokazuje sjajnu boju iPhone-a, a istovremeno pruža dodatnu zaštitu.</p>
                <p>Case je napravljen od mješavine optički prozirnog polikarbonata i fleksibilnih materijala te savršeno pristaje preko gumba za jednostavnu uporabu. Unutarnja i vanjska strana casea imaju premaz otporan na ogrebotine. Svi materijali i premazi optimizirani su kako bi spriječili promjenu boje s vremenom.</p>
                <p>S ugrađenim magnetima koji savršeno prianjaju uz iPhone, Clear Case svaki put nudi čarobno iskustvo pričvršćivanja i brže bežično punjenje. Kad dođe vrijeme za punjenje, samo ostavi case na iPhoneu i pričvrsti MagSafe punjač ili ga postavi na punjač s Qi certifikatom.</p>
                <p>Kao i svaki Apple case, prolazi kroz tisuće sati testiranja tijekom procesa projektiranja i proizvodnje. Dakle, ne samo da izgleda sjajno, već je i napravljen da zaštiti tvoj iPhone od ogrebotina i padova.</p>
                <p class="price" style="color: darkblue;"><span>Cijena:</span> 72,86 &euro;</p>
            </div>

        </section>
   
    </main>
    
    <footer>
        Copyright &copy; 2024 Tin Navrboc.
        <a href="https://github.com/TinNavrboc" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>



</body>



</html>