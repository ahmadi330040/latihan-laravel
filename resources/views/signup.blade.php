<!DOCTYPE html>
<html>
	<head>
		<title>SanberBook </title>
		<meta charset="UTF-8">
	</head>

	<body>
		<div>
			<h1>Buat Account Baru! </h1>
			<h4>Sign Up Form</h4>
		</div>

		<form method="post" action="welcome.html">
			<label for="nama_awal">First Name</label> <br> <br>
			<input type="text" placeholder="" id="nama_awal">
			<br> <br>
			<label for="nama_akhir">Last Name</label> <br> <br>
			<input type="text" placeholder="" id="nama_akhir">
			<br> <br>
			<label>Gender </label>
			<br> <br>
			<input type="radio" name="gender_user" value="0">Male <br>
			<input type="radio" name="gender_user" value="1">Female
			<br> <br>
			<label>Nationally</label>
			<br> <br>
			<select>
					<option value="indonesia">indonesian</option>
					<option value="english">english</option>
					<option value="german">German</option>
					<option value="america">America</option>
			</select>
			<br><br>

			<label>Language Spoken</label> <br>
			<br>
			<input type="checkbox" name="bicara" value="0"> Bahasa Indonesia <br>
			<input type="checkbox" name="bicara" value="1"> English <br>
			<input type="checkbox" name="bicara" value="2"> other <br>
			<br>


			<label for="pesan">Bio :</label> <br> <br>
			<textarea cols="100" rows="7" id="pesan"></textarea>
			<br>
			<input type="submit" value="Sign Up">
			
		</form>

	</body>


</html>