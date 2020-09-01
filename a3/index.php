

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
    <script src='/tools.js'></script>
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
      <a class="active" href="">Home</a>
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
        <h2>Hello and Welcome!</h2>
        <img style="float: right; padding-left: 40px; opacity: 100;" src=../../media/a2/DRBphoto.jpg alt='Douglas Raymond Baker'>
        <p>This year is the centenary of the birth of the ANZAC legend. As such, many people, particularly young people,
 are looking for ways to connect with people of that period and inparticular, those who created the ANZAC legend.</p><p>
This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He
 enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home.
 In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences
 while visiting his relatives in England during leave.</p><p>They start from the beginning of basic training in Brisbane
  in August 1914 and end in May 1918.
</p><p>They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on 
the battlefield was like.
</p><p>From the menu on the left, read the Introduction to set the scene. Then, to start reading the letters, click on
 Letter and Post Cards in the menu on the left. All the letters are searchable using the  search bar at the top right of this page.
</p><p>(Photograph courtesy of : John Oxley Library, State Library of Queensland [Image number: 702692-19141024-s0023-0027])</p> 
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
    </script>

  </body>

</html>
