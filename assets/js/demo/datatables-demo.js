// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dtCampaign').DataTable({
    initComplete: function () {
        this.api().columns(1).every(function () {
            var column = this;
            var select = $(
                    '<select class="row col-4 form-control"><option value=""></option></select>'
                    )
                .appendTo($('#category1'))
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

            column.data().unique().sort().each(function (d, j) {
                select.append('<option value="' + d + '">' + d +
                    '</option>')
            });
        });
    }
});
});

$(document).ready(function () {
  $('#dtContribute').DataTable({
    initComplete: function () {
        this.api().columns(1).every(function () {
            var column = this;
            var select = $(
                    '<select class="row col-4 form-control"><option value=""></option></select>'
                    )
                .appendTo($('#category2'))
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

            column.data().unique().sort().each(function (d, j) {
                select.append('<option value="' + d + '">' + d +
                    '</option>')
            });
        });
    }
});
});

$(document).ready(function () {
  $('#dtTicket').DataTable({
    initComplete: function () {
        this.api().columns(1).every(function () {
            var column = this;
            var select = $(
                    '<select class="row col-4 form-control"><option value=""></option></select>'
                    )
                .appendTo($('#category3'))
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

            column.data().unique().sort().each(function (d, j) {
                select.append('<option value="' + d + '">' + d +
                    '</option>')
            });
        });
    }
});
});

$(document).ready(function () {
  $('#dataTable').DataTable({
    initComplete: function () {
        this.api().columns(1).every(function () {
            var column = this;
            var select = $(
                    '<select class="row col-4 form-control"><option value=""></option></select>'
                    )
                .appendTo($('#category'))
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

            column.data().unique().sort().each(function (d, j) {
                select.append('<option value="' + d + '">' + d +
                    '</option>')
            });
        });
    }
});
});