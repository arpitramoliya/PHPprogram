<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <header>
        <nav>
            <div class="textpart">
                <h2>Creativity is a way of Succes</h2>
            </div>
            <!-- text part end -->
            <div>
                <img src="image/download.png" class="logo">
            </div>
            <!-- logo end -->
        </nav>
        <!-- nav end -->
        <hr>
    </header>
    <h1 class="heading">ADMISSION FORM</h1>
    <div class="secondpart">
        <div class="date">
            <label for="" class="label">Date:</label>
            <input type="datetime" class="input">
        </div>
        <div>
            <label id="customButton" onclick="triggerInput()">Select Img</label>
            <input type="file" id="imageInput" accept="image/*" onchange="displayImage(this)">
            <img id="previewImage" src="#" alt="Selected Image" style="display:none;  max-height: 150px;">
        </div>
    </div>
    <form>
        <table class="">
            <div class="first">
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" id="name" name="" class="input1" placeholder="Enter your name" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="name">Address:</label></td>
                    <td><input type="text" id="name" name="" class="input1" placeholder="Enter your Address" required>
                    </td>
                </tr>
            </div>
            <div class="first">
                <tr>
                    <td><label for="name">Contact No:</label></td>
                    <td><input type="number" id="name" name="" class="input" placeholder="Enter your name" required>
                    </td>


                    <td><label for="name">Date Of Birthday:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Date Of Birthday" required>
                    </td>
                </tr>
            </div>
            <div class="first">
                <tr>
                    <td><label for="name">Qualification:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Qualification" required>
                    </td>


                    <td><label for="name">Current Activity:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Current Activity" required>
                    </td>
                </tr>
            </div>
            <tr>
                <td><label for="name">Parent Occupation:</label></td>
                <td><input type="text" id="name" name="" class="input1" placeholder="Enter your Parent Occupation" required>
                </td>
            </tr>
        </table>

        <br>


    </form>
    <h2 class="center">FOR OFFICE USE ONLY</h2>

    <form action="">
        <table>
            <div class="first">
                <tr>
                    <td><label for="name">Course:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Course" required>
                    </td>


                    <td><label for="name">Batch:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Batch" required>
                    </td>
                </tr>
            </div>
            <div class="first">
                <tr>
                    <td><label for="name">Date Of joing:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Date Of joing" required>
                    </td>


                    <td><label for="name">Date Of ending:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Date Of ending" required>
                    </td>
                </tr>
            </div>
            <div class="first">
                <tr>
                    <td><label for="name">Course Duration:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Course Duration" required>
                    </td>


                    <td><label for="name">Inst Scheme:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Inst Scheme" required>
                    </td>
                </tr>
            </div>
            <div class="first">
                <tr>
                    <td><label for="name">Total Fees:</label></td>
                    <td><input type="number" id="name" name="" class="input" placeholder="Enter your Total Fees" required>
                    </td>


                    <td><label for="name">Books:</label></td>
                    <td><input type="text" id="name" name="" class="input" placeholder="Enter your Books" required>
                    </td>
                </tr>
            </div>
            <tr>
                <td><label for="name">Exam/Certificate:</label></td>
                <td><input type="text" id="name" name="" class="input1" placeholder="Enter your Exam/Certificate" required>
                </td>
            </tr>
            <tr>
                <td><label for="name">Comment:</label></td>
                <td><input type="text" id="name" name="" class="input1" placeholder="Enter your Comment" required>
                </td>
            </tr>
        </table>
    </form>


    <script>
       function triggerInput() {
        var fileInput = document.getElementById('imageInput');
        fileInput.click();
    }

    function displayImage() {
        
        var fileInput = document.getElementById('imageInput');
        var previewImage = document.getElementById('previewImage');
        var customButton = document.getElementById('customButton');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
                customButton.style.display = 'none';

                // Hide the file input using JavaScript
                fileInput.style.display = 'none';
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

      
    </script>
</body>

</html>