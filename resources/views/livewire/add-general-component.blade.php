<div>
    <div class="w3-container">
        <div id="article" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('article').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                </div>

                <div class="main">
                    <form class="w3-container first" action="">
                        <h1 class="modal-h1">ARTICLE UPLOAD FORM</h1>
                        <div class="userInput">
                            <div class="modal-div">
                                <label for="" class="modal-label">JOURNALIST NAME</label> <br>
                                <input class="modal-input" type="text">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">NEWS TITLE</label> <br>
                                <input class="modal-input" type="text">
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">NEWS TYPE</label> <br>
                                <select name="" id="" class="modal-select">
                                    <option value="" selected disabled class="modal-option">Choose news type</option>
                                    <option value="" class="modal-option">Global News</option>
                                    <option value="" class="modal-option">Health</option>
                                    <option value="" class="modal-option">Education</option>
                                    <option value="" class="modal-option">Most Popular</option>
                                    <option value="" class="modal-option">Travel Guide</option>
                                </select>
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">PLEASE UPLOAD PHOTOS</label> <br>
                                <input class="modal-input" type="file" multiple>
                            </div>
                            <div class="modal-div">
                                <label for="" class="modal-label">DESCRIPTION</label> <br>
                                <textarea class="modal-input" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <button class="uploadBtn">UPLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
