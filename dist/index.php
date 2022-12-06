<?php
    session_start();
    
    if (!isset($_SESSION['user'])) {
        header('Location: ./api/login.php');
        exit;
    } 
?>

<!DOCTYPE html>
<html xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="canonical" href="https://sneaky.lol/">
    <title>Welcome - Sneaky Petes</title>
    <meta name="description" content="Sneaky Pete’s is a well hidden, underground comedy club nesstled in downtown San Luis Obispo, California. We boast sellout, attentive crowds while filming your performance with 4k cameras for your use, as we do not publicize our venue, shows, nor experience. This website is for your eyes only, please. We keep everything SNEAKY around these parts!">
    <meta property="og:title" content="Sneaky Petes">
    <meta property="og:description" content="Sneaky Pete’s is a well hidden, underground comedy club nesstled in downtown San Luis Obispo, California. We boast sellout, attentive crowds while filming your performance with 4k cameras for your use, as we do not publicize our venue, shows, nor experience. This website is for your eyes only, please. We keep everything SNEAKY around these parts!">
    <meta property="og:url" content="https://sneaky.lol/">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="https://sneaky.lol/assets/images/meta/og.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sneaky Petes">
    <meta name="twitter:site" content="@Sneaky Petes">
    <meta name="twitter:card" content="summary_large_image">
    <link href="./assets/built/styles/main.built.css" rel="stylesheet">
</head>

<body class="page theme-dark ">
    <main id="main">
        <section class="section section-hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Sneaky Pete's</h1>
                        <p>Welcome to your new favorite comedic playground. Sneaky Pete’s is a well hidden, underground comedy club nesstled in downtown San Luis Obispo, California. We boast sellout, attentive crowds while filming your performance with 4k cameras for your use, as we do not publicize our venue, shows, nor experience. This website is for your eyes only, please. We keep everything SNEAKY around these parts!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-venue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section with-border">
                            <span>The Room</span>
                        </h2>
                    </div>

                    <div class="col-md-6">
                        <img class="venue-image" src="./assets/images/overview/gallery_bartender.jpg">
                        <p class="venue-caption">Open Bar &amp; Custom Cocktails</p>
                    </div>

                    <div class="col-md-6">
                        <img class="venue-image" src="./assets/images/overview/gallery_stage.jpg">
                        <p class="venue-caption">Intimate Room fits 80 patrons</p>
                        <img class="venue-image" src="./assets/images/overview/gallery_hey_man.jpg">
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-comedians">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section with-border">
                            <span>Some of the talented performers to date</span>
                        </h2>
                    </div>

                    <div class="col-md-12">
                        <div class="comendian-lineup">
                            <ul>
                                <li>Saul Trujillo</li>
                                <li>Ryan Goodcase</li>
                                <li>Justin James</li>
                                <li>Liv Doty</li>
                                <li>Rick Storer</li>
                                <li>Michael Duncan</li>
                                <li>Eric Freedman</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Orion Levine</li>
                                <li>Xander Beltrain</li>
                                <li>Chris Williams</li>
                                <li>Ernie Romero</li>
                                <li>Nick Malizia</li>
                                <li>Sam Goldstein</li>
                                <li>Divesh Patel</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Joe Praino</li>
                                <li>Kil Theodrick</li>
                                <li>Nikki Bon</li>
                                <li>Kyle Anderson</li>
                                <li>Ben Herwitz</li>
                                <li>Jay Light</li>
                                <li>Danny Dunn</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Monarey Martinez</li>
                                <li>Sean Reilly</li>
                                <li>Tufan Nadjafi</li>
                                <li>Stormy Silva</li>
                                <li>Brett Dodenhoff</li>
                                <li>Bryson Banks</li>
                                <li>Cori Ramsay</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Ralph Guerra</li>
                                <li>Hannah Rose</li>
                                <li>Issiah Castillo</li>
                                <li>Rob Pugliese</li>
                                <li>Dylan Fisher</li>
                                <li>Adian Candalario</li>
                                <li>Kelsie Rae</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-moments">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section">
                            <span>Check Out Some Fun Moments</span>
                        </h2>
                    </div>

                    <div class="col-md-4">
                        <div class="moment-record">
                            <img src="./assets/images/overview/comedian_kit_theodrick.jpg">
                            <p>Kil Theodrick</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="moment-record">
                            <img src="./assets/images/overview/comedian_bill_herwitz.jpg">
                            <p>Ben Herwitz</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="moment-record">
                            <img src="./assets/images/overview/comedian_joe_praino.jpg">
                            <p>Joe Praino</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-specs">
            <div class="bkgd-red-grad">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-section">
                                <span>Now the Question is, Why should I Perfrom at Sneaky’s?</span>
                            </h2>
                            <p>We’ve pulled out all the smoke and mirrors to make our room the best comedy experience. Starting with an invite-only event, our audience is here for comedy alone. Additionally, we are not telling the crowd who’s performing, so it’s a complete surprise when we bring you out of the side door. This room is a unqiue spot where you can bring your best but also have the full freedom to play and create with a hot room. We give you as much time as you want, it will be filmed accordingly (only for you to have), with entrance and exit footage. Content is King! To top it off, we have an apartment above the room for your stay and for pre/post show lounging, which has a private bedroom and bathroom.</p>
                        </div>

                        <div class="col-lg-3">
                            <div class="spec-record">
                                <p>Additional Sneaky Podcast available in Studio with complete access to footage.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="spec-record">
                                <p>We are attempting to create the best comedy room period. No bullshit, no red tape.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="spec-record">
                                <p>Workout your new 30/45/60+ min, new material in a tested, paid secret club.</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="spec-record">
                                <p>No one knows you’ll be coming through and we’ll document the magic of the reveal moment.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <p class="disclaimer"><strong><em>We’ll also make sure no one records / takes photos so you have full access to our unique footage.</em></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-fremont">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section">
                            <span>But Wait... There’s More! Introducing the Fremont Theater</span>
                        </h2>
                        <img src="./assets/images/overview/fremont.jpg">
                        <p class="col-md-10 ml-auto mr-auto">Our local 900 patron venue, The Fremont Theater, has granted us access to encourage your show to have a Sneaky’s date along with a large theater show. This isn’t mandatory, but if you would like to get 2 shows back to back, we can make it happen. We’d love to discuss details when you’re ready to get 2 great shows dialed.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-airbnb">
            <div class="bkgd-mid-grey">
                <div class="container loft">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <h2 class="heading-section">
                                <span>Go Ahead, Stay a While.</span>
                            </h2>
                            <p>Above the entire experience is the Sneaky Loft, a unique space with 2 beds, full kitchen, space to sprawl out and full bathroom of course. This is also 100% hidden, so don’t expect anyone to know you’re staying in the loft, as well as please don’t publicize that you are as well. Privacy is key to all of our experiences, so we please ask no content sharing of any kind.</p>
                        </div>

                        <div class="col-md-6">
                            <img src="./assets/images/overview/gallery_airbnb_living_room.jpg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bkgd-dark-grey">
                <div class="container perks">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-section">
                                <span>The Sneaky Loft Perks Include</span>
                            </h2>
                        </div>

                        <div class="col-md-4">
                            <ul>
                                <li>Queen + King Beds, 1 Bathroom</li>
                                <li>Projector for Movies</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul>
                                <li>TV &amp; Monitor for Work Stations</li>
                                <li>Guitars &amp; Instruments</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul>
                                <li>Surfboards &amp; Wetsuits</li>
                                <li>SmartCar for Zipping Around Town</li>
                            </ul>
                        </div>

                        <div class="col-md-12">
                            <img src="./assets/images/overview/airbnb_toys.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <h2 class="heading-section">
                            <span>The Sneaky Dream to Reality...</span>
                        </h2>
                        <p>Local laugher Pete Ayer and producer Ernest Romero came together during the Covid lockdown to create what locals says “the funnest thing to hit San Luis Obispo, ever!” And how can we disagree? We’ve put our blood, sweat and laughs into this unique offering of a hidden comedy club that produces some of the funnest and unique experiences around. And we’re just getting started!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" data-mr-component="footer">
        <div class="container sign-up">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section with-border"><span>Are you Ready to be a part of the Sneaky Family?</span></h2>
                    <p>We can 100% guarnatee this spot is not going to last. Eventually the city, fire department, or the cops will stumble upon the best kept secret, and we’ll most likely be forced to have have these shows anymore. So don’t wait! Book a show with Ernie today, as we’re filling up the 2023 calendar very fast. We put on shows once a month, but will make opportunities to fit your touring schelde, etc.</p>
                    <p>Thanks for checking it out - keep it Sneaky!</p>
                    <a href="mailto:sneakyrsvp@gmail.com?subject=Something Sneaky This Way Comes">Email Sneaky's</a>
                </div>

                <div class="col-md-12">
                    <img class="footer-logo" src="./assets/images/overview/footer_logo.jpg">
                </div>
            </div>
        </div>
        <div class="container-fluid byline">
            <div class="row">
                <div class="col-md-12">
                    <p>built by the Sneaky Team - Live Photos by Booker.photo - keep this a secret - don’t ruin it for everyone!</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/built/scripts/main.built.js" defer></script>
</body>

</html>