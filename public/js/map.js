var locations=[["<div class='map-caption'><div class='frame'><a href='#'><img src='images/map/map-location-img-1.jpg' alt='img'></a></div><div class='text-box'><div class='top-row'><h3>Location Area</h3></div><div class='mid-row'> <strong class='title'>2439 Cander St, London,</br> United Kingdom </strong> <span>UAN: 0800-222-3333</span><span>Fax: (00) 123 4567 8910 </span> <span>Email: info@umtik.com</span> <span>Account No: 34256-8976</span> </div><div class='bottom-row'><ul><li><a href='#'>Directions</a></li><li><a href='#'>Nearby</a></li><li><a href='#'>Call for Support</a></li></ul></div></div></div>",43.5132101,13.2302635],["<div class='map-caption'><div class='frame'><a href='#'><img src='images/map/map-location-img-2.jpg' alt='img'></a></div><div class='text-box'><div class='top-row'><h3>Location Area</h3></div><div class='mid-row'> <strong class='title'>2439 Cander St, London,</br> United Kingdom </strong> <span>UAN: 0800-222-3333</span><span>Fax: (00) 123 4567 8910 </span> <span>Email: info@umtik.com</span> <span>Account No: 34256-8976</span> </div><div class='bottom-row'><ul><li><a href='#'>Directions</a></li><li><a href='#'>Nearby</a></li><li><a href='#'>Call for Support</a></li></ul></div></div></div>",42.5132101,100.2302635],["<div class='map-caption'><div class='frame'><a href='#'><img src='images/map/map-location-img-3.jpg' alt='img'></a></div><div class='text-box'><div class='top-row'><h3>Location Area</h3></div><div class='mid-row'> <strong class='title'>2439 Cander St, London,</br> United Kingdom </strong> <span>UAN: 0800-222-3333</span><span>Fax: (00) 123 4567 8910 </span> <span>Email: info@umtik.com</span> <span>Account No: 34256-8976</span> </div><div class='bottom-row'><ul><li><a href='#'>Directions</a></li><li><a href='#'>Nearby</a></li><li><a href='#'>Call for Support</a></li></ul></div></div></div>",23.5132101,93.2302635],["<div class='map-caption'><div class='frame'><a href='#'><img src='images/map/map-location-img-4.jpg' alt='img'></a></div><div class='text-box'><div class='top-row'><h3>Location Area</h3></div><div class='mid-row'> <strong class='title'>2439 Cander St, London,</br> United Kingdom </strong> <span>UAN: 0800-222-3333</span><span>Fax: (00) 123 4567 8910 </span> <span>Email: info@umtik.com</span> <span>Account No: 34256-8976</span> </div><div class='bottom-row'><ul><li><a href='#'>Directions</a></li><li><a href='#'>Nearby</a></li><li><a href='#'>Call for Support</a></li></ul></div></div></div>",15.5132101,35.2302635],["<div class='map-caption'><div class='frame'><a href='#'><img src='images/map/map-location-img-5.jpg' alt='img'></a></div><div class='text-box'><div class='top-row'><h3>Location Area</h3></div><div class='mid-row'> <strong class='title'>2439 Cander St, London,</br> United Kingdom </strong> <span>UAN: 0800-222-3333</span><span>Fax: (00) 123 4567 8910 </span> <span>Email: info@umtik.com</span> <span>Account No: 34256-8976</span> </div><div class='bottom-row'><ul><li><a href='#'>Directions</a></li><li><a href='#'>Nearby</a></li><li><a href='#'>Call for Support</a></li></ul></div></div></div>",13.5132101,123.2302635],["<div class='map-caption'><div class='frame'><a href='#'><img src='images/map/map-location-img-6.jpg' alt='img'></a></div><div class='text-box'><div class='top-row'><h3>Location Area</h3></div><div class='mid-row'> <strong class='title'>2439 Cander St, London,</br> United Kingdom </strong> <span>UAN: 0800-222-3333</span><span>Fax: (00) 123 4567 8910 </span> <span>Email: info@umtik.com</span> <span>Account No: 34256-8976</span> </div><div class='bottom-row'><ul><li><a href='#'>Directions</a></li><li><a href='#'>Nearby</a></li><li><a href='#'>Call for Support</a></li></ul></div></div></div>",12.5132101,77.2302635],];var iconURLPrefix='images';var icons=['images/map-icon-2.png','images/map-icon-2.png','images/map-icon-2.png','images/map-icon-2.png','images/map-icon-2.png','images/map-icon-2.png',];var icons_length=icons.length;var shadow={anchor:new google.maps.Point(16,16),url:iconURLPrefix+'msmarker.shadow.png'};var myOptions={center:new google.maps.LatLng(16,18),mapTypeId:'roadmap',mapTypeControl:true,streetViewControl:true,panControl:true,scrollwheel:false,draggable:true,styles:[{stylers:[{hue:'#0073FF'},{saturation:-30},{lightness:10}]}],zoom:3,}
var map=new google.maps.Map(document.getElementById("maping-filtered"),myOptions);var infowindow=new google.maps.InfoWindow({maxWidth:350,});var marker;var markers=new Array();var iconCounter=0;for(var i=0;i<locations.length;i++){marker=new google.maps.Marker({position:new google.maps.LatLng(locations[i][1],locations[i][2]),map:map,icon:icons[iconCounter],shadow:shadow});markers.push(marker);google.maps.event.addListener(marker,'click',(function(marker,i){return function(){infowindow.setContent(locations[i][0]);infowindow.open(map,marker);}})(marker,i));iconCounter++;if(iconCounter>=icons_length){iconCounter=0;}}