    <?php $selected; ?>
    <div class="container-fluid">
        <div>
            <ul class="nav nav-pills p-3" id="tab" role="tablist">
                <?php foreach ($city as $val) { ?>
                    <li class="nav-item" id="<?php echo 'tab-' . $val['kota_id'] ?>">
                        <a class="nav-link m-1" onclick="getList(<?php echo $val['kota_id'] ?>)" href="#<?php echo $val['nama_kota']; ?>" aria-selected="true"><?php echo $val['nama_kota'] ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="content card-deck p-3">
            <div class="row justify-content-start" id="packageList">
                <?php foreach ($packages as $val) { ?>
                    <div class="col-sm-auto">
                        <a class="card mb-3 mt-3 text-center shadow-card" style="text-decoration: none" href="#">
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
        function getList(id) {
            $("#packageList").empty();
            $("#packageList").append(
                "<h4>Loading. . .</h4>"
            );
            $.ajax({
                url: "http://localhost/CekLab/index.php/Paket_Periksa_Controller/getListPackageById",
                data: {
                    'id': id
                },
                type: "POST",
                cache: true,
                timeout: 4000,
                success: function(response) {
                    $("#packageList").empty();
                    var a = JSON.parse(response);
                    $.each(a, function(i, v) {
                        $('#packageList').append(
                            "<div class='col-sm-auto'>"+
                                "<a class='card mb-3 mt-3 text-center shadow-card' style='text-decoration: none' href='#'>"+
                                    "<img class='card-img-top img-fluid p-3 mx-auto' style='width: 200px; height:200px' src='"+v.photo_url+"' alt='covid-19 poster'>"+
                                    "<div class='card-body'>"+
                                        "<h6 style='font-weight: bold; color:grey' class='card-title'>"+v.judul+"</h4>"+
                                    "</div>"+
                                "</a>"+
                            "</div>"
                        );
                    });
                }
            });
        };

        $('#tab-1 a').addClass('selected shadow');
        $(document).ready(function() {

            $(".nav li a").on("click", function() {
                $(".nav li a").removeClass("selected shadow");
                $(this).addClass("selected shadow");
            });

        });
    </script>
    </body>

    </html>