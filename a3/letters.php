<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Letters</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <script src='./tools.js'></script>
    <script src='/tools.js'></script>
    <?php
        require_once 'tools.php';
    ?>
  </head>

  <body>
      
    <header class="title">
        <div>Letters</div>
    </header>
  
      <!--I had some trouble implementing an active selection for the nav bar so I opted for a
          fixed title at the top of the page-->
    <nav class="topNav" id="myTopNav">
      <a href="index.php">Home</a>
      <a href="Abbreviations.php">Abbreviations</a>
      <a class="active" href="">Letters</a>
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
      <div class="bodytext">
        <div class="flip-card">
          <div class="flip-card-inner">
           <div class="flip-card-front">
            <h1>Letter, Date 1</h1>
            <h1>and Location 1</h1>
           </div>
            <div class="flip-card-back">
              <h1>Date</h1>
              <p>TEXT Back</p>
              <p>More Text Back</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
           <div class="flip-card-front">
            <h1>Letter, Date 1</h1>
            <h1>and Location 1</h1>
           </div>
            <div class="flip-card-back">
              <h1>Date</h1>
              <p>TEXT Back</p>
              <p>intersetng story</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
           <div class="flip-card-front">
            <h1>Letter, Date 3</h1>
            <h1>and Location 3</h1>
           </div>
            <div class="flip-card-back">
              <h1>Date</h1>
              <p>TEXT Back</p>
              <p>Very interesting story</p>
            </div>
          </div>
        </div>
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
      
      var acc = document.getElementsByClassName("accordian");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          /*  */
          this.classList.toggle("acc_active");

          /*  */
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
    </script>

  </body>

</html>>