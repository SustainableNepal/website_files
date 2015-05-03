<?php include("header.php") ?>
<?php include("multipage_header.php") ?>
<div class="project-section">
	<div class="fixed-section" style="background-image: url('../images/earthquake.png');">
		<div class="fixed-title clearfix">
			<div class="caption-section">
				<div class="view-more">
					VIEW ALL PROJECTS
				</div>
				<?php include("slider.php") ?>
			</div>
		</div>
	</div>
	<div class="fixed-section right right-content">
		<div class="section-heading">
			<h2 class="margin-top120" style="color: #55A43D;"> Earthquake Nepal 2015</h2>
		</div>
		<div class="margin-top30 secondary-title">
			<p class="margin-bottom40">On 25 April, an earthquake of 7.9 magnitude hit Nepal near the capital city of Kathmandu killing thousands of people and leaving behind a trail of destruction.</p>
		</div>
		<p class="margin-top30">Sustainable Nepal has developed this interactive and user-friendly earthquake-mapping tool based on open source libraries and data. This tool helps users to post information (both text and pictures) about earthquake impacts as well activities related to the earthquake.</p>
		<p class="margin-top30">During the recovery process, this tool can be useful for communities at different stages of recovering from the earthquake. For instance allowing them to focus resources into areas with the biggest need of intervention, as well to prepare and plan the recovery and rescue operations. Also visualizing on-going activities and enhancing information exchange among local, national and International actors will be easier.</p>
		<p class="margin-top30">This map is completely open and available for everyone to contribute to and to use for rescue and recovery processes. The more people contribute in adding markers – the better and more informed decisions can be made in coming days.</p>
		<p class="margin-top30">Together we can build up Nepal again – this time, in a sustainable way!</p>
		<div class="text-center margin-bottom40">
			<a href="http://equakenepal.sustainablemap.org/" class="btn btn-default donate launch-map" target="_blank">LAUNCH MAP</a>
		</div>
	</div>
<div class="mobile-project-contianer">
	<div class="text-center section-heading">
        <h2 class="section-heading">CURRENT PROJECTS</h2>
        <hr>
    </div>
	<?php include("project.php") ?>
</div>
</div>
<?php include("footer.php") ?>