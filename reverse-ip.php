<?php

// Color
define("red","\e[1;31m");
define("green","\e[1;32m");
define("yellow","\e[1;33m");
define("blue","\e[1;34m");
define("purple","\e[1;35m");
define("cyan","\e[1;36m");
define("grey","\e[90m");
define("white","\e[0m");

set_time_limit(0);
ignore_user_abort(true);
error_reporting(0);
sleep(3);
@system("clear");
@system('date');

	sleep(3);
@system("clear");
echo red."╦═╗╔═╗╦  ╦╔═╗╦═╗╔═╗╔═╗ ╔═╗╦ ╦╔═╗╔═╗╦╔═╔═╗╦═╗\n";
echo yellow."╠╦╝║╣ ╚╗╔╝║╣ ╠╦╝╚═╗║╣  ║  ╠═╣║╣ ║  ╠╩╗║╣ ╠╦╝\n";
echo white."╩╚═╚═╝ ╚╝ ╚═╝╩╚═╚═╝╚═╝ ╚═╝╩ ╩╚═╝╚═╝╩ ╩╚═╝╩╚═\n";
echo white."</> Coded by Luna AR\n\n ";
echo red."site -► ".white;
$site = trim(fgets(STDIN, 1024));
echo red." save file -► ".white;
$save = trim(fgets(STDIN, 1024));
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.hackertarget.com/reverseiplookup/?q=$site");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$exe = curl_exec($curl);
echo $exe."\n";
$file = fopen($save, 'a');
echo fwrite($file, $exe);
fclose($file);
?>
