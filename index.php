<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart House</title>

    <link rel="stylesheet" href="ui/semantic.min.css">
    <link rel="stylesheet" href="ui/main.css">
</head>
<body>

    <h2 class="ui center aligned icon header efeito" id="main-header">
        <i class="home icon"></i>
        <div class="content">
            Smart Home
            <div class="sub header">Gerencie e veja as informações sobre sua casa.</div>
        </div>
    </h2>

    <div class="ui container">
        <div class="ui link cards efeitos">
                
            <div class="green card efeito transition hidden">
                <div class="content">
                    <div class="header">Quarto</div>
                    <div class="meta">
                        <a>Matheus</a>
                    </div>
                    <div class="description">
                        Luz Central: <span id="on">LIGADA</span> <br> <br>
                        Ventilação: <span id="off">DESLIGADA</span>
                    </div>
                </div>
                
                <div class="extra content">
                    <span class="right floated">
                        <i class="tint icon"></i>
                            10%
                        </span>
                    <span>
                    <i class="thermometer icon"></i>
                        28&deg;C
                    </span>
                </div>
            </div>

            <div class="red card efeito transition hidden">
                <div class="content">
                    <div class="header">Sala de Jantar</div>
                    <div class="meta">
                        <a>--</a>
                    </div>
                    <div class="description">
                        Luz Central: <span id="off">--</span> <br> <br>
                        Ventilação: <span id="off">--</span> <br> <br>
                        WIFI: <span id="off">--</span>
                    </div>
                </div>
                
                <div class="extra content">
                    <span class="right floated">
                        <i class="tint icon"></i>
                            --%
                        </span>
                    <span>
                    <i class="thermometer icon"></i>
                        --&deg;C
                    </span>
                </div>
            </div>
                
        </div>
    </div>
    
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="ui/semantic.min.js"></script>
<script>

    // Animations

    $('.efeitos .efeito').transition({
        animation : 'zoom',
        reverse   : 'true', // default setting
        interval  : 350
    });

</script>
</html>