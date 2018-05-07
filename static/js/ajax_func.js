function getAjaxData(URL,params,func, pSync, interID)
{
    var bSync = (pSync == false)?pSync : true;

    var myAjax = new Ajax.Request( URL,
        {
            asynchronous: bSync,
            method: "post",
            parameters: params,
            onSuccess: function(xmlHttp){
                try {
                    var data = eval("(" + xmlHttp.responseText + ")");

                    if (URL.indexOf("admin/Orgmain/checkMailStatus") == 0)
                        if(!ajaxReturnErrorCheck(data)) return;
                } catch(e) {
                    var errorObj = {
                        'e':e,
                        'x':xmlHttp
                    };
                    ajax_debug(errorObj);
                    return;
                }
                func(data);
            },
            onFailure : function (request)
            {
                func("FAIL");
                return;
            }
        }
    );
}
