<?php
                    include 'kone.php';
                    
                    $isi=mysqli_query($koneksi,"SELECT * FROM tujuan");
                    while($d=mysqli_fetch_array($isi)){
                  ?>

                  <option value="<?php echo $d['valueD1']; ?>"><?php echo $d['Dari1']; ?></option>
              <?php
                }
                ?>