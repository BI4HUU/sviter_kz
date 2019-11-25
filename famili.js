var sizes = {};

var tagName = document.getElementsByClassName("form-group")[3].getElementsByClassName("radio")[0].getElementsByTagName("input")[0].name
document.getElementsByName(tagName)[5].name = "a"
document.getElementsByName(tagName)[4].name = "a"
document.getElementsByName(tagName)[3].name = "a"

var form_group = document.getElementsByClassName("form-group")[0]
for (var i = form_group.getElementsByClassName("radio").length - 1; i >= 0; i--) {
	var form_group_radio = form_group.getElementsByClassName("radio")[i];
	form_group_radio.onclick = function() {
		if (!event.target.innerText == "") {
			sizes["man"] = event.target.innerText
		}
	}
}
var form_group = document.getElementsByClassName("form-group")[1]
for (var i = form_group.getElementsByClassName("radio").length - 1; i >= 0; i--) {
	var form_group_radio = form_group.getElementsByClassName("radio")[i];
	form_group_radio.onclick = function() {
		if (!event.target.innerText == "") {
			sizes["woman"] = event.target.innerText
		}
	}
}
var form_group = document.getElementsByClassName("form-group")[2]
for (var i = form_group.getElementsByClassName("radio").length - 1; i >= 0; i--) {
	var form_group_radio = form_group.getElementsByClassName("radio")[i];
	form_group_radio.onclick = function() {
		if (!event.target.innerText == "") {
			sizes["teen1"] = event.target.innerText
		}
	}
}
var form_group = document.getElementsByClassName("form-group")[3]
for (let i = 0; i < form_group.getElementsByClassName("radio").length; i++) {
	var form_group_radio = form_group.getElementsByClassName("radio")[i];
	form_group_radio.onclick = function() {
		if (!event.target.innerText == "") {
			sizes["teen2"] = event.target.innerText
		}
	}
}
