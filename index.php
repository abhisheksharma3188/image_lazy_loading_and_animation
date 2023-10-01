<?php
    $image_name='food.jpg';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lazy Loading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

    < <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

    <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

     <div class="mx-auto mt-3 bg-light" style="width:400px;">
        <div class="height_equals_width">
            <div class="text-center w-100 h-100 rounded-3" style="display:block;color:maroon;padding-top:40%;background-color:lightgrey;">
                <div class="spinner-border" role="status">
                </div>
            </div>
            <img class="d-block rounded-3 height_equals_width" src="images/<?php echo $image_name;?>?dynamic_url_string=<?php echo rand(1111111111,9999999999).uniqid();?>" style="opacity:0;" onload="this.style.opacity = 1;this.previousElementSibling.style.display='none';" loading="lazy">                                               
        </div>
        <div class="mt-3 text-center">
            Any Text
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('resize', height_equals_width);
        height_equals_width();
        function height_equals_width(){
            var width;
            var elements_array=document.getElementsByClassName('height_equals_width');
            for(i=0;i<elements_array.length;i++){
                elements_array[i].style.width='100%';
                width=elements_array[i].clientWidth;
                //console.log(width);
                elements_array[i].style.height=`${width}px`;
                //console.log(elements_array[i].clientHeight);
            }
        }
    </script>
</body>

</html>
