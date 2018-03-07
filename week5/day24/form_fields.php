

<?php $subject = $_POST['subject'] ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




<pre>inside $_GET is <?php var_dump($_GET) ?></pre>
<pre>inside $_POST is <?php var_dump($_POST) ?></pre>


<form method="post" action="">
    <input type="hidden" name="datetime" value="<?php echo date('Y-m-d H:i:s')?>" >
    <input type="text" name="value" />
    <select name="selections">
        <option value="">-- please select one --</option>
        <option value="proposal">Feature proposal</option>
        <option value="bug">Bug report</option>
        <option value="other">Other</option>
    </select>
    <input type="submit" value="submit"/>
    <label>Insert the subject
        <input type="text" name="subject" value="<?php echo htmlspecialchars($subject); ?>">
    </label>
    <input type="text" name="surname" value="surname" />
    <textarea type="text" name="textarea" /></textarea>

    <br/>
    <br/>
    <br/>
    <button onclick="document.getElementById('ttt').value = 0; return false;">I am not a robot</button>

</form>

</body>
</html>