<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Postcards</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>
      
    <header class="title">
        <div>Postcards</div>
    </header>
  
      <!--I had some trouble implementing an active selection for the nav bar so I opted for a
          fixed title at the top of the page-->
    <nav class="topNav" id="myTopNav">
      <a href="index.php">Home</a>
      <a href="Abbreviations.php">Abbreviations</a>
      <a href="letters.php">Letters</a>
      <a class="active" href="">Postcards</a>
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
        <button class="accordian">August 24th 1914</button>
        <div class="panel">
          <p class="hand" style="text-align: right;">August 24th. 1914.</p>
          <p class="hand">Just have a chance to write a few lines at a small shop near the Camp. We had about four hours in Brisbane before going to Camp and had a good look round. Arrived in Camp about 6 p.m. and all the Gympie lads [Infantry] were placed in one tent [11 of us].  The Light Horse are nearly a mile from us. Of course it was my luck to be made Tent Orderly for the first day – getting the tucker and cleaning up. We have had nothing issued to us yet, so just as well I brought something.  There is no child’s play in this camp – plenty of hard work – they mean business. We have a free hand at night so far and can write as we like.  Saw Herb as we were marching to the Camp. He was going back from work and I had only time to shake hands with him – could not leave the ranks. We will be under Captain Jackson. He has been appointed Captain of the Northern Rivers men and managed to get us in with him. Cannot write any more, am in a hurry. Will write more later on. Am feeling quite homesick. Had our feet examined today, teeth tomorrow I think.</p>
        </div>
        <button class="accordian">September ND 1914</button>
        <div class="panel">
          <p class="hand" style="text-align: right;">September. 1914.</p>
          <p class="hand">Your letters are very welcome and I always look forward to them.  We will not be leaving here before next Tuesday, so I will be able to receive a few more yet, will I not?  Mother was out to the camp today with Jennie, they brought some cakes and eggs which were very welcome.  After seeing Mum off I met Kate Jory who was here with some other girls. I had about five minutes talk with her but had to slide off as our Coy. was being paid and I did not want to be late for that.  Things are going on just the same as usual and nothing exciting occurs in our camp life. There was a bayonet fixing and unfixing competition held today and the prize was ten shillings which was won by H Coy.. Sorry to say our lads did not come up to the mark at that game, but on the whole Col. Lee was quite satisfied.  Every morning before breakfast the whole of the Infantry go for a couple of miles march  -  it is much better than drilling and gives us an appetite for breakfast.  I have not much news to tell you Dot, and not much time either so will close with the best of love to you all.</p>
          </div>
        <button class="accordian">October 23rd 1914</button>
        <div class="panel">
          <p class="hand" style="text-align: right;">October 23rd. 1914.</p>
          <p class="hand">I have just come off parade and am trying to write these few lines before tea. Finished a letter to Mum a couple of hours ago and it is still raining, the sea is getting rough but it does not affect me at all, I am feeling A1.  They are very stingy with the water now, we have to wash in salt water and only get about half a bottle a day of drinking water.  I generally manage to find enough water for at least one wash a day.  The Y.M.C.A. chap has been giving out plenty of magazines and novels, draughts and cards and quoits so things are not too bad. Nearly all of our Coy. have had their hair cut right off with the clippers – we do look bonsor, one chap had his shaved off and he gets a hot time over it.  Well, I will have to ring off as our mess orderly is setting the table for tea and I am in the way. We have tea at 5 p.m. and coffee is served out at 7.40 p.m..  We were paid 14/- (fourteen shillings) yesterday so everyone is feeling rich again.</p>
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