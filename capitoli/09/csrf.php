<?php

$token = md5(uniqid(rand(), true));
    $_SESSION['token'] = $token;
    ?>
    <form action="checkout.php" method="get">
      <input type="text" name="isbn" />
      <input type="text" name="qt" />
      <input type="submit" value="checkout" />
      <input type="hidden" name="token" value="<?php echo $token ?>" />
    </form>
