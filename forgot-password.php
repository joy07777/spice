<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            text-align: center;
            margin-bottom: 5px;
            display: block;
            width: 100%;
        }
        input[type="email"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
        }
        button {
            width: calc(100% - 20px);
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Forgot Password</h1>

        <form method="post" action="send-password-reset.php">

            <label for="email">Enter your Email</label>
            <input type="email" name="email" id="email">

            <button>Send</button>

        </form>

    </div>

</body>
</html>
