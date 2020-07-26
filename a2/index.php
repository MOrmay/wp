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
  </head>

  <body>

    <header>
      <div class="title">ANZAC Douglas Raymond Baker - Letters Home</div>
    </header>

    <!--I had some trouble implementing an active selection for the nav bar so I opted for a
        fixed title at the top of the page-->
    <nav class="topNav" id="myTopNav">
      <a href="index.php">Home</a>
      <a href="about_Douglas.html">About Douglas</a>
      <a href="index.php">Letters</a>
      <a href="index.php">Postcards</a>

      <!-- creating the drop down button and selectors-->
      <div class="dropdown">
        <button class="dropbtn">Events &#9660
          <i class="fa fa-claret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="index.php">Gallipoli</a>
          <a href="index.php">The Big Push</a>
          <a href="index.php">Battle Of Poziers</a>
        </div>
      </div>
      <a href="index.php">Places</a>
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
        <p>This year is the centenary of the birth of the ANZAC legend. As such, many people, particularly young people,
 are looking for ways to connect with people of that period and inparticular, those who created the ANZAC legend.<br>
This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He
 enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home.
 In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences
 while visiting his relatives in England during leave.<br> They start from the beginning of basic training in Brisbane
  in August 1914 and end in May 1918.
<br> They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on 
the battlefield was like.
<br> From the menu on the left, read the Introduction to set the scene. Then, to start reading the letters, click on
 Letter and Post Cards in the menu on the left. All the letters are searchable using the  search bar at the top right of this page.
<img style="float: right; background-color: #bbb4b4;" src=../../media/a2/DRBphoto.jpg alt='Douglas Raymond Baker'>
<br> (Photograph courtesy of : John Oxley Library, State Library of Queensland [Image number: 702692-19141024-s0023-0027])
        </p> 
      </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Mathew Ormay s3795048 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

    <script>
      function menuExpand() {
        var x = document.getElementById("myTopNav");
        if (x.className === "topNav") {
          x.className += " responsive";
        } else {
          x.className = "topNav";
        }
      }
    </script>

  </body>

</html>
