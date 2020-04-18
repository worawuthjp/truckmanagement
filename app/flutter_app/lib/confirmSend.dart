import 'dart:ui';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_signature_pad/flutter_signature_pad.dart';

class confirmSend extends StatelessWidget {
  Color c1 = HexColor('#DBDBDB');

  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(
        title: Text('ลายเซ็นผู้รับ'),
      ),
      body: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
      Expanded(
      child: Container(
          decoration: BoxDecoration(
          border: Border.all(),
      color: c1,
    ),
    child: Padding(
    padding: const EdgeInsets.all(8.0),
    child: Signature(
    color: Colors.black,
    strokeWidth: 2,
    backgroundPainter: null,
    onSign: null,
    key: null,
    ),
    ),
    ),
    ),
    Column(
    children: <Widget>[
    Container(
    height: 100,
    child:Padding(
    child: RaisedButton(
    onPressed: ()=>{},
    color: Colors.orange,
    child: Text('ยืนยัน',
    ),,
    ),
    )
    ],
    )
    ],
    ),
    );
    throw
    UnimplementedError
    (
    );
  }
}

class HexColor extends Color {
  static int _getColorFromHex(String hexColor) {
    hexColor = hexColor.toUpperCase().replaceAll("#", "");
    if (hexColor.length == 6) {
      hexColor = "FF" + hexColor;
    }
    return int.parse(hexColor, radix: 16);
  }

  HexColor(final String hexColor) : super(_getColorFromHex(hexColor));
}
