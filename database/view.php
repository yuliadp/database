<?php 
include('config.php');
?>
<html>
<head>
	<title>Laporan Appraisal</title>
     <link rel="stylesheet" type="text/css" href="../database/style.css">
</head>
<body>

    <div id="container">
    	<div id="header">
    		<h1>Laporan Appraisal KEB Hana Bank</h1>
        	<span>Dibuat oleh YuliaDp</span>
        </div>
    
	 <div id="menu">
        	<a href="../database/index.php">Home</a>
            <a href="../database/upload.php">Upload</a>
            <a href="../database/download.php">Download</a>
            <a href="../database/user.php" class="active">User</a>
</div>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>

<a href="../database/user.php">+ Tambah Data</a>

 <table class="table" width="100%" cellpadding="3" cellspacing="0">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Username</td>
        	<td>Password</td>
            <td>Nama Lengkap</td>
			<td>Level</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from user");
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['username']; ?></td>
        	<td><?php echo $data['password']; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
			<td><?php echo $data['level']; ?></td>
            <td>
            	<a href="../database/edit.php?id=<?php echo $data['id_user']; ?>">Edit</a> || 
                <a href="../database/delete.php?id=<?php echo $data['id_user']; ?>">Delete</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</body>
</html>