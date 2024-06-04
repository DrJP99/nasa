var i = 2;
var n = 3;
var time = 15000;

setInterval(function() {
	document.getElementById('slide' + i).classList.remove('hidden');

	if (i == 1) {
		document.getElementById('slide' + n).classList.add('hidden');
	} else {
		document.getElementById('slide' + (i - 1)).classList.add('hidden');
	}
	i++;
	if (i > n) {
		i = 1;
	}
}, time);

//function fill(Value) {
//	$("#search").val(Value);
//	$("#output").hide();
//}

$(document).ready(function() {
	$("#search").keyup(function() {
		var name = $("#search").val();

		if (name == "") {
			$("#output").html("");
		}
		else {
			$.ajax ({
				type: "POST",
				url: "search.php",
				data: {
					name:$("#search").val(),
				},
				success: function(html) {
					$("#output").html(html).show();
				}
			});
		}

	});
});
