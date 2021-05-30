<?php
session_start()
?>
<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right"><a href="../controller/signOut.php" class='welcome_color'>Log Out</a><br></span>
    <span class="w3-bar-item w3-right"><a href="../view/viewProfile.php?oid=<?php echo $_SESSION['oid'] ?>" class='welcome_color'><?php echo $_SESSION['name'] ?></a><br></span>

</div>