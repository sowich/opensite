<?php
/**
 * Created by PhpStorm.
 * User: sowich
 * Date: 02.08.2018
 * Time: 16:51
 */


$ch  = curl_init( "http://canadian-trustpharmacy.top");
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)" );
curl_setopt( $ch, CURLOPT_HEADER, false);
echo $response = curl_exec( $ch );
file_put_contents( 'site.html', $response );
curl_close( $ch );
