<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(document.body).on('click','.link-wrap a', function(e){
                e.preventDefault();
                window.history.pushState('page2', 'Title', '/page2.php');
            });
        });
    </script>
</head>
<body>
    <h1><?php echo rand(2,999999); ?></h1>
    <ul>
        <li class="link-wrap"><a href="#hello">Hello</a></li>
        <li class="link-wrap"><a href="test#hello2">Hello2</a></li>
        <li class="link-wrap"><a href="nothing/hello#hello3">Hello5</a></li>
        <li class="link-wrap"><a href="#hello3">Hello6</a></li>
        <li class="link-wrap"><a href="#hello4">Hello7</a></li>
    </ul>
    
</body>
</html>