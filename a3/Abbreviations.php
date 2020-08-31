<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abbreviations</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <script src='/tools.js'></script>
  </head>

  <body>
      
    <header class="title">
        <div>Abbreviations</div>
    </header>
  
      <!--I had some trouble implementing an active selection for the nav bar so I opted for a
          fixed title at the top of the page-->
    <nav class="topNav" id="myTopNav">
      <a href="index.php">Home</a>
      <a  class="active" href="">Abbreviations</a>
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
        <p>These are copies of letters written by my father Douglas Raymond Baker during the First World War (1914-1918) to his 
family in Gympie. I have three thick exercise books in which the letters were copied in hand writing by my Aunt Alice, 
his sister. I understand that this was done so his letters could be sent on to other members of the family. I don’t know 
if the originals are still in existence, probably not. In the early letters Alice has not included the name of the person 
they were written to but later she writes at the beginning, “Letter to Dot”,  “Letter to Mother”, etc. and later still copies 
the original, “Dear Al”, “Dear Mag”, etc..  Likewise the endings are often not laid out fully as we would do but Al may 
have done this or Dad may have been saving space on the page. Some letters are slightly out of date order in the books but
as most of these are around the time his father died I have put them in the correct order as this is crucial to understanding
the sense of the contents.  A lot will be missing – many, many ships were sunk but thanks to Aunt Alice we have these copies
of the ones that did get through. </p>
        <p>Where Dad used brackets in a letter I have used [   ] square brackets and where I have made any comment or explanation 
I have used (   ) and Italics.<br>
Where he uses the word “gay” it is used in the true sense, bright, happy, carefree, etc., This is the original meaning of the 
word before it became associated with the homosexual community.<br>
The amounts of money are, of course, in Pounds, shillings and pence but as these are out of date and we have no pounds 
sign in the computer I have written them in, sometimes showing the decimal equivalents. One Pound equalled $2, one 
shilling equalled 10 cents and one penny equalled a little under one cent. After a while I stopped putting the equivalents 
in as they had cno significance unless you knew the relative cost of things then and now. A shilling – equivalent to ten cents 
might actually alent to ten cents might actually buy  buy ten or twenty dollars worth of goods now.</p>
        <table>
          <tr><th>Jargon</th><th>Meaning</th></tr>
          <tr><td>Coy</td><td>Company (part of a Battalion)</td></tr>
          <tr><td>Batt.</td><td>Battalion</td></tr>
          <tr><td>Col.</td><td>Colonel</td></tr>
          <tr><td>Sergt.</td><td>Sergeant</td></tr>
          <tr><td>Capt.</td><td>Captain</td></tr>
          <tr><td>Lieut.</td><td>Lieutenant (pronounced “Lef-tenant”)</td></tr>
          <tr><td>Q.M.</td><td>Quarter Master</td></tr>
          <tr><td>Comp.</td><td>Company</td></tr>
          <tr><td>PC</td><td>Post Card.(not Personal Computer!)</td></tr>
          <tr><td>CB</td><td>Confined to Barracks (leave stopped as a punishment)</td></tr>
          <tr><td>Big Hits</td><td>Top ranked officers</td></tr>
          <tr><td>Brass Hats</td><td>Top ranked officers</td></tr>
          <tr><td>Dry Canteen</td><td>Bar and/or cafeteria, etc. where  no alcohol is served</td></tr>
          <tr><td>Wet Canteen</td><td>Bar and/or cafeteria, etc. where alcohol  is available</td></tr>
          <tr><td>Sapping</td><td>Digging a tunnel or deep trench to approach or undermine an enemy position</td></tr>
          <tr><td>L. Horse</td><td>Light Horse</td></tr>
          <tr><td>Good nick or Great nick</td><td>Good health</td></tr>
          <tr><td>Bonsorful</td><td>Wonderful, Marvellous</td></tr>
          <tr><td>M. G. S.</td><td>Machine  Gun  Section</td></tr>
          <tr><td>Territorials</td><td>Soldiers of the English  Volunteer Reserve</td></tr>
          <tr><td>Terriers</td><td>Soldiers of the English  Volunteer Reserve</td></tr>
          <tr><td>Bomb</td><td>Unless dropped from an aeroplane these would have been an early version of the hand grenade</td></tr>
          <tr><td>Blighty</td><td>England</td></tr>
          <tr><td>Duke</td><td>Dad's/family dog</td></tr>
          <tr><td>O.R.</td><td>Orderly Room</td></tr>
        </table>
        <p>Additional Comments by Ian Stuart Baker</p>
        <p>As the grandson of the Douglas Raymond, I'd like to share some thoughts with modern readers. 
Apart from the language issues that my Dad highlights, it would also help to recognise that in 
Grandfathers day, the letter was the only means of international communications for average people 
(telegrams were expensive and used rarely and international telephone calls, rarer still). That's 
why these letters are so important and why their content gives us window into their lives.</p>
        <p>From discussions with my Dad, it has came to light that the content of letters to his
direct family deliberately leave out much of the dreadful suffering and drudgery
experienced by the diggers. This intentional self-editing was intended to allay the
fears and concerns of those at home, inparticular, his mother and sisters.</p>
        <p>Finally, let me express a debt of thanks to Great Aunt Alice for diligently transcribing 
the original letters for without this effort, we would not have the material we do today. 
Also, my gratitude to my father for his work transforming the hand-written script into a 
typed paper record and then into electronic format, making my part in this infinitely easier.</p>
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
    </script>

  </body>

</html>>