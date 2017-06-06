<!DOCTYPE HTML>
<html><head>
    <meta charset="utf-8">
    <title>Canvas Background through CSS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filesystem</title>
    <link rel="stylesheet" href="./libs/css/bootstrap.css">
    <script src="libs/js/jquery.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style type="text/css" media="screen">


        canvas, img { display:block; margin:1em auto; border:1px solid black; }
        canvas {
            background:url(./test.jpg);
            width:100vw;
            height:100vh

        }
    </style>
</head>
<body>
<span id="element" class="glyphicon glyphicon-triangle-right"></span>
<h1 id="test">sdsadsd</h1>
<!---->
<!--<iframe href="https://view.officeapps.live.com/op/view.aspx?src=https://127.0.0.1/Download/ch03鏈結串列.ppt"></iframe>-->
<!--<img>-->
<script type="text/javascript" charset="utf-8">
<!--    alert(location.href);-->
$('#element').mousedown(function(event) {
switch (event.which) {
case 1:
alert('Left Mouse button pressed.');
break;
case 2:
alert('Middle Mouse button pressed.');
break;
case 3:
alert('Right Mouse button pressed.');
break;
default:
alert('You have a strange Mouse!');
}
});

if (document.addEventListener) { // IE >= 9; other browsers
    document.addEventListener('contextmenu', function(e) {
        var optTime=0;
        $('body').mousedown(function(event) {
            if(event.which==3) {
                optTime=1;
                $('#option').remove();
                console.log(event.clientX);
                console.log(event.clientY);
                var targetId=$(event.target).attr('id');
                console.log(targetId);
                if(targetId!=null){
                    appendOpt();
                }
            }
        });
        $('body').mousedown(function(event) {
            if(event.which==1 && optTime!=0) {
                $('#option').remove();
                optTime=0
            }
        }); //here you draw your own menu
        e.preventDefault();
    }, false);
} else { // IE < 9
    document.attachEvent('oncontextmenu', function() {
        alert("You've tried to open context menu");
        window.event.returnValue = false;
    });
}

function appendOpt(){
    var $ul=$('<ul></ul>').addClass('list-group');
    var dataOpt=['Download','upload','delete'];
    dataOpt.forEach(function(cur){
        var $li=$('<li></li>')
            .text(cur)
            .addClass('list-group-item list-group-item-info');
        $ul.append($li);
    });

    var $div=$("<div></div>")
        .attr('id','option')
        .addClass('panel panel-warning')
        .html('<span class="glyphicon glyphicon-object-align-left">option</span>')
        .append($ul)
        .css({'position':'fixed','top':event.clientY+'px','left':event.clientX+'px'});
    $("body").prepend($div);
}
</script>
</body></html>