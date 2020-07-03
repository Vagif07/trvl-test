const fileInput = document.getElementById('logo'),
	label	    = document.getElementById('logo_label'),
	labelVal    = label.innerHTML

fileInput.addEventListener('change', function(e) {

	fileName = e.target.value.split('\\').pop() || labelVal

	label.innerHTML = fileName
})