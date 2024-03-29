<div>
    <section id="main">
        <section id="left">
            <div class="view">
                @if(Session::has('success_message'))
                    <div class="alert text-success">{{ Session::get('success_message') }}</div>
                @endif
                <div class="title">
                    <div class="title-left">
                        <h1>{{ $roomDetail->PROJECT_NAME }}</h1>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <small>8 views</small>
                        <small>Space: 306 sqm | </small>
                        <small>Max. 8 guests</small>
                    </div>
                    <div class="title-right">
                        <p>from</p>
                        <h3>${{ $roomDetail->PRICE_MAX }} / Month</h3>
                    </div>
                </div>
                <div class="line"></div>
                <div class="image">
                    <div class="img-large">
                        <img src="{{ asset('images/room_list/') }}/{{ $roomDetail->RH_PHOTO }}" alt="">
                    </div>
                    <div class="img-small">
                        <img src="{{ asset('images/room_detail/2-detail.jpg') }}" style="width: 24%;" alt="">
                        <img src="{{ asset('images/room_detail/3-detail.jpg') }}" style="width: 24%;" alt="">
                        <img src="{{ asset('images/room_detail/4-detail.jpg') }}" style="width: 24%;" alt="">
                        <img src="{{ asset('images/room_detail/5-detail.jpg') }}" style="width: 24%;" alt="">
                    </div>
                </div>
                <div class="overview">
                    <h1>ROOM OVERVIEW</h1>
                    <p>
                        {{ $roomDetail->RH_Description }}
                    </p>
                </div>
                <div class="line"></div>

                <div class="amenities">
                    <h1>FACILITIES & AMENITIES</h1>
                    <div class="amenities-group">
                        <div class="amentities-item">
                            <ol>
                                <img src="{{ asset('assets/images/room_detail/air-conditioner.svg') }}"
                                    style="width: 15%;" alt="">
                                @foreach ($facilities as $facilitie)
                                    <li>{{ $facilitie }}</li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="amentities-item">
                            <ol>
                                <img src="{{ asset('assets/images/room_detail/air-conditioner.svg') }}"
                                    style="width: 15%;" alt="">
                                @foreach ($keyfeatures as $keyfeature)
                                    <li>{{ $keyfeature }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="room-rule">
                    <h1>ROOM RULES</h1>
                    <div class="part1">
                        <div class="part1-left">
                            <h2>Check-in</h2>
                            <ol>
                                <li>Check-in from 9:00 AM - anytime</li>
                                <li>Early check-in subject to availability</li>
                                <li>Minimum check-in age - 18</li>
                            </ol>
                        </div>
                        <div class="part1-right">
                            <h2>Check-out</h2>
                            <ol>
                                <li> Check-out before noon</li>
                                <li> Express check-out </li>
                            </ol>
                        </div>
                    </div>
                    <div class="special">
                        <h4>Special check-in instructions</h4>
                        <p>Guests will receive an email 5 days before arrival with check-in instructions; front desk
                            staff will greet guests on arrival For more details, please contact the property using the
                            information on the booking confirmation.</p>
                    </div>
                    <div class="special">
                        <h4>Pets</h4>
                        <p>Pets are not allowed</p>
                    </div>
                    <div class="special">
                        <h4>Trip Grade: Fitness level, Medical, and Health</h4>
                        <p>The 14-days Everest Base Camp Trek is challenging; but rewarding. Anyone can accomplish this
                            trek. However, a bit of preparedness is vital to complete this challenging trip.</p>
                    </div>
                    <div class="special">
                        <h4>Children and extra beds</h4>
                        <p>Children are welcome Kids stay free! Children stay free when using existing bedding; children
                            may not be eligible for complimentary breakfast Rollaway/extra beds are available for EUR
                            40.0 per day</p>
                    </div>

                </div>
                <div class="line"></div>
                <!-- other room -->
                <div class="other-room-main">
                    <h1 style="margin-bottom: 20px;">OTHER ROOM</h1>
                    <div class="other-room">
                        <div class="other-room-left">
                            <img src="{{ asset('assets/images/room_detail/other-room-left.jpg') }}" style="width: 90%;"
                                alt="">
                            <h2>SUPERIOR ROOM</h2>
                            <small>Space: 135 sqm | </small>
                            <small>Max. 4 guests</small>
                        </div>
                        <div class="other-room-right">
                            <img src="{{ asset('assets/images/room_detail/other-room-right.jpg') }}"
                                style="width: 90%;" alt="">
                            <h2>JUNIOR SUIT</h2>
                            <small>Space: 306 sqm | </small>
                            <small>Max. 8 guests</small>
                        </div>
                    </div>
                </div>
                <!-- review -->
                <div class="review-main">
                    <div class="review">
                        <h1>REVIEWS</h1>
                        <div class="line"></div>
                        <div class="review-detail">
                            <img src="{{ asset('assets/images/room_detail/user.png') }}" alt="">
                            <div>
                                <h3>Elicia</h3>
                                <small>April 29,2022</small>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                                <small>8 views</small>
                                <p>This is exactly what i was looking for, thank you so much for these tutorials</p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="review-detail">
                            <img src="{{ asset('assets/images/room_detail/user.png') }}" alt="">
                            <div>
                                <h3>Saimon</h3>
                                <small>April 29,2022</small>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                                <small>8 views</small>
                                <p>It would be great to try this theme for my businesses</p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="review-detail">
                            <img src="{{ asset('assets/images/room_detail/user.png') }}" alt="">
                            <div>
                                <h3>David</h3>
                                <small>April 29,2022</small>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                                <small>8 views</small>
                                <p>It would be great to try this theme for my businesses</p>
                            </div>
                        </div>
                        <button class="comment-btn">Older Comments</button>
                        <h1 style="font-size: 25px; font-weight:bolder;">LEAVE A REPLY</h1>
                        <div class="reply">
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="" method="POST">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" placeholder="">
                                <label for="email">Email</label>
                                <input type="text" id="email" placeholder=""> <br><br>
                                <textarea name="" id="" cols="62" rows="7" placeholder="Comment here ..."></textarea>
                            </form>
                            <div class="title-left">
                                <p>Please Rate this</p>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half"></i>
                            </div>

                            <p><input type="checkbox" name="" id=""> Save my name, email, and website
                                in this browser for the next time I comment.</p>
                            <button class="comment-btn post-btn">Post Comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-form.book-room-component />

    </section>

</div>
