<?php
	define("MAIL", "info@pennelekker.be");
?>
<html>
<head>
<title>Feestzaal De Pennelekker</title>
<link href="style.css?2" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="//unslider.com/unslider.min.js"></script>
<script language="javascript" type="text/javascript" src="include/script.js"></script>
</head>
<body>

<div id=main>
<table width='100%' cellpadding=0 cellspacing=0 border=0 id=subMain>
	<tr height=40>
		<td valign=top><img src='images/depennelekker2.png' border=0 width=220 height=35 title=""></td>
	</tr>
	<tr height=380>
		<td>
			<table width='100%' cellpadding=0 cellspacing=0 border=0 id=contentMain>
				<tr height=33>
					<td>
						<table width='100%' cellpadding=0 cellspacing=0 border=0 id=menu height=33>
							<tr>
							<?php
							$menuItems = array('welkom', 'uitbaters', 'naam', 'zaal', 'restaurant', 'keuken', 'afhalingen', 'troeven', 'contact', "menu's");
							$selected = strtolower(basename($_SERVER['PHP_SELF']));
							$selected = substr($selected, 0, strpos($selected, '.php'));
							if ($selected == 'index') $selected = 'welkom';
							foreach ($menuItems as $item)
							{
								if (str_replace("'", "", $item) == $selected)
								{
									echo '<td class="sel">'.$item.'</td>';
								}
								else
								{
									echo '<td><a href="'.str_replace("'", "", $item).'.php" class=menuItem>'.$item.'</a></td>';
								}
							}
							?>
							</tr>
						</table>
					</td>
				</tr>
				<tr height=347>
					<td>
						<table width='100%' cellpadding=0 cellspacing=0 border=0>
							<tr height=347>
								<?php
								if (!function_exists("imageStrategy"))
								{
									$directory = 'images/'.$selected.'/';
									if (is_dir('images/'.$selected))
									{
										?>
										<td width=520 valign=top id=loopImageCell>
										<div class="banner"><ul>

										<?php
										$images = glob($directory . "*.[Jj][Pp][Gg]");
										foreach($images as $image)
										{
											echo "<li><img src='".$image."' border=0 width=520 height=347 title=''></li>";
										}
										?>
										</ul>

										</div>
										</td>
										<?php
									}
								}
								else
									imageStrategy();
								?>
								<td id=content>