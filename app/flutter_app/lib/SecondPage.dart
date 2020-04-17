import 'package:flutter/material.dart';
import 'package:flutterapp/ThirdPage.dart';

class SecondPage extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      appBar: AppBar(title: Text('งานที่ได้รับมอบหมาย'),
      ),
      body: Center(
        child:Column(
          children: <Widget>[
            Text('งานที่ได้รับมอบหมาย'),
            RaisedButton(
              onPressed: ()=>{
                Navigator.push(
                  context,
                  MaterialPageRoute(builder: (context) => ThirdPage())
                )
              },
              child: Text('นำทาง'),
            )
          ],
        ),
      ),
    );
    throw UnimplementedError();
  }

}