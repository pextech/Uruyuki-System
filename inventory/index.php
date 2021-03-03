<!doctype html>
<html class="no-js " lang="en">
   <?php include'../header/header.php'; ?>


<?php include 'delete.php'; ?>
<?php include '../link/link.php'; ?>
<?php include'../link/theme.php'; ?>
<?php include 'titleh.php'; ?>
<?php include 'sideo.php'; ?>
<?php include 'tsid.php'; ?>
<?php include 'msid.php'; ?>
<?php include 'fsid.php'; ?>


</div>
</section>
<script type="text/javascript">
    function calculate(){
        a = Number(document.getElementById('inputprice').value);
        b = Number(document.getElementById('inputsold').value);

        c = b - a;
        document.getElementById('inputans').value = c;
    }
</script>
<?php include'../fjs/index.php'; ?>
<?php include'../fjs/other.php'; ?>
</body>
</html>
