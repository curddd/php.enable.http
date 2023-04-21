<?php

if(empty($_SERVER['REQUEST_METHOD'])){
    //GET
}

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        //Used to retrieve a resource identified by a URL. The response contains the resource's content.
    break;

    case 'POST':
        //Used to submit data to a resource identified by a URL. The data is included in the body of the request, and the response may contain a message confirming that the data was received.
    break;

    case 'HEAD':
        //Similar to GET, but only requests the headers of the resource, not the content. Useful for checking metadata without downloading the entire resource.
    break;

    case 'PUT':
        //Used to replace the contents of a resource identified by a URL. The request contains the new content, which replaces the old content at the specified URL.
    break;

    case 'DELET':
        //Used to delete a resource identified by a URL.
    break;

    default:
        //GET
    break;

}

$exapmple = `

GET

array(5) {
  ["_GET"]=>
  array(1) {
    ["/sf"]=>
    string(0) ""
  }
  ["_POST"]=>
  array(0) {
  }
  ["_COOKIE"]=>
  array(0) {
  }
  ["_FILES"]=>
  array(0) {
  }
  ["_SERVER"]=>
  array(37) {
    ["PATH"]=>
    string(28) "/usr/local/bin:/usr/bin:/bin"
    ["USER"]=>
    string(7) "debosit"
    ["HOME"]=>
    string(19) "/media/sdn1/debosit"
    ["HTTP_UPGRADE_INSECURE_REQUESTS"]=>
    string(1) "1"
    ["HTTP_ACCEPT_ENCODING"]=>
    string(13) "gzip, deflate"
    ["HTTP_ACCEPT_LANGUAGE"]=>
    string(14) "en-US,en;q=0.5"
    ["HTTP_ACCEPT"]=>
    string(85) "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8"
    ["HTTP_USER_AGENT"]=>
    string(84) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:109.0) Gecko/20100101 Firefox/112.0"
    ["HTTP_CONNECTION"]=>
    string(5) "close"
    ["HTTP_HOST"]=>
    string(30) "debosit.gyges.feralhosting.com"
    ["HTTP_X_FORWARDED_PROTO"]=>
    string(4) "http"
    ["HTTP_X_FORWARDED_FOR"]=>
    string(20) "::ffff:80.151.29.159"
    ["HTTP_X_REAL_IP"]=>
    string(20) "::ffff:80.151.29.159"
    ["HTTP_X_HOST"]=>
    string(30) "debosit.gyges.feralhosting.com"
    ["REDIRECT_STATUS"]=>
    string(3) "200"
    ["SERVER_NAME"]=>
    string(30) "debosit.gyges.feralhosting.com"
    ["SERVER_PORT"]=>
    string(4) "8080"
    ["SERVER_ADDR"]=>
    string(10) "10.0.20.87"
    ["REMOTE_PORT"]=>
    string(5) "42886"
    ["REMOTE_ADDR"]=>
    string(13) "185.21.217.20"
    ["SERVER_SOFTWARE"]=>
    string(12) "nginx/1.10.3"
    ["GATEWAY_INTERFACE"]=>
    string(7) "CGI/1.1"
    ["REQUEST_SCHEME"]=>
    string(4) "http"
    ["SERVER_PROTOCOL"]=>
    string(8) "HTTP/1.0"
    ["DOCUMENT_ROOT"]=>
    string(66) "/media/sdn1/debosit/www/debosit.gyges.feralhosting.com/public_html"
    ["DOCUMENT_URI"]=>
    string(10) "/index.php"
    ["REQUEST_URI"]=>
    string(3) "/sf"
    ["SCRIPT_NAME"]=>
    string(10) "/index.php"
    ["CONTENT_LENGTH"]=>
    string(0) ""
    ["CONTENT_TYPE"]=>
    string(0) ""
    ["REQUEST_METHOD"]=>
    string(3) "GET"
    ["QUERY_STRING"]=>
    string(3) "/sf"
    ["SCRIPT_FILENAME"]=>
    string(76) "/media/sdn1/debosit/www/debosit.gyges.feralhosting.com/public_html/index.php"
    ["FCGI_ROLE"]=>
    string(9) "RESPONDER"
    ["PHP_SELF"]=>
    string(10) "/index.php"
    ["REQUEST_TIME_FLOAT"]=>
    float(1682079310.6765)
    ["REQUEST_TIME"]=>
    int(1682079310)
  }
}

`;