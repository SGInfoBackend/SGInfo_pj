<section id="right">
    <div class="booking-room">
        <div class="room">
            <h1>BOOK YOUR ROOM</h1>
            <form action="#" method="POST" wire:submit.prevent="StoreData">
                <div class="formControl">
                    <label for="checkin">Arrival Date (Check In )</label> <br>
                    <input type="date" id="checkin" wire:model="check_inData">
                </div>
                <div class="formControl">
                    <label for="checkin">Departure Date (Check Out)</label> <br>
                    <input type="date" id="checkin" wire:model='check_outData'>
                </div>
                <div class="formControl">
                    <label for="adult">ADULT (14+ YEARS)</label> <br>
                    <select name="" id="" wire:model="adult">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="formControl">
                    <label for="children">CHILDREN (0-14 YEARS)</label> <br>
                    <select name="" id="" wire:model='children'>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="extra">
                    <h2>Add Extra</h2>
                    <div>
                        <input type="checkbox" name="" id="" class="extra-check">
                        <span> Service per Booking</span>
                        <span> $30.00</span>
                    </div>
                    <div>
                        <input type="checkbox" name="" id="" class="extra-check">
                        <span style="width: 700px;"> Service per Person</span>
                        <span> Adult: $17.00</span>
                        <span> Children: included</span>
                    </div>
                    <div class="price">
                        <p>Your Price</p>
                        <p>$0.00</p>
                    </div>
                    <button class="book-btn" type="submit">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</section>