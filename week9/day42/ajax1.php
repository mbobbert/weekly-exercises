<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>

<script>
$.ajax({
    method: 'get', // get or post
    url: 'https://classes.codingbootcamp.cz/assets/classes/602/guardian.php',
    success: function(data, status) { // data will get request data, status will get status
        console.log('status:',status);
        console.log(data.data);
        for(i=0; i < data.data.length; i++)
        {
            document.write(data.data[i] + "<br>");
        }
        // function to run when the response returns
    }
})
</script>
</body>
</html>