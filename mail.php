<?php
if(isset($_POST['submit'])){
                        
$name  = $_POST['name']; 
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];

header("location:https://api.whatsapp.com/send?phone=6281932224123&text=Nama:%20$name
%20%0DEmail:%20$email%20%0DProject:%20$project%20%0DPesan:%20$message");
} else {
echo "<script>
window.location=history.go(-1);
</script>";
}
?>