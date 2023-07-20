<?php include('../hefo/headerad.php')?> 
<?php 
            include ("../bd/bd.php");

            $sentenciaSQLs=$conexioni->prepare("SELECT * FROM cont");
            $sentenciaSQLs->execute();
            $listez=$sentenciaSQLs->fetchALL(PDO::FETCH_ASSOC);

            $accion=(isset($_POST['accion']))?$_POST['accion']:"";
            $ID=(isset($_POST['ID']))?$_POST['ID']:"";
            $hiz=(isset($_POST['hi']))?$_POST['hi']:"";
            $hfz=(isset($_POST['hf']))?$_POST['hf']:"";
            $hicz=(isset($_POST['hic']))?$_POST['hic']:"";
            $hfcz=(isset($_POST['hfc']))?$_POST['hfc']:"";
            $hisz=(isset($_POST['his']))?$_POST['his']:"";
            $hfsz=(isset($_POST['hfs']))?$_POST['hfs']:"";



            $sentenciaSQLb= $conexionet->prepare("SELECT * FROM ora");
            $sentenciaSQLb->execute();
            $lilip=$sentenciaSQLb->fetch(PDO::FETCH_LAZY);

            $hi=$lilip['hi'];
            $hf=$lilip['hf'];
            $hic=$lilip['hic'];
            $hfc=$lilip['hfc'];
            $his=$lilip['his'];
            $hfs=$lilip['hfs'];

           

            switch($accion){        
                     
                   case "Supprimer":
                      $sentenciaSQLs= $conexioni->prepare("DELETE FROM cont WHERE ID=:ID");
                      $sentenciaSQLs->bindParam(':ID',$ID);
                      $sentenciaSQLs->execute();
                      header("Location:messages.php");
                      break;

                    case "Modifier":
                        $sentenciaSQLb= $conexionet->prepare("UPDATE ora SET hi=:hi, hf=:hf, hic=:hic, hfc=:hfc, his=:his, hfs=:hfs");
                        
                        $sentenciaSQLb->bindParam(':hi',$hiz);
                        $sentenciaSQLb->bindParam(':hf',$hfz);
                        $sentenciaSQLb->bindParam(':hic',$hicz);
                        $sentenciaSQLb->bindParam(':hfc',$hfcz);
                        $sentenciaSQLb->bindParam(':his',$hisz);
                        $sentenciaSQLb->bindParam(':hfs',$hfsz);
                        $sentenciaSQLb->execute();
                        header("Location:messages.php");
              }
            ?>


<div class="col-md-12">
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Nom & prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach($listez as $uv){ ?>
                <tr>
                    <td><?php echo $uv['date'] ?></td>
                    <td><?php echo $uv['nomypre'] ?></td>
                    <td><?php echo $uv['msg'] ?></td>
                    <td><?php echo $uv['email'] ?></td>
                    <td><?php echo $uv['telephone'] ?></td>
                    <td>
                        
                        <form method="post">
                            <input type="hidden" name="ID" id="ID" value="<?php echo $uv['ID']?>"/>
                            <input type="submit" name="accion" value="Supprimer" class="btn btn-danger"/>
                        </form>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    
</div>
</div>

<?php include('../hefo/footerad.php')?>