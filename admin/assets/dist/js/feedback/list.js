function del (itemID) {
    $a = $('a[attr-id="'+itemID+'"]');
    var title = $a.closest('tr').find('td:nth-child(2)').text();
    if (itemID) {
        if (confirm("Are you sure want to remove "+itemID+"'s feedback permanently?")) {
            /*var row = table.row($a.closest('tr'));
            var rowNode = row.node();
            row.remove();*/

            $.get(MAIN_URL+'/requests/feedback/delete.php?id='+itemID, function (data) {
                console.log(data);
                if (data == 1) $a.closest('tr').remove();
            })

        }
    }
    return false
}

$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/feedback/readAll.php',
		"columns": [
            { 
                data: "id",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/feedback/'+row.id+'">'+data+'</a></div>'
                }
            },
            {
                data: "cust_name",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/feedback/'+row.id+'">'+data+'</a></div>'
                }
            },
            {
                data: "image",
                render : function (data, type, row) {
                    return '<img src="'+data+'"/>'
                }
            },
            {
                data: "content",
                render : function (data, type, row) {
                    return data.substring(0, 70);
                }
            },
            {
                data: "feedback_action",
                render : function (data, type, row) {
                    return '<div class="row-btns"><a attr-id="'+row.id+'" class="row-btn-edit" href="'+location.href+'/'+row.id+'"><i class="fa fa-pencil"></i></a> <a attr-id="'+row.id+'" class="row-btn-del text-danger" href="#" onclick="javascript:del(\''+row.id+'\'); return false"><i class="fa fa-trash"></i></a></div>'
                }
            }
		],
        "ordering": false,
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            console.log(aData);
        }
	})
})
