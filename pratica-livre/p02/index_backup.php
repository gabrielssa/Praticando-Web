<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <div class="card" id="card1">
      <div class="card-image"></div>
      <div class="card-text">
        <span class="date">Nosso servidor</span>
        <h2>Lich King 3.3.5a</h2>
        <p>XP 12X / GOLD 7 / REP 2X / PROF 2X</p>
      </div>
      <div class="card-stats">
        <div class="stat">
          <!--<div class="value">6<sup>d</sup>3<sup>h</sup>24<sup>m</sup></div> -->
          <?php
            include "uptime.php";
          ?>
          <div class="type">Uptime</div>
        </div>

        <div class="stat">
            <div class="acess"><a href="http://mythicowow.xyz/wotlk/">Acessar</a></div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-image card2"></div>
      <div class="card-text card2">
        <span class="date">Novidades</span>
        <h2>Caixa Surpresa</h2>
        <p>Você irá ganhar uma a cada 20 leveis, são 4 montarias. <a href="https://mythicowow.xyz/wotlk/news/7">Saiba Mais</a></p>
      </div>
      
    </div>

  </body>
</html>
