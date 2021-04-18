<?php
// PHP Session Example. (Check if user has the session thingy.)


////////////////////////////////////////////////////
// Check if user is logged in via session check. //
//////////////////////////////////////////////////

session_start();

if(!isset($_SESSION['loggedin'])) {
    echo "You are not logged in!";
}
else {
   ; // nothing, the user is logged in.
}

// End of the code
// This is how session works when it doesnt exist, lets show you how to create a session.

session_start();

$_SESSION['loggedin'] = true;
$_SESSION['username'] = "someone";
// End of the code
// This is how you create session(s), now lets show you how to remove all the sessions a user has.

session_abort();

// This is how session(s) work in PHP!
// This script is written by thisclubhouse-is-weird, and feel free to remove the quotes and use this!


?>
