<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: #4267B2;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        .sidebar {
            position: fixed;
            top: 60px;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #f0f2f5;
            padding: 20px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .main-content h2 {
            margin-top: 0;
        }

        .main-content p {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Facebook</h1>
    </header>

    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li>Menu 1</li>
            <li>Menu 2</li>
            <li>Menu 3</li>
            <li>Menu 4</li>
        </ul>
    </div>

    <div class="main-content">
        <h2>Main Content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquam commodo pretium. Nulla facilisi. Mauris ac risus sit amet arcu ultricies aliquam.</p>
        <p>Phasellus a facilisis odio. Nunc sollicitudin nisi eget congue fringilla. Maecenas eu nunc sed urna posuere commodo. Mauris elementum dui ut erat eleifend, a elementum mi luctus.</p>
    </div>
</body>

</html>
