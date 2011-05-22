<?

?>
<table width="260" style="border-style:  solid; border-color: olive">
	<tr style="border-style:  solid; border-color: silver;">
		<td width="80" style="border-style:  solid; border-color: silver;">
			Photo
		</td style="border-style:  solid; border-color: silver;">
		<td width="180" style="border-style:  solid; border-color: silver;">
			<table width="100%">
				<tr style="border-style:  solid; border-color: silver;">
					<td style="border-style:  solid; border-color: silver;">
						<?if(!empty($data['Member']['name'])) echo  ucwords(strtolower($data['Member']['name'])); else echo "Name";?>
					</td>
				</tr>
				<tr style="border-style:  solid; border-color: silver;">
					<td style="border-style:  solid; border-color: silver;">
						<?if(!empty($data['Member']['address'])) echo ucwords(strtolower($data['Member']['address'])); else echo "Address";?>
					</td>
				</tr>
				<tr style="border-style:  solid; border-color: silver;">
					<td style="border-style:  solid; border-color: silver;">
						<?
						if (!empty($data['Member']['mobile']))
							echo $data['Member']['mobile'];
						elseif (!empty($data['Member']['phone']))
							echo $data['Member']['phone'];
						elseif (!empty($data['Member']['workphone']))
							echo $data['Member']['workphone'];
						elseif (!empty($data['Member']['email']))
							echo $data['Member']['email'];
						else
							echo "contact";
						?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="border-style:  solid; border-color: silver;">
		<td style="border-style:  solid; border-color: silver;">
			Introducer
		</td>
		<td  style="border-style:  solid; border-color: silver;">
			<?=$data['Member']['sponcerid']?>
		</td>
	</tr>
	<tr style="border-style:  solid; border-color: silver;">
		<td style="border-style:  solid; border-color: silver;">
			LeftPeople
		</td>
		<td  style="border-style:  solid; border-color: silver;">
			<?=$data['Member']['leftpeople']?>
		</td>
	</tr>
	<tr style="border-style:  solid; border-color: silver;">
		<td style="border-style:  solid; border-color: silver;">
			Rightpeople
		</td>
		<td  style="border-style:  solid; border-color: silver;">
			<?=$data['Member']['rightpeople']?>
		</td>
	</tr>

</table>