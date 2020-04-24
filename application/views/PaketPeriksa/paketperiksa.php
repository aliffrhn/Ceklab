    <?php $selected; ?>
    <div class="container-fluid">
        <div>
            <ul class="nav nav-pills p-3" id="tab" role="tablist">
                <?php foreach ($city as $val) { ?>
                    <li class="nav-item" id="<?php echo 'tab-' . $val['kota_id'] ?>">
                        <a class="nav-link m-1" onclick="getList(<?php echo $val['kota_id'] ?>)" href="#" aria-selected="true"><?php echo $val['nama_kota'] ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div id="loader" class="text-center">
            <span class="spinner-border spinner-border-sm text-primary p-3 m-5"></span>
        </div>
        <div class="content card-deck p-3">
            <div class="row justify-content-start" id="packageList">
                <?php foreach ($packages as $val) { ?>
                    <div class="col-sm-auto">
                        <a class="card mb-3 mt-3 text-center shadow-card" style="text-decoration: none" href="http://localhost/Ceklab/index.php/PaketPeriksa/detail?id=<?php echo $val['paket_periksa_id'] ?>">
                            <img class="card-img-top img-fluid p-3 mx-auto" style="width: 200px; height:200px" src="<?php echo $val['photo_url'] ?>" alt="covid-19 poster">
                            <div class="card-body">
                                <h6 style="font-weight: bold; color:grey" class="card-title"><?php echo $val['judul'] ?></h4>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script>
        // Ajax
        function getList(id) {
            $("#packageList").empty();
            $.ajax({
                url: "http://localhost/CekLab/index.php/PaketPeriksa/getListPackageById",
                data: {
                    'id': id
                },
                type: "POST",
                cache: true,
                async: true,
                timeout: 4000,
                success: function(response) {
                    $("#packageList").empty();
                    $("#loader").hide();
                    var a = JSON.parse(response);
                    $.each(a, function(i, v) {
                        $('#packageList').append(
                            "<div class='col-sm-auto'>" +
                            "<a class='card mb-3 mt-3 text-center shadow-card' style='text-decoration: none' href='http://localhost/Ceklab/index.php/Paket_Periksa_Controller/detail?id=" + v.paket_periksa_id + "'>" +
                            "<img class='card-img-top img-fluid p-3 mx-auto' style='width: 200px; height:200px' src='" + v.photo_url + "' alt='covid-19 poster'>" +
                            "<div class='card-body'>" +
                            "<h6 style='font-weight: bold; color:grey' class='card-title'>" + v.judul + "</h4>" +
                            "</div>" +
                            "</a>" +
                            "</div>"
                        );
                    });
                }
            });
        };

        $('#tab-1 a').addClass('selected shadow');
        $(document).ready(function() {
            $("#loader").hide();

            $(".nav li a").on("click", function() {
                $(".nav li a").removeClass("selected shadow");
                $(this).addClass("selected shadow");
                $("#loader").show();
            });

        });
    </script>
    </body>

    </html>