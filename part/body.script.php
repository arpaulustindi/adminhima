<script>    
    $(function () {
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            startDate: '-3d'
        });
        $('.tfull-feature').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        
    });

    
</script>