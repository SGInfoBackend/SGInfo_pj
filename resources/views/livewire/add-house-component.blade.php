<div>
    <div class="w3-container">
        <div id="room" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:65%">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('room').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <div class="main-room">
                    <form class="w3-container first-room" action="">
                        <h1 class="modal-h1-room">ROOM UPLOAD FORM</h1>
                        <div class="userInput-room">
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">PROPERTY TYPE</label> <br>
                                <input class="modal-input-room" type="text">
                            </div>
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">AVAILABILITY</label> <br>
                                <input class="modal-input-room" type="date">
                            </div>
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">DEVELOPER</label> <br>
                                <input class="modal-input-room" type="text">
                            </div>
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">FLOOR LEVEL</label> <br>
                                <input class="modal-input-room" type="text">
                            </div>
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">FLOOR SIZE (sqft)</label> <br>
                                <input class="modal-input-room" type="text">
                            </div>
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">PSF (psf)</label> <br>
                                <input class="modal-input-room" type="text">
                            </div>
                            <div class="modal-div-room">
                                <label for="" class="modal-label-room">NEAREST MRT/LRT</label> <br>
                                <input class="modal-input-room" type="text">
                            </div>
                            <div class="modal-div-room modal-div-room-textarea">
                                <label for="" class="modal-label-room">ADDRESS</label> <br>
                                <textarea class="modal-input-room-textarea" name="" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="modal-div-room modal-div-room-100">
                                <label for="" class="modal-label-room">RENT OR SALE</label> <br>
                                <select name="" id="" class="modal-select-room">
                                    <option value="" selected disabled class="modal-option-room">Choose option</option>
                                    <option value="" class="modal-option-room">for rent</option>
                                    <option value="" class="modal-option-room">for sale</option>
                                </select>
                            </div>
                            <div class="modal-div-room modal-div-room-100">
                                <label for="" class="modal-label-room modal-div-room-100">PRICE RATE(per month)</label> <br>
                                <input class="modal-input-room modal-input-room-new" style="width: 48%;" type="text">
                                <select name="" id="" class="modal-select-room" style="width: 48%;">
                                    <option value="" selected disabled class="modal-option-room">Currency</option>
                                    <option value="" class="modal-option-room">USD</option>
                                    <option value="" class="modal-option-room">SGD</option>
                                    <option value="" class="modal-option-room">YEN</option>
                                </select>
                            </div>
                            <div class="modal-div-room modal-div-room-100">
                                <label for="" class="modal-label-room">PLEASE UPLOAD PHOTOS</label> <br>
                                <input class="modal-input-room-image" type="file" multiple>
                            </div>
                            <div class="modal-div-room modal-div-room-100">
                                <label for="" class="modal-label-room">NUMBER OF ROOMS</label> <br>
                                <select name="" id="" class="modal-select-room" style="width: 48%;">
                                    <option value="" selected disabled class="modal-option-room">Bed room</option>
                                    <option value="" class="modal-option-room">1</option>
                                    <option value="" class="modal-option-room">2</option>
                                    <option value="" class="modal-option-room">3</option>
                                    <option value="" class="modal-option-room">4</option>
                                    <option value="" class="modal-option-room">5</option>
                                </select>
                                <select name="" id="" class="modal-select-room" style="width: 48%;">
                                    <option value="" selected disabled class="modal-option-room">Bath room</option>
                                    <option value="" class="modal-option-room">1</option>
                                    <option value="" class="modal-option-room">2</option>
                                    <option value="" class="modal-option-room">3</option>
                                    <option value="" class="modal-option-room">4</option>
                                    <option value="" class="modal-option-room">5</option>
                                </select>
                            </div>
                            <div class="modal-div-room modal-div-room-100">
                                <label for="" class="modal-label-room">SELECT KEY FEATURES</label> <br>
                                <select name="" id="" class="modal-select-room" style="width: 100%;padding-left:10px;" multiple>
                                    <option value="" class="modal-option-room-special">Air-Conditioning</option>
                                    <option value="" class="modal-option-room">Cooker Hob/Hood</option>
                                    <option value="" class="modal-option-room">Fridge</option>
                                    <option value="" class="modal-option-room">High Floor</option>
                                    <option value="" class="modal-option-room">Intercom</option>
                                    <option value="" class="modal-option-room">Renovated</option>
                                    <option value="" class="modal-option-room">Dryer</option>
                                    <option value="" class="modal-option-room">Water Heater</option>
                                    <option value="" class="modal-option-room">Balcony</option>
                                    <option value="" class="modal-option-room">Corner Unit</option>
                                    <option value="" class="modal-option-room">Park / Greenery View</option>
                                    <option value="" class="modal-option-room">Internet Connection</option>
                                    <option value="" class="modal-option-room">Oven / Microwave</option>
                                    <option value="" class="modal-option-room">Washing Machine</option>
                                </select>
                                <p>Please press Ctrl key and click to select multiple items</p>
                            </div>
                            <div class="modal-div-room modal-div-room-100">
                                <label for="" class="modal-label-room">SELECT FACILITIES</label> <br>
                                <select name="" id="" class="modal-select-room" style="width: 100%;padding-left:10px;" multiple>
                                    <option value="" class="modal-option-room-special">Barbeque Area</option>
                                    <option value="" class="modal-option-room">Covered car park</option>
                                    <option value="" class="modal-option-room">Function room</option>
                                    <option value="" class="modal-option-room">Mini-Mart</option>
                                    <option value="" class="modal-option-room">24 hours security</option>
                                    <option value="" class="modal-option-room">Swimming pool</option>
                                    <option value="" class="modal-option-room">Billiards room</option>
                                    <option value="" class="modal-option-room">Clubhouse</option>
                                    <option value="" class="modal-option-room">Gymnasium room</option>
                                    <option value="" class="modal-option-room">Sauna</option>
                                    <option value="" class="modal-option-room">Squash court</option>
                                    <option value="" class="modal-option-room">Tennis courts</option>
                                </select>
                            </div>

                            <div class="modal-div-room modal-div-room-textarea">
                                <label for="" class="modal-label-room">DESCRIPTION</label> <br>
                                <textarea class="modal-input-room-textarea" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <button class="uploadBtn-room">UPLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
