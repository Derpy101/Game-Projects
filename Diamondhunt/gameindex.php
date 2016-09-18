<?php
session_start();
$username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <style>
        body  {
            background-color: #00ccff;
}
</style>
	<body>
      <p>
      <script>

      var money = 0;

      var stone = 0;
      var copper = 0;
      var iron = 0;
      var silver = 0;
      var gold = 0;
      var sap = 0;
      var emr = 0;
      var ruby = 0;
      var dia = 0;

      var minner = 1;
      var drill = 0;
      var crush = 0;
      var gdrill = 0;
      var mdrill = 0;

      var minnerpot = 0;
      var mdrillpot = 0;
      var doubmon = 0;

      var multi = 1;
      var multi2 = 1;

      var randnum = 0;
      var randnum2 = 0;
      var randnum3 = 0;
      var randnum4 = 0;


      function stones(){
          stone = (stone + (minner * 1) + (drill * 2) + (crush * 4) (gdrill * 10) (mdrill * 20));
          randnum = Math.floor((Math.random() * 1000) + 1);
          randnum2 = Math.floor((Math.random() * 10000) + 1);
          randnum3 = Math.floor((Math.random() * 100000) + 1);
          randnum4 = Math.floor((Math.random() * 1000000) + 1);
          if (randnum == 1) {
              sap = sap + 1;
          }
          if (randnum2 == 1) {
              emr = emr + 1;
          }
          if (randnum3 == 1) {
              ruby = ruby + 1;
          }
          if (randnum4 == 1) {
              dia = dia + 1;
          }
          updatepage();
      }
      timerAutoClick = setInterval(stoneup,1000);


      function coppers(){
          copper = (copper + (minner * 2) + (drill * 4) + (crush * 8) (gdrill * 20) (mdrill * 40));

      }
      timerAutoClick = setInterval(copperup,1000);

      function irons(){
          iron = (iron + (minner * 3) + (drill * 6) + (crush * 12) (gdrill * 30) (mdrill * 60));

      }
      timerAutoClick = setInterval(ironup,1000);

      function silvers(){
          silver = (silver + (minner * 4) + (drill * 8) + (crush * 16) (gdrill * 40) (mdrill * 80));

      }
      timerAutoClick = setInterval(silverup,1000);

      function golds(){
          gold = (gold + (minner * 5) + (drill * 10) + (crush * 20) (gdrill * 50) (mdrill * 100));

      }
      timerAutoClick = setInterval(goldup,1000);

      function updatepage(){
                var elem = document.getElementById("para1");
                elem.innerHTML = stone;
          }

      </script>

<p stone id="para1">0</p>

<p id="para4"></p>
        <FORM METHOD="LINK">
        <INPUT TYPE="button" VALUE="Granny +2cps  -10000 Cookies" onclick="stones();" />
      </FORM>

    </body>
</html>