(function () {
	"use strict";

	window.MathJax = {
		tex: {
			inlineMath: [["\\(", "\\)"], ["$", "$"]],
			displayMath: [["\\[", "\\]"], ["$$", "$$"]]
		},
		options: {
			skipHtmlTags: ["script", "noscript", "style", "textarea", "pre", "code"]
		}
	};

	var script = document.createElement("script");
	script.defer = true;
	script.src = "https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js";
	document.head.appendChild(script);
})();
