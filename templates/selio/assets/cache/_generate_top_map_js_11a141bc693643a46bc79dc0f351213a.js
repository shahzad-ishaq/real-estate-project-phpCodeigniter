


var markers = new Array();
var map;
var marker_clusterer ;
$(document).ready(function(){
    var myLocationEnabled = true;
    var style_map = mapStyle;
    var scrollwheelEnabled = true;

    
    if($('#main-map').length){    
        map = L.map('main-map', {
                        center: [28.27181785, 64.34579215],
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

            marker.bindPopup("<!--Widget-preview-category-path: Land--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/47/en/25_marla_plot\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/files/strict_cache/575x500castle_hb_13c_crop_1024x489.webp\" alt=\"25 Marla Plot\">        <div class=\"rate-info\">                    <h5>                                                6,700.00AED                                        </h5>                    <span class=\"purpose-Rent\">                Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>25 Marla Plot</h3>            <span><i class=\"la la-map-marker\"></i>Dubai</span>        </div>    </a></div>", jpopup_customOptions);
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

            marker.bindPopup("<!--Widget-preview-category-path: Land--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/46/en/20_marla_plot\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/files/strict_cache/575x5004721_starbuck_ave_high_res_screen_31%20%281%29.webp\" alt=\"20 Marla Plot\">        <div class=\"rate-info\">                    <h5>                                                5,000.00AED                                        </h5>                    <span class=\"purpose-Sale and Rent\">                Sale and Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>20 Marla Plot</h3>            <span><i class=\"la la-map-marker\"></i>Abu Dhabi</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [29.394644, 71.6638747],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Apartment--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/43/en/1501_apartment\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=5e8f0b24f19624754d2aa37968217d5d%20%281%29.jpg&cut=true\" alt=\"1501 Apartment\">        <div class=\"rate-info\">                    <h5>                                                 98.00AED / 6,000.00AED                                        </h5>                    <span class=\"purpose-Sale and Rent\">                Sale and Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>1501 Apartment</h3>            <span><i class=\"la la-map-marker\"></i>Bahawalpur</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-home"></i></div><div class="back face"> <i class="fa fa-home"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [32.0898005, 72.6782574],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: House--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/42/en/20_marla_house\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=6f9b0a3785139c3f4fba0d8f06bbe70e.jpg&cut=true\" alt=\"20 marla house\">        <div class=\"rate-info\">                    <h5>                                                 98.00AED / 6,000.00AED                                        </h5>                    <span class=\"purpose-Sale and Rent\">                Sale and Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>20 marla house</h3>            <span><i class=\"la la-map-marker\"></i>Sargodha</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-home"></i></div><div class="back face"> <i class="fa fa-home"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [31.4220558, 73.0923253],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: House--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/41/en/15_marla_house\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=5e8f0b24f19624754d2aa37968217d5d.jpg&cut=true\" alt=\"15 marla house\">        <div class=\"rate-info\">                    <h5>                                                4,000.00AED                                        </h5>                    <span class=\"purpose-Sale\">                Sale            </span>         </div>        <div class=\"listing-item-content\">            <h3>15 marla house</h3>            <span><i class=\"la la-map-marker\"></i>Faisalabad</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-home"></i></div><div class="back face"> <i class="fa fa-home"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [31.5656822, 74.3141829],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: House--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/40/en/10_marla_house\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=6yynx3.jpg&cut=true\" alt=\"10 marla house\">        <div class=\"rate-info\">                    <h5>                                                 60.00AED / 1,000.00AED                                        </h5>                    <span class=\"purpose-Rent\">                Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>10 marla house</h3>            <span><i class=\"la la-map-marker\"></i>Lahore</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [30.8091281, 73.4493301],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Apartment--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/45/en/1871_apartment\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=modern_contemporary_home_style_house_spanish_homes_702830.jpg&cut=true\" alt=\"1871 apartment\">        <div class=\"rate-info\">                    <h5>                                                 54.00AED / 6,000.00AED                                        </h5>                    <span class=\"purpose-Rent\">                Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>1871 apartment</h3>            <span><i class=\"la la-map-marker\"></i>Okara</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [30.1979793, 71.4724978],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Apartment--><div class=\"infobox map-box\">    <a href=\"http://www.alhafeez.dressbeat.com/index.php/property/44/en/1401_apartment\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"http://www.alhafeez.dressbeat.com/strict_image_speed.php?d=575x500&f=4721_starbuck_ave_high_res_screen_31.jpg&cut=true\" alt=\"1401 apartment\">        <div class=\"rate-info\">                    <h5>                                                 54.00AED / 4,000.00AED                                        </h5>                    <span class=\"purpose-Sale and Rent\">                Sale and Rent            </span>         </div>        <div class=\"listing-item-content\">            <h3>1401 apartment</h3>            <span><i class=\"la la-map-marker\"></i>Multan</span>        </div>    </a></div>", jpopup_customOptions);
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

