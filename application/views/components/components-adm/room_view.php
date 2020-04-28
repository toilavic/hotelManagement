<?php
      $arrBabel = [];
      $arrDesc = [];
      foreach ($data as $value) {
            array_push($arrBabel, $value->room_type);
            array_push($arrDesc, $value->desc);
      }
?>
<div class="container">
	<div class="row">
		 <div class="row">
      			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-12">
      					<div class="thumbnail">
      						<img src="https://r-cf.bstatic.com/images/hotel/max1024x768/148/148362842.jpg" style="width: 500px; height: 350px;">
      						<div class="caption">
      							<h3>
                                                      <?php echo $arrBabel['0'] ?>
                                                      
                                                </h3>
      							<p style="color: black; font-style: italic;"><?php echo $arrDesc['0'] ?></p>
      						</div>
      					</div>
      				</div>
      			</div>
      			
      			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-12">
      					<div class="thumbnail" style="margin-left: 30px;">
      						<img src="https://cdn.osxdaily.com/wp-content/uploads/2016/08/audio-engineer-mac-pro-setup-3.jpg" style="width: 500px; height: 350px;">
      						<div class="caption">
                                                <h3>
                                                      <?php echo $arrBabel['1'] ?>
                                                      
                                                </h3>
                                                <p style="color: black; font-style: italic;"><?php echo $arrDesc['1'] ?></p>
                                          </div>

      					</div>
      				</div>
      			</div>

      			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-12">
      					<div class="thumbnail" >
      						<img src="https://saraguesthouseaxum.com/wp-content/uploads/2019/01/King-Sized-Double-Bedroom-Two-950x600.jpg" style="width: 500px; height: 350px;">
      						<div class="caption">
                                                <h3>
                                                      <?php echo $arrBabel['2'] ?>
                                                      
                                                </h3>
                                                <p style="color: black; font-style: italic;"><?php echo $arrDesc['2'] ?></p>
                                          </div>
      					</div>
      				</div>
      			</div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12">
                                    <div class="thumbnail" style="margin-left: 30px;">
                                          <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/decaumont1-1560194794.jpg" style="width: 500px; height: 350px;">
                                          <div class="caption">
                                                <h3>
                                                      <?php echo $arrBabel['3'] ?>
                                                      
                                                </h3>
                                                <p style="color: black; font-style: italic;"><?php echo $arrDesc['3'] ?></p>
                                          </div>
                                    </div>
                              </div>
                        </div>
        </div>
</div>

<script>
      $(document).on('click', 'edit_data' function() {
            var roomID = $(this).attr("id")
      });
</script>