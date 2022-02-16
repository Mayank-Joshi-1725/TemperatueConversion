<!DOCTYPE html>
<html>
<head>
	<title>Temp Conversion</title>
	<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
	<style>
		*{ margin: 0;padding: 0;box-sizing: border-box; font-family: 'Redressed', cursive;}

		h1{text-align: center;line-height: 20vh;}

		.main-div{
			width: 100%;
			height: 80%;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		/*.left-side{
			background-color: #dfe6e9;
			border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
		}*/
		.left-side img{
			max-width: 400px;
			height: 300px;	
		}
		.right-side{
			width: 400px;
			height: 300px;
			background-color: #dfe6e9;
			border-radius: 15px;
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		.input1{
			width: 250px;
			height: 40px;
			padding: 5px;
			outline: none;
			border-radius: 1px solid grey;
			border-radius: 5px;
		}
		.selection{
			width: 100%;
			margin: 20px 0;
			}
		.btn{
			padding: 10px 16px;
			border-radius: 5px;
			outline: none;
			background-color:#6c63ff;
			color: white;
			font: 0.9rem 
			}
	</style>
</head>
<body>

<header>
	<h1>Temperature Conversion</h1>
	<div class="main-div">
		<div class="left-side">
			<img src="m.jpg">
		</div>
		<div class="right-side">
			<form>
				<input type="text" name="num" placeholder="enter your name" class="input1">
				<div class="selection">
					<label>Celc</label>
					<input type="radio" name="units" value="cel">

					<label>Faren</label>
					<input type="radio" name="units" value="feh">
				</div>
				<input type="submit" name="submit" value="Convert Now">
			</form>
			<div>
				<p>
					
				</p>
			</div>
		</div>
	</div>
</header>

</body>
</html>