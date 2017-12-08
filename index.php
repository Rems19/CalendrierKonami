<?php include("header.php"); ?>

        <img class="bg" id="lc-1" src="assets/lapin-crétin-1.png" alt="lapin-crétin-1">
        <img class="bg" id="lc-2" src="assets/lapin-crétin-2.png" alt="lapin-crétin-2">
        <img class="bg" id="cadeaux" src="assets/cadeaux.png" alt="cadeaux">
        <img class="bg" id="sucre-orge" src="assets/sucre-orge.png" alt="sucre-orge">
        <table>
          <?php for ($j = 0; $j < 6; $j++) { ?>
          <tr>
            <?php for ($i = 0; $i < 4; $i++) { $n = $j * 4 + $i + 1; ?>
            <td class="cell" onclick='location.href="jour/<?= $n ?>.php"'>
                <?= $n ?>
            </td>
            <?php } ?>
          </tr>
          <?php } ?>
        </table>
        <script>
          <?php if (!isset($_COOKIE['unlocked'])) { ?>
          var today = new Date();
          var cells = document.getElementsByClassName("cell");
          for (var i = 0; i < cells.length; i++) {
            var day = cells[i].textContent;
            var date = new Date(2017, 11, day);
            var now = Date.now();
            if (now - date < 0) {
              cells[i].onclick = null;
              cells[i].style.cursor = "default";
              cells[i].className += " disabled";
            }
          }
        <?php } ?>
          // Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
          var key_codes = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
          n = 0;
          $(document).keydown(function (e) {
            if (e.keyCode === key_codes[n++]) {
              if (n === key_codes.length) {
                window.location.replace("unlock.php");
                n = 0;
                return false;
              }
            } else n = 0;
          });
        </script>

<?php include("footer.php"); ?>
