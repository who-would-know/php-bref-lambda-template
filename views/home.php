<?php
$PageTitle = "Home Page";
function customPageHeader()
{ ?>
    <!--Arbitrary HTML Tags-->
<?php }
include_once('templates/header.php');
?>

<body>
    <h1>Home</h1>
    <p>Welcome in my app.</p>

    <a href="/users">Users Page</a>
    <a href="/contact">Contact Page</a>

</body>

<?php include_once('templates/footer.php'); ?>