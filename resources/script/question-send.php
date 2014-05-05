<?php

// Get email address
$email_address = 'alex@abass.co, flip4bytes@gmail.com';

// Ensures no one loads page and does simple spam check
if( isset($_POST['name']) && empty($_POST['spam-check']) ) {

	// Declare our $errors variable we will be using later to store any errors
	$error = '';

	// Setup our basic variables
	$input_name = strip_tags($_POST['name']); //required
	$input_email = strip_tags($_POST['email']); //required
	$input_subject = strip_tags($_POST['subject']);
	$input_message = strip_tags($_POST['message']); //required

	// We'll check and see if any of the required fields are empty
	if( strlen($input_name) < 2 ) $error['name'] = '<label for="question-name">Please enter your <b>Name</b></label>';
	if( strlen($input_message) < 5 ) $error['message'] = '<label for="question-message">Please leave a longer <b>Message</b></label>';

	// Make sure the email is valid
	if( !filter_var($input_email, FILTER_VALIDATE_EMAIL) ) $error['email'] = '<label for="question-email">Please enter a valid <b>Email Address</b></label>';

	// Set a subject & check if custom subject exist
	if( $input_subject ) $subject = "(Question) - $input_subject";
	else $subject = "(Question) - No Subject";
	// $message .= "$input_message\n";
	$message .= "\n\n---\nThis email was sent by $input_name from $input_email";

	// Now check to see if there are any errors
	if( !$error ) {

		// No errors, send mail using conditional to ensure it was sent
		if( mail($email_address, $subject, $message, "From: $input_email") ) {
			echo '<p class="success"><b>EMAIL SENT SUCCESSFULLY.</b><br />' . "Dear $input_name, " . 'thank you for contacting me. Please allow for <b>24-48</b> hours for me to review your request and get back to you. If you need a response sooner, please contact us via telephone at (716) 876-1824.<br /><br /><b>Please verify that this is your correct Email Address:</b><br />' . "Email Address: <i>$input_email</i>" . '<br /><br /><span class="red"><b>PLEASE NOTE:</b></span><br /> If I do not respond to your request within a reasonable amount of time, please give me a call as there may have been an error on our end with your request.</p>';
		} else {
			echo '<p class="error">There was a problem sending your email! Please give me a call at (716) 876-1824 as there seems to be an error on my end with the form.</p>';
		}

	} else {

		// Errors were found, output all errors to the user
		$response = (isset($error['name'])) ? $error['name'] . "\n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "\n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "\n" : null;

		echo "<p class='error'>$response</p>";

	}

} else {

	die('Direct access to this page is not allowed.');

}