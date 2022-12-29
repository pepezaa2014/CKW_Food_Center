<?php
include("connection.php");
session_start();
$sql1 = "SELECT * FROM `student` WHERE `CardId` = '".$_SESSION['card']."' ";
		$result = $conn->query($sql1);
		$data = mysqli_fetch_array($result);
		if ($result->num_rows == 1)
		{
			if ($data['Statuscard']=="สามารถใช้งานได้") {
				if ($_SESSION['numsale']==1) {
				if ($data['Balance']>=20) {
					$balance=$data['Balance']-20;
					$updatedata="UPDATE `student` SET `Balance`='".$balance."' WHERE `student`.`CardId` = '".$_SESSION['card']."' ";
					$sending = $conn->query($updatedata);
					header("location:sentlinepay0.php");
										}
				else
				{
					echo "จำนวนเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
									}
			else if ($_SESSION['numsale']==2) {
					if ($data['Balance']>=25) {
					$balance=$data['Balance']-25;
					$updatedata="UPDATE `student` SET `Balance`='".$balance."' WHERE `student`.`CardId` = '".$_SESSION['card']."' ";
					$sending = $conn->query($updatedata);
					header("location:sentlinepay0.php");
										}
				else
				{
					echo "จำนวนเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
			}

			else if ($_SESSION['numsale']==3) {
					if ($data['Balance']>=10) {
					$balance=$data['Balance']-10;
					$updatedata="UPDATE `student` SET `Balance`='".$balance."' WHERE `student`.`CardId` = '".$_SESSION['card']."' ";
					$sending = $conn->query($updatedata);
					header("location:sentlinepay0.php");
										}
				else
				{
					echo "จำนวนเงินของคุณไม่เพียงพอ กรุณาเติมเงิน";
				}
			}

			}
			
			else if ($data['Statuscard']=="ไม่สามารถใช้งานได้") 
				echo "บัตรของคุณไม่สามารถใช้งานได้";
			
		}

?>
<br><a href="interfacevendor.php"><button>กลับสู่หน้าหลัก</button></a>