<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>php with ajax & json</h1>
        </div>
        <div id="load-data"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url:'encode2.php',
                method:'GET',
                success:function(res){
                    var arpit = JSON.parse(res);
                    console.log(arpit);
                    var i = 0;
                    var data = '';
                    arpit.forEach(element => {
                        data += `<tr>`;
                        element.forEach(el =>{
                            data += `<td>${el}</td>`;
                        });
                        data += `</tr>`;
                        i++;
                    });
                    $('#load-data').append(data);
                    // console.log(data);

                }
            });
        });
        /*$.getJSON(
            "encode2.php",
            function(data){
                $.each(data,function(key,value){
                    $('#load-data').append(value.id + "" + value.fullname + "" + value.password + "" + value.created_at + "" + value.updated_at + "<br>"  )
                })
           console.log(data);
            }
        );*/
    </script>
</body>
</html>