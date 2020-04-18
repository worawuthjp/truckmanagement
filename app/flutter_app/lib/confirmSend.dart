import 'dart:io';
import 'dart:ui';
import 'package:flutter/material.dart';
import 'package:flutter_signature_pad/flutter_signature_pad.dart';
import 'package:flutterapp/main.dart';
import 'package:toast/toast.dart';
import 'HexColor.dart';

class confirmSend extends StatelessWidget {
  final Color signBackground = HexColor('#DBDBDB');
  final Color conBtnColor = HexColor('#FBB820');

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
              margin: EdgeInsets.all(30),
              decoration: BoxDecoration(
                border: Border.all(),
                color: signBackground,
              ),
              child: Padding(
                padding: const EdgeInsets.all(2.0),
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
                  margin: EdgeInsets.only(
                    top: 0,
                    bottom: 60,
                  ),
                  alignment: Alignment.topCenter,
                  child: Padding(
                    padding: EdgeInsets.all(8.0),
                    child: RaisedButton(
                      onPressed: () {
                        bool work = false;
                        if (work) {
                          Toast.show("ทำรายการสำเร็จ", context,
                              duration: Toast.LENGTH_LONG,
                              gravity: Toast.BOTTOM,
                              backgroundColor: Colors.green);
                          Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => indexApp()));
                        }
                        else{
                          Toast.show("ทำรายการไม่สำเร็จ", context,
                              duration: Toast.LENGTH_LONG,
                              gravity: Toast.BOTTOM,
                              backgroundColor: Colors.red);
                        }
                      },
                      color: conBtnColor,
                      child: Text(
                        'ยืนยันการส่งของ',
                        style: TextStyle(fontSize: 16),
                      ),
                    ),
                  ))
            ],
          )
        ],
      ),
    );
    throw UnimplementedError();
  }
}
