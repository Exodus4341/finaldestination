

		<!-- <div class="viewport">
			
					<div class="">
						<div style="color:#0DC8B0;text-shadow: 0px 1px 0px rgba(255,255,255,.75);" class="Overlay"><h1 style="width:270px;">Welcome!</h1>
							<p style="color:gray; width:480px;">This panel has been generated by the TEAM CHULUKOY.</p> -->
							<!-- <p><a class="btn btn-primary btn-large" href="http://docs.fuelphp.com">Read the Docs</a></p> -->
						<!-- </div>
						<div id="map1"></div>
					</div>
		</div> -->
	
		<!-- Start WOWSlider.com BODY section -->

<br>
<div class="viewport">
	<div id="wowslider-container1" style="z-index:-10">
		<div class="ws_images">
			<ul>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/coast.jpg" alt="Coast: slider jquery" title="Coast" id="wows1_0"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/christtheredeemer.jpg" alt="Christ the Redeemer: slider jquery free" title="Christ the Redeemer" id="wows1_1"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/nightlights.jpg" alt="Night lights: slider jquery plugin" title="Night lights" id="wows1_2"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/panorama.jpg" alt="Panorama: slider jquery example" title="Panorama" id="wows1_3"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/sunset.jpg" alt="Sunset: slider jquery mobile" title="Sunset" id="wows1_4"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/view.jpg" alt="View of the city: slider maker" title="View of the city" id="wows1_5"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/waterscape.jpg" alt="Waterscape: slider bar" title="Waterscape" id="wows1_6"/>Rio de Janeiro, Brazil</li>
				<li><img src="<?php echo Config::get('base_url');?>assets/img/1/night.jpg" alt="City ??at night: slider images" title="City ??at night" id="wows1_7"/>Rio de Janeiro, Brazil</li>
			</ul>
		</div>
	</div>
</div>


<script>
function ws_basic_linear(c,a,b){var d=jQuery;var e=d("<div></div>").css({position:"absolute",display:"none","z-index":2,width:"200%",height:"100%"}).appendTo(b);this.go=function(f,j){e.stop(1,1);var g=(!!((f-j+1)%a.length)^c.revers?"left":"right");d(a[j]).clone().css({position:"absolute",left:"auto",right:"auto",top:0,width:"50%"}).appendTo(e).css(g,0);d(a[f]).clone().css({position:"absolute",left:"auto",right:"auto",top:0,width:"50%"}).appendTo(e).css(g,"50%").show();e.css({left:"auto",right:"auto",top:0}).css(g,0).show();var h=b.find("ul").hide();var i={};i[g]="-100%";e.animate(i,c.duration,"easeInOutExpo",function(){h.css({left:-f+"00%"}).show();d(this).hide().html("")});return f}};
wowReInitor(jQuery("#wowslider-container1"),{effect:"kenburns",prev:"",next:"",duration:20*200,delay:20*200,width:960,height:360,autoPlay:true,stopOnHover:false,loop:false,bullets:0,caption:true,captionEffect:"move",controls:true,onBeforeStep:0,images:0});

</script>



<div class="row" style="margin-top:-50px">
	<div class="span4">
		<?php echo Html::img('assets/img/frame-stripe.png', array('class' => 'frame-stripe')) ?>
	</div>
	<div class="span4">
		<?php echo Html::img('assets/img/frame-stripe.png', array('class' => 'frame-stripe')) ?>
	</div>
	<div class="span4">
		<?php echo Html::img('assets/img/frame-stripe.png', array('class' => 'frame-stripe')) ?>
	</div>
</div>

<div class="row">
	<div class="span4" id="bck">
		<div style="padding:12px">
		<h4>Jeepney Routes Updates</h4>
		
		<?php if ($jeepneyroutes): ?>

				<table class="table table-striped table-hover " >
					
					<tbody>
				<?php foreach ($jeepneyroutes as $jeepneyroute): ?>		<tr>

							<td><?php echo $jeepneyroute->routename; ?></td>
							<td><?php echo $jeepneyroute->size." "."KB"; ?></td>
							
							<td><?php echo $jeepneyroute->created_at; ?></td>
							
						</tr>
				<?php endforeach; ?>	</tbody>
					
				</table>

		<?php endif; ?>

		</div>
		
	</div>

	<div class="span4" id="bck">
		<div style="padding:12px">
		<h4>Tricycle Routes Updates</h4>
		<?php if ($tricycleroutes): ?>

				<table class="table table-striped table-hover" >
					
					<tbody>
				<?php foreach ($tricycleroutes as $tricycleroute): ?>		<tr>

							<td><?php echo $tricycleroute->routename; ?></td>
							<td><?php echo $tricycleroute->size." "."KB"; ?></td>
							
							<td><?php echo $tricycleroute->created_at; ?></td>
							
						</tr>
				<?php endforeach; ?>	</tbody>
					
				</table>

		<?php endif; ?>
		</div>
		
	</div>

	<div class="span4" id="bck">
		<div style="padding:12px">
		<h4>Landmark Updates</h4>
		<?php if ($landmarks): ?>

				<table class="table table-striped table-hover" >
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th>Ratings</th>
						</tr>	
					</thead>
					<tbody>
				<?php foreach ($landmarks as $landmark): ?>		<tr>

							<td><?php echo Html::anchor('landmarks/view/'.$landmark->slug, Html::img('uploads/landmarks/'.$landmark->placename.'/icon/'.$landmark->fileurl,array('class' => 'image')));?></td>
							<td><?php echo $landmark->placename; ?></td>

							<?php foreach ($landmark->voteitems as $voteitem): ?>
							<td><?php echo $voteitem->votes/100 ."%"; ?></td>
							<?php endforeach; ?>
							
						</tr>
				<?php endforeach; ?>	</tbody>
					
				</table>

		<?php endif; ?>
		</div>
		
	</div>
</div>



<script>
		var map = L.map('map1').setView([7.10000, 120.35725], 8);

		L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 18,
		}).addTo(map);


		L.marker([7.06819, 125.55725]).addTo(map)
			.bindPopup("<b>Davao City</b><br />Welcome to Davao City!").openPopup();

		L.circle([7.06819, 125.55725], 500, {
			color: 'red',
			fillColor: '#f03',
			fillOpacity: 0.5
		}).addTo(map).bindPopup("I am a circle.");

		L.polygon([
			[51.509, -0.08],
			[51.503, -0.06],
			[51.51, -0.047]
		]).addTo(map).bindPopup("I am a polygon.");


		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(map);
		}

		map.on('click', onMapClick);

	</script>




