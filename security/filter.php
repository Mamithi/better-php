<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 2/4/18
 * Time: 8:11 PM
 */

$email_sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
$email_is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);

# Validating using ctype
$is_alpha = ctype_alpha($input);
$is_integer = ctype_digit($input);
$is_alphanumeric = ctype_alnum($input);

# Using PCRE for validation and filtering
$input_sanitized = preg_replace('/[^A-Za-z0-9]/', '', $input);
$input_is_valid = (bool) preg_match('/^[A-Za-z0-9]$/', $input);

?>
    # Cross-site scripting(XSS) attack

<form action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="submit" value="Submit"/>
</form>

<?php
