import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutterapp/main.dart';
import 'package:flutter_signature_pad/flutter_signature_pad.dart';

class confirmSend extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(
        title: Text('ลายเซ็นผู้รับ'),
      ),
      body: Column(
        children: <Widget>[
          Expanded(
            child: Container(
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
              RaisedButton(
                onPressed: ()=>{},
                color: Colors.orange,
                child: Text('ยืนยัน',
                ),
              )
            ],
          )
        ],
      ),
    );
    throw UnimplementedError();
  }
}
