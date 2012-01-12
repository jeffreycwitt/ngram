function saveRD(locationURL, folder, ngRange, statOperation, format) {
	var postData = { locationURL : locationURL, folder : folder, ngRange : ngRange, statOperation: statOperation, format: format};
	params[gadgets.io.RequestParameters.METHOD] = gadgets.io.MethodType.POST;
	params[gadgets.io.RequestParameters.POST_DATA] = gadgets.io.encodeValues(postData);
    var callUrl = 'http://wordchorus.com/ngram/ngram.asmx/ProcessMyTeiFiles';
	gadgets.io.makeRequest(callUrl, function(o) {
		var xml = $.parseXML(o.text);
		var error = $(xml).find('error');
//		if (error && error.length) {
//			$('#displayBox').html($(error).attr('message'));
//			$('#displayBox).val(segments[segid].selectedReadingID);
//		}

		//$('#displayBox').html($(xml).find('success').attr('message'));

        $('#displayBox').html(xml);


			// announce activity
			var params = {};
			params[opensocial.Activity.Field.TITLE] = 'Variant Selected. DocID: '+currentDocID+'; Segment: '+segid+' with Reading ID: '+ readingid;
			var activity = opensocial.newActivity(params);
			opensocial.requestCreateActivity(activity, opensocial.CreateActivityPriority.HIGH);

	}, params);
}
