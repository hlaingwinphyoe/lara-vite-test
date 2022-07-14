<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Vite</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="my-3 border p-3">
                <h1 class="text-primary">Hello Vite <i class="bi bi-house"></i></h1>
                <p class="text-black-50">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut, consequatur, culpa ea eius eligendi illo impedit inventore ipsum magnam molestiae nihil officiis possimus praesentium recusandae repellendus temporibus. Molestias, quos.
                </p>
                <a href="#" class="btn btn-primary">HWP</a>
                <a href="#" class="btn btn-outline-primary" id="clickMe">Click Me</a>


                <!-- Modal -->
                <div class="modal fade" id="viteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viteModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
