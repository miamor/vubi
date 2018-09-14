$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/promotion/readAll.php',
		"columns": [
            { "data": "id" },
            { "data": "userID" },
            { "data": "user_username" },
	    { "data": "timeFrom" },
            { "data": "timeTo" },
	    { "data": "details" },
	    { "data": "status" }
	]
	})
})
