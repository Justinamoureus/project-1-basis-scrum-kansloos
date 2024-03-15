<!DOCTYPE html>
<html lang="en">
<?php

if(!isset($_COOKIE["date"])) {
    header("Location: login.php");
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.cdnfonts.com/css/8bit-wonder" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(function() {
            $(".visible").click(function() {
                $('#invisible').toggleClass("show");
            });
        });
    </script>
    <title>Home</title>
    <style>
        .hide {
            display: none;
        }

        .show {
            display: block;
        }

        /* Styling for the pop-up button */
        .visible {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header>
        <img class="logo" src="logo.png" style='height:150px;height:150px;'>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="spel1.php">Slot Machine</a></li>
            <li><a href="spel2.php">Quiz</a></li>
            <li><a href="spel3.php">Cookie Clicker</a></li>
            <li><a href="spel4.php">Guess the brand</a></li>
            <li><a href="spel5.php">Head or Tails</a></li>
        </ul>
    </nav>


    <content>
        <div class="sections">
            <!-- Page content goes here -->
            <section class="content">
                <h1 class="title">Welcome</h1>
                <p>Welcome to Kansloosino – where luck meets laughs! Dive into our games: spin wild slots, tackle true or false quizzes, click your way through Cookie Clicker, guess logos, or flip coins in Heads or Tails. No-nonsense, just fun. Roll the dice, spin the wheel, and enjoy at Kansloosino! Good luck and game on! 🎰🍪🎲✨
                </p>
            </section>

            <section class="content2">
                <h1>Kansloosino Disclaimer</h1>

                <p>
                <h1>Please note that the following legal disclaimer is intentionally convoluted and labyrinthine in its
                    language. It is not intended to be comprehensible by individuals lacking a legal background. Proceed at your
                    own risk.</h1>
                </p>

                <h2>Kansloosino (hereinafter referred to as "the Casino") welcomes you to our enigmatic digital domain. By accessing
                    or utilizing any of our cryptic services, you implicitly agree to the following perplexing terms and
                    conditions:</h2>
            </section>
            <section class="content3">
                <div class="visible">Click here</div>
                <div id="invisible" class="hide">
                    <ol>
                        <li>
                            <h3>Quantum Wagering</h3>
                            <ul>
                                <li>The act of placing bets within Kansloosino's quantum-encrypted framework involves the simultaneous
                                    existence of both winning and losing outcomes. By participating, you acknowledge that the Schrödinger's
                                    cat paradox applies to your wagers.</li>
                                <li>Kansloosino reserves the right to collapse wave functions at its discretion, resulting in either
                                    favorable or unfavorable results for the player. Such determinations are final and irrevocable.</li>
                            </ul>
                        </li>

                        <li>
                            <h3>Esoteric Odds and Aleatory Algorithms</h3>
                            <ul>
                                <li>Our aleatory algorithms, derived from ancient grimoires and numerological matrices, generate outcomes
                                    with an occult precision. These outcomes are inscribed on the astral plane and transmitted to your
                                    device via quantum entanglement.</li>
                                <li>The odds are expressed in arcane symbols, including but not limited to: Ψ, ∫, and ∇. Interpretation
                                    requires proficiency in Hermetic calculus.</li>
                            </ul>
                        </li>

                        <li>
                            <h3>Quantum Wagering</h3>
                            <ul>
                                <li>The act of placing bets within Kansloosino's quantum-encrypted framework involves the simultaneous
                                    existence of both winning and losing outcomes. By participating, you acknowledge that the Schrödinger's
                                    cat paradox applies to your wagers.</li>
                                <li>Kansloosino reserves the right to collapse wave functions at its discretion, resulting in either
                                    favorable or unfavorable results for the player. Such determinations are final and irrevocable.</li>
                            </ul>
                        </li>

                        <!-- Section 2 -->
                        <li>
                            <h3>Esoteric Odds and Aleatory Algorithms</h3>
                            <ul>
                                <li>Our aleatory algorithms, derived from ancient grimoires and numerological matrices, generate outcomes
                                    with an occult precision. These outcomes are inscribed on the astral plane and transmitted to your
                                    device via quantum entanglement.</li>
                                <li>The odds are expressed in arcane symbols, including but not limited to: Ψ, ∫, and ∇. Interpretation
                                    requires proficiency in Hermetic calculus.</li>
                            </ul>
                        </li>

                        <!-- Section 3 -->
                        <li>
                            <h3>Metaphysical Currency</h3>
                            <ul>
                                <li>Deposits and withdrawals occur in <strong>Ethereal Tokens (ET)</strong>, a non-Euclidean currency
                                    existing beyond the confines of spacetime. ET balances fluctuate unpredictably due to cosmic
                                    perturbations.</li>
                                <li>Conversion rates between ET and earthly currencies are subject to cosmic inflation, retrograde planetary
                                    alignments, and the whims of celestial beings.</li>
                            </ul>
                        </li>

                        <!-- Section 4 -->
                        <li>
                            <h3>Temporal Anomalies and Retroactive Bets</h3>
                            <ul>
                                <li>Kansloosino operates within a Möbius time loop. Bets placed today may retroactively affect outcomes in
                                    the past. Winning bets may alter historical events, creating alternate timelines.</li>
                                <li>Players are advised to consult their personal chronomancers before engaging in temporal wagers.</li>
                            </ul>
                        </li>

                        <!-- Section 5 -->
                        <li>
                            <h3>Jurisdictional Paradoxes</h3>
                            <ul>
                                <li>Kansloosino exists simultaneously in all legal dimensions, including but not limited to: the 12th Circuit
                                    of the Nth Dimension, the Hyperspace Tribunal, and the Court of Cosmic Arbitration.</li>
                                <li>By participating, you submit to the jurisdiction of all aforementioned courts, as well as any parallel legal
                                    systems yet to be discovered.</li>
                            </ul>
                        </li>

                        <!-- Section 6 -->
                        <li>
                            <h3>Eldritch Disclaimers</h3>
                            <ul>
                                <li>Kansloosino disclaims liability for eldritch curses, transdimensional debts, or soul-binding contracts
                                    resulting from gameplay.</li>
                                <li>Players encountering spectral apparitions, time loops, or existential crises during gameplay are encouraged
                                    to seek metaphysical counsel.</li>
                            </ul>
                        </li>

                        <!-- Section 7 -->
                        <li>
                            <h3>Voiding the Void</h3>
                            <ul>
                                <li>In the event of a paradoxical implosion, Kansloosino reserves the right to void the void, rendering all
                                    wagers null and void. Players will be reimbursed in quarks or cosmic strings.</li>
                                <li>The voiding process may cause temporary existential instability. Please remain seated until reality
                                    stabilizes.</li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <p>
                    <em>By continuing to navigate this labyrinthine disclaimer, you acknowledge that your sanity waivers are intact
                        and that you accept the enigmatic consequences of your actions. Should you encounter any Lovecraftian
                        anomalies, please consult our spectral customer service representatives.</em>
                </p>
            </section>
        </div>
        <div class="aside">
            <aside>
                <h2>Scoreboard</h2>
            </aside>
        </div>

    </content>
    <!-- Include the footer -->
    <div class="footer">
        &copy; 2024 Kansloosino
    </div>
</body>

</html>