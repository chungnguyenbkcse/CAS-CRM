<?php
$port = 5038;
$username = "test";

$password = "pasword321@";


$internalPhoneline = $_COOKIE['sip'];
//echo $sip;

/* global $current_user;
$user = BeanFactory::getBean('Users', $current_user->id);
$internalPhoneline = $user->sip; */

$context = "from-internal";

$target = $_POST['phone_number'];

$socket = stream_socket_client("tcp://51.3.9.124:$port");
if ($socket) {
    // echo "Connected to socket, sending authentication request.\n";

    // Prepare authentication request
    $authenticationRequest = "Action: Login\r\n";
    $authenticationRequest .= "Username: $username\r\n";
    $authenticationRequest .= "Secret: $password\r\n";
    $authenticationRequest .= "Events: off\r\n\r\n";

    // Send authentication request
    $authenticate = stream_socket_sendto($socket, $authenticationRequest);
    if ($authenticate > 0) {
        // Wait for server response
        usleep(200000);

        // Read server response
        $authenticateResponse = fread($socket, 4096);

        // Check if authentication was successful
        if (strpos($authenticateResponse, 'Success') !== false) {
            // echo "Authenticated to Asterisk Manager Inteface. Initiating call.\n";

            // Prepare originate request
            $originateRequest = "Action: Originate\r\n";
            $originateRequest .= "Channel: SIP/$internalPhoneline\r\n";
            $originateRequest .= "Callerid: c2c\r\n";
            $originateRequest .= "Exten: $target\r\n";
            $originateRequest .= "Context: $context\r\n";
            $originateRequest .= "Priority: 1\r\n";
            $originateRequest .= "Async: yes\r\n\r\n";

            echo $originateRequest;

            // Send originate request
            $originate = stream_socket_sendto($socket, $originateRequest);
            if ($originate > 0) {
                // Wait for server response
                usleep(200000);

                // Read server response
                $originateResponse = fread($socket, 4096);
            
                echo $originateResponse;

                // Check if originate was successful
                if (strpos($originateResponse, 'Success') !== false) {                  
                    echo $sip;
                    echo json_encode("Calling $target");
                } else {
                    echo "Could not initiate call.\n";
                }
            } else {
                echo "Could not write call initiation request to socket.\n";
            }
        } else {
            echo "Could not authenticate to Asterisk Manager Interface.\n";
        }
    } else {
        echo "Could not write authentication request to socket.\n";
    }
} else {
    echo "Unable to connect to socket.";
}
