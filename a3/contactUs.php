<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - Douglas Raymond Baker</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <script src='tools.js'></script>
    <?php
        require_once 'tools.php';
    ?>
  </head>

  <body>

    <header class="title">
      <div>ANZAC Douglas Raymond Baker - Letters Home</div>
    </header>

    <!--I had some trouble implementing an active selection for the nav bar so I opted for a
        fixed title at the top of the page-->
    <nav class="topNav" id="myTopNav">
      <a href="index.php">Home</a>
      <a href="Abbreviations.php">Abbreviations</a>
      <a href="letters.php">Letters</a>
      <a href="postcards.php">Postcards</a>
      <a href="places.php">Places</a>
      <div class="dropdown">
        <button class="dropbtn">Records &#9660
          <i class="fa fa-claret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="https://www.aif.adfa.edu.au/showPerson?pid=11163">Service Summary</a>
          <a href="http://recordsearch.naa.gov.au/scripts/Imagine.asp?B=3009496">Service Record</a>
        </div>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="menuExpand()">&#9776;</a>
    </nav>

    <main>
      <div class='bodytext'>
        <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <!--html special chars may make things a bit harder to parse-->
            <table ID='contact'>
                <tr><th>Contact Us</th>
                    <td></td>
                    <td></td>
                </tr>

                <tr><td><label for="Name">Name</label></td>
                    <td><input type="text" name="Name" id="Name" placeholder="Name"
                    pattern="^[a-zA-Z]+\s[a-zA-Z]+$" required value="localStorage.getItem('Name')"></td>
                    <td ID='error'><?php if(isset($NameErr)) {echo $NameErr;} ?></td>
                </tr>

                <tr><td><label for="Email">Email</label></td>
                    <td><input type="text" name="Email" id="Email" placeholder="Email"
                     required value=localStorage.getItem('Email')></td>
                    <td><?php if(isset($EmailErr)) {echo $EmailErr;} ?></td>
                </tr>

                <tr><td><label for="Mobile">Mobile</label></td>
                    <td><input type="text" name="Mobile" id="Mobile" placeholder="Mobile" 
                    pattern="^(\(04\)|04|\+614)( ?\d){8}$" value="localStorage.getItem('Mobile')"></td>
                    <td></td>
                </tr>

                <tr><td><label for="Subject">Subject</label></td>
                    <td><input type="text" name="Subject" id="Subject" placeholder="Subject" required></td>
                    <td></td>
                </tr>

                <tr><td style="vertical-align: top;"><label for="Message">Message</label></td>
                    <td><textarea style="height: 150px; width: 100%;" type="text" name="Message" id="Message" placeholder="Message" required></textarea>
                    <!--text area put message at the bottom of the table cell, grr
                    also resizing the box breaks the neat table formatting-->
                    <td></td>
                </tr>

                <tr><td style="text-align: right;"><input type="checkbox" id="remember" checked="localStorage.getItem('check')" onclick=rememberTogg()></td>
                    <td><label for="remember">Remember Me</label></td>
                    <td></td>
                </tr>
            </table>
            <button style="margin-left: 45%; margin-top: 15px;" type="submit" name="submit" onclick=rememberMe()>Submit</button>
        </form>
      </div>
    </main>

    <footer>
      <table>
        <tr>
          <th><a href="contactUs.php">Contact us!</a></th>
          <td><div>&copy;<script>
            document.write(new Date().getFullYear());
            </script> Mathew Ormay s3795048 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</td>
        </tr>
        <tr>
          <td></td><td><div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div></td>
        </tr>
      </table>
    </footer>

    <script>
      window.onscroll = function() {stickyNav()}

      var navbar = document.getElementById("myTopNav");

      var sticky = navbar.offsetTop;
      //menu expand function, tried getting both the collapsed menu and sticky to work together but can't get it to work
      function menuExpand() {
        if (navbar.className === "topNav" && window.pageYOffset >= sticky) {
          navbar.classList.add("responsive");
          navbar.classList.add("sticky");
        } else if (navbar.className === "topNav") {
          navbar.classList.add("responsive");
        } else {
          navbar.className = "topNav";
        }
      }

      // Sticky navbar functionality 
      function stickyNav(){
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      }

      function rememberMe(){
        if (localStorage.getItem('check')){
            localStorage.setItem('Name', <?php echo $Name?>);
            localStorage.setItem('Email', <?php echo $Email?>);
            localStorage.setItem('Mobile', <?php echo $Mobile?>);
        }
      }

      function rememberTogg(){
          var a = localStorage.getItem('check');
          if (a == true){
              localStorage.clear();
              localStorage.setItem('check', false);
          } else {
              localStorage.setItem('check', true);
          }
      }
    </script>

  </body>

</html>
