</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Custom JS -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- DataTables JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<!----------------------- Scripts -------------------------->
<script>
    function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

    (function ($) {
        $.fn.dataTableExt.oApi.fnGetColumnData = function (dtSet, dtCol, dtUnique, dtFilt, dtEmpty) {
            // check for column id, no col id >> set up new array
            if (typeof dtCol === "undefined")
                return new Array();

            /* true = Filter out duplicates */
            if (typeof dtUnique === "undefined")
                dtUnique = true;

            // true = look only at filtered data
            if (typeof dtFilt === "undefined")
                dtFilt = true;

            // true = exclude empty values
            if (typeof dtEmpty === "undefined")
                dtEmpty = true;

            //Define Var for looping through - a whole list of rows datas
            var aiRow;

            // Display filtered data
            if (dtFilt === true)
                aiRow = dtSet.aiDisplay;
            // Display all row data
            else
                aiRow = dtSet.aiDisplayMaster;

            // Create new array for data 
            var asFinalData = new Array();

            for (var i = 0, c = aiRow.length; i < c; i++) {
                iRow = aiRow[i];
                var aData = this.fnGetData(iRow);
                var sValue = aData[dtCol];

                // skip the empty values retrieved
                if (dtEmpty === true && sValue.length === 0)
                    continue;

                // skip the value if it is in the array
                else if (dtUnique === true && jQuery.inArray(sValue, asFinalData) > -1)
                    continue;

                // else append value int the array
                else
                    asFinalData.push(sValue);
            }

            return asFinalData;
        };
    }(jQuery));

    /* Function to Create the options */
    function fnCreateOption(arrayData)
    {
        var r = '<select><option value=""></option>', i, iLen = arrayData.length;
        for (i = 0; i < iLen; i++)
        {
            r += '<option value="' + arrayData[i] + '">' + arrayData[i] + '</option>';
        }
        return r + '</select>';
    }


    $(document).ready(function () {
        var dtTable = $('#tblJobs').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            }
        });
        
        var dtTableHistory = $('#tblHistory').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            }
        });
        
        /* Specifying while column to put filter ddl */
        /* fnGetColumnData = Return array of values from the wanted column */
        var indexOfMyCol = 5; //6th column
        $("#ddlJobs th").each(function (i) {
            if (i === indexOfMyCol) {
                this.innerHTML = fnCreateOption(dtTable.fnGetColumnData(i));
                $('select', this).change(function () {
                    dtTable.fnFilter($(this).val(), i);
                });
            }
        });
        
        /* Specifying while column to put filter ddl */
        /* fnGetColumnData = Return array of values from the wanted column */
        var indexOfMyColHistory = 1; //6th column
        $("#ddlHistory th").each(function (i) {
            if (i === indexOfMyColHistory) {
                this.innerHTML = fnCreateOption(dtTableHistory.fnGetColumnData(i));
                $('select', this).change(function () {
                    dtTableHistory.fnFilter($(this).val(), i);
                });
            }
        });
    });
</script>
</html>