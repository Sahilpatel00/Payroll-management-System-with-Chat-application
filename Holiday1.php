<?php
	include_once 'header_h.php';
?>
<?php
	include_once 'roles.php';
?>
<?php


include_once 'config/config.php';



  $id=$_GET['id'];

$q="SELECT * from holidays where Holiday_id=".$id.";";
 $status = mysqli_query($connection_obj,$q);
       
            
             
             if($status)
        {
            
              $data = mysqli_fetch_assoc($status);
            }
            
       

?>

<form action="holiday_update.php" method="post" >
 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>HOLIDAYS</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="body">

                                     <input type="hidden" name="holidayid" class="form-control" value="<?php echo $_GET['id']; ?>" />
      
                            

                                <h2 class="card-inside-title">Holiday Name:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="holidayname" class="form-control" value="<?php echo $data['Holiday_name']; ?>"	/>
                                        </div>
                                    </div>

                                      <h2 class="card-inside-title">Holiday Description:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                    <textarea rows="4" class="form-control no-resize" name="holidaydescription"><?php echo $data['Holiday_description']; ?></textarea>           </div>
                                    </div>
                                     <h2 class="card-inside-title">Holiday Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="holidaydate" placeholder="Ex: 30/07/2016" value="<?php echo $data['Holiday_date']; ?>" >                                       
                                         </div>
                                    </div>




                                    
                              
                                
                                <h2 class="card-inside-title">Created Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="createddate" placeholder="Ex: 30/07/2016" value="<?php echo $data['Created_date']; ?>">                                       
                                         </div>
                                    </div>

                                     <h2 class="card-inside-title">Modified Date:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="modifieddate" placeholder="Ex: 30/07/2016" value="<?php echo $data['Modified_date']; ?>">                                       
                                         </div>
                                    </div>

                                    <h2 class="card-inside-title">Status:</h2>
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            
                                          <input type="text" name="status" class="form-control" value="<?php echo $data['Status']; ?>" />
                                       
                                             </div>
                                    </div>

                                 
                                    </div>
                              </div>
                            </div>
 						 </div>
                       </div>
                        <center>
                         <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SUBMIT"  >
                      
                      
                       </center>
                       </section>


</form>

<?php
	include_once 'footer_h.php';
?>

