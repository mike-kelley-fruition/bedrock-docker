<?php
/**
 * Starter Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

if (!empty($block['data']['__is_preview'])) {
    echo "<img style='max-width: 100%;height: auto;width: 100%;' src=" . get_template_directory_uri() . "/images/blocks/herovideo.png'>";
    return;
}


// Load values and assign defaults.
$background_color = get_field( 'background_color' );
$text_color       = get_field( 'text_color' );


?>
<div class="heroVideoFluid">
    <div class="videoOverlay"></div>
    <video class="lazy" autoplay muted loop playsinline width="610" height="254" poster="one-does-not-simply.jpg">
        <source data-src="<?php echo get_template_directory_uri(); ?>/videos/placeholder2.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="grid">
            <div class="col-sm-12">
                <div class="heroContent">
                    <p>Welcome To</p>
                    <h1 class="animate__animated animate__fadeIn animate__delay-800ms">Denver International Airport</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container heroVideoContainer">
    <div class="grid">
        <div class="col-custom40 col-grid">
            <div class="flightInfo">
                <h2>Flight Info</h2>

                <div class="tabFlight">
                    <button class="tablinks" onclick="openTab(event, 'Departures')" id="defaultOpen">Departures</button>
                    <button class="tablinks" onclick="openTab(event, 'Arrivals')">Arrivals</button>
                    <button class="tablinks" onclick="openTab(event, 'Connections')">Connections</button>
                </div>

                <div id="Departures" class="tabcontent">
                    <form class="heroVideoForm">
                        <label for="departures">Flight Status</label>
                        <input type="text" name="departures" placeholder="Enter destination, airline, or flight #">
                        <button type="submit">Search</button>
                    </form>
                </div>

                <div id="Arrivals" class="tabcontent">
                    <form class="heroVideoForm">
                        <label for="departures">Flight Status</label>
                        <input type="text" name="departures" placeholder="Enter destination, airline, or flight #">
                        <button type="submit">Search</button>
                    </form>
                </div>

                <div id="Connections" class="tabcontent">
                    <form class="heroVideoForm">
                        <label for="arrivals">Arrival</label>
                        <input class="arrivalInput" type="text" name="arrivals" placeholder="Enter destination, airline, or flight #">
                        <label class="label2" for="departures">Departure</label>
                        <input type="text" name="departures" placeholder="Enter destination, airline, or flight #">
                        <button type="submit">Search</button>
                    </form>
                </div>

                <a class="allFlights" href="#">View All Flights <span class="fa-regular fa-arrow-right"></span></a>

            </div>
        </div>

        <div class="col-custom60 col-grid">
            <div class="waitTimes">

                <div class="grid">
                    <div class="col-sm-6">
                        <h2>Security</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="mainCTA cta1">All Security & TSA Info</a>
                    </div>
                </div>

                <div class="grid waitGrid">
                    <div class="col-md-3 col-grid">
                        <div class="waitCard">
                            <h3>Bridge</h3>
                            <div class="grid gridTime grid-bleed">
                                <div class="col-6">
                                    <p class="type">PreCheck</p>
                                    <p class="time">25<span>min</span></p>
                                </div>
                                <div class="col-6">
                                    <p class="type">Clear</p>
                                    <p class="time">25<span>min</span></p>
                                </div>
                            </div>
                            <a href="#">Get Directions</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-grid">
                        <div class="waitCard">
                            <h3>Bridge</h3>
                            <p class="type">Standard Only</p>
                            <p class="time">25<span>min</span></p>
                            <a href="#">Get Directions</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-grid">
                        <div class="waitCard">
                            <h3>Bridge</h3>
                            <p class="type">Standard Only</p>
                            <p class="time">25<span>min</span></p>
                            <a href="#">Get Directions</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-grid">
                        <div class="waitCard">
                            <h3>Bridge</h3>
                            <p class="type">Standard Only</p>
                            <p class="time">25<span>min</span></p>
                            <a href="#">Get Directions</a>
                        </div>
                    </div>
                </div>

                <p class="waitTimesCopy">Times are estimates and subject to change. Please arrive no less than 2 hours before boarding time.</p>

            </div>
        </div>
    </div>
</div>



<script>
	function openTab(evt, tabName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(tabName).style.display = "block";
		evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>