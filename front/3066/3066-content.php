
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>







<div class="type-3066">
    <div class="container">
        <h2 class="name">Frequently Asked Questions</h2>
        <div class="under"></div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                        Lorem Ipsum Dolor Sit Amet
                       
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio
                        similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere
                        sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore
                        quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis
                        adipisci!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                        Lorem Ipsum Dolor Sit Amet
                       
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio
                        similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere
                        sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore
                        quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis
                        adipisci!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                    Lorem Ipsum Dolor Sit Amet 
                   
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio
                    similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere
                    sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore
                    quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis
                    adipisci!
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                    Lorem Ipsum Dolor Sit Amet
                   
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates illum aspernatur odio
                    similique voluptatibus itaque magni dicta quasi nesciunt. Possimus animi in, voluptatem facere
                    sint aut quibusdam expedita. Voluptates, laudantium.Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Sunt aliquam cumque praesentium iusto delectus rem officia quas quos tempore
                    quaerat laudantium incidunt minus, quae veniam itaque expedita voluptatum perspiciatis
                    adipisci!
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- <script>
document.querySelectorAll('.accordion').forEach(accordion => {
    // Lắng nghe sự kiện khi accordion được mở
    accordion.addEventListener('shown.bs.collapse', function(event) {
        let button = event.target.previousElementSibling.querySelector('.accordion-button');
        let icon = button.querySelector('.accordion-icon');
        // Đổi thành dấu trừ khi mở
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
    });

    // Lắng nghe sự kiện khi accordion được đóng
    accordion.addEventListener('hidden.bs.collapse', function(event) {
        let button = event.target.previousElementSibling.querySelector('.accordion-button');
        let icon = button.querySelector('.accordion-icon');
        // Đổi thành dấu cộng khi đóng
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
    });
});

</script> -->
