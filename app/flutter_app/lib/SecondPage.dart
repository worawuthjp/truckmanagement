import 'package:flutter/material.dart';
import 'package:flutterapp/ThirdPage.dart';
import 'package:flutterapp/confirmSend.dart';

class SecondPage extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(title: Text('งานที่ได้รับมอบหมาย'),
      ),
      body: Center(
        child:Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Text('งานที่ได้รับมอบหมาย'),
            RaisedButton(
              onPressed: ()=>{
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context) => ThirdPage())
                )
              },
              color: Colors.orange,
              child: Text('นำทาง'),
            )
          ],
        ),
      ),
    );
    throw UnimplementedError();
  }

}