<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // $(document).ready(function (){
    //     $("#demo").html("Hello");
    // });

    // without jquary
    /* function hide() {
        document.getElementById("demo").style = "display: none";
    }
    function show() {
        document.getElementById("demo").style = "display: block";
    }*/
// without jquary
 /*   function toggle(){
        if(document.getElementById("demo").style.display == "block"){
            document.getElementById("demo").style = "display : none";
        }else{
            document.getElementById("demo").style = "display : block";
        }
    }*/    
    // with jquary

    $(document).rady(function(){

        $("#toggle").click(function (){
            $("#demo").toggle();
        });

    });
</script>

</head>
<body>
    <h1 id="demo" style="display: block;">Hi</h1>

    <button onclick="toggle()" id="toggle">Toggle</button>

    <!-- <button onclick="hide()" id="hide">Hide</button> -->
    <!-- <button onclick="show()" id="show">Show</button> -->
</body>
</html>