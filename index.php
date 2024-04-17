<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nokia to Ericsson EA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: normal;
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        /* input[type="submit"] {
            background-color: #31610a;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #346e04;
        } */
        .heading {
        display: flex;
        justify-content: center;
        background: black;
        border-radius: 4px;
        color: #fff;
    }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php"><img src="logo.png" width="37" height="25"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="main.php"><i class="fa-solid fa-house"></i> Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ngs.php"><i class="fa-solid fa-indent"></i> NGS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eea.php"><i class="fa-solid fa-indent"></i> Ericsson EA</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa-solid fa-indent"></i> Nokia to Ericsson EA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa-solid fa-indent"></i> IDLe</a>
      </li>
    </ul>
  </div>
</nav>
<body>
    <div class="container">
    <form action="generate_txt.php" method="post">
      <div class="heading">
    <h2 align="center" class="h4">NOKIA to ERICSSON External Alarm</h2>
    </div><br><br>
    <label for="siteid" class="font-weight-normal">Site ID:</label>
    <input type="text" id="siteid" name="siteid" required placeholder="Enter Site ID"><br><br>
    <label for="alarm" class="font-weight-normal">NOKIA Alarm Input (Remove space from last line):</label>
    <label for="alarm" class="blockquote-footer">Alarm output from MNRC</label>
    <textarea id="alarm" name="alarm" rows="4" cols="50" required placeholder="Enter Nokia Alarm Input"></textarea><br><br>
    <button type="submit" name="submit" class="btn btn-info btn-sm">Download <i class="fa-solid fa-download"></i></button>
    <!-- <input type="submit" class="btn btn-success" name="submit" value="Download CLI"> -->
    <!-- <input type="reset" class="btn btn-dark" value="Reset"> -->
    <button type="reset" class="btn btn-dark btn-sm">Reset <i class="fa-solid fa-trash"></i></button>
</form>
</div>
</body>
</html>
