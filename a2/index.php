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
      <div>Put company logo and name here</div>
    </header>

    <nav class="topNav" id="myTopNav">
      
        <a href="index.php">Home</a>
        <a href="index.php">About Douglas</a>
        <a href="index.php">Letters</a>
        <a href="index.php">Postcards</a>
        <div class="dropdown">
          <button class="dropbtn">Events
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
          <button class="dropbtn">Records
            <i class="fa fa-claret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="https://www.aif.adfa.edu.au/showPerson?pid=11163">Service Summary</a>
            <a href="http://recordsearch.naa.gov.au/scripts/Imagine.asp?B=3009496">Service Record</a>
           </div>
        </div>
        
        <a href="javascript:void(0);" class="icon" onclick="menuExpand()">
              <i class="fa fa-bars"></i>        
            </a>
        
      
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Mathew Ormay s3795048 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
