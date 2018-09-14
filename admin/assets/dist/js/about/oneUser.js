$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/promotion/readAllOneUser.php?userID='+userID,
		"columns": [
			{ "data": "timeFrom" },
			{ "data": "timeTo" },
			{ "data": "details" },
			{ "data": "status" }
		]
	})
})
