<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="images/icon.png">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui.min.css">
    <link type="text/css" rel="stylesheet" href="styles/default.css">
    <link type="text/css" rel="stylesheet" href="styles/pink.css">
    <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="scripts/ready.js"></script>
    <!--<script type="text/javascript" src="scripts/whatsyourname.js"></script>-->
    <script type="text/javascript" src="scripts/question.js"></script>
    <script type="text/javascript" src="scripts/score.js"></script>
    <script type="text/javascript" src="scripts/timer.js"></script>
    <script type="text/javascript" src="scripts/bonus.js"></script>
    <script type="text/javascript" src="scripts/table.js"></script>
    <script type="text/javascript" src="scripts/barcode.js"></script>
    <title>おじゃマス計算</title>
  </head>
  <body>

    <div class="title">
      <img src="images/title2.png">
    </div>


    <div class="dialog"></div>

    <div style="display:none" class="name">
      <?php
        if (isset($_POST['name'])) {
          echo htmlspecialchars($_POST['name']);
        }
      ?>
    </div>

    <form>
      <table class="mainTable" border="1" cellspacing="0"></table>
    </form>

    <div class="statusboard">
	    <div class="timerboard"></div>
	    <div class="scoreboard"></div>
	  </div>

    <div class="nameDialog" title="あなたのお名前は？">
      <form class="nameDialogForm" method="post">
        <input type="text" name="name" class="namebox" value="名無しさん" class="text ui-widget-content ui-corner-all">
      </form>
    </div>

    <div class="difficultyDialog" title="どのレベルでプレイする？">
      <form>
        <input type="button" value="激甘" id="hidari" onclick="gameReady('easy')">
        <input type="button" value="中辛" id="migi" onclick="gameReady('normal')">
      </form>
    </div>

    <div class="areyouready" title="準備はOK？"></div>

    <div class="tutorialDialog" title="チュートリアル"></div>

    <div class="bonustimeDialog" title="ボーナスタイム！">
      <p>バーコードリーダーでピッ</p>
      <form>
        <input type="number" class="firstBarcode" value="" max="13">
        <input type="number" class="secondBarcode" value="" max="13">
      </form>
    </div>

    <div class="gameoverDialog" title="ゲームオーバー">
      <p class="scoreResult"></p>
      <p class="timeResult"></p>
    </div>
  </body>
</html>