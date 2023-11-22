<?php

session_start();

if (isset($_SESSION['nis']) == null) {
	header("Location: ../dashboard/");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../dist/css/global.css">
	<link rel="stylesheet" href="../../dist/css/dashboard.css">
	<link rel="stylesheet" href="../../dist/css/nilai.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">
	<title>Nilai</title>
</head>

<body>
	<?php

	include "../komponen/sidebar.php";

	?>
	<div id="main-content">
		<?php

		include "../komponen/navbar.php"
			?>
		<div class="container">
		<table class="scrollable">
        <thead>
            <tr>
                <th>GOBLOK</th>
                <th>TOLOL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
            </tr>
            <tr>
                <td>The Wild, the Innocent & the E Street Shuffle</td>
                <td><time>1973-09-11</time></td>
            </tr>
            <tr>
                <td>Born to Run</td>
                <td><time>1975-08-25</time></td>
            </tr>
            <tr>
                <td>Darkness on the Edge of Town</td>
                <td><time>1978-06-02</time></td>
            </tr>
            <tr>
                <td>The River</td>
                <td><time>1980-10-10</time></td>
            </tr>
            <tr>
                <td>Nebraska</td>
                <td><time>1982-09-20</time></td>
            </tr>
            <tr>
                <td>Born in the U.S.A.</td>
                <td><time>1984-06-04</time></td>
            </tr>
            <tr>
                <td>Tunnel of Love</td>
                <td><time>1987-10-09</time></td>
            </tr>
            <tr>
                <td>Human Touch</td>
                <td><time>1992-03-31</time></td>
            </tr>
            <tr>
                <td>Lucky Town</td>
                <td><time>1992-03-31</time></td>
            </tr>
            <tr>
                <td>The Ghost of Tom Joad</td>
                <td><time>1995-11-21</time></td>
            </tr>
            <tr>
                <td>The Rising</td>
                <td><time>2002-07-30</time></td>
            </tr>
            <tr>
                <td>Devils & Dust</td>
                <td><time>2005-04-26</time></td>
            </tr>
            <tr>
                <td>We Shall Overcome: The Seeger Sessions</td>
                <td><time>2006-04-25</time></td>
            </tr>
            <tr>
                <td>Magic</td>
                <td><time>2007-09-25</time></td>
            </tr>
            <tr>
                <td>Working on a Dream</td>
                <td><time>2009-01-27</time></td>
            </tr>
            <tr>
                <td>Wrecking Ball</td>
                <td><time>2012-03-06</time></td>
            </tr>
            <tr>
                <td>High Hopes</td>
                <td><time>2014-01-14</time></td>
            </tr>
        </tbody>
    </table>
		</div>

	</div>
	<script src="../../dist/js/global.js"></script>
</body>

</html>