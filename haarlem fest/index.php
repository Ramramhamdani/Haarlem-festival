<html>

    <head>
        <title>title</title>
        <link rel="stylesheet" href="styles.css">
        <script src="src.js"></script>
    </head>

    <body>
        <head>

        </head>

        <main>
            <div class="mainContainer">
                <div class="dataContainer">
                    <div class="dataHeader">
                        <div class="controlButtons">
                            <button onclick="viewSundayContent();">1</button>
                            <button onclick="viewTuesdayContent();">2</button>
                            <button>3</button>
                            <button>4</button>
                        </div>

                        <div class="data">
                                <div class="header">
                                   <div><p>Main Hall</p></div>
                                   <div><p>Second Hall</p></div>
                                </div>

                                <div class="body" id="body">

                                    <div class="timeline" id="timeline">
                                        <div>18:00</div>
                                        <div>19:00</div>
                                        <div>20:00</div>
                                        <div>21:00</div>
                                        <div>22:00</div>
                                        <div>23:00</div>
                                        <div>00:00</div>
                                    </div>

                                    <div class="components" id="components">
                                        <div class="item" id="firstItem">
                                            <div class="event" id="event">
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

                                        <div class="item" id="thirsItem">
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

        <?php
            include_once "connect.php";

            $date = '2020-01-08';
            $stmt = $conn->prepare("SELECT * FROM `events` WHERE `date` = '$date'");
            $stmt->execute();
            $stmt->bind_result($id,$title, $time,$poster,$date);

            while ($stmt->fetch()) {
            echo "<script>
                     generateData('$title','$time','$poster');
                </script>";
            }
        ?>

    </body>


</html>