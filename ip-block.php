@ -0,0 +1,44 @@
<?php

// start - 44368  - block fruad orders
add_action('woocommerce_after_checkout_validation', 'block_specific_emails', 10, 2);

function block_specific_emails($data, $errors) {
    // Define the array of blacklisted emails
    $blacklisted_emails = array(
        'homarsanchez2024@hotmail.com',
        'lbcortez27@yahoo.com',
        'samueldelacruz2024@outlook.com',
        'jesusdelarosa2024@outlook.com',
        'asratatimo@ivloud.com',
        'sweetskye08@gmail.com',
        'tayviong2@gmail.com',
        'smithjohn713281@icloud.com',
        'smithjohn281713@gmail.com',
        'moore.trueimage74@gmail.com',
        'lisajhtown92@gmail.com',
        'clueless56@gmail.com',
        'jondoehaynes@icloud.com',
        '00-moody.count@icloud.com',
        'jaquantaylor2017@gmail.com',
        'christophermartinezm084@gmail.com',
        'Lisacortez92@gmail.com',
        'chasemason440@gmail.com',
        'JTepsi@gmail.com'
    );

    // Get the billing email from the submitted data
    $billing_email = isset($data['billing_email']) ? sanitize_email($data['billing_email']) : '';

    // Check if the submitted email is in the blacklist
    if (in_array(strtolower($billing_email), array_map('strtolower', $blacklisted_emails))) {
        // Display a custom error message
        $errors->add('custom_error', __('Sorry, your order cannot be processed. Please contact support for assistance.', 'woocommerce'));
    }
}



// end - 44368  - block fruad orders

?>
