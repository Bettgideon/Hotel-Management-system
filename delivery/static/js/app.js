//Function To Open Modal

//Function to Fetch User Location
function getCurrentLocationHandler(e) {
  if (navigator && navigator.geolocation) {
    // let location_timeout = setTimeout("geolocFail()", 10000);
    navigator.geolocation.getCurrentPosition(
      (pos) => {
        const coords = pos.coords;

        let userLocation = {
          present: true,
          lat: coords.latitude,
          lng: coords.longitude,
        };
        // console.log(userLocation);

        //Update Lat and Long on Form
        document.getElementById("rescue_longitude").value = userLocation.lng;
        document.getElementById("rescue_latitude").value = userLocation.lat;

        return;
      },
      (error) => {
        if (error.message.includes("denied")) {
          console.log({
            hasError: true,
            message:
              "Could Not Get Your Location, Permision To Access Your Device GPS Was Denied, Kindly Allow Access And Try Again",
          });

          handlePermission();
          return;
        }

        return console.log({
          hasError: true,
          message:
            "Could Not Get Your Location,Ensure You Have An Active Intenet Connection",
        });
      }
    );
    return;
  }

  return console.log({
    hasError: true,
    message:
      "Could Not Get Your Location,Ensure You Are Using A GPS Enabled Device And Your Location Services Are Turned On",
  });
}


