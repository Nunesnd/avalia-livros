<?php 

    require_once("templates/header.php");

    if($userDao){
        $userDao->destroyToken();
    }

?>

<div id="main-container" class="container-fluid">
    <h1>LOGOUT</h1>

    <h2>teste</h2>
</div>

<?php 

    require_once("templates/footer.php");

?>