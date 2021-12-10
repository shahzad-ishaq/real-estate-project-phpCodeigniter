
 
    $(document).ready(function(){
    var map;
    var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="la la-home"></i></div><div class="back face"> <i class="la la-home"></i></div><div class="marker-arrow"></div></div></div>';
    if($('#contact-map').length){
        var myLocationEnabled = true;
        var style_map = '';
        var scrollwheelEnabled = false;
        
        
        
        var contact_map;
            contact_map = L.map('contact-map', {
                center: [45.81308594833956, 15.966937947021506],
                zoom: 12,
                scrollWheelZoom: scrollWheelEnabled,
                dragging: !L.Browser.mobile,
                tap: !L.Browser.mobile
            });     
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(contact_map);
            var positron = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(contact_map);
           var property_marker = L.marker(
                [45.81308594833956, 15.966937947021506],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            ).addTo(contact_map);
        
            property_marker.bindPopup("<div class='pin_box'>Ilica 345, HR-10000 Zagreb 1,<br />GPS: 45.81308594833956, 15.966937947021506</div>");

             
        }
    })
       
