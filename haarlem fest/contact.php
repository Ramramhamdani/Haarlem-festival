<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <main class = "contactpage">
        
            <div class = "contactform">
            
                <form action="contact.php" method = "POST">
                    <div id = "title">
                        <h2>Contact us</h2>
                    </div>
                    <div class = "box">
                        <label for="name" id = "">Full name</label>
                        <input type="text" name="name" id="txtbx" required>
                    </div>
                    <div class = "box">
                        <label for="email">email</label>
                        <input type="email" name="email" id="txtbx" required>
                    </div>
                    <div class = "box">
                        <label for="sujbect">subject</label>
                        <input type="text" name="subject" id="txtbx" required>
                    </div>
                    <div class = "box">
                        <label for="message">message</label>
                        <textarea name="message" id="txtbx" placeholder = "Type your email" cols="30" rows="10" required></textarea>
                    </div>
                    <div class = "box">
                        <input type="submit" name="Send" class = "sendbtn" id="submit">
                    </div>
                </form>
            </div>
            
        </main>
        <footer>
        <?php include_once "contactback.php";?>
        </footer>
    </body>
</html>