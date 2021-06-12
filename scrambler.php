<!DOCTYPE html>
<html lang="en">
<?php 
    include_once "function.php";
    $task = "encode";
    if(isset($_GET['task']) && $_GET['task']!=""){
        $task = $_GET['task'];
    }
    $key = "abcdefghijklmnopqrstuvwxyz0123456789";
    if($task=='key'){
        $keyOriginal = str_split($key);
        shuffle($keyOriginal);
        $key = join('', $keyOriginal);
    }else if(isset($_POST['key']) && $_POST['key']!='' ){
        $key = $_POST['key'];
    }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP Data Scrambling</title>
</head>
<body>
    <div class="container page-rapper">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <div class="content-inner">
                    <h1>Data Encode & Decode</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <ul class="nav-menu">
                        <li><a href="/php-data-encoding/scrambler.php?task=key">Generate Key</a></li>
                        <li><a href="/php-data-encoding/scrambler.php?task=encode">Encode</a></li>
                        <li><a href="/php-data-encoding/scrambler.php?task=decode">Decode</a></li>
                    </ul>
                    <?php print_r($_GET) ;?>

                    <form method="POST"  action="scrambler.php">
                        <label for="key">Your Key</label>
                        <input type="text" id="key" name="key" value="<?php echo $key ?>">
                        <label for="encode">Your Data Encode</label>
                        <textarea name="encode" id="encode" ></textarea>
                        <label for="decode">Your Data Decode</label>
                        <textarea name="decode" id="decode"></textarea>

                        <br>    
                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>