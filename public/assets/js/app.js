
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });

        function addData(id = null) {
            let name;
            $('#form')[0].reset()

            if (id) {
                // get from db
                $.ajax({
                    url: "/get/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        name = data[0].name;

                        $('[name="id"]').val(data[0].id);
                        $('[name="nrp"]').val(data[0].nrp);
                        $('[name="name"]').val(data[0].name);
                        $('[name="address"]').val(data[0].address);
                        $('[name="department"]').val(data[0].department);
                        $('[name="phone"]').val(data[0].phone);

                        $('#modal').modal("show");
                        $('#modalLabel').text('Edit Data ' + name)
                    }
                })

                // submit
                $('#form').submit(function(e) {
                    if (confirm('Apakah anda yakin untuk mengubah data ' + name + '?')) {
                        e.stopImmediatePropagation();
                        e.preventDefault;
                        $.ajax({
                            type: "POST",
                            url: "/edit",
                            data: $(this).serialize(),
                            dataType: "JSON",
                            success: function(data) {
                                $('#modal').modal('hide');
                                alert('Data ' + name + ' berhasil diedit!');
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert('Data ' + name + ' tidak berhasil diedit. Silakan coba kembali!');
                            }
                        });
                    }
                })

                return
            }
            
            // submit
            $('#modalLabel').text('Tambahkan data')
            $('#form').submit(function(e) {
                if (confirm('Apakah anda yakin untuk menambahkan data?')) {
                    e.preventDefault;
                    $.ajax({
                        type: "POST",
                        url: "/create",
                        data: $(this).serialize(),
                        dataType: "JSON",
                        success: function(data) {
                            $('#modal').modal('hide');
                            alert('Data berhasil ditambahkan!');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Data tidak berhasil ditambahkan. Silakan coba kembali!');
                        }
                    });
                }
            })
        };


        function deleteData(id, name) {
            console.log(id, name)
            if (confirm('Apakah anda yakin untuk menghapus data ' + name + '?')) {
                $.ajax({
                    type: "DELETE",
                    url: "/delete/" + id,
                    dataType: "JSON",
                    success: function(data) {
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Data gagal dihapus! Silakan coba kembali!');
                    }
                });
            }

        };
