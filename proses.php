<?php
    print_r($_POST);
    $inim = $_POST['inim'];
    $inama = $_POST['inama'];
	$ialamat = $_POST['ialamat'];
	$iasal = $_POST['iasal'];
    $ilahir = $_POST['ilahir'];
    $ifile = $_POST['ifile'];
    $iprod = $_POST['iprod'];
    $isub = $_POST['isub'];
    $jk=$_POST['jk'];

?>
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <center>
<table border="5" cellspacing="0" cellpadding="5">
        <tr>
            <th  colspan="2">FORM BIODATA</th>
        </tr>
        <tr>
            <td>Nim : </td>
            <td><?php echo $inim;?></td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td><?php echo $inama;?></td>
        </tr>
		<tr>
            <td>Alamat :</td>
            <td><?php echo $ialamat;?></td>
        </tr>
		<tr>
            <td>Asal Sekolah :</td>
            <td><?php echo $iasal;?></td>
        </tr>
        <tr>
            <td>Tgl Lahir :</td>
            <td><?php echo  $ilahir;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td><?php
                    if (isset($_POST['jk'])) {   
                            echo $jk;
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>Prodi :</td>
            <td><?php echo  $iprod;?></td>
        </tr>
        <tr>
            <td>Bidang Minat :</td>
            <td><?php if(isset($_POST['isub']))  
                {   
                if (isset($_POST['ibid1'])) {  
                echo $_POST['ibid1']." <br/>";  
                }  
                    if (isset($_POST['ibid2'])) {  
                    echo $_POST['ibid2']." <br/>";  
                }  
                    if (isset($_POST['ibid3'])) {  
                         echo $_POST['ibid3']." <br/>";  
                } 
                }
                ?>
            </td>
        </tr>
        <tr>
            <td> Berkas CV :</td>
            <td><?php echo  $ifile; ?></td>
        </tr>
    </table>  
</body>5s
</html>