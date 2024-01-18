<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json Data</title>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>php with ajax & json</h1>
        </div>
        <div id="loadind"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
               url:'encode1.php',
               method:'GET',
               success:function(res){
                //console.log(res);
                var ajpatel = JSON.parse(res);
                console.log(ajpatel);
                var i = 0;
                var data = "";

                ajpatel.forEach(element => {
                    data += `<tr>`;
                    element.forEach(el => {
                    data += `<td>${el}</td>`;
                    data += `</tr>`;
                    i++;
                        });

                });
                $('#loadind').append(data);
            } 
            });
        });
    </script>
</body>
</html>