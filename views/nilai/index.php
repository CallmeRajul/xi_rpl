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
            <div class="judul">
            <h2>Nilai Siswa:</h2>
            </div>
             
		<div class="container">
           
		<table class="scrollable">
        <thead>
            <tr>
                <th>GOBLOK</th>
                <th>TOLOL</th>
                <th>b.indo</th>
                <th>b.inggris</th>
                <th>ppkn</th>
                <th>senibud</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Greetings from Asbury Park, N.J.</td>
                <td><time>1973-01-05</time></td>
                <td>100</td>
                <td>90</td>
                <td>80</td>
                <td>75</td>
            </tr>
        </tbody>
    </table>
		</div>

	</div>
	<script src="../../dist/js/global.js"></script>
</body>

</html>