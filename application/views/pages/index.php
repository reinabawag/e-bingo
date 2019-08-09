<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>E-BINGO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style>
		@import url('https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap');
		
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

		body {
			background: url('<?php echo base_url('resources/awc_bg_2.png') ?>');
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="">
		<div class="row justify-content-center">
			<div class="col-4">
				<img src="<?php echo base_url('resources/listing_bingo_header.jpg') ?>" class="img-fluid" alt="Responsive image" id="img-shake">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="card bg-light">
				  <div class="card-header">Results</div>
				    <div class="card-body" id="result1">
				      <h5 class="card-title"><strong>B</strong></h5>
				      <p class="card-text" id="b"></p>
				      <h5 class="card-title"><strong>I</strong></h5>
				      <p class="card-text" id="i"></p>
				      <h5 class="card-title"><strong>N</strong></h5>
				      <p class="card-text" id="n"></p>
				      <h5 class="card-title"><strong>G</strong></h5>
				      <p class="card-text" id="g"></p>
				      <h5 class="card-title"><strong>O</strong></h5>
				      <p class="card-text" id="o"></p>
				    </div>
				</div>
			</div>
			<div class="col-6">
				<div class="text-center">
					<img src="<?php echo base_url('resources/48491141-bingo-or-lottery-game-background-with-balls-and-cards-.jpg') ?>" class="img-fluid" alt="Responsive image" id="bg-img">
					<div id="draw-result" style="margin-top: -63%">
						<h1 class="display-2" id="result" style="font-family: 'Luckiest Guy', cursive;">START</h1>
						<div class="ha" style="margin-top: 10%">
						<span id="ball_count" style="font-family: 'Luckiest Guy', cursive;"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card bg-light">
				  <div class="card-header">Options</div>
				    <div class="card-body">
				      <h5 class="card-title">Configurations</h5>
				      <p class="card-text">
				      	<button type="button" class="btn btn-info btn-sm btn-block" onclick="location.reload();">New Session</button>&nbsp;Session No. <span id="session"><?php echo time() ?></span>
				      </p>
				      <p class="card-text">
				      	<button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#exampleModal">Show Results</button>
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
	        <h5 class="modal-title" id="exampleModalLabel">Bingo Modal</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="card bg-light">
	          <div class="card-header">Results</div>
	            <div class="card-body" id="modal1">
	              <h5 class="card-title"><strong>B</strong></h5>
	              <p class="card-text" id="b"></p>
	              <h5 class="card-title"><strong>I</strong></h5>
	              <p class="card-text" id="i"></p>
	              <h5 class="card-title"><strong>N</strong></h5>
	              <p class="card-text" id="n"></p>
	              <h5 class="card-title"><strong>G</strong></h5>
	              <p class="card-text" id="g"></p>
	              <h5 class="card-title"><strong>O</strong></h5>
	              <p class="card-text" id="o"></p>
	            </div>
	        </div>
	        <br>
	        <div class="card bg-light">
	          <div class="card-header">Uncalled Number</div>
	            <div class="card-body" id="modal2">
	              <h5 class="card-title"><strong>B</strong></h5>
	              <p class="card-text" id="b"></p>
	              <h5 class="card-title"><strong>I</strong></h5>
	              <p class="card-text" id="i"></p>
	              <h5 class="card-title"><strong>N</strong></h5>
	              <p class="card-text" id="n"></p>
	              <h5 class="card-title"><strong>G</strong></h5>
	              <p class="card-text" id="g"></p>
	              <h5 class="card-title"><strong>O</strong></h5>
	              <p class="card-text" id="o"></p>
	            </div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			max = 75;
			bingo = new Array();
			for(i = 1; i <= max; i++) {
				bingo.push(i);
			}			

			write_result_modal_3();

			status = 0;
			_number = 0;
			session = $('#session').text();

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

						if (number <= 15) {
							letter = 'B';
						} else if ((number >15) && (number <=30)) {
							letter = 'I';
						} else if ((number >30) && (number <=45)) {
							letter = 'N';
						} else if ((number >45) && (number <=60)) {
							letter = 'G'
						} else {
							letter = 'O';
						}
						_number = random;
						$("#result").html(letter + '&nbsp;<span id="res"></span>');
						$('#res').hide();
					}, 50);

				} else {					
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
					}, 2000);

					setTimeout(function() { 
						$('#res').fadeIn();
						$('button#draw').prop('disabled', false);
					}, 4000);
				}
			})
		});

		function set_result(number1) {
			$.ajax({
				type: 'POST',
			   	url: "<?php echo site_url('main/insert_result') ?>",
			   	data: {number: number1, session: session},
			   	dataType: 'json'
			}).done(function(data) {
				$('#res').text(data[2]);
				$('#ball_count').text('Remaining Draws ' + bingo.length);
				write_result(data[2]);
				write_result_modal(data[2]);
				write_result_modal_3();

				if (bingo.length == 0) {
					$('#ball_count').text('');
				}
			}).fail(function() {
				alert('Error in database connection');
			});
		}

		function write_result(number1) {
			if (number1 <= 15) {
				$('#result1 p#b').append(number1 + ' ');
			} else if ((number1 >15) && (number1 <=30)) {
				$('#result1 p#i').append(number1 + ' ');
			} else if ((number1 >30) && (number1 <=45)) {
				$('#result1 p#n').append(number1 + ' ');
			} else if ((number1 >45) && (number1 <=60)) {
				$('#result1 p#g').append(number1 + ' ');
			} else {
				$('#result1 p#o').append(number1 + ' ');
			}
		};

		function write_result_modal(number1) {
			if (number1 <= 15) {
				$('#modal1 p#b').append(number1 + ' ');
			} else if ((number1 >15) && (number1 <=30)) {
				$('#modal1 p#i').append(number1 + ' ');
			} else if ((number1 >30) && (number1 <=45)) {
				$('#modal1 p#n').append(number1 + ' ');
			} else if ((number1 >45) && (number1 <=60)) {
				$('#modal1 p#g').append(number1 + ' ');
			} else {
				$('#modal1 p#o').append(number1 + ' ');
			}
		};

		function write_result_modal_3() {
			$('#modal2 p').empty();

			$.each(bingo, function(index, elem) {
				if (elem <= 15) {
					$('#modal2 p#b').append(elem + ' ');
				} else if ((elem >15) && (elem <=30)) {
					$('#modal2 p#i').append(elem + ' ');
				} else if ((elem >30) && (elem <=45)) {
					$('#modal2 p#n').append(elem + ' ');
				} else if ((elem >45) && (elem <=60)) {
					$('#modal2 p#g').append(elem + ' ');
				} else {
					$('#modal2 p#o').append(elem + ' ');
				}
			});
		};
	</script>
</body>
</html>