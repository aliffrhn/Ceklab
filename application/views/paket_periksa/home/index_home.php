    <div class="container-fluid">
        <div>
            <ul class="nav nav-pills p-3" id="tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link selected shadow m-1" href="#kota" aria-selected="true">Surabaya</a>
                </li>
            </ul>
        </div>
        <div class="content card-deck p-3">
            <div class="row justify-content-start">
                <div class="col-sm-auto">
                    <a class="card mb-3 mt-3 text-center shadow-card" style="text-decoration: none" href="#">
                        <img class="card-img-top img-fluid p-3 mx-auto" style="width: 200px;" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&w=1000&q=80" alt="">
                        <div class="card-body">
                            <h6 style="font-weight: bold; color:grey" class="card-title">Title of Card</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $(".nav li a").on("click", function() {
                $(".nav li a").removeClass("selected shadow");
                $(this).addClass("selected shadow");
            });
        });
    </script>
    </body>

    </html>