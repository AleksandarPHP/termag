@include('partials/header')

<main>
    <section class="weather gallery-intro">
        <div class="bg" style="background-image: url('{{asset("assets/images/main-bg.jpg")}}');"></div>
        <div class="container">
            <div class="wrapper">
                <h1 class="title-larger">Virtuelna Šetnja</h1>
                <p class="txt">
                    Želimo vam dobrodošlicu u Virtuelno istraživanje Jahorine. Uz pomoć tehnologije, bićete u mogućnosti da, na potpuno realan način, virtuelno istražite prirodne ljepote ovog magičnog područja. Zaljubite se u nestvarnost prirode Jahorine u toplini svoga doma prije nego što nam dođete u posjetu.
                </p>
            </div>
        </div>
    </section>

    <section class="wellness-spa">
        <div class="bg" style="background-image: url('{{asset("assets/images/3d-bg.jpg")}}');"></div>
        <div class="container">
            <div class="cardd" data-aos="fade-left" data-aos-duration="600">
                <h2>3D tehnologija</h2>
                <p class="txt">
                    Kako biste na potpuno realan način doživjeli impozantnu prirodu Jahorine, koristimo 3D tehnologiju i pružamo vam mogućnost da istražite svaki kutak. Jasno i precizno ćete doživjeti svaki segment ove planinske ljepotice.</p>
                <a href="#" class="btnn btn_primary">Book now</a>
            </div>
        </div>
    </section>

    <section class="weather gallery-intro interactive-walk">
        <div class="container">
            <div class="wrapper">
                <h2 class="title-smaller">Interaktivna šetnja</h2>
                <p class="txt">
                    Uz posebnu tehnologiju, omogućili smo vam da istražite pejzaže, staze i impresivne planinske vrhove prije vašeg dolaska na Jahorinu. Uz specifične kontrole imaćete utisak da stvarno šetate nestvarnim predjelima ovog planinskog raja. Doživite nestvarnost predijela Jahorine iz svog doma i uvjerite se zašto nas morate posjetiti.
                </p>
                <p>api</p>
            </div>
        </div>
    </section>
</main>

@include('partials/footer')