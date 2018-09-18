function del (itemID, type) {
    $a = $('a[attr-id="'+itemID+'"][attr-type="'+type+'"]');
    var title = $a.closest('tr').find('td:nth-child(2)').text();
    if (itemID) {
        if (confirm("Are you sure want to remove menu "+title+" permanently?")) {
            /*var row = table.row($a.closest('tr'));
            var rowNode = row.node();
            row.remove();*/

            $.get(MAIN_URL+'/requests/menu/delete.php?type='+type+'&id='+itemID, function (data) {
                console.log(data);
                if (data == 1) $a.closest('tr').remove();
            })

        }
    }
    return false
}

$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/menu/readAll.php?type=left',
		"columns": [
            { 
                data: "id",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/menu/'+row.id+'?type=left">'+data+'</a></div>'
                }
            },
            {
                data: "title",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/menu/'+row.id+'?type=left">'+data+'</a></div>'
                }
            },
            {
                data: "link",
                render : function (data, type, row) {
                    if (row.parent_link) {
                        return '<a target="_blank" href="'+MAIN_URL+'/../'+row.parent_link+'/'+data+'">'+row.parent_link+'/'+data+'</a></div>'
                    } else {
                        return '<a target="_blank" href="'+MAIN_URL+'/../'+data+'">'+data+'</a></div>'
                    }
                }
            },
            {
                data: "parent_title",
                render : function (data, type, row) {
                    if (data) {
                        return '<a target="_blank" href="'+MAIN_URL+'/../'+row.parent_link+'">'+data+'</a></div>'
                    } else {
                        return '';
                    }
                }
            },
            {
                data: "orders",
                render : function (data, type, row) {
                    return data
                }
            },
            {
                data: "menu_action",
                render : function (data, type, row) {
                    return '<div class="row-btns"><a attr-id="'+row.id+'" attr-type="left" class="row-btn-edit" href="'+location.href+'/'+row.id+'?type=left"><i class="fa fa-pencil"></i></a> <a attr-id="'+row.id+'" attr-type="left" class="row-btn-del text-danger" href="#" onclick="javascript:del(\''+row.id+'\', \'left\'); return false"><i class="fa fa-trash"></i></a></div>'
                }
            }
		],
        "ordering": false,
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            //console.log(aData);
        }
    });
    


    $('#buyList_top').DataTable({
		"ajax": MAIN_URL+'/requests/menu/readAll.php?type=top',
		"columns": [
            { 
                data: "id",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/menu/'+row.id+'?type=top">'+data+'</a></div>'
                }
            },
            {
                data: "title",
                render : function (data, type, row) {
                    return '<a href="'+MAIN_URL+'/menu/'+row.id+'?type=top">'+data+'</a></div>'
                }
            },
            {
                data: "link",
                render : function (data, type, row) {
                    return '<a target="_blank" href="'+data+'">'+data+'</a></div>'
                }
            },
            {
                data: "parent_title",
                render : function (data, type, row) {
                    if (data) {
                        return '<a target="_blank" href="'+row.parent_link+'">'+data+'</a></div>'
                    } else {
                        return '';
                    }
                }
            },
            {
                data: "orders",
                render : function (data, type, row) {
                    return data
                }
            },
            {
                data: "menu_action",
                render : function (data, type, row) {
                    return '<div class="row-btns"><a attr-id="'+row.id+'" attr-type="top" class="row-btn-edit" href="'+location.href+'/'+row.id+'?type=top"><i class="fa fa-pencil"></i></a> <a attr-id="'+row.id+'" attr-type="top" class="row-btn-del text-danger" href="#" onclick="javascript:del(\''+row.id+'\', \'top\'); return false"><i class="fa fa-trash"></i></a></div>'
                }
            }
		],
        "ordering": false,
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            //console.log(aData);
        }
	})
})
