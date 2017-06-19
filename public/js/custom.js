jQuery(document).ready(function($){"use strict";if($('#header').length){var stickyNavTop=$('#header').offset().top;var stickyNav=function(){var scrollTop=$(window).scrollTop();if(scrollTop>stickyNavTop){$('#header').addClass('cp_sticky');}else{$('#header').removeClass('cp_sticky');}};stickyNav();$(window).scroll(function(){stickyNav();});}
if($('#home-slider').length){$('#home-slider').bxSlider({auto:true,infiniteLoop:true,hideControlOnEnd:true});}
if($('#home-testimonials-slider').length){$('#home-testimonials-slider').bxSlider({auto:true,infiniteLoop:true,hideControlOnEnd:true});}
var countDownDate = new Date("June 26, 2018 08:00:00").getTime();
var now = new Date().getTime();
if($('.countdown').length){$('.countdown').final_countdown({'start':now,'end':countDownDate,'now':now});}
if($('#post-slider').length){$('#post-slider').bxSlider({auto:true,infiniteLoop:true,hideControlOnEnd:true});}
if($('audio').length){$('audio').audioPlayer();}
if($('#tweets-slider').length){$('#tweets-slider').bxSlider({auto:true,mode:'fade',infiniteLoop:true,hideControlOnEnd:true});}
if($('#map_contact_2').length){var map;var myLatLng=new google.maps.LatLng(48.85661,2.35222);var myOptions={zoom:12,center:myLatLng,zoomControl:true,mapTypeId:google.maps.MapTypeId.ROADMAP,mapTypeControl:false,styles:[{saturation:-100,lightness:10}],}
map=new google.maps.Map(document.getElementById('map_contact_2'),myOptions);var marker=new google.maps.Marker({position:map.getCenter(),map:map,icon:'images/map-icon.png'});marker.getPosition();var infowindow=new google.maps.InfoWindow({content:'',position:myLatLng});infowindow.open(map);}
if($('#location-slider').length){$('#location-slider').bxSlider({auto:true,mode:'fade',infiniteLoop:true,hideControlOnEnd:true});}});