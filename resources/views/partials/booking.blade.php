<section class="booking" data-aos="fade-up">
    <div class="container">
        <form action="https://secure.phobs.net/booking.php" method="GET" target="_blank">
            <input type="hidden" name="company_id" value="ef330cb3f8f74caf95689177209df3e4">
            <input type="hidden" name="hotel" value="d720302542a2930329ff91e521d142aa">
            <input type="hidden" name="lang" value="rs">
            <input type="hidden" name=" " value="1">
            <input type="hidden" name="units" value="1">
            <input value="2" type="hidden" name="adults[1]" id="inputAdults" readonly="true" >
            <input value="0" type="hidden" name="chd[1]" id="inputChildren" readonly="true" >

            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check in</h4>
                </div>
                <input type="text" id="checkIn" name="date" value="2024-12-19"/>
            </div>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check out</h4>
                </div>
                <input type="text" id="checkOut" name="odlazak" value="2024-12-22"/>
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
                        <li class="item">2 Adult</li>
                        <li class="item">3 Adult</li>
                        <li class="item">4 Adult</li>

                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <img
                        src="{{ asset('assets/images/person-icon.svg') }}"
                        alt="osoba"
                        />
                        <h4>Children</h4>
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
                        <li class="item">Child 1</li>
                        <li class="item">Children 2</li>
                        <li class="item">Children 3</li>
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