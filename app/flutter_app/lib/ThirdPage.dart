import 'dart:async';
import 'package:location/location.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:flutterapp/confirmSend.dart';
import 'package:google_maps_flutter/google_maps_flutter.dart';
import 'package:url_launcher/url_launcher.dart';

class ThirdPage extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return googleMap();
  }
}

class googleMap extends StatefulWidget{
  @override
  MapShow createState() => MapShow();

}

class MapShow extends State<googleMap>{
  Completer<GoogleMapController> _controller = Completer();
  LocationData currentLocation;

  Future<LocationData> getCurrentLocation() async {
    Location location = Location();
    try {
      return await location.getLocation();
    } on PlatformException catch (e) {
      if (e.code == 'PERMISSION_DENIED') {
        // Permission denied
      }
      return null;
    }
  }

  Future _goToMe() async {
    final GoogleMapController controller = await _controller.future;
    currentLocation = await getCurrentLocation();
    controller.animateCamera(CameraUpdate.newCameraPosition(
        CameraPosition(
          target: LatLng(
              currentLocation.latitude,
              currentLocation.longitude),
          zoom: 16,
        )));
  }

  Future _goTo() async {
    final GoogleMapController controller = await _controller.future;
    currentLocation = await getCurrentLocation();
    controller
        .animateCamera(CameraUpdate.newLatLng(LatLng(13.6900043, 100.7479237))); //latitude //longtitude
  }

  Future _routeToconfirmSend(){
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => confirmSend())
    );
  }

  _openOnGoogleMapApp(double latitude, double longitude) async {
    String googleUrl =
        'https://www.google.com/maps/search/?api=1&query=$latitude,$longitude';
    if (await canLaunch(googleUrl)) {
      await launch(googleUrl);
    } else {
      // Could not open the map.
    }
  }

  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(title: Text("ระบบนำทาง"), actions: <Widget>[
        IconButton(
            icon: Icon(Icons.send),
            onPressed: _routeToconfirmSend),
        IconButton(
            icon: Icon(Icons.airplanemode_active),
            onPressed: _goTo)
      ]),
      body: GoogleMap(
        myLocationEnabled: true,
        mapType: MapType.normal,
        initialCameraPosition:CameraPosition(
          target: LatLng(13.7650836, 100.5379664),
          zoom: 11,
        ),
        onMapCreated: (GoogleMapController controller) {
          _controller.complete(controller);
        },
        markers: {
          Marker(
              markerId: MarkerId("1"),
              position: LatLng(13.6900043, 100.7479237),
              infoWindow: InfoWindow(title: "สนามบินสุวรรณภูมิ", snippet: "สนามบินนานาชาติของประเทศไทย"),
              onTap: () => _openOnGoogleMapApp(13.6900043, 100.7479237)
          ),
          Marker(
              markerId: MarkerId("2"),
              position: LatLng(15.1434022, 98.435136),
              infoWindow: InfoWindow(title: "สะพานมอญ", snippet: "สะพานมอญ"),
              onTap: () => _openOnGoogleMapApp(15.1434022, 98.435136)
          ),

        },
      ),

        floatingActionButton: FloatingActionButton.extended(
          onPressed: _goToMe,
          label: Text('ตำแหน่งของฉัน'),
          icon: Icon(Icons.gps_fixed),
        ),
    );
    throw UnimplementedError();
  }

}
