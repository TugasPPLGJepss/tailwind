<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="toko.php" method="post">
        <input type="text" id="username">
        <input type="password" id="password">
        <button onclick="login()">login</button>
    </form>
    
    <script>
        function login (){
            let username = document.getElementById('username').value
            let password = document.getElementById('password').value
            if (username == "a" && password == "n"){
                alert ('login')
            }
            else alert('gagal')                      
        }
    </script>
</body>
</html>