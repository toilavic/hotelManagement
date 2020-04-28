
		<div class="container">
			<br />
			<br />
			<h2 align="center"><p style="font-size: xx-large; color: Black;"><b>Requests to admin</b></p></h2><br />

			<form action="mRequest" method="post">
				<div class="form-group row">
				    <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: bold;">Staff name :</label>
				    <div class="col-sm-10">
				      	<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $this->session->userdata('userSession'); ?>" disabled>
				    </div>
				    <label for="staticEmail" class="col-sm-2 col-form-label" style="font-weight: bold;">ID :</label>
				    <div class="col-sm-10">
				      	<input type="text" readonly class="form-control-plaintext" id="staticEmail" name ="idStaff" value="<?= $this->session->userdata('id'); ?>" disabled>
				    </div>
			  	</div>

			  	<div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-weight: bold;">Stuffs :</label>
				    <div class="col-sm-10">
				      	<input type="text" class="form-control" name ="stuffs" placeholder="What things you need ?">
				    </div>
			  	</div>

			  	<div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-weight: bold;">Date :</label>
				    <div class="col-sm-10">
				      	<input type="date" class="form-control" name="dayRequest">
				    </div>
			  	</div>
			 
				
			  	<div class="form-group row">
				    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-weight: bold;">Description :</label>
				    <div class="col-sm-10">
				      	<input type="text" class="form-control" name ="desc" placeholder="Description">
				    </div>
			  	</div>
			  	<br/>
			  	<button type="submit" class="btn btn-primary" style="margin-left: 40%">Send to admin</button>
			</form>
		</div>



