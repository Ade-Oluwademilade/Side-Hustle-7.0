<?php
// Voter details
$voter_age = 17;   // Age of the voter
$has_pvc = True;     // Whether the voter has PVC
$voter_ward = '019';  // Voter's ward

// Check if voter is above 18 years
if ($voter_age < 18) {
    echo "Sorry, you must be at least 18 years old to vote.\n";
}

// Check if voter has PVC
elseif (!$has_pvc) {
    echo "Sorry, you must have a PVC to vote.\n";
}

// Check if voter's ward is 020
elseif ($voter_ward !== '020') {
    echo "Sorry, you are not registered to this ward. Hence, you can't vote here.\n";
}

else {
    echo "You are eligible to vote. Join the queue over there to cast your vote\n";
}
?>
