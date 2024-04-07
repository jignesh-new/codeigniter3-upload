
<div class="container-fluid">

<?php include('navbar.php');?>

<div class="row">

    <!-- Sidebar -->
   <?php include('sidebar.php');?>

    <!-- Content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div id="dynamic-content" class="pt-3">
            <?php echo isset($content) ? $content : ''; ?>
        </div>
    </main>

</div>

</div>



