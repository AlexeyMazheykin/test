<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .range {
        margin-top: 40px;

        max-width: 400px;
        position: relative;
        padding: 10px 10px 10px 10px;
    }
    .range > input[type="range"] {
        width: 100%;
    }
    .range_data {
        position: absolute;

        width: 20px;
        height: 20px;
        left: 10px;
        top: -15px;
    }
</style>
<body>
<div class="range">
    <div class="range_data"></div>
    <input class="input_range" type="range" min="0" max="400" value="0">
</div>
<script>
    let inputRange = document.querySelector(".input_range");
    let rangeData = document.querySelector(".range_data");
    function dataRender () {

        if (this !== window) {
            rangeData.innerHTML = this.value;
            rangeData.style.left = (+this.value + (10 - this.value*0.05)) + 'px'
            console.log(typeof this.value)
        } else {
            rangeData.innerHTML = inputRange.value
        }

    }
    inputRange.addEventListener('input', dataRender);
    dataRender();
</script>
</body>
</html>