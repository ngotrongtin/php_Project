<?php 
require ('../config.php');

// Delete user function
function deleteUser($id) {
    global $dbc;
    $q = "DELETE FROM users WHERE user_id=$id LIMIT 1";		
    $r = @mysqli_query ($dbc, $q);
    if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
        // Print a message:
        return 'User deleted susccess full!';

    } else { // If the query did not run OK.
        return mysqli_error($dbc); // Debugging message.
    }
}
// Create user function
function createUser(){

}

function editUser(){
    
}

?>