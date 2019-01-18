			<h1>add a facility</h1>

			<span id="spanError" style="color: red"><?php 
			foreach($ErrorMessages as $err) {
			echo $err . "<br />\n";
			}
			
			?></span>
			<br />
			<form method="post">
				<table>
					<tr>
						<td>facility ID:</td>
						<td><input type="text" id="facilityID" name="facilityID" value="<?= $facilityID?>"/></td>
					</tr>
					<tr>
						<td>address:</td>
						<td><input type="text" id="address" name="address" value="<?= $address?>"/></td>
					</tr>
					<tr>
						
					<tr>
						<td>phone Number:</td>
						<td><input type="text" id="phoneNumber" name="phoneNumber" value="<?= $phoneNumber?>"/></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" id="Password1" name="pass1"/></td>
					</tr>
					<tr>
						<td>Confirm password:</td>
						<td><input type="password" id="Password2" name="pass2"/></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center"><input type="submit" value="Register" onclick="return validateRegistration();" /></td>
					</tr>
				</table>
			</form>	

