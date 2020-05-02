<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project Cashku </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
<?php
    include "koneksi.php";

    $koneksi = mysqli_query($koneksi,"SELECT * from sign_up");

    $no=1;
    foreach ($koneksi as $data) {
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['full_name']; ?></td>
            <td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
           
        </tr>
<?php
    }
?>
<style>

</style>

</head>
<body>

<div class="main">
	<div class="top">
		<div class="header">
			<h1 class="logo"><a href=""><img src=".jpg" alt=""></a></h1>
				<div class="login">
					<form>
						<input type="username" placeholder="Username" required>
						<input type="password" placeholder="Password" required>
						<button type="submit">Login</button>
					</form>
				</div>
		</div>

		<h2>Welcome to Cashku</h2>
		<h3>Where you manage money</h3>
	</div>
	<div class="signup">
		<h4>SIGN UP</h4>
		<form>
			<div class="field">
				<input type="text" required="">
				<span class="label">Full Name</span>
			</div>

			<div class="field">
				<input type="Username" required="">
				<span class="label">Username</span>
			</div>

			<div class="field">
				<input type="password" required="">
				<span class="label">Your Password</span>
			</div>

			<div class="field">
				<button class="button">Sign Up</button>
				<a href ="tambah.php">
			</div>
		</form>
	</div>
</div>
</body>
</html>