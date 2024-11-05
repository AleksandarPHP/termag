@include('partials/header')

<main>
    <section class="career">
        <video autoplay muted loop>
            <source
                src="{{ asset('assets/videos/ski.mp4') }}"
                type="video/mp4"
            />
        </video>
        <div class="overlay"></div>

        <div class="container">
            <div class="content-wrapper">
                <h4 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">Upoznajte ski staze na Jahorini</h4>
                <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-delay="750">Ski Staze</h1>
            </div>
        </div>
    </section>
    @include('partials/booking') 
    @include('partials/socials')

    <section class="special get-to-know">
        <div class="bg center" style="background-image: url('{{asset("assets/images/ski-staze.jpg")}}');"></div>
        <div class="container">
            <h2 class="title-smaller">Upoznajte ski staze na Jahorini</h2>
            <p class="txt">
               <strong>Jahorina je planina u Bosni i Hercegovini koja je izuzetno bogata ski stazama</strong>, te je zbog toga jako popularna među ljubiteljima zimskih sportova. Ski staze na Jahorini su dužine <strong>nevjerovatnih 55 kilometara</strong>, od čega su alpske skijaške staze 45, a nordijske 10 kilometara. Neke od najpoznatijih su: ski staza Poljice, Ogorjelica 1 i 2, staza Novak Đoković, Rajska dolina, Olimpijski slalom, Olimpijski veleslalom, Olimpijski spust, Prača… Svaka od ovih staza ima svoje specificnosti i prednosti te će zadovoljiti sve vaše kriterijume i očekivanja koja imate. Razlikuju se po težini spusta, te razlikujemo lake, srednje teške i teške staze. Do njih se dolazi dobro osmišljenim ski transportom na koji je planina Jahorina posebno ponosna. Skijanje na Jahorini je jedan poseban doživljaj koji morate priuštiti i sebi ali i svojim mališanima, jer Jahorina posjeduje i ski staze koje su namijenjene isključivo njima. Postoje posebni ski vrtići koji će najmlađe skijaše pripremiti za izlazak na stazu. Jahorina nudi i usluge ski škola a iskusni instruktori će vas na najbolji mogući način pripremiti za nove skijaške poduhvate. Ono što je takođe važno jeste da su staze međusobno povezane te je moguće da prelazite iz jedne u drugu i da tako vaš spust učinite još zanimljivijim. Bez obzira na vaš nivo iskustva, Jahorina ce vam ponuditi skijaške mogućnosti prilagođene upravo vama.
            </p>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="600">
                    <div class="cardd" >
                          <h3>Ski staza Poljice</h3>
                          <p class="txt">
                            dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. 
                          </p>
                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                      </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="600">
                    <div class="cardd" >
                          <h3>Ski staza Ogorjelica 1</h3>
                          <p class="txt">
                            dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. 
                          </p>
                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                      </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="600">
                    <div class="cardd" >
                          <h3>Ski staza Ogorjelica 2</h3>
                          <p class="txt">
                            dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. 
                          </p>
                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                      </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="600">
                    <div class="cardd" >
                          <h3>Rajska dolina</h3>
                          <p class="txt">
                            dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. 
                          </p>
                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                      </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="600">
                    <div class="cardd" >
                          <h3>Ski staza Novak Djokovic</h3>
                          <p class="txt">
                            dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. 
                          </p>
                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                      </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="600">
                    <div class="cardd" >
                          <h3>Olimpijski slalom i Olimpijski spust</h3>
                          <p class="txt">
                            dizajniran i osmišljen tako da zaljubljenim parovima omogući bijeg iz svakodnevnice i izmještanje iz realnosti. Uživaćete u dugim romantičnim šetnjama, masažama, romantičnim večerama, opuštajućim kupkama uz slobodno korišćenje SPA centra. Priredite svom partneru i sebi nezaboravno iskustvo koje kombinuje opuštanje i uživanje u romantičnim momentima. Doživite romansu u hotelu Termag. 
                          </p>
                          <a href="#" class="btnn btn_gold">Saznaj Više</a>
                      </div>
                </div>
            </div>
            </div>
    </section>

    <section class="accommodation accommodation2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600">
                    <div class="content-wrapper">
                    <h4 class="subtitle">Luksuz i ugođaj u savršenom skladu</h4>
                    <h2 class="title">Smještaj Hotela</h2>
                    <p class="txt">Nasa ponuda uključuje 71 sobu i 21 apartman uključujući i ekskluzivni predsjednički apartman. Svaka smještajna jedinica u našem hotelu je dizajnirana sa posebnom pažnjom uz akcenat na ručno izrađenom drvenom namještaju i rustičnim elementima koji savršeno dočaravaju idiličnu planinsku atmosferu. Od SUPERIOR apartmana sa francuskim ležajevima do FAMILY apartmana koji su idealni za porodični odmor, svaki apartman nudi vrhunski komfor, modernu opremljenost brzim internetom, kablovskom tv i mini barom. Doživite nezaboravne trenutke u Termag hotelu gdje svaki detalj govori priču o gostoprimstvu i toplini.</p>
                    <a href="#" class="btnn btn_gold">Saznaj više</a>
                </div>
                </div>
                <div class="col-lg-7"></div>
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

    <section class="special ski-offers">
        <div class="bg" style="opacity: 0.2; z-index: -1; background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <h2 class="title-smaller">Ski Ponude</h2>
            <p class="txt">
                Naša ponuda uključuje 71 sobu i 21 apartman, uključujući ekskluzivni predsjednički apartman. Svaki prostor je pažljivo dizajniran, sa ručno izrađenim namještajem od drveta i rustičnim elementima koji odražavaju bogatstvo pla
            </p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card" data-aos="fade-right" data-aos-duration="600">
                        <img src="{{asset('assets/images/offer-1.png')}}" class="card-img-top" alt="porodicni paket">
                        <div class="card-body">
                          <h5>Noćno skijanje</h5>
                          <p class="txt">
                            Pored toga što je planina Jahorina izuzetno zanimljiva skijašima i ljubiteljima snijega i zimskih sportova, ona nudi i brojne druge aktivnosti za uživanje i opuštanje. Noćno skijanje je jedno posebno iskustvo koje vam toplo preporučujemo da isprobate ukoliko do sada niste. Jahorina je noću jedno magično mjesto, koje uz rasvjetu zablista jednim posebnim svjetlom. Atmosfera na noćnom skijanju je neponovljiva te predstavlja poseban izazov i izuzetno zanimljivu skijašku avanturu.
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" data-aos="fade-left" data-aos-duration="600">
                        <img src="{{asset('assets/images/offer-2.png')}}" class="card-img-top" alt="Romantični Paket">
                        <div class="card-body">
                          <h5>Škola Skijanja</h5>
                          <p class="txt">
                            Ski škole na Jahorini su tu da vas brzo i efikasno nauče osnovama skijanja, te da vas pripreme za skijaške izazove koji vas čekaju. Iskusni i ljubazni instruktori skijanja će vas na najbolji način pripremiti za ovaj novi svijet.
                          </p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-right" data-aos-duration="600">
                        <img src="{{asset('assets/images/offer-3.jpg')}}" class="card-img-top" alt="Relax Paket">
                        <div class="card-body">
                          <h5>wellness & spa</h5>
                          <p class="txt">
                            Za dane kada želite odmoriti i možda preskočiti spuštanje niz ski staze Jahorine, tu su brojni wellness & spa centri koji će vam pomoći da napunite svoje baterije. Prepustite se masažama, plivanju, sauni i mnogim drugim sadržajima koji su u ponudi kako biste se opustili i pripremili svoje tijelo za nove sportske avanture. </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="600">
                        <img src="{{asset('assets/images/offer-4.jpg')}}" class="card-img-top" alt="Detox Paket">
                        <div class="card-body">
                          <h5>Gastronomska ponuda</h5>
                          <p class="txt">
                            Na Jahorini ćete pronaći veliki broj restorana koji služe vrhunsku hranu, kako tradicionalnu tako i jela modernije kuhinje. Gastronomska ponuda Jahorine je nešto što će probuditi sva vaša osjetila i učiniti da uživate u svakom zalogaju. Dobra hrana je nešto po čemu se ova planina zaista izdvaja i na što je posebno ponosna.
                          </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" data-aos="fade-left" data-aos-duration="600">
                        <img src="{{asset('assets/images/offer-5.png')}}" class="card-img-top" alt="Back to Nature">
                        <div class="card-body">
                          <h5>Turističke agencije</h5>
                          <p class="txt">
                            Turističke agencije često imaju u ponudi specijalne aranžmane i posebne pakete sa pogodnostima koje gostima otvaraju nove mogućnosti uživanja. To su najčešće paketi koji uključuju smještaj, ski pass i korišćenje wellness & spa centra, kao i mnogi drugi dodatni sadržaji. Cijene su najčešće pristupačnije i prilagođene tako da gosti po povoljnijoj cijeni sebi priušte što više sadržaja.
                          </p>
                        </div>
                      </div>
                </div>
            </div>
            </div>
            </section>
</main>

@include('partials/footer')
