<?php
 $ch = curl_init();
echo "startng..";

    //$Url="http://127.0.0.1/codereview/auth.php";
    $Url="https://api.github.com/repos/djadmin/VCSSample/commits?client_id=bcf33a7c4ebbd84c7711&client_secret=2dfc7b12bbd55daf3d28a58f29615f2425f069c6";
    
    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
   
 
    // Now set some options (most are optional)
 
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
 
    // Set a referer
   // curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // User agent
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
 
    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 
    // Download the given URL, and return output
    $output = curl_exec($ch);
 
 
    //print (json_decode($output));
    print_r(json_decode($output));

    curl_close($ch);
?>