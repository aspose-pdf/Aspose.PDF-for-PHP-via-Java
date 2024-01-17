# PHP Library for PDF File FormatsAspose.PDF for PHP via Java is a  feature-rich API to allow developers to create PDF documents, whether simple or complex, on the fly programmatically. Aspose.PDF for Java allows developers to insert tables, graphs, images, hyperlinks, custom fonts - and more - into PDF documents. Moreover, it is also possible to compress PDF documents. Aspose.PDF for Java provides excellent security features to develop secure PDF documents. And the most distinct feature of Aspose.PDF for Java is that it supports the creation of PDF documents through both an API and from XML templates## PHP PDF Library Features### PDF Document Featres- Set basic information (e.g. author, creator) of the PDF document.- Configure PDF Page properties (e.g. width, height, cropbox, bleedbox etc.).- Set page numbering, bookmark level, page sizes etc.- Apply document open action, open mode as well as appearance.- Document can have different page transition effects such as dissolve or box.- Create PDF documents via `XML`, `API` or `XML` and `API` combined.- Ability to work with text, paragraphs, headings, hyperlinks, graphs, attachments etc.### Security Features- PDF documents can be encrypted up to 128 bits.- Master and user passwords can be set for PDF encryption.- Apply rescriptions on content modification, copying, printing and other operations.### Conversion Features- Convert an existing XML file (`.XML`) or `XmlDocument` to a new PDF document or a PDF file stream.- Convert conventional Image formats into PDF file.- Convert `PCL` files into PDF file.For a more comprehensive list of features, please visit [Key Features of Aspose.PDF](https://docs.aspose.com/pdf/java/key-features/).## Getting Started with Aspose.PDF for PHP via JavaAspose.PDF for PHP via Java consists of 2 individual parts, the script wrapper (aspose.pdf.php) and Aspose.PDF for Java. These components communicate via PHP/Java Bridge whereas both require separate environments & processes for execution.### Prerequisites1. JDK2. PHP/Java Bridge3. Web Server like Tomcat4. PHP### Installation1. Install Tomcat on any location such as `\java\apache-tomcat-9.0.24`.2. Copy JavaBridge.war to `webapps` folder of Tomcat such as `\java\apache-tomcat-9.0.24\webapps`.3. Copy aspose-pdf-xx.x.jar to `lib` folder such as `\java\apache-tomcat-9.0.24\lib`.4. Run `\bin\startup.bat`, JavaBridge.war will be deployed to `\java\apache-tomcat-9.0.24\webapps\JavaBridge`.5. Test http://localhost:8080/JavaBridge/test.php to ensure that PHP works fine.6. Copy aspose.pdf.php and example.php to `\java\apache-tomcat-9.0.24\webapps\JavaBridge`.7. Open http://localhost:8080/JavaBridge/example.php or create your own PHP file as follows.You will find the Jar and PHP library in `vendor/aspose/pdf` folder.### Create Excel XLSX File from Scratch using PHP```php<?php require_once("Java.inc");require_once("lib/aspose.pdf.php");use aspose\pdf\Document;use aspose\pdf\TextFragment;use aspose\pdf\BuildVersionInfo;$buildVersionInfo = new BuildVersionInfo();$assemblyVersion = $buildVersionInfo->ASSEMBLY_VERSION;echo $assemblyVersion; echo "\r\n";$document = new Document();$pages = $document->getPages();$page = $pages->add();$text = new TextFragment();$text->setText("Some text");$page->getParagraphs()->add($text);$document->save("result.pdf");?>```[Product Page](https://products.aspose.com/pdf/php-java) | [Documentation](https://docs.aspose.com/pdf/php-java/) | [API Reference](https://apireference.aspose.com/pdf/php) | [Code Examples](https://github.com/aspose-pdf/Aspose.PDF-for-Java) | [Blog](https://blog.aspose.com/category/pdf/) | [Free Support](https://forum.aspose.com/c/pdf) | [Temporary License](https://purchase.aspose.com/temporary-license)