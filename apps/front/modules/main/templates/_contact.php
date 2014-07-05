<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyCCai3UpfJoxQUYLs7rE_CcSHM8pVBDPqM" type="text/javascript"></script>
<?php use_javascript('jQuery.bMap.1.2.3.js');?>
<script type="text/javascript">
  $(document).ready(function(){ 
  	$("#mapContact").bMap({
  		mapZoom: 12,
  		mapCenter:[<?php echo sfConfig::get('app_lat')?>, <?php echo sfConfig::get('app_lng')?>],
  		markers:{"data":[{
  				"lat":<?php echo sfConfig::get('app_lat')?>,"lng":<?php echo sfConfig::get('app_lng')?>,"title":"FIREWALL SOLUTION","body":""
			}]}
  	});
  });
</script>
<div id="mapContact" style="width:350px;height:200px;border-radius:12px;"></div>


<br clear="all">
<hr style="border:0;border-top:1px solid #dedede;margin:10px 50px 20px 0;">


<span style="font-weight:bold;"><?php echo __('Contact')?>.</span>
<br clear="all">
<span style="font-size:10px;text-decoration:none;">
    <?php echo sfConfig::get('app_phone')?>   
</span>
<br clear="all">
<a href="mailto:<?php echo sfConfig::get('app_email')?>" style="font-size:10px;text-decoration:none;">
   <?php echo sfConfig::get('app_email')?>
</a><br>
<br clear="all">

<span style="font-weight:bold;"><?php echo __('Address')?>.</span>
<br clear="all">
<span style="font-size:10px;text-decoration:none;">
    <?php echo $sf_user->getCulture() == 'en' ? sfConfig::get('app_address_en') : sfConfig::get('app_address')?>
</span>
<br clear="all"/>
<br clear="all"/>

<span style="font-weight:bold;"><?php echo __('Socials')?>.</span>
	<br clear="all"/>
<a href="http://www.facebook.com/<?php echo sfConfig::get('app_facebook')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/facebook-4-m.png', array())?>
</a>
<a href="http://www.twitter.com/<?php echo sfConfig::get('app_twitter')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/twitter-4-m.png', array())?>
</a>
<a href="http://www.youtube.com/<?php echo sfConfig::get('app_youtube')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/youtube-4-m.png', array())?>
</a>
<a href="skype:<?php echo sfConfig::get('app_skype')?>?call" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/skype-4-m.png', array())?>
</a>
<a href="http://www.pinterest.com/<?php echo sfConfig::get('app_pinterest')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/pinterest-4-m.png', array())?>
</a>
<a href="http://www.instagram.com/<?php echo sfConfig::get('app_instagram')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/instagram-4-m.png', array())?>
</a>
