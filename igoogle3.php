<?php
header("Content-Type: application/xml");
echo "<?xml version=\"1.0\"?>";
?>

<Module>
      <ModulePrefs title="Ngram Extractor"
        author="interedition team"
       description="Ngram Extractor"
        scrolling="true"/>
        <Content type="html">

            <![CDATA[

            <?php include ("ngramHTML.html");
    ?>
    <script type="text/javascript">

  var postData = { locationURL : locationURL, folder : folder, ngRange : ngRange, statOperation: statOperation, format: format};
   var params = {};
params[gadgets.io.RequestParameters.METHOD] = gadgets.io.MethodType.GET;
//params[gadgets.io.RequestParameters.POST_DATA] = gadgets.io.encodeValues(postData);
var parameter = "?" + gadgets.io.encodeValues(postData);
var callUrl = 'http://wordchorus.com/ngram/ngram.asmx/ProcessMyTeiFiles' + parameter;
     gadgets.io.makeRequest(callUrl, serverResults, params);

    </script>

]]>


        </Content>
</Module>






