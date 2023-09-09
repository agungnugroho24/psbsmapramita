<style type="text/css">
	#isi-kanan{
		margin-top: 30px;
	}
	#isi-tengah{
		margin: 25px; width: 680px;
	}
	#detail{
		width: auto;
	}
	a{
		text-decoration: none;
		color: #666;
	}
	a:hover{
		color: #000;
	}
</style>
<div id="isi-tengah">
<div id="title-event">Data guru</div>
<div id="detail">
<table frame="box" border="0" align="center" bgcolor="white">
    <thead>
        <tr>
			<td width="100px;">Id guru</td>
            <td width="100px;">NIP</td>
            <td width="100px;">Posisi</td>
            <td width="200px;">Nama guru</td>
            <td width="150px;">Jenis kelamin</td>

        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from guru");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
		<table  border="0" align="center" bgcolor="white">
        <tr>
			<td width="100px;"><?php echo $data['idguru']; ?></td>
            <td width="100px;"><?php echo $data['nip']; ?></td>
            <td width="100px;"><?php echo $data['posisi']; ?></td>
            <td width="200px;"><?php echo $data['nama_gurustaff']; ?></td>
            <td width="150px;"><?php echo $data['jenkel']; ?></td>
        </tr>
	</table>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</div>
</div>