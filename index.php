<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/php/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha384-dfZpZjJZKLOpXDQm2aDM0jF7efvH+2T8XzUmikXr6q0jZ9ZlHAAKRII5oD33J4k5"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <img src="https://art.pixilart.com/fb41e74302b2297.png" alt="Logo" />
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search..." />
      </div>
      <?php if (isset($user)): ?>
        
      <p>Welcome <?= htmlspecialchars($user["name"]) ?></p>
      
      <p><a href="php/logout.php">Log out</a></p>
      
  <?php else: ?>
      
      <p><a href="php/login2.php">Log in</a> or <a href="signup.html">sign up</a></p>
      
  <?php endif; ?>
    </nav>
<!-- hier heb je de knoppen om naar de andere pagina's te komen-->
    <div class="iets">
      <div class="div-links">
        <div class="sidebar">
          <a href="index.php"><p>Home</p></a>
          <a href="Forum.php"><p>Forums</p></a>
          <a href="NAV-HTML.php"><p>Games</p></a>
        </div>
      </div>
      <!-- hier komt de hamburger menu voor de mobile versie van de website-->
      <div class="burger-menu">&#9776;</div>
      <div class="div-mid">
        <div class="slider-container">
          <div class="slides">
            <div class="slide">
              <img
                src="https://www.hdwallpapers.in/download/hogwarts_legacy_4k_hd_games-3840x2160.jpg"
                alt="Slide 1"
              />
            </div>
            <div class="slide">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/11e62ffb-3ee1-4d8c-b2b0-fa9fba112532/de78xk3-f193902a-780d-41c0-afb7-a98ce0eedc88.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzExZTYyZmZiLTNlZTEtNGQ4Yy1iMmIwLWZhOWZiYTExMjUzMlwvZGU3OHhrMy1mMTkzOTAyYS03ODBkLTQxYzAtYWZiNy1hOThjZTBlZWRjODgucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.DLbB2Y0ISzpmT_FiE_nxhZ7JVzc5VL07el9Xnnf4_RE"
                alt="Slide 2"
              />
            </div>
            <div class="slide">
              <img
                src="https://images7.alphacoders.com/132/1323282.jpeg"
                alt="Slide 3"
              />
            </div>
          </div>

          <div class="navigation">
            <div class="ball" onclick="changeSlide(0)"></div>
            <div class="ball" onclick="changeSlide(1)"></div>
            <div class="ball" onclick="changeSlide(2)"></div>
          </div>
        </div>

        <div class="flex-container">
          <div class="left-div">
            <div>
              <h1>Recente Artikelen</h1>
            </div>
            <div class="artiekelen">
              <div>
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcsRt9M3yc9SjrMYAnkNWUvdIc6EmcR4s6aZOprCsAs4nebbMah6mtIEE_2SSn9qkRN5A&usqp=CAU"
                />
                <p>
                  iets en daarna nog iets en dan een ding met iets een gedoe en
                  weet ik veel wat nogmeer.
                </p>
              </div>
              <div>
                <img
                  src="https://nftevening.com/wp-content/uploads/2022/10/Copy-of-9991.png"
                />
                <p>
                  bla bla bl bla bla bla bla bla bla bla bla bla bla bla bla bla
                  bla bla bla bla bla bla bla bla bla bla bla bla bla
                </p>
              </div>
              <div>
                <img
                  src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/69d79c77-7a14-4d6e-a6e4-6aadb16f4fdb/dfsn8ah-641d63c4-993c-4e9b-bd65-84c56cae98b7.jpg/v1/fill/w_887,h_901,q_75,strp/stitch_pfp_by_nintendgod29_dfsn8ah-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAxIiwicGF0aCI6IlwvZlwvNjlkNzljNzctN2ExNC00ZDZlLWE2ZTQtNmFhZGIxNmY0ZmRiXC9kZnNuOGFoLTY0MWQ2M2M0LTk5M2MtNGU5Yi1iZDY1LTg0YzU2Y2FlOThiNy5qcGciLCJ3aWR0aCI6Ijw9ODg3In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.l5U2aoAZ1biwsKCSMcCi6oG3588-EoYuqA41QJsfL8g"
                />
                <p>
                  weet ik veel nogmeer tekst om te schrijven zodat het lijkt
                  alsof er ook echt artiekelen zijn.
                </p>
              </div>
              <div>
                <img
                  src="https://www.asiamediajournal.com/wp-content/uploads/2022/10/Dog-Cool-PFP-1200x1200.jpg"
                />
                <p>Ik ben hier te lui voor ik laat het gewoon hierbij.</p>
              </div>
              <div>
                <img
                  src="https://wallpapers.com/images/featured/pfp-ideas-xw1wwduk0rh1aq7m.jpg"
                />
                <p>Ik ben hier te lui voor ik laat het gewoon hierbij.</p>
              </div>
            </div>
          </div>
          <div class="right-div">
            <div class="top-right">
              <div class="calendar">
                <div class="month">
                  <button id="prevMonth">&lt; Previous</button>
                  <h2 id="currentMonth">November 2023</h2>
                  <button id="nextMonth">Next &gt;</button>
                </div>
                <div class="weekdays">
                  <div>Sun</div>
                  <div>Mon</div>
                  <div>Tue</div>
                  <div>Wed</div>
                  <div>Thu</div>
                  <div>Fri</div>
                  <div>Sat</div>
                </div>
                <div class="days" id="days"></div>
              </div>
              <div class="bottom-right">
                <div class="poll">
                  <h2>een vraag</h2>
                  <div class="options" id="options">
                    <div data-option="javascript">optie1</div>
                    <div data-option="python">optie2</div>
                    <div data-option="java">optie3</div>
                    <div data-option="csharp">optie4</div>
                  </div>
                  <div class="results" id="results"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <a href="#" class="button-left">Left Button</a>
      <div class="social-links">
        <a href="https://www.instagram.com/" target="_blank"
          ><img src="img/insta trans.png" alt="Instagram"
        /></a>
        <a href="https://www.facebook.com/" target="_blank"
          ><img src="img/facebook trans.png" alt="Facebook"
        /></a>
        <a href="https://twitter.com/" target="_blank"
          ><img src="img/twitter trans.png" alt="Twitter"
        /></a>
      </div>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>
