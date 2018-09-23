function del (itemID) {
    $a = $('a[attr-id="'+itemID+'"]');
    var title = $a.closest('tr').find('td:nth-child(2)').text();
    if (itemID) {
        if (confirm("Are you sure want to remove "+itemID+"'s consult permanently?")) {
            /*var row = table.row($a.closest('tr'));
            var rowNode = row.node();
            row.remove();*/

            $.get(MAIN_URL+'/requests/consult/delete.php?id='+itemID, function (data) {
                console.log(data);
                if (data == 1) $a.closest('tr').remove();
            })

        }
    }
    return false
}

$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/consult/readAll.php',
		"columns": [
            { 
                data: "id",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/consult/'+row.id+'">'+data+'</a></div>';
                }
            },
            { data: "name" },
            { data: "age" },
            { data: "phone" },
            { data: "email" },
            { data: "address" },
            {
                data: "title",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/consult/'+row.id+'">'+data+'</a></div>';
                }
            },
            { data: "nhombenh" },
            {
                data: "content",
                render : function (data, type, row) {
                    return data.substring(0, 70);
                }
            },
            { data: "date" },
            {
                data: "reply",
                render : function (data, type, row) {
                    return data.substring(0, 70);
                }
            },
            {
                data: "consult_action",
                render : function (data, type, row) {
                    return '<div class="row-btns"><a attr-id="'+row.id+'" class="row-btn-edit" href="'+location.href+'/'+row.id+'"><i class="fa fa-pencil"></i></a> <a attr-id="'+row.id+'" class="row-btn-del text-danger" href="#" onclick="javascript:del(\''+row.id+'\'); return false"><i class="fa fa-trash"></i></a></div>';
                }
            }
        ],
        "ordering": false,
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            //console.log(aData);
            if (aData.reply.length) {
                $(nRow).addClass('answered');
            }
        }
	})
})
