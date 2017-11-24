<html xmlns=”http://www.w3.org/1999/xhtml”&gt;
    <styletype=”text/css”>
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        google.maps.event.addDomListener(window, ‘load’, function () {
            var places = new google.maps.places.Autocomplete(document.getElementById(‘txtPlaces’));
            google.maps.event.addListener(places, ‘place_changed’, function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = “Address: ” + address;
                mesg += “\nLatitude: ” + latitude;
                mesg += “\nLongitude: ” + longitude;
                alert(mesg);
            });
        });
    Location:
    <inputtype=”text”id=”txtPlaces”style=”width: 250px”placeholder=”Enter a location”/>
We Can also restrict the country like below
 google.maps.event.addDomListener(window, ‘load’, function () {
var options = {
types: [‘(cities)’],
componentRestrictions: { country: “in” }    //in Means India.
};

var inputFrom = document.getElementById(‘txtFromPlaces’);
var places = new google.maps.places.Autocomplete(inputFrom, options);

google.maps.places.Autocomplete(document.getElementById(‘txtFromPlaces’));

});