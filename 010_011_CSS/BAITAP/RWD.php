<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .header {
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .sidebar {
            width: 300px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .footer {
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Header</h1>
        </div>

        <div class="sidebar">
            <h2>Sidebar</h2>
        </div>

        <div class="content">
            <h2>Content</h2>
        </div>

        <div class="footer">
            <h2>Footer</h2>
        </div>
    </div>
</body>

</html>
