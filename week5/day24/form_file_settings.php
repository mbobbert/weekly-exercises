<?php
var_dump($_FILES)
;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">


	<input type="hidden" name="datetime" value="<?php echo date('Y-m-d H:i:s')?>">


	<label>Upload a file:
		<input type="file" name="gohome"/>
        <input type="submit">
	</label>


</form>

</body>
</html>