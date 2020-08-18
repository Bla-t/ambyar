<?php
                    include 'kone.php';
                    
                    $isi=mysqli_query($koneksi,"SELECT * FROM tujuan");
                    while($d=mysqli_fetch_array($isi)){
                  ?>
                  <option value="<?php echo $d['valueD2']; ?>"><?php echo $d['Dari2']; ?></option>
                <?php
                }
                ?>