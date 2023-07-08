<footer class="footer">
    <div class="container-fluid">
        <div class="copyright mx-auto">
            <p class="mb-0 text-muted">© <?= date('Y'); ?>. Sparklens | All rights reserved.</p>
        </div>
    </div>
</footer>
</div>

</div>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>asset/templates/admin/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url() ?>asset/templates/admin/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>asset/templates/admin/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url() ?>asset/templates/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>asset/templates/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url() ?>asset/templates/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Bootstrap Notify -->
<script src="<?= base_url() ?>asset/templates/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url() ?>asset/templates/admin/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url() ?>asset/templates/admin/js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url() ?>asset/templates/admin/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url() ?>asset/templates/admin/js/setting-demo2.js"></script>
<script>
    const flashData = $('.flash-data').data('flashdata');

    if (flashData) { //Notify
        $.notify({
            icon: 'flaticon-alarm-1',
            title: 'Sparklens',
            message: flashData,
        }, {
            type: 'success',
            placement: {
                from: "top",
                align: "right"
            },
            time: 1000,
        });
    }

    function productPhotoPreview() {
        const product_photo = document.querySelector('#photo');
        const product_photo_preview = document.querySelector('.product-photo-preview');

        product_photo_preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(product_photo.files[0]);

        oFReader.onload = function(oFREvent) {
            product_photo_preview.src = oFREvent.target.result;
        }
    }

    $('.btn-delete').on('click', function(e) {
        e.preventDefault();

        const href = $(this).attr('href');

        swal({
            title: "Are you sure?",
            text: "You will delete this data!",
            type: "warning",
            buttons: {
                confirm: {
                    text: 'Delete',
                    className: 'btn btn-success'
                },
                cancel: {
                    visible: true,
                    text: 'Cancel',
                    className: 'btn btn-danger'
                }
            }
        }).then((DELETE) => {
            if (DELETE) {
                document.location.href = href;
            }
        })
    })

    $(document).ready(function() {
        $('#basic-datatables').DataTable({});

        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>
</body>

</html>