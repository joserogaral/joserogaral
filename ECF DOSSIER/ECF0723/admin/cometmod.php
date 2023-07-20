<?php include('../hefo/headerad.php')?> 
<?php 
            include ("../bd/bd.php");

            $sentenciaSQLs=$conexionetll->prepare("SELECT * FROM avis");
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
                      $sentenciaSQLs= $conexionetll->prepare("DELETE FROM avis WHERE ID=:ID");
                      $sentenciaSQLs->bindParam(':ID',$ID);
                      $sentenciaSQLs->execute();
                      header("Location:cometmod.php");
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
                        header("Location:cometmod.php");
              }
            ?>

<div class="column">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Horaires de ouverture
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">  
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">Luni a Vendredi</label>
                            <h6>Matin</h6>
                            <input type="text" required  class="form-control" value="<?php echo $hi?>" name="hi" id="hi" placeholder="Ouverture">
                            <input type="text" required  class="form-control" value="<?php echo $hf?>" name="hf" id="hf" placeholder="Fermature">
                            <br>
                            <h6>Apre midi</h6>
                            <input type="text" required  class="form-control" value="<?php echo $hic?>" name="hic" id="hic" placeholder="Ouverture">
                            <input type="text" required  class="form-control" value="<?php echo $hfc?>" name="hfc" id="hfc" placeholder="Fermature">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Samedi</label>
                            <input type="text" required class="form-control" value="<?php echo $his?>" name="his" id="his" placeholder="Ouverture">
                            <input type="text" required class="form-control" value="<?php echo $hfs?>" name="hfs" id="hfs" placeholder="Fermature">
                        </div> 

                        <div class="btn-group" role="group" aria-label="">  
                            <button type="submit" name="accion"  value="Modifier" class="btn btn-warning">Modifier</button>
                        </div>
                       
                    </div>  
            </form> 
        </div>
    </div>          
</div>

<div class="col-md-12">
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Comentaire</th>
                    <th>Pseudonime</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach($listez as $uv){ ?>
                <tr>
                    <td><?php echo $uv['date'] ?></td>
                    <td><?php echo $uv['coment'] ?></td>
                    <td><?php echo $uv['pseu'] ?></td>
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