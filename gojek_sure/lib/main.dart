import 'package:flutter/material.dart';
import 'package:gojek_sure/go_sure.dart';

//import 'package:hello/homepage.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
          appBar: AppBar(
              backgroundColor: Colors.white,
              leading: Icon(
                Icons.arrow_back,
                color: Colors.black,
              ),
              title: Container(
                child: Row(
                  children: <Widget>[
                    Icon(
                      Icons.add_box,
                      color: Colors.lightBlueAccent,
                    ),
                    Text(
                      "gosure",
                      style: TextStyle(
                          fontStyle: FontStyle.normal,
                          fontWeight: FontWeight.w700,
                          fontSize: 20,color: Colors.black),

                          
                    ),
                  ],
                ),
              )),
          body: Container(
            margin: EdgeInsets.all(20),
            child: Gosure(),
          )),
    );
  }
}


