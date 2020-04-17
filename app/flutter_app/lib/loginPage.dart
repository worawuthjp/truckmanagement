import 'package:flutter/material.dart';
import 'package:flutterapp/main.dart';

class LoginPage extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            Text('Login'),
            RaisedButton(
              onPressed: ()=>{
                Navigator.push(
                    context,
                    MaterialPageRoute(builder: (context) => indexApp())
                )
              },
              child: Text('sign in'),
              color: Colors.pink,
            ),
          ],
        ),
      ),
    );
    throw UnimplementedError();
  }

}