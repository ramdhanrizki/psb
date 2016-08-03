<?php 
if(!isset($_SESSION['SiswaNoPeserta']))
{
echo "<script>alert('Anda belum login !!');document.location.href='index.php'</script>";
exit();
}
?>