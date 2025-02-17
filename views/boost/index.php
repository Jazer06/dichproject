<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<div class="container">
    <h1>Welcome to the Boost Index Page!</h1>
    <p>This is the index action in the BoostController.</p>

    <!-- Элемент для демонстрации toggle -->
    <button id="toggleButton" class="btn btn-primary">Toggle Text</button>
    <p id="toggleText" style="display: none;">This text will toggle!</p>

    <!-- Элемент для демонстрации изменения текста -->
    <button id="changeTextButton" class="btn btn-secondary">Change Text</button>
    <p id="changeText">Original Text</p>
</div>

<script>
$(document).ready(function(){
    // Функция toggle
    $('#toggleButton').click(function(){
        $('#toggleText').toggle();
    });

    // Функция изменения текста
    $('#changeTextButton').click(function(){
        var newText = $('#changeText').text() === 'Original Text' ? 'Changed Text' : 'Original Text';
        $('#changeText').text(newText);
    });
});
</script>
