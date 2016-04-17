
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf8"/>
<title>index</title>

</head>
<body>
index.php
<script>
window.onload = function(){
    var parent = window.parent.parent;
    var doc = parent.document;
    console.log(doc.getElementById('J_ChildWindow'));
}
</script>
</body>
</html>