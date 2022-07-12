jQuery(document).ready(function($) {
    const client_id = $("#client_id").text();
    function printFiles(files) {
        let html = "";
        for (let i = 0; i < files.length; i++) {
            html += `
                <tr>
                    <td>${i + 1}</td>
                    <td><span class="file-name">${files[i].file_name} </span>
                    <img data-id="${files[i].id}" class="edit_file_name"  src="http://task.loc/server/assets/images/edit.svg" alt=""> </td>
            <!--<img class="close-edit"  src="http://task.loc/server/assets/images/closeEdit.svg"></td> -->
                    <td>
                        <a  target="_blank" href="http://task.loc/server/assets/uploads/files/${files[i].file_name}" class="btn btn-success">View</a>
                        <button data-id="${files[i].id}" data-client-id="${client_id}" class="d btn btn-danger">Delete</button>
                        
                    </td> 
               
                </tr>
            `;
        }
        $("#files").html(html);
        // $(".delete-file").on("click", function () {
        //     let file_id = $(this).data("id");

        $(".d").on("click",  function() {
            let delete_file = $(this).parents("tr").find('.file_name').text();
            let id = $(this).attr("data-id");
            let id_client = $(this).attr("data-client-id");
            let fileRow = $(this).parents("tr"); //aranc refreshi jnjuma useri unecac fayly
          //  let file_remove = $(this).parents("tr").remove ('.file_name').text();
            $.ajax({
                url: "http://task.loc/server/models/delete_file.php",
                method: "get",
                data: {id:id, id_client:id_client, delete_file},
                success: function (e) {
                    $(fileRow).remove();
                }
            });
        })

        //     $.ajax({
        //         url: "http://task.loc/server/models/delete_file.php",
        //         method: "get",
        //         data: {file_id},
        //         success: function () {
        //         //    alert("Deleted");
        //         //   location.reload()
        //         }
        //     });
        // })

                $(".edit_file_name").on("click", function () {
                    let doc_name = $(this).parent().find('span').text().split('.')[0];
                    let old_name = $(this).parent().find('span').text();
                    let file_id =$(this).data("id");
                    let file_span =$(this).parent().find('span');
                    $(this).parent().append(`<input id="rename_txt" value='${doc_name}' type='text'> <img class='close-edit' src='http://task.loc/server/assets/images/closeEdit.svg' alt=''>`)
                    $(".close-edit").on("click", function () {
                        // alert(doc_name);
                        let inp_val = $("#rename_txt").val() + "." + $(this).parents("tr").find('.file-name').text().split('.')[1];

                        $.ajax({
                            url: "http://task.loc/server/models/rename_file.php",
                            method: "get",
                            data: {inp_val, file_id, old_name},
                            success: function (r) {
                           $(file_span).html(inp_val);
                           $("#rename_txt").remove();
                           $(".close-edit").remove();

                            }
                        });
                    })
        })

    }


    $.ajax({
        url: "http://task.loc/server/models/client_files.php",
        method: "get",
        data: {client_id},
        success: function (response) { //
            response = JSON.parse(response)
            console.log(response);
            printFiles(response);
        }
    });


//grichi u anunneri hamara

});