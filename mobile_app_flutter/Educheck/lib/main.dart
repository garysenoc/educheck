import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Welcome to Flutter',
      home: Scaffold(
        body: WebView(
          initialUrl:
              "https://educheckph.000webhostapp.com/?fbclid=IwAR1cKrHvrfhrHPDX3QHWMGojZqYPxrBgboaylQThBb7LtmhVIA08fZb3TvI",
          javascriptMode: JavascriptMode.unrestricted,
        ),
      ),
    );
  }
}
