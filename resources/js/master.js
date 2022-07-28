$(function () {
    console.log('mixを通して読み込んでますよ')
})

// 編集ボタンが押されたら
$(function () {
    $(".edit_button").on("click", function(){
        var data = $(this).data()
        console.log(data)

        // var data2 = data["teacher_name"]
        // console.log(data2)
        $("input[name='id']").val(data["id"])

        $("input[name='teacher_name']").val(data["teacher_name"])
        $("input[name='email']").val(data["email"])

        if(data["normal"] === 0){
            $("#normal_radio_1").prop("checked", true)
        } else {
            $("#normal_radio_2").prop("checked", true)
        }
       
        if(data["manager_flag"] === 1){
            $("input[name='manager_flag']").prop("checked", true)
        } else if(data["manager_flag"] === 0) {
            $("input[name='manager_flag']").prop("checked", false)
        }
   
        if(data["flag"] === 0){
            $("#valid_radio_1").prop("checked", true)
        } else {
            $("#valid_radio_2").prop("checked", true)
        }
    })
})
