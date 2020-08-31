<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Places</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <script type='text/javascript' src='/tools.js'></script>
  </head>

  <body>
      
    <header class="title">
        <div>Places</div>
    </header>
  
      <!--I had some trouble implementing an active selection for the nav bar so I opted for a
          fixed title at the top of the page-->
    <nav class="topNav" id="myTopNav">
      <a href="index.php">Home</a>
      <a href="Abbreviations.php">Abbreviations</a>
      <a href="letters.php">Letters</a>
      <a href="postcards.php">Postcards</a>
      <a class="active" href="">Places</a>
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
        <button class="accordian">Egypt</button>
        <div class="panel">
          <img src=../../media/a2/egypt_map.PNG>
        </div>
        <button class="accordian">Gallipoli</button>
        <div class="panel">
        <img src=../../media/a2/gallipoli.PNG>
        </div>
        <button class="accordian">Ypres</button>
        <div class="panel">
        <img src=../../media/a2/ypres.PNG>
        </div>
      </div>
    </main>

    <footer>
      <table>
        <tr>
          <th>Contact us:</th>
          <td><div>&copy;<script>
            document.write(new Date().getFullYear());
            </script> Mathew Ormay s3795048 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
          </td>
        </tr>
        <tr>
          <td>Email: ibak6837@bigpond.net.au</td>
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

      //accordian script
      var acc = document.getElementsByClassName("accordian");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {

          this.classList.toggle("acc_active");

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