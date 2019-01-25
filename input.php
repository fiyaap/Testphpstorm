<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
	<center>
		<h1>Kalkulator Berat Badan dengan OOP Sederhana</h1>
		<h2>Masukkan Data</h2>

		<form method="POST">
			<table>
				<tr>
					<td>Tinggi</td>
					<td>:</td>
					<td><input type="text" name="tinggi"></td>
				</tr>

				<tr>
					<td>Berat Badan</td>
					<td>:</td>
					<td><input type="text" name="berat"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="Pria">Pria<br>
						<input type="radio" name="jk" value="Wanita">Wanita
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
					<td></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

<?php
	class calc{

		var $Wanita;
		var $Pria;

		public function Wanita($tinggi,$berat,$jk){

			echo "<center>";

			echo $this->Wanita = $berat/(($tinggi/100)*($tinggi/100));

			echo "<br>";

			if ($this->Wanita<18) {
				echo "Under Weight/Kurus";
			} elseif ($this->Wanita>18||$this->Wanita<=25){
				echo "Normal Weight/Normal";
			} elseif ($this->Wanita>25||$this->Wanita<=27){
				echo "Over Weight/Kegemukan";
			}else{
				echo "Obesitas";
			}

			echo "</center>";

		}
		public function Pria(){

			echo "<center>";

			echo $this->Pria = $berat/(($tinggi/100)*($tinggi/100));

			echo "<br>";

			if ($this->Pria<17) {
				echo "Under Weight/Kurus";
			} elseif ($this->Pria>17||$this->Pria<=23){
				echo "Normal Weight/Normal";
			} elseif ($this->Pria>23||$this->Pria<=27){
				echo "Over Weight/Kegemukan";
			}else{
				echo "Obesitas";
			}

			echo "</center>";

		}
	}

$bb= new calc();
	if (isset($_POST['submit'])) {
		$tinggi = $_POST['tinggi'];
		$berat  = $_POST['berat'];
		$jk		= $_POST['jk'];

		echo "<center>";
		echo "<br>";
			if ($jk=='Wanita'){
				echo "Berat Badan Anda ";
				$bb->Wanita($berat,$tinggi,$jk);
				echo "<br>";
			}else{
				echo "Berat Badan Anda ";
				$bb->Pria($berat,$tinggi,$jk);
				echo "<br>";
			}
		echo "<center>";
	}


?>