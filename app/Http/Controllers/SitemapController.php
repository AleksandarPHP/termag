<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            ['loc' => url('/apartmani')],
            ['loc' => url('/atrakcije')],
            ['loc' => url('/back-to-nature')],
            ['loc' => url('/biciklizam')],
            ['loc' => url('/challenge-race')],
            ['loc' => url('/challenge-race-form-ru')],
            ['loc' => url('/detox')],
            ['loc' => url('/download')],
            ['loc' => url('/eco')],
            ['loc' => url('/en')],
            ['loc' => url('/en/apartmani')],
            ['loc' => url('/en/atrakcije')],
            ['loc' => url('/en/back-to-nature')],
            ['loc' => url('/en/back-to-nature-package-2-nights')],
            ['loc' => url('/en/biciklizam')],
            ['loc' => url('/en/challenge-race')],
            ['loc' => url('/en/detox')],
            ['loc' => url('/en/download')],
            ['loc' => url('/en/eco')],
            ['loc' => url('/en/galerija')],
            ['loc' => url('/en/galerija/hotel')],
            ['loc' => url('/en/galerija/jahorina')],
            ['loc' => url('/en/galerija/koliba')],
            ['loc' => url('/en/galerija/konferencijska-sala')],
            ['loc' => url('/en/galerija/restoran')],
            ['loc' => url('/en/galerija/smjestaj-apartmani')],
            ['loc' => url('/en/galerija/sobe')],
            ['loc' => url('/en/galerija/spa')],
            ['loc' => url('/en/galerija/team-building')],
            ['loc' => url('/en/galerija/usluge')],
            ['loc' => url('/en/galerija/villa-termag')],
            ['loc' => url('/en/galerija/vjencanja')],
            ['loc' => url('/en/galerija/zabava')],
            ['loc' => url('/en/hotel-termag-jahorina/conferences-seminars')],
            ['loc' => url('/en/hotel-termag-jahorina/conferences-seminars/forms')],
            ['loc' => url('/en/hotel-termag-jahorina/en/naslovna/termag-mtb-bike-maraton.html')],
            ['loc' => url('/en/hotel-termag-jahorina/special-offers/promo-packages/family-package')],
            ['loc' => url('en/hotelski-restoran')],
            ['loc' => url('en/igraonica ')],
            ['loc' => url('en/izleti')],
            ['loc' => url('en/jahorina')],
            ['loc' => url('en/kamera')],
            ['loc' => url('en/kamin-sala')],
            ['loc' => url('en/karijera')],
            ['loc' => url('en/ketering-i-organizacija')],
            ['loc' => url('en/koliba')],
            ['loc' => url('en/konferencija-i-seminari')],
            ['loc' => url('en/konferencijska-sala')],
            ['loc' => url('en/kontakt')],
            ['loc' => url('en/kuglana')],
            ['loc' => url('en/ljetne-aktivnosti')],
            ['loc' => url('en/ljetnje-avanture')],
            ['loc' => url('en/ljeto-paket')],
            ['loc' => url('en/mountainbike-marathon')],
            ['loc' => url('en/naslovna/specijalne-ponude/ski-opening')],
            ['loc' => url('en/o-hotelu')],
            ['loc' => url('en/o-nama')],
            ['loc' => url('en/organic-facts')],
            ['loc' => url('en/organizacija-vjencanja')],
            ['loc' => url('en/porodicni-paket')],
            ['loc' => url('en/prevoz-jahorina')],
            ['loc' => url('en/prijatelji-hotela')],
            ['loc' => url('en/prognoza')],
            ['loc' => url('en/promo-paketi')],
            ['loc' => url('en/quad-safari')],
            ['loc' => url('en/relax-package')],
            ['loc' => url('en/relax-paket')],
            ['loc' => url('en/rezervacije')],
            ['loc' => url('en/romantic-package ')],
            ['loc' => url('en/romanticni-paket')],
            ['loc' => url('en/ski-centar')],
            ['loc' => url('en/ski-pass')],
            ['loc' => url('en/ski-rental')],
            ['loc' => url('en/ski-skola')],
            ['loc' => url('en/ski-staze')],
            ['loc' => url('en/sobe')],
            ['loc' => url('en/spa')],
            ['loc' => url('en/spa-and-wellness')],
            ['loc' => url('en/specijalni-paketi')],
            ['loc' => url('en/svadbe')],
            ['loc' => url('en/team-building')],
            ['loc' => url('en/termag-hotelske-sobe')],
            ['loc' => url('en/termagchallengerace')],
            ['loc' => url('en/transfer')],
            ['loc' => url('en/triatlon')],
            ['loc' => url('en/usluge')],
            ['loc' => url('en/villa-termag')],
            ['loc' => url('en/virtuelna-setnja')],
            ['loc' => url('en/visina-snega')],
            ['loc' => url('en/zabava')],
            ['loc' => url('en/zdravstveni-turizam')],
            ['loc' => url('igraonica')],
            ['loc' => url('izleti')],
            ['loc' => url('jahorina')],
            ['loc' => url('kamera')],
            ['loc' => url('kamin-sala')],
            ['loc' => url('karijera')],
            ['loc' => url('ketering-i-organizacija')],
            ['loc' => url('koliba')],
            ['loc' => url('konferencija-i-seminari')],
            ['loc' => url('konferencijska-sala')],
            ['loc' => url('kontakt')],
            ['loc' => url('kuglana')],
            ['loc' => url('ljetne-aktivnosti')],
            ['loc' => url('ljetnje-avanture')],
            ['loc' => url('ljeto-paket')],
            ['loc' => url('mountainbike-marathon')],
            ['loc' => url('o-hotelu')],
            ['loc' => url('o-nama')],
            ['loc' => url('organic-facts')],
            ['loc' => url('organizacija-vjencanja')],
            ['loc' => url('porodicni-paket')],
            ['loc' => url('prevoz-jahorina')],
            ['loc' => url('prijatelji-hotela')],
            ['loc' => url('prognoza')],
            ['loc' => url('promo-paketi')],
            ['loc' => url('quad-safari')],
            ['loc' => url('relax-paket')],
            ['loc' => url('relax-paketi')],
            ['loc' => url('rezervacije')],
            ['loc' => url('romanticni-paket')],
            ['loc' => url('romanticni-paketi')],
            ['loc' => url('/rs/naslovna/business/team-building/termag-partners-day/termag-partner-day-download')],
            ['loc' => url('/rs/naslovna/konferencije-seminari')],
            ['loc' => url('/rs/naslovna/konferencije-seminari/preuzmi-formular')],
            ['loc' => url('/rs/naslovna/specijalne-ponude/promo-paketi/porodicni-paket')],
            ['loc' => url('/rs/naslovna/specijalne-ponude/promo-paketi/termag-aplikacija.html-0464545979')],
            ['loc' => url('/rs/naslovna/specijalne-ponude/ski-opening')],
            ['loc' => url('/rs/naslovna/termag-challenge-triatlon.html')],
            ['loc' => url('/rs/naslovna/termag-mtb-bike-maraton/termag-mtb-bike-maraton.html')],
            ['loc' => url('/rs/povratak-prirodi-paket-2-nocenja')],
            ['loc' => url('/ru')],
            ['loc' => url('/ru/adrenalin-paket-2-nocenja')],
            ['loc' => url('/ru/apartmani')],
            ['loc' => url('/ru/challenge-race')],
            ['loc' => url('/ru/download')],
            ['loc' => url('/ru/galerija')],
            ['loc' => url('/ru/galerija/hotel')],
            ['loc' => url('/ru/galerija/jahorina')],
            ['loc' => url('/ru/galerija/koliba')],
            ['loc' => url('/ru/galerija/konferencijska-sala')],
            ['loc' => url('/ru/galerija/restoran')],
            ['loc' => url('/ru/galerija/smjestaj-apartmani')],
            ['loc' => url('/ru/galerija/sobe')],
            ['loc' => url('/ru/galerija/spa')],
            ['loc' => url('/ru/galerija/team-building')],
            ['loc' => url('/ru/galerija/usluge')],
            ['loc' => url('/ru/galerija/villa-termag')],
            ['loc' => url('/ru/galerija/vjencanja')],
            ['loc' => url('/ru/galerija/zabava')],
            ['loc' => url('/ru/hotel-termag-jahorina/Специальные-предложения/ПРОМО-ПАКЕТЫ/promo-easter-offer-30-')],
            ['loc' => url('/ru/hotel-termag-jahorina/Специальные-предложения/ПРОМО-ПАКЕТЫ/special-offer-8th-march')],
            ['loc' => url('/ru/hotelski-restoran')],
            ['loc' => url('/ru/izleti')],
            ['loc' => url('/ru/jahorina')],
            ['loc' => url('/ru/kamera')],
            ['loc' => url('/ru/kamin-sala')],
            ['loc' => url('/ru/ketering-i-organizacija')],
            ['loc' => url('/ru/koliba')],
            ['loc' => url('/ru/konferencijska-sala')],
            ['loc' => url('/ru/kontakt')],
            ['loc' => url('/ru/ljetne-aktivnosti')],
            ['loc' => url('/ru/o-hotelu')],
            ['loc' => url('/ru/organizacija-vjencanja')],
            ['loc' => url('/ru/prijatelji-hotela')],
            ['loc' => url('/ru/promo-paketi')],
            ['loc' => url('/ru/rezervacije')],
            ['loc' => url('/ru/sobe')],
            ['loc' => url('/ru/spa-and-wellness')],
            ['loc' => url('/ru/team-building')],
            ['loc' => url('/ru/transfer')],
            ['loc' => url('/ru/usluge')],
            ['loc' => url('/ru/villa-termag')],
            ['loc' => url('/ru/zabava')],
            ['loc' => url('/ru/zdravstveni-turizam')],
            ['loc' => url('/ru/Релакс-пакет')],
            ['loc' => url('/ru/Романтичный-пакет')],
            ['loc' => url('/ski-centar')],
            ['loc' => url('/ski-pass')],
            ['loc' => url('/ski-rental')],
            ['loc' => url('/ski-skola')],
            ['loc' => url('/ski-staze')],
            ['loc' => url('/sobe')],
            ['loc' => url('/spa')],
            ['loc' => url('/spa-and-wellness')],
            ['loc' => url('/specijalni-paketi')],
            ['loc' => url('/svadbe')],
            ['loc' => url('/team-building')],
            ['loc' => url('/termag-hotelske-sobe')],
            ['loc' => url('/termag-jahorina-tour-form')],
            ['loc' => url('/termag-jahorina-tour-prijava')],
            ['loc' => url('/termag-mtb-bike-maraton')],
            ['loc' => url('/termagchallengerace')],
            ['loc' => url('/transfer')],
            ['loc' => url('/triatlon')],
            ['loc' => url('/usluge')],
            ['loc' => url('/villa-termag')],
            ['loc' => url('/virtuelna-setnja')],
            ['loc' => url('/visina-snega')],
            ['loc' => url('/zabava')],
            ['loc' => url('/zdravstveni-turizam')],
        ];
        $xml = view('sitemap', compact('urls'))->render();

        return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
    }

}