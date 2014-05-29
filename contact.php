<?php
	define('GoogleMapEmbed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.039417730493!2d4.0180099999999985!3d50.86746999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e0a5078c3f8096!2sDe+Pennelekker!5e0!3m2!1sen!2s!4v1401374336058');
	define('GoogleMapLink', 'https://www.google.com/maps/place/De+Pennelekker/@50.86747,4.01801,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x6e0a5078c3f8096');

	function imageStrategy()
	{
		echo "<td width=520 valign=top id=loopImageCell>";
		echo '<iframe width="520" height="347" frameborder="0" style="border:0" src="' . GoogleMapEmbed . '"></iframe>';
		echo "</td>";
	}

	include_once 'include/pageheader.php';
?>
U wilt een optie nemen voor een bepaalde datum? In onze menukaart neuzen? Vrijblijvend een offerte aanvragen? Samen onze verschillende feestformules overlopen? Of misschien wilt u gewoon even komen kijken of het interieur van de zaal niet blijven hangen is in de tijd van het schilderij <i>De boerenbruiloft</i>.
<br><br>
Bel ons even op of stuur ons een mailtje. Wilt u graag langskomen, houd er dan rekening mee dat wij in het weekend druk aan het werk zijn. U maakt dus het best even een afspraak om langs te komen.
<br><br>
<div align=center>
<a target=_blank href="<?php echo GoogleMapLink ?>">Klik hier om de kaart groter te bekijken.</a>
</div>
<?php
	include_once 'include/pagefooter.php';
?>
