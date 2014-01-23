var map = new BMap.Map("allmap");
map.centerAndZoom(new BMap.Point(116.404, 39.915), 13);
map.addControl(new BMap.NavigationControl());
map.addControl(new BMap.ScaleControl());
map.addControl(new BMap.OverviewMapControl());
map.enableScrollWheelZoom();
map.addControl(new BMap.MapTypeControl());
map.setCurrentCity("北京");