<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>E-RAFFLE</title>
	<?php echo link_tag('resources/css/bootstrap.min.css') ?>


	<style>
		/* latin */
		@font-face {
		  font-family: 'Luckiest Guy';
		  font-style: normal;
		  font-weight: 400;
		  font-display: swap;
		  src: local('Luckiest Guy Regular'), local('LuckiestGuy-Regular'), url('<?php echo base_url('resources/_gP_1RrxsjcxVyin9l9n_j2hTd52_2.woff2') ?>') format('woff2');
		  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		
		html *
		{
		   /*font-size: 1em !important;*/
		   /*color: #000 !important;*/
		   font-family: 'Luckiest Guy', cursive, !important;
		}


		.animate {
		  /* Start the shake animation and make the animation last for 0.5 seconds */
		  animation: shake 0.5s; 

		  /* When the animation is finished, start again */
		  animation-iteration-count: infinite; 
		}

		@keyframes shake {
		  0% { transform: translate(1px, 1px) rotate(0deg); }
		  10% { transform: translate(-1px, -2px) rotate(-1deg); }
		  20% { transform: translate(-3px, 0px) rotate(1deg); }
		  30% { transform: translate(3px, 2px) rotate(0deg); }
		  40% { transform: translate(1px, -1px) rotate(1deg); }
		  50% { transform: translate(-1px, 2px) rotate(-1deg); }
		  60% { transform: translate(-3px, 1px) rotate(0deg); }
		  70% { transform: translate(3px, 1px) rotate(-1deg); }
		  80% { transform: translate(-1px, -1px) rotate(1deg); }
		  90% { transform: translate(1px, 2px) rotate(0deg); }
		  100% { transform: translate(1px, -2px) rotate(-1deg); }
		}

		.dot {
		  height: 50px;
		  width: 50px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		}

		body, html {
		  height: 100%;
		  margin: 0;
		}

		.bg {
		  /* The image used */
		  background: url('<?php echo base_url('resources/AMWIRE XMAS PARTY BACKGROUND-01.jpg') ?>');

		  /* Full height */
		  height: 100%; 

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}

		.bg2 {
		  /* The image used */
		  background: url('<?php echo base_url('resources/awc_bg_2.png') ?>');

		  /* Full height */
		  height: 100%; 

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}

		.logo {
			width: 50%
		}
	</style>
</head>
<body class="bg2">
	<div class="container-fluid" style="">
		<div class="row justify-content-center">
			<div class="col-4" align="center">
				<img src="<?php echo base_url('resources/ezgif.com-webp-to-png.png') ?>" class="img-fluid logo" alt="Responsive image" id="img-shake">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="card bg-light" style="margin-top: 20%">
				  <div class="card-header">Results</div>
				    <div class="card-body" id="result1">
				    	<ul id="o">
				    		
				    	</ul>
				    </div>
				</div>
			</div>
			<div class="col-6">
				<div class="text-center">
					<!-- <img src="" class="img-fluid" alt="Image Here" id="bg-img"> -->
					<div id="draw-result" style="margin-top: 10%">
						<h1 class="display-4" id="result" style="font-family: 'Luckiest Guy', cursive;">START</h1>
						<div class="ha" style="margin-top: 10%">
						<span id="ball_count" style="font-family: 'Luckiest Guy', cursive;"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card bg-light" style="margin-top: 20%">
				  <div class="card-header">Options</div>
				    <div class="card-body">
				      <h5 class="card-title">Configurations</h5>
				      <p class="card-text">
				      	<button type="button" class="btn btn-info btn-sm btn-block" onclick="location.reload();">New Session</button><!-- &nbsp;Session No. <span id="session"><?php echo time() ?></span> -->
				      </p>
				      <p class="card-text">
				      	<button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#exampleModal">Show Results</button>
				      </p>
				      <p class="card-text">
				      	<button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#exampleModal2">Upload Excel File</button>
				      </p>
				      <hr>
				      <h5 class="card-title">Draw</h5>
				      <p class="card-text">
				      	<button type="button" id="draw" class="btn btn-success btn-sm btn-block">START</button>
				      </p>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">E-Raffle Modal</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="card bg-light">
	          <div class="card-header">Results</div>
	            <div class="card-body" id="modal1">
	              <ul class="card-text" id="o"></ul>
	            </div>
	        </div>
	        <br>
	        <div class="card bg-light">
	          <div class="card-header">Uncalled Number</div>
	            <div class="card-body" id="modal2">
	              <ul id="o"></ul>
	            </div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Upload Excel File</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php echo form_open_multipart('main/upload_excel', array('id' => 'form-upload'));?>
	        	<div class="form-group">
	        		<label for="file">Select Excel File To Upload</label>
	        		<input type="file" name="userfile" id="file" class="form-control" />
	        	</div>
	        	<div class="alert alert-info" id="upload-msg" style="display: none;"></div>
	        	<input type="submit" value="Upload"  class="btn btn-primary" />
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="<?php echo base_url('resources/js/jquery-3.4.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/js/popper.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('resources/js/bootstrap.min.js') ?>"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {

			max = 75;
			var roulette;
			bingo = <?php echo json_encode($employee) ?>;
			time_rand = [2000, 3000, 4000, 5000, 6000, 7000, 8000];		

			// write_result_modal_3();

			status = 0;
			_number = 0;
			session = 'REIN';			

			$('button#draw').click(function() {
				if (bingo.length == 0) {
					$("#result").text('Finished');
					return false;
				}

				if (status == 0 && $('button#draw').text() == 'START') {
					status = 1;
					$('#img-shake').addClass('animate');
					$('#ball_count').show();

					$(this).text('STOP');
					$('button#draw').removeClass('btn-success').addClass('btn-danger');	

					roulette = setInterval(function(){							
						random = Math.floor(Math.random() * Math.floor(bingo.length));
						number = bingo[random];
						_number = random;
						$("#result").html(number + '&nbsp;<span id="res"></span>');
						$('#res').hide();
					}, 100);
					_time = time_rand[Math.floor(Math.random() * Math.floor(time_rand.length))]
					stop_raffle(_time, roulette);
				}
			});

			$("#form-upload").on('submit',(function(e) {
			 	e.preventDefault();

				$.ajax({	
			        url: '<?php echo site_url('main/upload_excel') ?>',
			  		type: "POST",
			  		data:  new FormData(this),
			  		contentType: false,
			        cache: false,
			  		processData:false,
			  		dataType: 'json',
			  		beforeSend: function() {
			  			$('#upload-msg').empty().show();
			  			$('#upload-msg').text('Uploading and processing data...');
			  		}		  	
			  	}).then(function(data) {
			  		if (data.status) {
			  			$('#upload-msg').html('<strong>Success!</strong> Uploaded');

			  			return $.get('<?php echo site_url('main/get_all_emp') ?>', null, null, 'json');
			  		} else {
			  			$('#upload-msg').html(data.error);
			  		}
			  		console.log(data);
			  	}).done(function(data) {
			  		console.log(data);
			  		bingo = data;
			  		write_result_modal_3();
			  	}).fail(function(data) {
			  		console.log(data);
			  	})
			}));

			$('#exampleModal').on('show.bs.modal', function(e) {
				$.get('<?php echo site_url('main/get_all_emp_true') ?>', null, null, 'json')
				.then(function(data) {
					$('#modal1 ul#o').empty();
					$.each(data, function(index, elem) {
						$('#modal1 ul#o').append('<li>' + elem + '</li>');
					});

					return $.get('<?php echo site_url('main/get_all_emp') ?>', null, null, 'json');
				}).then(function(data) {
					write_result_modal_3(data);
				}).fail(function() {
					alert('Error in propagating result set');
				})

			});

			$('#exampleModal2').on('hidden.bs.modal', function(e) {
				$('#upload-msg').hide();
			});
		});

		function stop_raffle(time, roulette) {
			console.log(time);
			$('button#draw').prop('disabled', true);
			$('button#draw').removeClass('btn-danger').addClass('btn-success');
			$('button#draw').text('START');

			setTimeout(function(){
				status = 0;
				number = bingo[_number];
				bingo.splice(_number, 1);
				clearInterval(roulette);
				set_result(number);	
				$('#img-shake').removeClass('animate');
			}, time);
		}

		function set_result(number1) {
			$('button#draw').prop('disabled', false);
			
			$.post('<?php echo site_url('main/update_emp_status') ?>', {number: number1}, null, 'json')
			.done(function(data) {
				$('#res').fadeIn(function() {
					write_result(number1);
					// write_result_modal(number1);
					// write_result_modal_3();
				});
			})
			.fail(function() {
				alert('Error Updating Employee Status');
			})			
		}

		function write_result(number1) {
			$('#result1 ul#o').append('<li>' + number1 + '</li>');
		}

		function write_result_modal(number1) {
			$('#modal1 ul#o').append('<li>' + number1 + '</li>');
		}

		function write_result_modal_3(data) {
			$('#modal2 ul').empty();

			$.each(data, function(index, elem) {
				$('#modal2 ul#o').append('<li>' + elem + '</li>');
			});
		}	
	</script>
</body>
</html>