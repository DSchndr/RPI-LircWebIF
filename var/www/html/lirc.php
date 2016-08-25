<?php
//echo("Parsing...");
if(isset($_POST['power']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN POWER_POWER_ON");
exit();
}
if(isset($_POST['hdmi1']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_HDMI-1");
exit();
}
if(isset($_POST['hdmi2']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_HDMI-2");
exit();
}
if(isset($_POST['hdmi3']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_HDMI-3");
exit();
}
if(isset($_POST['hdmi4']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_HDMI-4");
exit();
}
if(isset($_POST['av1']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AV-1");
exit();
}
if(isset($_POST['av2']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AV-2");
exit();
}
if(isset($_POST['av3']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AV-3");
exit();
}
if(isset($_POST['av4']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AV-4");
exit();
}
if(isset($_POST['av5']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AV-5");
exit();
}

if(isset($_POST['au1']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AUDIO-1");
exit();
}
if(isset($_POST['au2']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_AUDIO-2");
exit();
}

if(isset($_POST['v-aux']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_V-AUX");
exit();
}
if(isset($_POST['dock']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_DOCK");
exit();
}
if(isset($_POST['tuner']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN INPUT_TUNER");
exit();
}

if(isset($_POST['volp']))
{
$i = 1;
for ($i = 1; $i <= 6; $i++)
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN VOLUME_VOLUME_+");
}
exit();
//header( "Location: $url" );
}
if(isset($_POST['volm']))
{
for ($i = 1; $i <=6; $i++)
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN VOLUME_VOLUME_-");
}
exit();
//header( "Location: $url" );
}
if(isset($_POST['volmu']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN VOLUME_MUTE");
exit();
}

if(isset($_POST['up']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN MENU_UP");
exit();
}
if(isset($_POST['left']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN MENU_LEFT");
exit();
}
if(isset($_POST['enter']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN MENU_ENTER");
exit();
}
if(isset($_POST['right']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN MENU_RIGHT");
exit();
}
if(isset($_POST['down']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN MENU_DOWN");
exit();
}
if(isset($_POST['return']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN MENU_RETURN");
exit();
}
if(isset($_POST['display']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN DISPLAY_DISPLAY");
exit();
}
if(isset($_POST['setup']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN DISPLAY_SETUP");
exit();
}
if(isset($_POST['option']))
{
shell_exec("irsend -d /var/run/lirc/lircd-lirc0 SEND_ONCE AMP_371_MAIN DISPLAY_OPTION");
exit();
}
if(isset($_POST['other']))
{
exit();
}
exit();
?>
