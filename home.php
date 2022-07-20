<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
    <?php
    class formulaire {
        private $data;
        public function __construct(){
          $this->data=$_POST;
        }
        public function input($type,$name){
            return "<input type=".$type." name=".$name."/><br/>" ;
        }
        public function Submit ($name){
            return"<input type= submit name=".$name."/><br/>";
        }
        public function getValue($index){
            
            if(isset($this->data)){
                return $this->data[$index];
                
            }
            else
                return null;    
        }
    }
    ?>
    <?php 
    if(isset($_POST['nom/']))
    {
    echo "L'utilisateur a soumis le formulaire et saisi ce nom : <b>",$_POST['nom/'],"</b>";
    echo "<br>Vous pouvez utiliser à nouveau le formulaire suivant pour entrer un nouveau nom.";
    }
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  >

    <?php
    $form=new formulaire();

    echo "<label for=nom>Nom  : </label>".$form->input("text","nom")."</br>";

    echo $form->submit("submit");
    ?>
    </form>




</body>
</html>