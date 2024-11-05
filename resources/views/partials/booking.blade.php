<section class="booking" data-aos="fade-up">
    <div class="container">
        <form>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check in</h4>
                </div>
                <input type="text" id="checkIn" />
            </div>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check out</h4>
                </div>
                <input type="text" id="checkOut" />
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
            <div>
                <button type="submit" class="btnn btn_secondary">
                    Book now
                </button>
            </div>
        </form>
    </div>
</section>
