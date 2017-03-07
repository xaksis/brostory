<!doctype html>
<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=charset=ISO-8859-1" />
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	</head>
	
	<body>
		<style type="text/css">
			#main_menu {
			    position: absolute;
			    left: 0;
			    top: 25%;
			    float: left;
			    width: 100px;
			    height: 200px;
			    background-color: #eeeeee;
			    opacity: 1;
			    z-index: 1000;
			    -moz-box-shadow: 2px 2px 3px #777;
			    -webkit-box-shadow: 2px 2px 3px #777;
			    box-shadow: 2px 2px 3px #777;
			    -webkit-border-top-right-radius: 10px;
			    -webkit-border-bottom-right-radius: 10px;
			    -moz-border-radius-topright: 10px;
			    -moz-border-radius-bottomright: 10px;
			    border-top-right-radius: 10px;
			    border-bottom-right-radius: 10px;
			}

			#main_menu ul li{
			    display: block;
			    height: 30px;
			    font-family: 'PT Serif', Arial, sans-serif;
			    margin-top: 30px;
			    margin-left:0px;
			    font-weight: bold;
			}

			#main_menu ul li a{
			    display: block;
			    height: 30px;
			    padding-top: 10px;
			    background-color: none;
			    color: #444444;
			    background: rgba(255,255,255,0.0);
			    text-decoration: none;
			    padding: 0 0.1em;
			    text-shadow: -1px -1px 2px rgba(100,100,100,0.9);
			    border-radius: 0.2em;
			    font-family: 'PT Sans', sans-serif;
			    font-size: 16px;
			    -webkit-transition: 0.5s;
			    -moz-transition:    0.5s;
			    -ms-transition:     0.5s;
			    -o-transition:      0.5s;
			    transition:         0.5s;
			}

			#main_menu ul li a:hover{
			    color: #cc3300;
			}

		</style>
		<div id="main_menu">
			<ul>
				<li> <a class="active" href="story.php">Story</a> </li>
				<li> <a href="gallery.php">Gallery</a> </li>
				<li> <a href="rsvp.php">RSVP</a> </li>
			</ul>
		</div>
		<div class="container-fluid" style="padding-top: 30px; margin-left: 130px;">
			<div class="row-fluid">
				<div class="span6 well">
					<form class="form-horizontal" id="swedenRsvp">
						<legend>RSVP for Sweden Wedding </legend>
						<div class="row-fluid" style="margin-bottom: 10px;">
							<div class="span4">
								<div class="thumbnail" style="background-color: white;"><img src="images/churchpic.jpg"></div>
							</div>
							<div class="span8" style="padding-top: 10px;">
								<p><strong>Saturday, July 6, 2013<br/>
								At four o’clock in the afternoon</strong></br>

								Undersåkers kyrka</br>

								SLAGSÅN 550, Järpen, Sweden</br><br>

								<strong>Reception to follow</strong><br>
								Hedmans Fjällby HÅLLAND 385<br>
								Undersåker, Sweden</p>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="swedenName_entry">Name</label>
							<div class="controls">
								<input type="text" id="swedenName_entry" placeholder="Your Name">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="swedenGuest_sel">No. Of Guests</label>
							<div class="controls">
								<select id="swedenGuest_sel">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox" id="chkIndia_chkbx"> RSVP for India with the same info
								</label>
								<button type="submit" id="submitSweden_btn" class="btn">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="span6 well">
					<form class="form-horizontal" id="indiaRsvp">
						<legend>RSVP for India Wedding</legend>
						<div class="row-fluid" style="margin-bottom: 10px;">
							<div class="span4">
								<div class="thumbnail" style="background-color: white; width: 100%px; height: 200px;"></div>
							</div>
							<div class="span8" style="padding-top: 10px;">
								<p><strong>Tuesday, November 19, 2013<br/></strong></br>
								Details to be determined...</p>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="indiaName_entry">Name</label>
							<div class="controls">
								<input type="text" id="indiaName_entry" placeholder="Your Name">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="indiaGuest_sel">No. Of Guests</label>
							<div class="controls">
								<select id="indiaGuest_sel">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<label class="checkbox">
									<input type="checkbox" id="chkSweden_chkbx"> RSVP for Sweden with the same info
								</label>
								<button type="submit" id="submitIndia_btn" class="btn">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
<script type="text/javascript">
	
</script>
</html>