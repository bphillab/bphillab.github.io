(function () {
	"use strict";

	// Replace with your GoatCounter endpoint, e.g.:
	// https://your-code.goatcounter.com/count
	var goatCounterEndpoint = "https://bphillab.goatcounter.com/count";

	if (!goatCounterEndpoint || goatCounterEndpoint.indexOf("YOUR-CODE") !== -1) {
		return;
	}

	var script = document.createElement("script");
	script.async = true;
	script.src = "https://gc.zgo.at/count.js";
	script.setAttribute("data-goatcounter", goatCounterEndpoint);
	document.head.appendChild(script);
})();
