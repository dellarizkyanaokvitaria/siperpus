<?php 
    $kon= mysqli_connect("localhost", "root", "", "db_perpus");
    $id= $_GET['id_anggota'];
    $query = mysqli_query($kon, "DELETE FROM anggota where id_anggota=$id");
  

    if($query>0){
        echo "
        <script>
        alert('Data berhasil dihapus, Yeay!');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>
