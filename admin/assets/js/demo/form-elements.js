$(function() {
	/* Select2 */
    if($("#select2").length > 0) 
        $("#select2").select2();

    if($("#select2_multiple").length > 0) 
        $("#select2_multiple").select2();    
    /* // Select2 */

    /* SummerNote */
    if($(".editor").length > 0) 
        $(".editor").summernote();
    /* // SummerNote */

    if ($("#reservation").length > 0)
        $("#reservation").daterangepicker();
		
	 if ($("#reservation2").length > 0)
        $("#reservation2").daterangepicker();
		
	if ($("#reservation3").length > 0)
        $("#reservation3").daterangepicker();
		
	if ($("#reservation4").length > 0)
        $("#reservation4").daterangepicker();

});
