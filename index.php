<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    
        <h3 class="text-center">Contact Form</h3>
        <form action="form-process.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input type="text" name="postcode" id="postcode" class="form-control" onkeyup="GetDetail(this.value)">
            </div>
            <div class="form-group">
                <label for="state_id">State</label>
                <input type="text" name="state_id" id="state_id" class="form-control" disabled>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit" name="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("state_id").value = "";
                return;
            }
            else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState==4 && this.status==200){
                        var myObj = JSON.parse(this.responseText);
                        document.getElementById("state_id").value = myObj;
                    }
                };
                xmlhttp.open("GET", "search.php?postcode=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</body>
</html>