<section class="booking" data-aos="fade-up">
    <style>
        /* .guest-counter {
    display: flex;
    align-items: center;
    gap: 10px;
} */

.gests-wrapper button, .children-wrapper button{
    background-color: transparent;
    color: var(--text-color-primary);
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 5px;
}

.gests-wrapper button:disabled, .children-wrapper button:disabled {
    background-color: #d3d3d3;
    cursor: not-allowed;
}

#guest-count, #child-count {
    text-align: center;
}
    </style>
    <div class="container">
        <form action="{{Helper::url('rezervacija')}}" method="GET" target="_blank">
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
                <input type="text" id="checkIn" name="checkin_date"/>
            </div>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/calendar-icon.svg') }}"
                        alt="kalendar"
                    />
                    <h4>Check out</h4>
                </div>
                <input type="text" id="checkOut" name="checkout_date"/>
            </div>
            <div>
                <div>
                    <img
                        src="{{ asset('assets/images/person-icon.svg') }}"
                        alt="osoba"
                    />
                    <h4>Guests</h4>
                </div>
                <div class="gests-wrapper">
                    <div>
                        <button type="button" class="btn-decrease" onclick="updateGuestCount(-1)">-</button>
                        <input
                            name="adults" type="text" id="guest-count" value="2" min="1" max="4" readonly
                        />
                        <button type="button" class="btn-increase" onclick="updateGuestCount(1)">+</button>
                    </div>
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
                <div>
                    <div class="children-wrapper"> 
                        <button type="button" class="btn-decrease" onclick="updateChildCount(-1)">-</button>
                        <input name="children" type="text" id="child-count" value="0" min="0" max="3" readonly
                        />
                        <button type="button" class="btn-increase" onclick="updateChildCount(1)">+</button>
                    </div>
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

    <script>
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0'); // Dodaje 0 ispred jednocifrenih meseci
        const day = String(date.getDate()).padStart(2, '0');       // Dodaje 0 ispred jednocifrenih dana
        return `${year}-${month}-${day}`;
    }

    function addDays(date, days) {
        const result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    const checkInInput = document.getElementById('checkIn');
    const checkOutInput = document.getElementById('checkOut');

    const today = new Date();
    checkInInput.value = formatDate(today);
    checkOutInput.value = formatDate(addDays(today, 1));

    function syncCheckOut() {
        const checkInDate = new Date(checkInInput.value);
        if (!isNaN(checkInDate.getTime())) { 
            console.log('ispravno');
            
            checkOutInput.value = formatDate(addDays(checkInDate, 1));
        }
    }

    checkInInput.addEventListener('input', syncCheckOut);

    function updateGuestCount(change) {
        const input = document.getElementById("guest-count");
        let currentValue = parseInt(input.value);

        const newValue = currentValue + change;
        if (newValue >= 1 && newValue <= 4) {
            input.value = newValue;
        }
    }

    function updateChildCount(change) {
        const inputCh = document.getElementById("child-count");
        let currentChValue = parseInt(inputCh.value);

        const newChValue = currentChValue + change;
        if (newChValue >= 0 && newChValue <= 3) {
            inputCh.value = newChValue;
        }
    }
    </script>
</section>