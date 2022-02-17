<?php 
if (isset($_POST['submit'])){
    $file='uploads/'.$_FILES['myfile']['name'];
    $ok=move_uploaded_file($_FILES['myfile']['tmp_name'],$file);
    if($ok){
        include 'db.php';
        $data=file_get_contents($file);
        $rows=explode("\n",$data);
        for ($i=1; $i <count($rows) ; $i++) { 
            $cols=explode(";",$rows[$i]);
            query("INSERT INTO students(name,email,birthday) VALUES('".$cols[0]."','".$cols[1]."','".$cols[2]."')");
        
            
           
        }
    }
}

echo "
<script>
window.location.href = 'index.php';
</script>
";