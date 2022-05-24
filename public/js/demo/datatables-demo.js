// Call the dataTables jQuery plugin
$(document).ready(function () {
    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Akun AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Akun AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Akun AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Akun AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Akun AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "columns": [{
            "width": "15%"
        }, {
            "width": "20%"
        }, {
            "width": "30%"
        }, {
            "width": "15%"
        }, {
            "width": "20%"
        }, ]
    });
    $('#dataKaryawan').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'asc']
        ],
        "columns": [{
                "width": "10%"
            }, {
                "width": "10%"
            },
            null, {
                "width": "15%"
            }, {
                "width": "25%"
            },
            null,
            null, {
                "width": "10%"
            }, {
                "width": "5%"
            },
        ]
    });
    $('#dataTablePosition').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });
    $('#dataPositionPegawai').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Karyawan berdasarkan posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Karyawan berdasarkan posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Karyawan berdasarkan posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Karyawan berdasarkan posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Karyawan berdasarkan posisi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "columns": [{
            "width": "20%"
        }, {
            "width": "40%"
        }, {
            "width": "40%"
        }, ]
    });

    $('#dataTableAbsensi').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Absensi Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Absensi Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Absensi Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Absensi Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Absensi Karyawan AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [1, 'asc']
        ]
    });

    $('#dataTableAbsensiUser').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Absensi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Absensi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Absensi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Absensi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Absensi AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "25%"
        }, {
            "width": "25%"
        }, {
            "width": "25%"
        }, {
            "width": "25%"
        }, ]
    });

    $('#dataPenggajian').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Penggajian AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Penggajian AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Penggajian AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Penggajian AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Penggajian AMS',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [2, 'asc']
        ],
    });

    $('#tablePenambahan').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "aaSorting": [
            [0, 'desc']
        ],
        "columns": [null, null, null, {
            "width": "20%"
        }, ]
    });
    $('#tablePotongan').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": true,
        "aaSorting": [
            [0, 'desc']
        ],
        "columns": [null, null, null, {
            "width": "20%"
        }, ]
    });

    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
});
