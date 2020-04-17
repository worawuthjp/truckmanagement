import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutterapp/confirmSend.dart';
import 'package:flutterapp/main.dart';

class ThirdPage extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(
        title: Text('นำทาง'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            RaisedButton(
              onPressed: ()=>{
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context)=>confirmSend())
                )
              },
              color: Colors.green,
              child: Text('ส่งของ'),
            )
          ],
        ),
      ),
    );
    throw UnimplementedError();
  }

}