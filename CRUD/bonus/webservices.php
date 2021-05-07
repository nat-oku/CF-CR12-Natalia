<?php

/****************************************
 *######## RESTful WEB SERVICE ##########*
 *                                       *
 * Client process the request VIA URL    *
 * http://address.com/webservice.php?id=1*
 * and gets the JSON result.             *
 ****************************************/
// Set Content-Type header to application/json
header("Content-Type:application/json");
require_once("db_check.php");

// Function for delivering a JSON response
function response($status, $status_message, $data)
{

    // $response array
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;


    //Generating JSON from the $response array
    $json_response = json_encode($response);
    //var_dump(gettype($json_response));

    // Outputting JSON to the client
    echo $json_response;
}

// call the function with parameter 200 and $rows(contains all entries)
response(200, "working", $rows);  

?>


