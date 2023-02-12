function is_valid_email($email) {
  return preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email);
}

$email = "example@example.com";

if (is_valid_email($email)) {
  echo "The email address is valid.";
} else {
  echo "The email address is invalid.";
}






