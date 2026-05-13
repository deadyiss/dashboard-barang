<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "components/head.php"; ?>
</head>
<body id="page-top"> 
    <div id="wrapper">
        <?php include "components/sidebar.php"; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "components/navbar.php"; ?>
                <div class="container-fluid">
                    <?php include "routes.php"; ?>
                </div>
            </div>
            <?php include "components/footer.php"; ?>
        </div>
    </div>
    <a href="#page-top" class="scroll-to-top rounded">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include "components/logout.php"; ?>
    <?php include "components/scripts.php"; ?>
</body>
</html>