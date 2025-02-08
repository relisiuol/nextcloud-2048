<?php
script('twothousandandfortyeight', 'bind_polyfill');
script('twothousandandfortyeight', 'classlist_polyfill');
script('twothousandandfortyeight', 'animframe_polyfill');
script('twothousandandfortyeight', 'keyboard_input_manager');
script('twothousandandfortyeight', 'html_actuator');
script('twothousandandfortyeight', 'grid');
script('twothousandandfortyeight', 'tile');
script('twothousandandfortyeight', 'local_storage_manager');
script('twothousandandfortyeight', 'game_manager');
script('twothousandandfortyeight', 'application');
style('twothousandandfortyeight', '2048');
?>
<div class="container">
    <div class="heading">
        <h2 class="title">2048</h2>
        <div class="scores-container">
            <div class="score-container">0</div>
            <div class="best-container">0</div>
        </div>
    </div>

    <div class="above-game">
        <p class="game-intro">Join the numbers and get to the <strong>2048 tile!</strong></p>
        <a class="restart-button">New Game</a>
    </div>

    <div class="game-container">
        <div class="game-message">
            <p></p>
            <div class="lower">
                <a class="keep-playing-button">Keep going</a>
                <a class="retry-button">Try again</a>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
        </div>

        <div class="tile-container">

        </div>
    </div>

    <p class="game-explanation">
        <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
    </p>
</div>