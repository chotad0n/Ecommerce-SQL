<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
/*  include cart-template section  */
count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
/*  include cart-template section  */

/*  include wish-template section  */
count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
/*  include wish-template section  */

/*  include new phones section  */
include ('Template/_new-phones.php');
/*  include new phones section  */

?>

<?php
// include footer.php file
include ('footer.php');
?>

