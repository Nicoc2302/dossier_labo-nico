<?php $name = isset($_POST['name'])? $_POST['name']:""; ?>
<div class="row">
    <div class="col-md-8 ">
    	<h1>Derniere liste créer</h1>
        <p>
            <?php
                
                $filename = "files/liste.txt";
                if($_SERVER['REQUEST_METHOD']=='POST'){

                    $name = $_POST['name'];

                }

                
                $lines = file($filename);
                $lines = array_reverse($lines);
                $start = 0;
                define('NBLINE', 2);
                if(isset($_GET['start']) && (intval($_GET['start']))){
                    $start = $_GET['start'];
                    $start = $start>0 ? ($start-1) *NBLINE:0;
                }
                echo "<table border=1>";
                echo"<tr>";
                echo "<th>Nom et prénom</th>";
                echo "<th>Lien vers la liste</th>";
                echo"</tr>";
                for($i=$start;$i<$start + NBLINE && $i<count($lines);$i++)
                {
                    $split =explode("|", $lines[$i]);
                    if($name==$split[0])
                    {

                        echo"<tr>";
                        echo "<td>$split[0]</td>";
                        echo "<td>$split[1]</td>";
                        echo"</tr>";
                    }
                    elseif ($name =="")
                    {
                        echo"<tr>";
                        echo "<td>$split[0]</td>";
                        echo "<td>$split[1]</td>";
                        echo"</tr>";
                    }
                   
                }
                echo "</table>";
                ?>
                
        <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
            <?php
            //Define number of pages
                $nbp = count($lines)%5 ==0 ? count($lines)/NBLINE:(ceil(count($lines)/NBLINE));// 10%5 = 0 => 10/5 = 2 // 11%5 == 1 => (11/5)+1
                $start = isset($_GET['start']) ? $_GET['start'] : 1;
                $previous = $start>1 ? $start-1:1;
                $next = $start< $nbp ? $start+1:$nbp;
            //iterate every page
                
                //if($start!=1){
                echo'<li'.(($start==1)?' class="disabled"':"").'><a href="?page=home&start='.$previous.'">&laquo;</a></li>';
                //}
                for($num=1;$num<=$nbp;$num++)// 1<=2
                {  
                    echo'<li'.(($start==$num)?' class="active"':'').'><a href="?page=home&start='.$num.'">'.$num.'</a></li>';
                }
                echo'<li'.(($start==$nbp)?' class="disabled"':'').'><a href="?page=home&start='.$next.'">&raquo;</a></li>';
                
            ?>             
                    
                </ul>
           </nav>
        </p>
    </div>
    <div class="col-md-4">

        <form method="post">
            <div class="form-group">
              <label for="exampleInputname">Nom d'un des parents</label>
              <input type="text" class="form-control" id="exampleInputname" placeholder="Nom" required name = "name">
            </div>
            
            <input type="submit" class="btn btn-default"></input>
        </form>
    </div>
</div>
