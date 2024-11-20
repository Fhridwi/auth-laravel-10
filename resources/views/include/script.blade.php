{{--  Script  --}}

<script src="{{ asset('template/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('template/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/assets/compiled/js/app.js') }}"></script>
    
{{--    --}}
<script src="{{ asset('template/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('template/assets/static/js/pages/dashboard.js') }}"></script>

{{--  DataTabels  --}}
<script src="{{ asset('template/assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('template/assets/static/js/pages/datatables.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#santriTable').DataTable({
            "paging": true,         
            "lengthChange": true,   
            "searching": true,       
            "ordering": true,        
            "info": true,          
            "autoWidth": false       
        });
    });
</script>

// alret
<script>
    function confirmDelete(id) {
        // Menampilkan dialog konfirmasi
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            // Jika pengguna memilih OK, kirimkan form penghapusan
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script