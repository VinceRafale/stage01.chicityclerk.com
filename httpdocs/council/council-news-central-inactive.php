<?php
include '../media/inc/clerkDataCon.inc';
	
	$query = sprintf("SELECT * FROM aldermanicData");
	$ald_result = mysql_query($query);

?>
<!DOCTYPE html>
<html>
<head>
<title>Council News Central: Watch City Council Meetings Live | Office of the City Clerk, City of Chicago</title>
<meta name="viewport" content="width=1080" />
<link rel="SHORTCUT ICON" href="/wp-content/themes/occwp/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:400,800" />
<link rel="stylesheet" type="text/css" href="/media/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/council/css/cnc.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/media/js/bootstrap.min.js"></script>
</head>
<body id="cnc">
<div id="wrap">
	<div class="navbar navbar-inverse navbar-static-top">
	    <div class="navbar-inner">
	    	<div class="container">
	    		<div class="span12">
	    			<ul class="nav">
	    				<li><a href="/index.php">Office of the City Clerk: Home</a></li>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="occ-banner">
					<img src="/wp-content/themes/occwp/images/header.png" />
				</div>
				<div id="cnc-banner">
					<p class="banner-top">Welcome to...</p>
					<p class="banner-title">Council News Central</p>
					<p class="banner-bottom">Video from the October 10<sup>th</sup> meeting is available in the <a href="http://goo.gl/w9NPm" target="_blank">Legislative Information Center</a>.</p>
				</div>
				<div id="quick-links">
					<table style="width: 100%;">
						<tbody>
							<tr>
								<td style="width: 20%; padding: 5px; text-align: center;"><span class="os">Helpful Links:</span></td>
								<td style="width: 20%; padding: 5px;"><a class="btn btn-danger btn-block btn-large" href="http://goo.gl/w9NPm" target="_blank">Meeting Agenda</a></td>
								<td style="width: 20%; padding: 5px;"><a class="btn btn-danger btn-block btn-large" href="/legislation-records/journals-reports/city-budgets/" target="_blank">2013 City Budget</a></td>
								<td style="width: 20%; padding: 5px;"><a class="btn btn-danger btn-block btn-large" href="/council/seating-chart.php" target="_blank">Council Seating Chart</a></td>
								<td style="width: 20%; padding: 5px;"><a class="btn btn-danger btn-block btn-large" href="/legislation-records/about-chicago-government/about-city-council-meetings/" target="_blank">Rules of Order</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="right-column">
					<div id="page-content">
						<table class="table table-bordered" id="cnc-table">
							<thead>
								<tr>
									<td class="first">Meeting Video and Captions</td>
									<td class="tweet">Community Tweets</td>
									<td class="last">Connect with City Council</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div id="cnc-video">
											<!-- Begin Video PLACEHOLDER Code -->
											<div id="cnc-placeholder">
												<a href="http://goo.gl/w9NPm" target="_blank"><span class="link">Video for the October 10<sup>th</sup> meeting is available in the <span class="red">Legislative Information Center</span>.</span></a>
											</div>
											<!-- End Video PLACEHOLDER Code, Begin Caption iFrame -->
											<a class="btn btn-info btn-large btn-silverlight" href="http://www.microsoft.com/getsilverlight" target="_blank">Download Microsoft Silverlight</a>
											<!-- End Caption iFrame -->
										</div>
									</td>
									<td class="timeline">
										<a class="twitter-timeline" href="https://twitter.com/search?q=%23ChiCouncil" data-widget-id="261190124929417216">Tweets about "#ChiCouncil"</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									</td>
									<td>
										<div id="cnc-connect-wrap">
		        							<table id="cnc-connect">
			        							<tbody>
			        								<tr>
									 	  				<td><strong>Rahm Emanuel</strong></td>
									 	  				<td>Mayor</td>
									 	  				<td><a href="https://www.facebook.com/ChicagoMayorsOffice" target="_blank"><img src="img/facebook-24.png" /></a></td>
									 	  				<td></td>
									 	  			</tr>
							                        <tr class="table-row-odd">
							                        	<td colspan="4"><a href="http://twitter.com/ChicagosMayor" target="_blank"><img src="img/twitter-24.png" /></a>&nbsp;<a href="http://twitter.com/ChicagosMayor" target="_blank">@ChicagosMayor</a></td>
							                        </tr>
							                        <tr>
							                        	<td><strong>Susana A. Mendoza</strong></td>
							                            <td>City Clerk</td>
							                            <td><a href="https://www.facebook.com/chicityclerk" target="_blank"><img src="img/facebook-24.png" /></a></td>
							                            <td></td>
							                        </tr>
							                        <tr class="table-row-odd">
							                        	<td colspan="4"><a href="http://twitter.com/ChiCityClerk" target="_blank"><img src="img/twitter-24.png" /></a>&nbsp;<a href="http://twitter.com/ChiCityClerk" target="_blank">@ChiCityClerk</a></td>
							                        </tr>
	
			        								<?php 
				        								
				        								$ald_query 		= 	sprintf("SELECT * FROM aldermanicData");
				        								$ald_result		=	mysql_query($ald_query);
				        								$ald_num		=	mysql_num_rows($ald_result);
				        								$ald_i			=	0;
				        								
				        								while ($ald_i < 50) :
															$ald_ward			=	mysql_result($ald_result, $ald_i, 'ward');
					        								$ald_name			=	mysql_result($ald_result, $ald_i, 'ald_name');
															$ald_phone			=	mysql_result($ald_result, $ald_i, 'ald_phone');
															$ald_email			=	mysql_result($ald_result, $ald_i, 'ald_email');
															$ald_website		=	mysql_result($ald_result, $ald_i, 'ald_website');
															$ald_twitter		=	mysql_result($ald_result, $ald_i, 'ald_twitter');
															$ald_twitter_url 	=	"http://twitter.com/" . substr($ald_twitter, 1);
															$ald_facebook		=	mysql_result($ald_result, $ald_i, 'ald_facebook');
	
													?>
													
													<tr <?php if (is_null($ald_twitter)) { ?>class="table-row-odd"<?php } ?>>
														<td><strong><?php echo $ald_name;?></strong></td>
														<td>Ward <?php echo $ald_ward;?></td>
														<td><?php if (!is_null($ald_facebook)) { ?><a href="<?php echo $ald_facebook;?>" target="_blank"><img src="img/facebook-24.png" /></a><?php } ?></td>
														<td></td>
													</tr>
													<?php 
														if (!is_null($ald_twitter)) : 
													?>
													<tr class="table-row-odd">
														<td colspan="4"><a href="<?php echo $ald_twitter_url;?>" target="_blank"><img src="img/twitter-24.png" /></a>&nbsp;<a href="<?php echo $ald_twitter_url;?>" target="_blank"><?php echo $ald_twitter;?></a></td>
													</tr>
													<?php
													
														endif;
														$ald_i++; 
													endwhile;
				        								
			        								?>
							                     </tbody>
				                    		</table>
	        							</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>Office of the City Clerk | City of Chicago | Susana A. Mendoza, City Clerk</p>
</div>
</body>
</html>