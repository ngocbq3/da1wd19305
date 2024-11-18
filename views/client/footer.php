</div>
<script>
    //lấy button
    search = document.getElementById('search');
    keyword = document.getElementById('keyword')
    //viết sự kiện click cho nút search
    search.addEventListener('click', function() {
        searchProduct();
    })

    keyword.addEventListener('keydown', function(e) {
        if (e.key == 'Enter') {
            searchProduct();
            e.preventDefault()
        }
    })
    //hàm seach()
    function searchProduct() {
        window.location = "<?= ROOT_URL ?>" + "?ctl=search&keyword=" + keyword.value;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>