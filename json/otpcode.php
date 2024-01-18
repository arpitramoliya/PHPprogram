<?php
function generateOTP() {
    // Generate a random 6-digit number
    $otp = rand(100000, 999999);
    
    return $otp;
}

// Generate and display the OTP
$otp = generateOTP();
echo "Your 6-digit OTP is: $otp";
?>
