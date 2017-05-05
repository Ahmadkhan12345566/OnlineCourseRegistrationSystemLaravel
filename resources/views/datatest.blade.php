<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Request</title>
</head>
<body>
<button type="button" id="getRequest">GetRequest</button>


<div id="getRequestData">

</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#getRequest').click(function () {
        console.log("clicked");

        $.get('getRequest', function (data) {
            $('#getRequestData').append(data);
            console.log(data)
        });
    });
});
</script>
</body>
</html>