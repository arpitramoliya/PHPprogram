<?php
    require "connection.php";
    $qry = "SELECT * FROM task ORDER BY created_at";
    $run= mysqli_query($conn,$qry);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Task Manage</title>
    <style>
        .task {
            height: 20px;
            width: 200px;
        }
        .table {
            width: 400px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Task Management</h1>
        <input type="text" name="task" id="search" placeholder="Enter your task" required>
        <button class="btn btn-info" id="add">Add</button>
        <br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $run->fetch_assoc()) {
                    $id = $row['id'];
                    echo "<tr>
                            <td>" . $row['task_at'] . "</td>
                            <td>
                                <center>
                                    <button type='button' class='edit-btn btn btn-warning' data-id='$id'>Edit</button>
                                    <button type='button' class='delete-btn btn btn-danger' data-id='$id'>Delete</button>
                                </center>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script>
			$(document).ready(function() {
				// Add task
				$('#add').click(function() {
					var inputVal = $('#search').val();

					if (inputVal !== "") {
						$.post('backend.php', { addTask: inputVal }, function(res) {
							toastr.success(res);
							location.reload();
						}).fail(function() {
							toastr.error("Error occurred");
						});
					}
				});

            // Delete task
            $('.delete-btn').click(function() {
                var id = $(this).data('id');

                $.post('backend.php', { deleteId: id }, function(res) {
                    toastr.success(res);
                    location.reload();
                }).fail(function() {
                    toastr.error("Error occurred");
                });
            });

            // Edit task
            $('.edit-btn').click(function() {
                var id = $(this).data('id');
                var updatedTask = prompt("Enter updated task:");

                if (updatedTask !== null) {
                    $.post('backend.php', { updateId: id, updateTask: updatedTask }, function(res) {
                        toastr.success(res);
                        location.reload();
                    }).fail(function() {
                        toastr.error("Error occurred");
                    });
                }
            });
        });
    </script>
</body>
</html>
