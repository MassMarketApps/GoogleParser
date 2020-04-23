<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documents</title>
    </head>
    <body>
    <?php

    //include('simple_html_dom.php');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=site:ie&start=10');
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;

    // $domResult = new simple_html_dom();
    // $domResult->load($result);

    // foreach($domResult->find('a[href^=/url?]') as $link)
    // echo $link->plaintext . '<br>';

    ?>

    </body>
</html>