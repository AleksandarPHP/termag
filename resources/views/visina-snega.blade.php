@include('partials/header')

<main>
    <section class="weather">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="wrapper">
                <h1 class="title-larger">Visina Snijega</h1>
                <p class="txt">
                    Uživajte u raznolikosti vremenskih prilika na Jahorini. Na nadmorskoj visini od skoro 2000 metara, doživite spoj planinske svježine i i bistrog vazduha. Zimski mjeseci donose obilan sniježni pokrivač pogodan za zimske radosti uz dosta niske temperature. U ljetnjim mjesecima imamo osvježavajuće toplu klimu koja je idealna za razne vanjske aktivnosti i istraživanje prirodnih ljepota Jahorine.
                </p>
                <h4>API</h4>
            </div>
        </div>
    </section>
    <section class="villa-termag">
        <div class="bg" style="background-image: url('{{asset("assets/images/planiranje-bg.jpg")}}');"></div>
        <div class="container">
            <div>
                <div class="cardd" data-aos="fade-right" data-aos-duration="600">
                    <h2>Planiranje dana</h2>
                    <p class="txt mb-4">
                    U skladu sa vremenskim prilikama isplanirajte svoj dan, kako biste maksimalno iskoristili svaki trenutak. Praćenje vremena je važno na planini jer tako možete rasporediti svoje aktivnosti u skladu sa vremenom. Sunčane zimske dane iskoristite za skijanje, dok oblačan dan možete provesti u wellnes centru ili u šetnji.
                    </p>
                    <p class="txt mb-4">
                    Na našoj stranici “Vrijeme”, imate mogućnost da pratite vremenske prilike te tako, na najbolji način isplanirajte svoj savršen dan na Jahorini.
                    </p>
                    <p class="txt">
                    Na našoj stranici “Vrijeme”, imate mogućnost da pratite vremenske prilike te tako, na najbolji način isplanirajte svoj savršen dan na Jahorini.  
                    </p>
                    <a href="#" class="btnn btn_primary">Book now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="wellness-spa ">
        <div class="bg" style="background-image: url('{{asset("assets/images/saveti-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>Savjeti za skijaše</h2>
                <p class="txt mb-4">
                    Pripremili smo nekoliko korisnih savjeta za skijaše, kako bi im olakšali planiranje i realizaciju dana sa ski stazi. Poštujući ove savjete, unaprijedite maksimalno skijaško iskustvo.
                <ol>
                    <li>
                       <strong>Pratite vremenske uslove na stazi</strong> -  prije nego što se zaputite na stazu, i započnete svoju skijašku avanturu za taj dan, provjerite vremensku prognozu kako bi se na najbolji način prilagodili uslovima na stazi.   
                    </li>
                    <li>
                       <strong>Prilagodite opremu vremenskim prilikama</strong> - oprema je segment skijanja koji se ne smije zapostaviti. Ukoliko je najavljen hladan dan, obucite se adekvatno i uživajte na ski stazi bez posledica.
                    </li>
                    <li>
                       <strong>Istražite različite staze</strong> - Ne odgovaraju svi vremenski uslovi podjednako svim ski stazama. Zato dobro istražite i izaberite onu koja savršeno odgovara vremenskim prilikama za taj dan. Ukoliko su vremenski uslovi i vidljivost loša, izaberite manje zahtjevne staze. Na lijepom i sunčanom danu, birajte one izazovnije.
                    </li>
                </ol>
                <a href="#" class="btnn btn_primary">Book Now</a>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')
