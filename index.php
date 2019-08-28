<head>
<title>EFT Download links</title>
<?php
	session_start();
	$game = "http://launcher.escapefromtarkov.com/launcher/GetDistrib";
	$launcher = "http://launcher.escapefromtarkov.com/launcher/GetLauncherDistrib";
	$game_data = json_decode(gzuncompress(file_get_contents($game)));
	$launcher_data = json_decode(gzuncompress(file_get_contents($launcher)));
	$L_version = $launcher_data->data->Version;
	$L_hash = $launcher_data->data->hash;
	$L_download = $launcher_data->data->DownloadUri;
	$C_version = $game_data->data->Version;
	$C_hash = $game_data->data->hash;
	$C_download = $game_data->data->DownloadUri;
	$C_torrent = $game_data->data->TorrentUri;
	$C_filespace = $game_data->data->RequiredFreeSpace;
  //count entrances
	$counter = file_get_contents('cnt.txt');
	if($_SESSION['i'] != 'i was here already.'){
		$_SESSION['i'] = 'i was here already.';
		$counter++;
		file_put_contents('cnt.txt',$counter);
	}
?>
<style>body{color:red;background:black} a{color:yellow} a:hover{color:gold;} .ft{position:fixed;bottom:0px;width:100%;text-align:center;} .t{width:100%;height:100%}</style>
</head>
<body>
<div class=t>
   <table width=400 style="margin:0 auto;">
    <tr><td colspan=2 align=center><b>Selfgenerated download links</b></td></tr>
    <tr><td colspan=2 align=center><i>Launcher</i></td></tr>
    <tr><td>Version</td><td><?php echo $L_version; ?></td></tr>
    <tr><td>File Hash</td><td><?php echo $L_hash; ?></td></tr>
    <tr><td>Download</td><td><a href="<?php echo $L_download; ?>">executable download</a></td></tr>
    <tr><td colspan=2 align=center><i>Client</i></td></tr>
    <tr><td>Version</td><td><?php echo $C_version; ?></td></tr>
    <tr><td>File Hash</td><td><?php echo $C_hash; ?></td></tr>
    <tr><td>Download</td><td><a href="<?php echo $C_download; ?>">archive download</a></td></tr>
    <tr><td>Torrent</td><td><a href="<?php echo $C_torrent; ?>">torrent download</a></td></tr>
    <tr><td>Filesize</td><td><?php echo $C_filespace; ?> bytes</td></tr>
  </table>
  <br>
  <br>
  <i>You are <?php echo $counter;?> visitor here.</i>
  <div class=ft>
    <i>made by TheMaoci ( quickly made site for your pleasure )</i>
  </div>
  </div>
</body>
