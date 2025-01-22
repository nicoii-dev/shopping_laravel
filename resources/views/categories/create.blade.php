<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html {
            background: #f7fafc;
            box-sizing: border-box;
        }


        body {
            background: white;
            max-width: 28rem;
            margin: 50px auto;
            font-family: Calibri, Arial, sans-serif;
            padding: 2rem;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
        }


        h1,
        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Create new category</h1>
    <p>Welcome to the Laravel101 totorial</p>
    <form name="form" action="" method="get">
        <input type="text" name="subject" id="subject" />
    </form>
    <ul>
        <?php 
            foreach ($categories as $category) {
                echo '<li>' . $category->name . '</li>';
            }
        ?>
    </ul>
</body>

</html>