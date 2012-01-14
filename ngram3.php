<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jeffrey
 * Date: 1/14/12
 * Time: 12:06 PM
 * To change this template use File | Settings | File Templates.
 */
 
header("Content-Type: application/xml");

echo "<?xml version=\"1.0\"?>";
?>

<Module>
<ModulePrefs title="Ngram Extractor, 3.0"
  author="interedition team"
  author_email="jeffreycwitt@gmail.com"
  description="Ngram Extractor"
  height="300"
  title_url="http://wordchorus.com/ngram/ngram.asmx?op=ExtractNgrams"
  scrolling="true"
  />

<Content type="html"><![CDATA[


<script type="text/javascript">

function sendToServer(teiXmlUrl, ngramLength, collocationSpan, serverResults)
{
var NgramRandom = new Date().getTime();
var postData = { teiXmlUrl : teiXmlUrl, ngramLength : ngramLength, collocationSpan : collocationSpan, random: NgramRandom};
var params = {};
params[gadgets.io.RequestParameters.METHOD] = gadgets.io.MethodType.GET;
//params[gadgets.io.RequestParameters.POST_DATA] = gadgets.io.encodeValues(postData);
var parameter = "?" + gadgets.io.encodeValues(postData);
var callUrl = 'http://wordchorus.com/ngram/ngram.asmx/ExtractNgrams' + parameter;
gadgets.io.makeRequest(callUrl, serverResults, params)
}
</script>
<?php
    include("ngram3html.html")
 ?>



]]>


</Content>
</Module>
