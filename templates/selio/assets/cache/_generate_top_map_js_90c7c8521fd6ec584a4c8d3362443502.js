


var markers = new Array();
var map;
var marker_clusterer ;
$(document).ready(function(){
    var myLocationEnabled = true;
    var style_map = mapStyle;
    var scrollwheelEnabled = true;

    
    if($('#main-map').length){    
        map = L.map('main-map', {
                        center: [24.9288112, 54.951842718501],
                        zoom: 8-2,
            scrollWheelZoom: scrollwheelEnabled,
            dragging: !L.Browser.mobile,
            tap: !L.Browser.mobile
        });     
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(map);

                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [25.4037872, 55.526284037003],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Land--><div class=\"infobox map-box\">    <a href=\"https://alhafeez.dressbeat.com/index.php/property/48/en/12_marla_plot\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"https://alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=oregon_courtesy_cire_luxe_platinum_properties.jpg&cut=true\" alt=\"12 Marla Plot\">        <div class=\"rate-info\">                    <h5>                                                34,000.00AED                                        </h5>                    <span class=\"purpose-Sale\">                Sale            </span>         </div>        <div class=\"listing-item-content\">            <h3>12 Marla Plot</h3>            <span><i class=\"la la-map-marker\"></i>Ajman</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [25.0750095, 55.188760881833],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Land--><div class=\"infobox map-box\">    <a href=\"https://alhafeez.dressbeat.com/index.php/property/47/en/25_marla_plot\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"https://alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=castle_hb_13c_crop_1024x489.jpg&cut=true\" alt=\"25 Marla Plot\">        <div class=\"rate-info\">                    <h5>                                                6,700.00AED                                        </h5>                    <span class=\"purpose-Rent\">                Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>25 Marla Plot</h3>            <span><i class=\"la la-map-marker\"></i>Dubai</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [24.4538352, 54.3774014],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Land--><div class=\"infobox map-box\">    <a href=\"https://alhafeez.dressbeat.com/index.php/property/46/en/20_marla_plot\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"https://alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=4721_starbuck_ave_high_res_screen_31%20%281%29.jpg&cut=true\" alt=\"20 Marla Plot\">        <div class=\"rate-info\">                    <h5>                                                5,000.00AED                                        </h5>                    <span class=\"purpose-Sale and Rent\">                Sale and Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>20 Marla Plot</h3>            <span><i class=\"la la-map-marker\"></i>Abu Dhabi</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                map.addLayer(clusters);   
        
                /* set center */
        if(markers.length){
            var limits_center = [];
            for (var i in markers) {
                if(typeof markers[i]['_latlng'] == 'undefined') continue;
                var latLngs = [ markers[i].getLatLng() ];
                limits_center.push(latLngs)
            };
            var bounds = L.latLngBounds(limits_center);
                            map.fitBounds(bounds);
                   }
                
        if(!markers.length){
                    }
    } 
    })

