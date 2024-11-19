<section class="booking" data-aos="fade-up">
    <div class="container">
        <form action="https://secure.phobs.net/booking.php" method="get" target="_blank">
            <input type="hidden" name="company_id" value="ef330cb3f8f74caf95689177209df3e4">
            <input type="hidden" name="hotel" value="d720302542a2930329ff91e521d142aa">
            <input type="hidden" name="lang" value="rs">
            <input type="hidden" name="unit_select" value="1">
            <input type="hidden" name="units" value="1">
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check in</h4>
                </div>
                <input type="text" id="checkIn" name="date"/>
            </div>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check out</h4>
                </div>
                <input type="text" id="checkOut" name="odlazak"/>
            </div>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/person-icon.svg') }}"
                        alt="osoba"
                    />
                    <h4>Guests</h4>
                </div>
                <div class="wrapper-dropdown" id="dropdown">
                    <span class="selected-display" id="destination"
                        >Pick an option!</span
                    >
                    <svg
                        class="arrow"
                        id="drp-arrow"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="transition-all ml-auto rotate-180"
                    >
                        <path
                            d="M7 14.5l5-5 5 5"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                    <ul class="dropdown">
                        <li class="item">1 Adult</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <img
                            src="{{
                                asset('assets/images/accommodation-icon.svg')
                            }}"
                            alt="smestaj"
                        />
                        <h4>Accommodation</h4>
                    </div>
                </div>
                <div class="wrapper-dropdown" id="dropdown">
                    <span class="selected-display" id="destination"
                        >Pick an option!</span
                    >
                    <svg
                        class="arrow"
                        id="drp-arrow"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="transition-all ml-auto rotate-180"
                    >
                        <path
                            d="M7 14.5l5-5 5 5"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                    <ul class="dropdown">
                        <li class="item">Option 1</li>
                        <li class="item">Option 2</li>
                        <li class="item">Option 3</li>
                        <li class="item">Option 4</li>
                    </ul>
                </div>
            </div>
            <input type="hidden" value="1" name="nights" id="ReserveNights">
            <div>
                <button type="submit" class="btnn btn_secondary">
                    Book now
                </button>
            </div>
        </form>
    </div>
</section>

{{-- <form  onsubmit="return CreateBookDates();">
    <div class="input calendar Activate">
        <small>Dolazak</small>
        <input placeholder="Dolazak" id="dolazak" value="19.11.2024" class="datepicker hasDatepicker" readonly="true" fdprocessedid="ft8t38">
        <i class="fa fa-calendar"></i>
    </div>
    <div class="input calendar Activate">
        <small>Odlazak</small>
        <input placeholder="Odlazak" name="odlazak" id="odlazak" value="20.11.2024" class="datepicker hasDatepicker" readonly="true" fdprocessedid="ar1zb8">
        <i class="fa fa-calendar"></i>
    </div>
    <div class="input persons">
        <small>Odraslih</small>
        <span class="Decr"><i class="fa fa-minus"></i></span>
        <span class="Value">
            <input value="2" name="adults[1]" id="inputAdults" readonly="true" fdprocessedid="2qoogf">
        </span>
        <span class="Inc"><i class="fa fa-plus"></i></span>
    </div>
    <div class="input persons">
        <small>Djece</small>
        <span class="Decr"><i class="fa fa-minus"></i></span>                    
        <span class="Value">
            <input value="0" name="chd[1]" id="inputChildren" readonly="true" fdprocessedid="0uw3jh">
        </span>
        <span class="Inc"><i class="fa fa-plus"></i></span>
        <div id="ChildAgeSelector"></div>
    </div>
    <div class="input promocode Activate">
        <small>Promo kod</small>
        <input placeholder="Promo code" name="partners_access" fdprocessedid="r6lzx">
        <i class="fa fa-tag"></i>
    </div>
    <div class="input submit">
        <div class="block left-align">
            <a href="https://secure.phobs.net/booking.php?lang=en&amp;company_id=ef330cb3f8f74caf95689177209df3e4&amp;view_cancel=1" id="CancelOrder" target="_blank">Promeni / Otkaži rezervaciju</a>
        </div>  
        <input type="hidden" value="1" name="nights" id="ReserveNights">
        <button type="submit" class="btn-bordered" fdprocessedid="8iyjji">Rezervišite</button>
    </div>
</form> --}}