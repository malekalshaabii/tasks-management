<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أدارة المهام</title>
    <link rel="stylesheet" href="styletask.css">
    <style>
        header {
            width: 100%;
            height: 70px;
            background-color: #2c3e50;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            width: 200px;
            color: #ffffff;
            transition: 0.3s;
            margin-bottom: 100px;
        }

        header h1:hover {
            color: #1abc9c;

        }
    </style>
</head>

<body>
    <header>
        <h1>ادارة المهام</h1>
    </header>
  
        @yield('content')
    
</body>

</html>