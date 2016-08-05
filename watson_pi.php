<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>

	<table>
		<tr>
			<td style='width: 30%;'><img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message">Watson Demo PHP application</h1>
				<h2>Personality Insights response</h2>
				<pre>
					<?php
						// VCAP_SERVICES extraction and retrieval of Watson PI credentials
						//$services_json = json_decode(getenv('VCAP_SERVICES'), true);
						//$watsonPi = $services_json["<servicename>"][0]["credentials"];

						// Extract the VCAP_SERVICES variables for Watson PI connection.
					  // i.e. username, password and url
						//$username = '';
						//$password = '';
						//$url = '';

						// Curl initialization to make REST call to Watson service

						// Get textarea field from POST request

						// Set post arguments for call

					  // Set header arguments for call

					  // Set options for REST call via curl
						//curl_setopt($curl, CURLOPT_POST, true);
						//curl_setopt($curl, CURLOPT_POSTFIELDS, $post_args);
						//curl_setopt($curl, CURLOPT_HTTPHEADER, $header_args);
						//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
						//curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
						//curl_setopt($curl, CURLOPT_URL, $url);
						//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

						// Actual REST call via curl and cleanup (closing) of curl call

					  // Decode JSON object for furhter usage. Only used here to pretty print JSON object

					  // Echo result as pretty printed JSON

						echo $_POST["txtarea"];
					?>
				</pre>
			</td>
		</tr>
	</table>
</body>
</html>
