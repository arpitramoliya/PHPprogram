
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quiz Application</title>
</head>
<body>
    <div class="card mt-4">
        <div class="card-header">
            <h4>Data Information Student</h4>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="cord-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Password</th>
                        <th>Course</th>
                        <th>Create At</th>
                        <th>Update At</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                      <tbody id="tableData">
                      </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            // console.log('adaeqwe');
            var data = [];
      $.ajax({
        url: "data.php",
        method: "POST",
        // dataType: "json",
        success:function(res){
            var arpit = JSON.parse(res);
            //console.log(arpit[1][1]);
            var i = 0 ;
            var data ='';
            arpit.forEach(element => {
                console.log(element);
                data += `<tr>`;
                element.forEach(el => {
                    data += `<td>${el}</td>`;
                });
                data += `<td><button class="btn btn-primary data-id="${arpit[i][0]}" id="update">Edit</button>`;
                        data += ` <button class="btn btn-danger" data-id="${arpit[i][0]}" id="delete">Delete</button>
                        </td>`;
                        data += `</tr>`;
                        i++;
            });
            data += `</tr>`;
                $('#tableData').append(data);
                //console.log(data);

            //delete id
            $("body").delegate("#delete", "click", function(data){ 
                var val = $(this).attr('data-id');
                // alert(val);
                $.ajax({
                    url:'backend.php',
                    method:'POST',
                    data:{deleteId:val},
                    success:function(res){
                    location.reload();
                        alert(res);
                    }
                });
            });

            //Update Data
            $("body").updgate("#update", "click", function(data){
                var val = $(this).attr('data-id');
                $.ajax({
                    url:'baclend.php',
                    method:'POST',
                    data:{updateId:val},
                    success:function(res){
                        location.reload();
                        alert(res);
                    }

                });
            });
        }
    });
});//main end
</script>
</body>
</html>