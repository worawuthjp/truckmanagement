import 'package:flutter/material.dart';
import 'package:flutterapp/ThirdPage.dart';
import 'package:flutterapp/confirmSend.dart';

class SecondPage extends StatefulWidget {
  SecondPage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _SecondPageState createState() => _SecondPageState();
}

class _SecondPageState extends State<SecondPage> {
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(
        title: Text('งานที่ได้รับมอบหมาย'),
      ),
      body: ListView(
        children: <Widget>[
          ListTile(
            leading: Icon(
              Icons.local_shipping,
              size: 50,
              color: Colors.blueAccent,
            ),
            title: Text(
                "1.พัสดุหมายเลข 1234 \nที่อยู่ : 12/10 ม.5 ต.ตำบล อ.อำเภอ จ.จังหวัด 71002 {lat:102.13333,86.0000}"),
            subtitle: Text(
                "เวลา : 11.00-11.20",style: TextStyle(color: Colors.red),
            ),
            onTap: () => {
              Navigator.push(
                  context, MaterialPageRoute(builder: (context) => ThirdPage()))
            },
          ),
          Divider(
            color: Colors.grey,
          ),
          ListTile(
            leading:
                Icon(Icons.local_shipping, size: 50, color: Colors.blueAccent),
            title: Text(
                "2.พัสดุหมายเลข 54896 \nที่อยู่ : 12/10 ม.5 ต.ตำบล อ.อำเภอ จ.จังหวัด 78402 {lat:85.13333,12.0000}"),
            subtitle: Text(
              "เวลา : 11.30-12.20",style: TextStyle(color: Colors.red),
            ),
            onTap: () => {
              Navigator.push(
                  context, MaterialPageRoute(builder: (context) => ThirdPage()))
            },
          ),
          Divider(
            color: Colors.grey,
          ),
        ],
      ),
    );
    throw UnimplementedError();
  }
}
