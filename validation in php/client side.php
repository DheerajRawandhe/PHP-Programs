<!DOCTYPE html>
<html>
<head>
    <title>Client-Side Validation</title>
    <script>
        function validateForm() {
            var name = document.forms["myForm"]["name"].value;
            var email = document.forms["myForm"]["email"].value;
            if (name == "" || email == "") {
                alert("Please fill in all fields.");
                return false;
            }
        }
    </script>
</head>
<body>
    <h2>Form Validation</h2>
    <form name="myForm" action="server-side.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
