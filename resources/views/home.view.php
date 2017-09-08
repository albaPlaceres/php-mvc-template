<?php
/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:47
 */

use Carbon\Carbon;

require_once 'partials/header.php';


?>

<h3 class="welcome">Welcome to   <?php echo env("APP_NAME")?> </h3>


<?php
 dd(Carbon::now()->diffForHumans());


require_once 'partials/footer.php';


?>


