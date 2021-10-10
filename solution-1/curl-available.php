<?php
if(in_array  ('curl', get_loaded_extensions())) {
    echo "CURL is available on your web server";
}
else{
    echo "CURL is not available on your web server";
}
?>
<!-- Autre Function solution  -->
<?php
function _is_curl_installed() {
    if  (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else {
        return false;
    }
}

// Ouput text to user based on test
if (_is_curl_installed()) {
  echo "cURL is <span style=\"color:blue\">installed</span> on this server";
} else {
  echo "cURL is NOT <span style=\"color:red\">installed</span> on this server";
}

?>
