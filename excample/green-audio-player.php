<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Green Audio Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./green-audio-player.css">
    <!-- <link rel="stylesheet" type="text/css" href="./green-audio-player copy.css"> -->
    <style>
        html, body { height: 100%; }

        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #F8FFAE;
            background: -webkit-linear-gradient(-65deg, #43C6AC, #F8FFAE);
            background: linear-gradient(-65deg, #43C6AC, #F8FFAE);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>
    <div class="ready-player-1">
        <audio crossorigin preload="none">
            <source src="../audio/audio4.mp3" type="audio/mpeg">
        </audio>
    </div>
<div class="green-audio-player">

    <div class="volume__controls top">
            <div class="volume__slider slider" data-direction="vertical" tabindex="0">
                <div class="volume__progress gap-progress" aria-label="Volume Slider" aria-valuemin="0" aria-valuemax="100" aria-valuenow="81" role="slider" style="width: 81%;">
                    <div class="pin volume__pin" data-method="changeVolume"></div>
                </div>
                <!-- <span class="message__offscreen">Use Up/Down Arrow keys to increase or decrease volume.</span> -->
            </div>
        </div>
</div>
                

    <script src="./green-audio-player.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new GreenAudioPlayer('.ready-player-1', { showTooltips: true, showDownloadButton: false, enableKeystrokes: true });
        });
    </script>
</body>
</html>
