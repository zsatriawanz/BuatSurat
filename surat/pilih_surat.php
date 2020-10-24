<?php
if(isset($_POST['surat']))
{
  $page = $_POST['surat'];
  if ($page == 1) 
  {
    include "form surat/SURAT MAGANG.php";
  }
  else if($page == 2)
  {
    include "form surat/SURAT BIASA.php";
  }
  else if($page == 3)
  {
    include "form surat/SURAT KETERANGAN.php";
  }
  else if($page == 4)
  { 
    include "form surat/SURAT PERINTAH.php";
  }
  else if ($page == 5) 
  {
    include "form surat/SURAT IZIN.php";
  }else{
    echo "<center style='padding:30% 0 0 50px;'><h3>Maaf. Halaman tidak di temukan !</h3></center>";
  }
}
else
{
  include "surat.php";
}
?>