<?php session_start();?>
<script src="src.js"></script>
<html>

    <head>
        <title>title</title>
        
        <link rel="stylesheet" href="styles.css">
        <script src="src.js"></script>
    </head>

    <body>
        <head>
        <a href="contact.php">contact us</a>
        </head>

        <main>
            <div class="mainContainer">
                <div class="dataContainer">
                    <div class="dataHeader">
                        <form action="index.php" method = "POST">
                            <div class="controlButtons">
                                <input type="submit" name="Sunday" value="Sun 26 Jul">
                                <input type="submit" name="Monday" value="Mon 27 Jul">
                                <input type="submit" name="Tuesday" value="Tue 28 Jul">
                                <input type="submit" name="Wednsday" value="Wed 29 Jul">
                            </div>
                        </form>
                        <div class="data">
                                

                                <div class="body" id="body">

                                   <!-- <div class="timeline" id="timeline">
                                        <div>18:00</div>
                                        <div>19:00</div>
                                        <div>20:00</div>
                                        <div>21:00</div>
                                        <div>22:00</div>
                                        <div>23:00</div>
                                        <div>00:00</div>
                                    </div>-->

                                    <div class="components" id="components">
                                        <div class="item" id="firstItem">
                                            <div class="event" id="event1">
                                                <div class="poster"><img src="assets/kings.png" alt="event-Poster"></div>
                                                <div class="content">
                                                    <div class="eventTitle"><p>Gumb Kings</p></div>
                                                    <div class="info"><p>18:00 - 19:00      $ 15:00</p></div>
                                                    <div class="bookButton"><button>Book</button></div>
                                                </div>
                                            </div>

                                            <div class="event" id="event2">
                                                <div class="poster"><img src="assets/jazz.jpg" alt="event-Poster"></div>
                                                <div class="content">
                                                    <div class="eventTitle"><p>Gumb Kings</p></div>
                                                    <div class="info"><p>18:00 - 19:00      $ 15:00</p></div>
                                                    <div class="bookButton"><button>Book</button></div>
                                                </div>
                                            </div> 

                                        </div>

                                        <div class="item" id="secondItem">
                                            <div class="event">
                                                <div class="poster"><img src="assets/kings.png" alt="event-Poster"></div>
                                                <div class="content">
                                                    <div class="eventTitle"><p>Gumb Kings</p></div>
                                                    <div class="info"><p>18:00 - 19:00      $ 15:00</p></div>
                                                    <div class="bookButton"><button>Book</button></div>
                                                </div>
                                            </div>
                                            
                                            <div class="event">
                                                <div class="poster"><img src="assets/jazz.jpg" alt="event-Poster"></div>
                                                <div class="content">
                                                    <div class="eventTitle"><p>Gumb Kings</p></div>
                                                    <div class="info"><p>18:00 - 19:00      $ 15:00</p></div>
                                                    <div class="bookButton"><button>Book</button></div>
                                                </div>
                                            </div> 

                                        </div>

                                        <div class="item" id="thirdItem">
                                            <div class="event">
                                                <div class="poster"><img src="assets/kings.png" alt="event-Poster"></div>
                                                <div class="content">
                                                    <div class="eventTitle"><p>Gumb Kings</p></div>
                                                    <div class="info"><p>18:00 - 19:00      $ 15:00</p></div>
                                                    <div class="bookButton"><button>Book</button></div>
                                                </div>
                                            </div>

                                            <div class="event">
                                                <div class="poster"><img src="assets/jazz.jpg" alt="event-Poster"></div>
                                                <div class="content">
                                                    <div class="eventTitle"><p>Gumb Kings</p></div>
                                                    <div class="info"><p>18:00 - 19:00      $ 15:00</p></div>
                                                    <div class="bookButton"><button>Book</button></div>
                                                </div>
                                            </div> 

                                        </div> 
                                    </div>

                                </div>
                        </div>

                    </div>
                </div>
            </div>

        </main>

        <footer>

        </footer>
        <script>
        GetDefualt();
        </script>
        <?php
            include_once "view.php";
        ?>

    </body>


</html>