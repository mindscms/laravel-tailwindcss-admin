<x-admin-layout>
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
                <div
                    id="map-canvas"
                    class="relative w-full rounded h-600-px"
                    data-lat="40.748817"
                    data-lng="-73.985428"
                ></div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script type="text/javascript">
            (function () {
                /* Map initialisation */
                let google = window.google;
                let map = document.getElementById("map-canvas");
                let lat = map.getAttribute("data-lat");
                let lng = map.getAttribute("data-lng");

                const myLatlng = new google.maps.LatLng(lat, lng);
                const mapOptions = {
                    zoom: 12,
                    scrollwheel: false,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [
                        {
                            featureType: "administrative",
                            elementType: "labels.text.fill",
                            stylers: [{color: "#444444"}],
                        },
                        {
                            featureType: "landscape",
                            elementType: "all",
                            stylers: [{color: "#f2f2f2"}],
                        },
                        {
                            featureType: "poi",
                            elementType: "all",
                            stylers: [{visibility: "off"}],
                        },
                        {
                            featureType: "road",
                            elementType: "all",
                            stylers: [{saturation: -100}, {lightness: 45}],
                        },
                        {
                            featureType: "road.highway",
                            elementType: "all",
                            stylers: [{visibility: "simplified"}],
                        },
                        {
                            featureType: "road.arterial",
                            elementType: "labels.icon",
                            stylers: [{visibility: "off"}],
                        },
                        {
                            featureType: "transit",
                            elementType: "all",
                            stylers: [{visibility: "off"}],
                        },
                        {
                            featureType: "water",
                            elementType: "all",
                            stylers: [{color: "#fbb6ce"}, {visibility: "on"}],
                        },
                    ],
                };

                map = new google.maps.Map(map, mapOptions);

                const marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    animation: google.maps.Animation.DROP,
                    title: "Hello World!",
                });

                const contentString =
                    '<div class="info-window-content"><h2>Notus JS</h2>' +
                    "<p>A beautiful UI Kit and Admin for Tailwind CSS. It is Free and Open Source.</p></div>";

                const infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });

                google.maps.event.addListener(marker, "click", function () {
                    infowindow.open(map, marker);
                });
            })();
        </script>
    @endpush
</x-admin-layout>
