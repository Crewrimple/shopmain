<?php
// PHP code to extract IP this for compyuter

function getVisIpAddr() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_FORWARDED_FOR'];
    }else if (!empty($_SERVER['HTTP_FORWARDED'])) {
        return $_SERVER['HTTP_FORWARDED'];
    }

    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Store the IP address 
$ip = getVisIPAddr();

// Display the IP address 
echo "<br/>".$_SERVER['REMOTE_ADDR'];
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));

echo 'Country Name: ' . $ipdat->geoplugin_countryName . "<br/>\n";
echo 'City Name: ' . $ipdat->geoplugin_city . "<br/>\n";
echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "<br/>\n";
echo 'Latitude: ' . $ipdat->geoplugin_latitude . "<br/>\n";
echo 'Longitude: ' . $ipdat->geoplugin_longitude . "<br/>\n";
echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "<br/>\n";
echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "<br/>\n";
echo 'Timezone: ' . $ipdat->geoplugin_timezone;
?> 
<!--this is for mobile-->
<script>
    $(document).ready(function() {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
        }
        else
        {
            alert('It seems like Geolocation, which is required for this page, is not enabled in your browser.');
        }
    });

    function successFunction(position)
    {
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        alert('Your latitude is :'+lat+' and longitude is '+long);
    }

    function errorFunction(position)
    {
        alert('Error!');
    }
</script>