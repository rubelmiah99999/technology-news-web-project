<?php include('sayfalar/pdo.php'); ?>



       
				
				  <?php 
					$id=$_GET['id'];
							if(isset($_POST['submit'])){ 
						
							$seoIdAlan=$_POST['seoId'];
							$seoAlan=$_POST['seo'];
							$sql=$db->prepare("UPDATE  `seokelimeler`SET seo='$seoAlan'  where seoId='$id'");														
							$yEkle=$sql->execute(array($seoAlan));
							
							
        
							if($sql){
								echo "<script>alert('SeoKelime  Başarıyla Eklenmiştir..!!')</script>";
								echo " <meta http-equiv='refresh' content='0;URL=adminindex.php?s=seokelimeler.php'> "; 
								
							}
							else {
								echo "<script>alert('SeoKelime Eklenememiştir..!!')</script>";
								
								}
							}
							else {
								echo "a";
							}
						
				?>
                <!-- form start -->
 

			          <!-- Main content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Form Elements
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                  <div class="box-body">
				<?php 
				
				$sql = $db->prepare("Select * from seokelimeler where seoId='$id'" );
					$sql->execute();
					while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
       ?> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">seoId</label>
                      <input type="text" class="form-control" name="seoId" id="seoId" placeholder="<?php echo $row['seoId'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">seo</label>
                      <input type="text" class="form-control" name="seo" id="seo" placeholder="<?php echo $row['seo'] ?>">
                    </div>
					
                  </div><!-- /.box-body -->
  <?php
							}
				?>
                  <div class="box-footer">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Kayıt</button>
                  </div>
                </form>

          

                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->