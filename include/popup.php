<div id="menuPopup" class="popup">
	<table width='100%' class="popupMaintable">
		<tr>
			<th id='popupPloegThuisNaam' width='45%'>&nbsp;</th>
			<th width='10%'></th>
			<th width='45%' id='popupPloegUitNaam'>&nbsp;</th>
		</tr>
		<tr>
			<td align='center' id='popupPloegThuis'><b>&nbsp;</b></td>
			<td id='popupWedstrijdWO' align=center>&nbsp;</td>
			<td  align='center' id='popupPloegUit'><b>&nbsp;</b></td>
		</tr>
		<tr id='popupSpelers'>
			<td id='popupSpelersThuis'>
				&nbsp;
			</td>
			<td>&nbsp;</td>
			<td id='popupSpelersUit'>
				&nbsp;
			</td>
		</tr>
		</table>
		<div class='popupClose'><a href=# id=closeButton><img src=img/close.gif border=0></a></div>
</div>

<div id=waiter>
	<div class=waiterContent>
		<img src=img/waiter.gif border=0>
	</div>
</div>

<script language="javascript" type="text/javascript">
function ShowPopup(noFade)
{
	//$("#waiter").centerInClient().show();
	var popup = $("#menuPopup");
	popup.width($(window).width() / 2);
 	popup.height($(window).height() / 2);
 	popup.centerInClient();
 	//$("#waiter").hide();
 	if (noFade)
		popup.fadeIn('slow');
	else
		popup.show();
}

function HidePopup()
{
	$("#menuPopup").fadeOut('fast');
}

function TogglePopup()
{
	if ($("#menuPopup").is(":visible"))
		FadeOut();
	else
		FadeIn();
}

$(function() {
	$("#closeButton")
		.click(
			function()
			{
				HidePopup();
				return false;
			});
});
</script>