<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="CM Freelancing">
    <link rel="icon" href="<?php bloginfo("wpurl")?>/wp-content/uploads/2019/12/A-3.jpg">
    <title>NACA</title>
    <?php wp_head()?>
</head>

<body>
    <nav>
        <a href="<?php bloginfo('wpurl')?>">
            <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/A-3.jpg">
        </a>
        <ul>
            <li>
                <a href="<?php bloginfo('wpurl')?>/">Home</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/primary-school">Primary School</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/high-school">High School</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/impacts">Impacts</a>
            </li>
            <li>
                <a href="<?php bloginfo('wpurl')?>/quiz">Quiz</a>
            </li>
            <li>
                <a href="http://www.naca.org.za/">NACA Official</a>
            </li>
        </ul>
        <a id="expand">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </a>
    </nav>

    <main id="quiz">
        <section id="intro">
            <button class="school" id="primary">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/images-13.jpg">
                <div class="overlay"></div>
                <h2>Primary School</h2>
            </button>
            <button class="school" id="high">
                <img
                    src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/bored-school-kid-school-girl-sleep-royalty-free-thumbnail.jpg">
                <div class="overlay"></div>
                <h2>High School</h2>
            </button>
            <button class="school" id="rating">
                <img src="<?php bloginfo('wpurl')?>/wp-content/uploads/2019/12/13526457013454.png">
                <div class="overlay"></div>
                <h2>Emitter Rating</h2>
            </button>
        </section>
        <section id="primary">
            <div id="slides">
                <div class="slide">
                    <h1>Welcome to the quiz. Let's test your knowledge.</h1>
                    <p>There are 15 questions. Use the buttons to navigate between each question. Questions can only be
                        answered once.</p>
                </div>
                <div class="slide">
                    <h2>Question 1</h2>
                    <p>How many different kinds of criteria pollutants are there?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>30</p>
                        </button>
                        <button class="answer">
                            <p>3</p>
                        </button>
                        <button class="answer">
                            <p>12</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>6</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 2</h2>
                    <p>Solar panels use energy from...</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>The sun</p>
                        </button>
                        <button class="answer">
                            <p>The wind</p>
                        </button>
                        <button class="answer">
                            <p>Water</p>
                        </button>
                        <button class="answer">
                            <p>The grass</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 3</h2>
                    <p>How can you help decrease air pollution?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Plant trees</p>
                        </button>
                        <button class="answer">
                            <p>Recycle</p>
                        </button>
                        <button class="answer">
                            <p>Save water</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>All of the above</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 4</h2>
                    <p>The atmosphere supports life by protecting us from harmful rays from the sun, contains oxygen
                        that animals need to breathe and brings rain from clouds.</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 5</h2>
                    <p>What is air pollution?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Air pollution is the oxygen we breathe.</p>
                        </button>
                        <button class="answer">
                            <p>Air pollution is a multi- colored gas.</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Air pollution is the release of harmful chemicals and gases into the air we breathe by
                                many different sources.</p>
                        </button>
                        <button class="answer">
                            <p>Air pollution is the release of harmful substances into our drinking water</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 6</h2>
                    <p>Greenhouse gases damage the environment</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 7</h2>
                    <p>Criteria pollutants can not make people sick if they breathe them into their lungs</p>
                    <div class="answers">
                        <button class="answer">
                            <p>True</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 8</h2>
                    <p>Which of the following options does not cause air pollution?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Waste dumps</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Hospitals</p>
                        </button>
                        <button class="answer">
                            <p>Factories</p>
                        </button>
                        <button class="answer">
                            <p>Mines</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 9</h2>
                    <p>Plants need carbon dioxide to grow and develop.</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 10</h2>
                    <p>Global warming causes which of the following things?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Floods</p>
                        </button>
                        <button class="answer">
                            <p>Wildfires</p>
                        </button>
                        <button class="answer">
                            <p>Droughts</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>All of the above</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 11</h2>
                    <p>Making electricity releases harmful gases into the atmosphere.</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 12</h2>
                    <p>Criteria pollutants can not harm the environment.</p>
                    <div class="answers">
                        <button class="answer">
                            <p>True</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 13</h2>
                    <p>Greenhouse gases cause the temperatures at earths surface to rise.</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 14</h2>
                    <p>Why are melting ice-caps a bad thing?</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>Animals homes are destroyed</p>
                        </button>
                        <button class="answer">
                            <p>It makes the oceans too cold to swim in for humans</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 15</h2>
                    <p>Which animals are affected by the melting ice- caps?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Penguins</p>
                        </button>
                        <button class="answer">
                            <p>Polar bears</p>
                        </button>
                        <button class="answer">
                            <p>Snow leopards </p>
                        </button>
                        <button id="correct" class="answer">
                            <p>All of the above</p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="buttons">
                <a id="previous" class="button">Previous</a>
                <a id="next" class="button">Next</a>
            </div>
            <div id="fin">
                <h1>Congratulations! You scored
                    <span id="correct"></span> /
                    <span id="total"></span>!</h1>
                <p>Would you like to try again?</p>
                <div id="buttons">
                    <a href="<?php bloginfo('wpurl')?>/quiz" class="button">Try Again</a>
                    <a href="<?php bloginfo('wpurl')?>" class="button">Back to Home</a>
                </div>
            </div>
        </section>
        <section id="high">
            <div id="slides">
                <div class="slide">
                    <h1>Welcome to the quiz. Let's test your knowledge.</h1>
                    <p>There are 15 questions. Use the buttons to navigate between each question. Questions can only be
                        answered once.</p>
                </div>
                <div class="slide">
                    <h2>Question 1</h2>
                    <p>What is the atmosphere?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>It is the clouds we see above us.</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>It is a layer of gases held in place above the earths surface by gravity.</p>
                        </button>
                        <button class="answer">
                            <p>It is a term used to describe all the water covering earths surface.</p>
                        </button>
                        <button class="answer">
                            <p>It is a ring of debris found far above the earths surface.</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 2</h2>
                    <p>Which source of air pollution contributes the most to air pollution?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Waste</p>
                        </button>
                        <button class="answer">
                            <p>Mining</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Energy Production</p>
                        </button>
                        <button class="answer">
                            <p>Transport</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 3</h2>
                    <p>How many criteria pollutants are there?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>10</p>
                        </button>
                        <button class="answer">
                            <p>24</p>
                        </button>
                        <button class="answer">
                            <p>7</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>6</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 4</h2>
                    <p>Which of the following is not an example of a criteria pollutant? </p>
                    <div class="answers">
                        <button class="answer">
                            <p>Particulate Matter</p>
                        </button>
                        <button class="answer">
                            <p>Carbon monoxide</p>
                        </button>
                        <button class="answer">
                            <p>Sulfur dioxide</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Nitrogen</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 5</h2>
                    <p>Why is saving electricity important?</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>Producing electricity with fossil fuels as the main source of energy releases a large
                                amount of pollutant into the atmosphere and we must therefore save electricity to reduce
                                our contribution to air pollution.</p>
                        </button>
                        <button class="answer">
                            <p>There is no other way to produce electricity, fossil fuels have to be used and this
                                causes excessive amounts of air pollution therefore we should use as little electricity
                                as possible.</p>
                        </button>
                        <button class="answer">
                            <p>Electricity is extremely valuable and if we do not save it our country will have nothing
                                to sell.</p>
                        </button>
                        <button class="answer">
                            <p>Electricity is not that important for the South African economy or citizens well-being so
                                we should use less of it.</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 6</h2>
                    <p>Which greenhouse gas is found in the highest concentration in the atmosphere?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Methane</p>
                        </button>
                        <button class="answer">
                            <p>Ozone</p>
                        </button>
                        <button class="answer">
                            <p>Nitrous oxide</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Carbon dioxide</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 7</h2>
                    <p>Do greenhouse gases cause a deterioration in a humans health?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Yes</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>No</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 8</h2>
                    <p>Carbon monoxide is a criteria pollutant released mainly by vehicles and is capable of suffocating
                        a person who is trapped in a small space with large concentrations of this gas and no or little
                        ventilation.</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 9</h2>
                    <p>Which of the following is NOT caused by Criteria pollutants?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Making people ill.</p>
                        </button>
                        <button class="answer">
                            <p>Acid rain and increasingly acidic water sources.</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Wild fires.</p>
                        </button>
                        <button class="answer">
                            <p>Damage to a persons central and peripheral nervous system.</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 10</h2>
                    <p>What are greenhouse gases? </p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>They are gases that are capable of absorbing short wave radiation from the sun and then
                                re-radiating it as long wave radiation.</p>
                        </button>
                        <button class="answer">
                            <p>They are gases that appear green when seen in the atmosphere.</p>
                        </button>
                        <button class="answer">
                            <p>They are the gases that are essential for the proper functioning of a greenhouse.</p>
                        </button>
                        <button class="answer">
                            <p>Gases that are only found inside a greenhouse.</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 11</h2>
                    <p>Greenhouse gases are responsible for a rise in average global temperatures, this is known as
                        global warming.</p>
                    <div class="answers">
                        <button id="correct" class="answer">
                            <p>True</p>
                        </button>
                        <button class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 12</h2>
                    <p>Particulate matter is considered a criteria pollutant. Which of the following statements
                        regarding this pollutant is true?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>These particles are found only in soil and ground water sources.</p>
                        </button>
                        <button class="answer">
                            <p>These particles are not harmful to a humans health.</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>These particles are described as a mixture of solid and liquid droplets found in the
                                atmosphere.</p>
                        </button>
                        <button class="answer">
                            <p>These particles occur in only one size.</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 13</h2>
                    <p>Why is livestock farming bad for the environment?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Livestock are territorial and do not let other animals occupy the areas they live in,
                                this means that biodiversity decreases.</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Livestock have bacteria in their digestive systems that release methane, a greenhouse
                                gas, into the atmosphere.</p>
                        </button>
                        <button class="answer">
                            <p>Livestock release ozone, a criteria pollutant into the atmosphere.</p>
                        </button>
                        <button class="answer">
                            <p>Livestock farming is responsible for the release of large amounts of carbon dioxide into
                                the atmosphere.</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 14</h2>
                    <p>You can help decrease the amount of air pollution released into the atmosphere by using your own
                        car for transport at all times, always leaving your house lights on and getting rid of all the
                        trees and vegetation in your area.</p>
                    <div class="answers">
                        <button class="answer">
                            <p>True</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>False</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 15</h2>
                    <p>Wind turbines are an effective way to produce electricity as they do not release any pollutants
                        into the atmosphere. There are however, still some negative implications caused by them on the
                        environment. What are they?</p>
                    <div class="answers">
                        <button class="answer">
                            <p>Wind turbines release criteria pollutants into the atmosphere.</p>
                        </button>
                        <button class="answer">
                            <p>Wind turbines affect rain and weather patterns.</p>
                        </button>
                        <button id="correct" class="answer">
                            <p>Wind turbines require large amounts of space (big pieces of land) and this can sometimes
                                result in trees and vegetation being removed so that wind farms can be constructed, this
                                also has a negative impact on biodiversity as animals habitats are ruined.</p>
                        </button>
                        <button class="answer">
                            <p>Wind turbines make a lot of noise and this scares animals away.</p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="buttons">
                <a id="previous" class="button">Previous</a>
                <a id="next" class="button">Next</a>
            </div>
            <div id="fin">
                <h1>Congratulations! You scored
                    <span id="correct"></span> /
                    <span id="total"></span>!</h1>
                <p>Would you like to try again?</p>
                <div id="buttons">
                    <a href="<?php bloginfo('wpurl')?>/quiz" class="button">Try Again</a>
                    <a href="<?php bloginfo('wpurl')?>" class="button">Back to Home</a>
                </div>
            </div>
        </section>
        <section id="rating">
            <div id="slides">
                <div class="slide">
                    <h1>How much do you and your family contribute to air pollution?</h1>
                    <p>This quiz will give you an indication of whether your family are High, Moderate or Low
                        contributors to air pollution. If you are unsure of some of the answers ask a teacher or parents
                        to assist you to make the outcome as accurate as possible.</p>
                </div>
                <div class="slide">
                    <h2>Question 1</h2>
                    <p>In my household...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>None of our light bulbs or appliances are energy efficient </p>
                        </button>
                        <button id="medium" class="answer">
                            <p>Some of our light bulbs and appliances are energy efficient </p>
                        </button>
                        <button id="low" class="answer">
                            <p>All our light bulbs and appliances are energy efficient </p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 2</h2>
                    <p>In my household...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>We do not recycle or have a compost heap</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>We only recycle/ We only have a compost heap</p>
                        </button>
                        <button id="low" class="answer">
                            <p>We have recycling bins and we use a compost heap</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 3</h2>
                    <p>When I travel places I...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>Drive my own car/ am driven by my parents in their own car</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>Use public transport</p>
                        </button>
                        <button id="low" class="answer">
                            <p>Walk or ride a bike</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 4</h2>
                    <p>In my household...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>We only use electrically powered geysers</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>We have a solar powered geyser but often switch it back to electricity because the
                                temperature is never high enough</p>
                        </button>
                        <button id="low" class="answer">
                            <p>We only have solar powered geysers</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 5</h2>
                    <p>In my household at dinner time...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>We eat meat six to seven times a week</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>We eat meat less than five times a week</p>
                        </button>
                        <button id="low" class="answer">
                            <p>We eat meat less than three times a week</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 6</h2>
                    <p>In my household...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>We water our garden at least two times a week with an irrigation system</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>We only occasionally water our garden with an irrigation system</p>
                        </button>
                        <button id="low" class="answer">
                            <p>We only ever water our garden with grey water (water left over from washing clothes and
                                dishes)</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 7</h2>
                    <p>In my household...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>We have more than two cars</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>We have two cars</p>
                        </button>
                        <button id="low" class="answer">
                            <p>We have one/ no cars</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 8</h2>
                    <p>I have in the last year taken...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>More than three trips on an aeroplane</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>Less than three trips on an aeroplane</p>
                        </button>
                        <button id="low" class="answer">
                            <p>No trips on an aeroplane</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 9</h2>
                    <p>In my household...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>None of our appliances (other than the geyser) run on electricity from a sustainable
                                source </p>
                        </button>
                        <button id="medium" class="answer">
                            <p>Some of our household appliances (other than the geyser) run on electricity from a
                                sustainable source</p>
                        </button>
                        <button id="low" class="answer">
                            <p>All of our electricity is supplied by a sustainable source (eg. Hydro, Solar or Wind
                                power)</p>
                        </button>
                    </div>
                </div>
                <div class="slide">
                    <h2>Question 10</h2>
                    <p>In my household we...</p>
                    <div class="answers">
                        <button id="high" class="answer">
                            <p>Buy more than 30 new items of clothing or appliances in six months</p>
                        </button>
                        <button id="medium" class="answer">
                            <p>Buy fewer than 25 new items of clothing or appliances in six months</p>
                        </button>
                        <button id="low" class="answer">
                            <p>Buy fewer than 10 new items of clothing or appliances in six months</p>
                        </button>
                    </div>
                </div>
            </div>
            <div id="buttons">
                <a id="previous" class="button">Previous</a>
                <a id="next" class="button">Next</a>
            </div>
            <div id="fin">
                <h1 id="low">Congratulations! You are a low contributor to air pollution!</h1>
                <h1 id="medium">
                    Well done! You are a moderate contributor to air pollution.
                </h1>
                <h1 id="high">Uh Oh! Looks like you are a high contributor to air pollution!</h1>
                <p>Would you like to try again?</p>
                <div id="buttons">
                    <a href="<?php bloginfo('wpurl')?>/quiz" class="button">Try Again</a>
                    <a href="<?php bloginfo('wpurl')?>" class="button">Back to Home</a>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer()?>