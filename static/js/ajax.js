var getAjaxData = function(URL, params, func, pSync, interID) {
    var bSync = (pSync == false)?pSync : true;
    if(URL == undefined) return false;
    if(params == undefined) params = {};

    jQuery.ajax({
        url : URL,
        data : params,
        type : 'post',
        async : bSync,
        success : function(data){
            var data = typeof data == "object" ? data : eval('(' + data + ')');

            if (URL.indexOf("admin/Orgmain/checkMailStatus") == 0)
                if(!ajaxReturnErrorCheck(data)) return;

            func(data);
        },
        error : function(){
            func("FAIL");
            return;
        }
    });
};
