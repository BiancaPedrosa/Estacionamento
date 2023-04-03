<?php session_start();?>
<html>
  <head>
      <title>Estacione Aqui</title>
        <link rel="stylesheet" href="../CSS/estilo_menu.css">
      <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
    

    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark teal mb-4" style=" font-family: 'Trirong', serif; border-radius: 5px 5px; ">
            <a class="navbar-brand" href="#"><img src="https://img.icons8.com/plasticine/65/000000/car--v2.png" height="45" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="..\PHP\pagina_de_entrada_admin.php">Página inicial<span class="sr-only">(current)</span></a>
                        </li>
                                          
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lojas</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="form_adiciona_loja.php">Adicionar Nova Loja</a>
                            <a class="dropdown-item"  href="tabela_ver_lojas_conveniadas.php">Lojas Conveniadas</a>
                            </div>  
                        </li>
                                      
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Veículos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="form_adicionar_veiculo.php">Adicionar novo veículo</a>
                            <a class="dropdown-item"  href="tabela_ver_veiculos_dentro.php">Gerenciar a Entrada</a>
                            <a class="dropdown-item" href="tabela_ver_veiculos_fora.php">Gerenciar Veículos Fora</a>
                            </div>  
                        </li>
                        
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#"><img src="https://img.icons8.com/plasticine/50/000000/envelope-number.png"/>Suporte <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form_tarifa.php"><img src="../images/icons8-real-64.png"/><?php echo $_SESSION["tarifa"];?> </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="55" height="45"
                                viewBox="0 0 225 225"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,225.98959v-225.98959h225.98959v225.98959z" fill="none"></path>
                                    <g><path d="M154.125,78.75c0,-2.664 -1.332,-5.01075 -3.357,-6.435c0.69525,-1.062 1.107,-2.3265 1.107,-3.69c0,-3.2535 -2.30175,-5.967 -5.36625,-6.606c0.5355,-1.062 0.86625,-2.24775 0.86625,-3.519c0,-4.00725 -3.00375,-7.2765 -6.87375,-7.77375c0.063,-0.40275 0.12375,-0.8055 0.12375,-1.22625c0,-4.34925 -3.52575,-7.875 -7.875,-7.875c-0.61875,0 -1.21275,0.08775 -1.791,0.22275c-1.21725,-2.7765 -3.9825,-4.72275 -7.209,-4.72275c-0.882,0 -1.71675,0.17775 -2.50875,0.4455c-1.233,-1.62675 -3.168,-2.6955 -5.36625,-2.6955c-1.737,0 -3.303,0.675 -4.5,1.75275c-1.197,-1.07775 -2.763,-1.75275 -4.5,-1.75275c-2.19825,0 -4.13325,1.06875 -5.36625,2.6955c-0.792,-0.26775 -1.62675,-0.4455 -2.50875,-0.4455c-3.2265,0 -5.99175,1.94625 -7.209,4.72275c-0.57825,-0.135 -1.17225,-0.22275 -1.791,-0.22275c-4.34925,0 -7.875,3.52575 -7.875,7.875c0,0.42075 0.06075,0.8235 0.12375,1.22625c-3.87,0.49725 -6.87375,3.7665 -6.87375,7.77375c0,1.27125 0.33075,2.457 0.86625,3.519c-3.0645,0.639 -5.36625,3.3525 -5.36625,6.606c0,1.3635 0.41175,2.628 1.107,3.69c-2.025,1.42425 -3.357,3.771 -3.357,6.435c0,2.5155 1.2015,4.7295 3.0375,6.17175c-0.48825,0.83475 -0.7875,1.79325 -0.7875,2.82825c0,3.10725 2.51775,5.625 5.625,5.625c1.83375,0 67.91625,0 69.75,0c3.10725,0 5.625,-2.51775 5.625,-5.625c0,-1.035 -0.29925,-1.9935 -0.7875,-2.82825c1.836,-1.44225 3.0375,-3.65625 3.0375,-6.17175z" fill="#000000"></path><path d="M153,164.25c-9.73125,-3.6495 -16.173,-5.98275 -20.04075,-7.3575c-0.6435,-0.2295 -1.215,-0.42975 -1.719,-0.6075c-1.80225,-0.6345 -2.99025,-2.32875 -2.99025,-4.239v-6.8265c9.9945,-6.50025 18,-16.97175 18,-21.4695c0,-2.25 0,-9 0,-9c4.5,0 5.35725,-4.2705 6.75,-9c1.2825,-4.35375 2.25,-9 2.25,-11.25c0,-4.21875 -12.375,-5.625 -12.375,-5.625h-0.009c-0.06975,-3.9375 -0.73125,-17.79075 -6.45975,-29.25c0,0 -9.28125,-4.5 -23.90625,-4.5c-14.625,0 -23.90625,4.5 -23.90625,4.5c-5.74425,11.49075 -6.597,25.389 -6.72525,29.2815c-1.69425,0.21825 -12.1185,1.71675 -12.1185,5.5935c0,2.25 0.9675,6.89625 2.25,11.25c1.39275,4.7295 2.25,9 6.75,9c0,0 0,6.75 0,9c0,4.49775 8.0055,14.96925 18,21.4695v6.8265c0,1.91025 -1.188,3.6045 -2.99025,4.239c-0.504,0.17775 -1.0755,0.38025 -1.719,0.6075c-3.86775,1.37475 -10.3095,3.708 -20.04075,7.3575c-18,6.75 -18,24.75 -18,24.75h117c0,0 0,-18 -18,-24.75z" fill="#ccac94"></path>
                                    <path d="M171,189h-117c0,0 0,-18 18,-24.75c9.72,-3.645 16.1775,-5.985 20.0475,-7.3575c0.63,-0.225 1.215,-0.4275 1.71,-0.6075c1.485,-0.5175 2.565,-1.7775 2.88,-3.2625c3.3975,1.1025 8.6625,4.4775 15.8625,4.4775c7.2225,0 12.465,-3.3525 15.8625,-4.455c0.3375,1.485 1.395,2.7225 2.88,3.24c0.495,0.18 1.08,0.3825 1.71,0.6075c3.87,1.3725 10.3275,3.7125 20.0475,7.3575c18,6.75 18,24.75 18,24.75z" fill="#fed5b3"></path><rect x="47.5" y="72.5" transform="scale(2.25,2.25)" width="5" height="11.5" fill="#fcba7f"></rect>
                                    <path d="M144,90.02025l-2.25,-0.03825c0.00225,-0.16425 0.189,-16.46775 -6.174,-29.4975c-1.782,-0.77625 -10.44,-4.2345 -23.076,-4.2345c-12.636,0 -21.294,3.45825 -23.076,4.2345c-6.37425,13.03875 -6.45525,29.35125 -6.45525,29.5155h-2.25c0,-0.702 0.07875,-17.298 6.86925,-30.879c0.11025,-0.22275 0.2925,-0.4005 0.51525,-0.51075c0.38925,-0.1845 9.68175,-4.61025 24.39675,-4.61025c14.715,0 24.0075,4.42575 24.39675,4.6125c0.22275,0.11025 0.405,0.288 0.51525,0.51075c6.795,13.58775 6.59925,30.195 6.588,30.897z" fill="#1f212b"></path><path d="M112.5,123.75c-4.44825,0 -6.44175,-2.58975 -6.525,-2.7c-0.3735,-0.49725 -0.27225,-1.2015 0.225,-1.575c0.49725,-0.369 1.19475,-0.27 1.56825,0.21825c0.07425,0.09 1.4805,1.80675 4.73175,1.80675c3.2715,0 4.6755,-1.73475 4.734,-1.81125c0.38025,-0.48375 1.08225,-0.57825 1.57275,-0.2025c0.48825,0.37575 0.5895,1.071 0.21825,1.5615c-0.08325,0.1125 -2.07675,2.70225 -6.525,2.70225z" fill="#1f212b"></path><path d="M112.5,150.75c-4.7385,0 -10.18575,-1.9125 -15.75,-5.5305l1.22625,-1.8855c5.1975,3.3795 10.2195,5.166 14.52375,5.166c4.30425,0 9.32625,-1.7865 14.52375,-5.166l1.22625,1.8855c-5.56425,3.618 -11.0115,5.5305 -15.75,5.5305z" fill="#1f212b"></path><path d="M171,191.25h-117c-1.242,0 -2.25,-1.00575 -2.25,-2.25c0,-0.19575 0.22275,-19.6425 19.46025,-26.85825c10.134,-3.80025 16.51725,-6.1065 20.08575,-7.36875l1.68975,-0.603c0.74925,-0.261 1.29375,-0.8775 1.45125,-1.61775c0.04275,-0.2025 0.063,-0.3555 0.063,-0.49725v-5.6385c-9.5445,-6.55425 -18,-17.1225 -18,-22.6665v-7.04475c-4.00725,-1.143 -5.24025,-5.409 -6.345,-9.2385l-0.31275,-1.07775c-1.08,-3.66075 -2.34225,-8.9685 -2.34225,-11.889c0,-5.63175 10.05075,-7.37325 14.373,-7.8615l0.504,4.473c-5.337,0.60525 -10.04175,2.36475 -10.3815,3.41775c0.0045,1.88775 0.91125,6.3495 2.16225,10.584l0.32175,1.10475c1.404,4.86675 2.13525,6.282 4.2705,6.282c1.242,0 2.25,1.00575 2.25,2.25v9c0,3.35475 7.29,13.27275 16.97625,19.5795c0.639,0.41625 1.02375,1.125 1.02375,1.8855v6.84c0,0.4635 -0.05175,0.918 -0.162,1.43775c-0.4815,2.27025 -2.1465,4.15575 -4.3425,4.9185l-1.6875,0.603c-3.56175,1.26225 -9.91575,3.555 -20.01825,7.34625c-12.68775,4.7565 -15.64425,15.66675 -16.33275,20.39175h112.10175c-0.6525,-4.7295 -3.546,-15.5925 -16.35075,-20.39175c-10.1025,-3.79125 -16.4565,-6.084 -20.00925,-7.344l-1.728,-0.61425c-2.16225,-0.7515 -3.7845,-2.57175 -4.30425,-4.8555c-0.1125,-0.5355 -0.1665,-1.026 -0.1665,-1.49175v-6.84c0,-0.7605 0.38475,-1.46925 1.02375,-1.8855c9.68625,-6.30675 16.97625,-16.22475 16.97625,-19.5795v-9c0,-1.24425 1.008,-2.25 2.25,-2.25c2.13525,0 2.8665,-1.41525 4.2705,-6.282l0.32175,-1.10475c1.251,-4.2345 2.15775,-8.69625 2.15775,-10.61325c-0.33525,-1.02825 -5.04225,-2.78775 -10.377,-3.3885l0.504,-4.473c4.32225,0.48825 14.373,2.22975 14.373,7.8615c0,2.9205 -1.26225,8.22825 -2.34225,11.88675l-0.31275,1.07775c-1.10475,3.8295 -2.33775,8.09775 -6.345,9.2385v7.047c0,5.544 -8.4555,16.11225 -18,22.6665v5.6385c0,0.1485 0.02025,0.32625 0.063,0.5175c0.1665,0.73125 0.69975,1.3365 1.4175,1.58625l1.7325,0.61425c3.5595,1.26225 9.94275,3.56625 20.07675,7.3665c19.2375,7.218 19.46025,26.66475 19.46025,26.8605c0,1.24425 -1.008,2.25 -2.25,2.25z" fill="#1f212b"></path><path d="M71.487,92.23875c-1.1205,-1.251 -1.737,-2.84625 -1.737,-4.48875c0,-0.87975 0.17325,-1.73475 0.5175,-2.5515c-1.7685,-1.6965 -2.7675,-4.0005 -2.7675,-6.4485c0,-2.57625 1.11825,-5.0175 3.03075,-6.7185c-0.513,-1.062 -0.78075,-2.223 -0.78075,-3.4065c0,-3.25125 2.025,-6.14475 4.97025,-7.31925c-0.31275,-0.918 -0.47025,-1.85625 -0.47025,-2.80575c0,-4.11975 2.83725,-7.6725 6.759,-8.67825c-0.00675,-0.108 -0.009,-0.21375 -0.009,-0.32175c0,-4.9635 4.0365,-9 9,-9c0.38025,0 0.765,0.02925 1.1655,0.0855c1.91925,-3.40875 5.77575,-5.3865 9.95625,-4.30425c2.5785,-2.7945 7.11,-3.30525 10.25325,-1.09125c3.141,-2.21175 7.677,-1.70325 10.25325,1.09125c4.17825,-1.08225 8.037,0.8955 9.95625,4.30425c0.4005,-0.05625 0.78525,-0.0855 1.1655,-0.0855c4.9635,0 9,4.0365 9,9c0,0.108 -0.00225,0.21375 -0.009,0.32175c3.92175,1.00575 6.759,4.5585 6.759,8.67825c0,0.9495 -0.1575,1.88775 -0.47025,2.80575c2.94525,1.1745 4.97025,4.068 4.97025,7.31925c0,1.1835 -0.26775,2.3445 -0.78075,3.4065c1.9125,1.701 3.03075,4.14225 3.03075,6.7185c0,2.448 -0.999,4.752 -2.7675,6.4485c0.34425,0.81675 0.5175,1.67175 0.5175,2.5515c0,1.2645 -0.3645,2.50425 -1.053,3.5955l-1.90125,-1.20375c0.46125,-0.729 0.70425,-1.557 0.70425,-2.39175c0,-0.783 -0.21375,-1.5435 -0.6345,-2.259c-0.28575,-0.486 -0.1665,-1.107 0.27675,-1.4535c1.65825,-1.30275 2.60775,-3.22875 2.60775,-5.2875c0,-2.18475 -1.07775,-4.248 -2.88,-5.51475c-0.49725,-0.34875 -0.6255,-1.0305 -0.2925,-1.539c0.603,-0.92025 0.9225,-1.9845 0.9225,-3.07125c0,-2.64825 -1.87875,-4.9635 -4.47075,-5.5035c-0.342,-0.06975 -0.63225,-0.297 -0.783,-0.612c-0.153,-0.315 -0.1485,-0.68175 0.009,-0.99225c0.495,-0.9855 0.74475,-1.998 0.74475,-3.01725c0,-3.36375 -2.53125,-6.228 -5.8905,-6.65775c-0.3015,-0.0405 -0.57375,-0.198 -0.756,-0.43875c-0.18225,-0.243 -0.25875,-0.549 -0.2115,-0.8505c0.05175,-0.3465 0.108,-0.693 0.108,-1.053c0,-3.7215 -3.0285,-6.75 -6.75,-6.75c-0.477,0 -0.97875,0.063 -1.53225,0.1935c-0.5265,0.1395 -1.071,-0.144 -1.28925,-0.6435c-1.0755,-2.45925 -3.501,-4.05 -6.1785,-4.05c-0.675,0 -1.37925,0.12825 -2.14875,0.387c-0.4635,0.1485 -0.96525,-0.00225 -1.25775,-0.387c-1.92375,-2.547 -5.823,-2.9475 -8.21475,-0.7875c-0.4275,0.3825 -1.07775,0.3825 -1.50525,0c-2.39175,-2.15775 -6.29325,-1.7595 -8.21475,0.7875c-0.2925,0.38475 -0.79875,0.53775 -1.25775,0.387c-0.77175,-0.25875 -1.476,-0.387 -2.151,-0.387c-2.6775,0 -5.103,1.59075 -6.1785,4.05c-0.21825,0.4995 -0.756,0.783 -1.28925,0.6435c-0.5535,-0.1305 -1.05525,-0.1935 -1.53225,-0.1935c-3.7215,0 -6.75,3.0285 -6.75,6.75c0,0.36 0.05625,0.7065 0.11025,1.053c0.04725,0.3015 -0.02925,0.6075 -0.2115,0.8505c-0.18225,0.24075 -0.45675,0.4005 -0.756,0.43875c-3.3615,0.42975 -5.89275,3.294 -5.89275,6.65775c0,1.01925 0.24975,2.03175 0.74475,3.015c0.1575,0.31275 0.162,0.6795 0.009,0.99225c-0.15075,0.31725 -0.441,0.54225 -0.783,0.612c-2.592,0.54225 -4.47075,2.8575 -4.47075,5.50575c0,1.08675 0.3195,2.151 0.9225,3.07125c0.333,0.5085 0.2025,1.188 -0.2925,1.539c-1.80225,1.26675 -2.88,3.33 -2.88,5.51475c0,2.05875 0.9495,3.98475 2.60775,5.2875c0.44325,0.3465 0.5625,0.96975 0.27675,1.4535c-0.42075,0.7155 -0.6345,1.476 -0.6345,2.259c0,1.089 0.414,2.14875 1.16325,2.98575z" fill="#1f212b"></path><path d="M107.928,98.85375c-0.4185,4.92975 -2.646,10.90125 -10.872,11.38725c-11.60325,-0.018 -13.806,-4.7565 -13.806,-13.491v-4.095c0,-2.30175 1.73025,-4.2255 4.0185,-4.47975c2.28375,-0.24975 4.75425,-0.42525 7.2315,-0.42525c4.6575,0 10.4625,1.04625 12.53025,3.33675c0.3555,0.9855 1.224,3.87675 0.89775,7.767zM109.00125,89.93925c-2.6685,-3.46725 -10.00125,-4.43925 -14.50125,-4.43925c-8.991,0 -17.96625,2.23425 -18,2.23425v0l0.73125,4.34025c3.186,-0.78525 3.76875,2.4255 3.76875,4.6755c0,9 2.25,15.741 16.11675,15.741c10.23525,-0.567 12.62925,-8.47125 13.05225,-13.44825c0.45675,-5.42475 -1.17,-9.0855 -1.16775,-9.1035z" fill="#1f212b"></path><path d="M117,97.03125c0,0 -1.125,-2.53125 -4.5,-2.53125c-3.375,0 -4.5,2.25 -4.5,2.25v-4.5h9z" fill="#1f212b"></path><path d="M112.5,135c-10.566,0 -17.379,-5.0175 -17.6625,-5.23125c-0.3735,-0.279 -0.44775,-0.8055 -0.16875,-1.179c0.279,-0.37125 0.8055,-0.45 1.18125,-0.171c0.06525,0.0495 6.67125,4.33125 16.65,4.33125c9.97875,0 16.58475,-4.28175 16.65,-4.33125c0.37575,-0.279 0.90225,-0.20025 1.18125,0.171c0.279,0.3735 0.2025,0.9 -0.16875,1.179c-0.2835,0.21375 -7.0965,5.23125 -17.6625,5.23125z" fill="#1f212b"></path><path d="M96.75,90c-1.79775,0 -3.3345,1.32525 -4.05675,3.22875c0.40725,-0.57825 1.04625,-0.97875 1.80675,-0.97875c1.242,0 2.25,1.008 2.25,2.25c0,1.242 -1.008,2.25 -2.25,2.25c-1.1295,0 -2.02275,-0.846 -2.18475,-1.92825c-0.0315,0.26325 -0.06525,0.52875 -0.06525,0.80325c0,3.10725 2.01375,5.625 4.5,5.625c2.48625,0 4.5,-2.51775 4.5,-5.625c0,-3.10725 -2.01375,-5.625 -4.5,-5.625z" fill="#1f212b"></path><path d="M128.25,90c-1.79775,0 -3.3345,1.32525 -4.05675,3.22875c0.40725,-0.57825 1.04625,-0.97875 1.80675,-0.97875c1.242,0 2.25,1.008 2.25,2.25c0,1.242 -1.008,2.25 -2.25,2.25c-1.1295,0 -2.02275,-0.846 -2.18475,-1.92825c-0.0315,0.26325 -0.06525,0.52875 -0.06525,0.80325c0,3.10725 2.01375,5.625 4.5,5.625c2.48625,0 4.5,-2.51775 4.5,-5.625c0,-3.10725 -2.01375,-5.625 -4.5,-5.625z" fill="#1f212b"></path><path d="M117.96975,91.08675c2.06775,-2.2905 7.87275,-3.33675 12.53025,-3.33675c2.47725,0 4.94775,0.1755 7.2315,0.4275c2.28825,0.252 4.0185,2.17575 4.0185,4.4775v4.095c0,8.7345 -2.20275,13.473 -13.80375,13.491c-8.226,-0.486 -10.4535,-6.4575 -10.872,-11.38725c-0.3285,-3.89025 0.54,-6.7815 0.8955,-7.767zM114.831,99.04275c0.423,4.977 2.81475,12.879 13.05225,13.44825c13.86675,0 16.11675,-6.741 16.11675,-15.741c0,-2.25 0.58275,-5.46075 3.76875,-4.6755l0.73125,-4.34025v0c-0.03375,0 -9.009,-2.23425 -18,-2.23425c-4.5,0 -11.83275,0.972 -14.50125,4.43925c0.00225,0.018 -1.6245,3.67875 -1.16775,9.1035z" fill="#1f212b"></path>
                                    <path d="M135.7065,80.43975l1.5435,-2.9475c-2.87325,-0.6705 -5.94,-0.99675 -9,-0.99225c-3.8925,0.00675 -7.776,0.55575 -11.25,1.62675l1.94625,2.87325c2.853,-0.93825 6.075,-1.3995 9.30375,-1.40625c2.538,-0.00675 5.08275,0.261 7.4565,0.846z" fill="#1f212b"></path><path d="M96.75,79.59375c3.22875,0.00675 6.45075,0.468 9.30375,1.40625l1.94625,-2.87325c-3.474,-1.071 -7.3575,-1.61775 -11.25,-1.62675c-3.06,-0.00675 -6.12675,0.32175 -9,0.99225l1.5435,2.9475c2.37375,-0.585 4.9185,-0.85275 7.4565,-0.846z" fill="#1f212b"></path><path d="M108,92.25h9v4.5c0,0 -1.125,-2.25 -4.5,-2.25c-3.375,0 -4.5,2.53125 -4.5,2.53125z" fill="#1f212b"></path><path d="M112.5,163.584c0,0 -3.79125,5.8905 -16.06275,6.28875c-1.66275,0.054 -3.06225,-1.37925 -3.06225,-3.1725v-9.40275c0,-1.79325 1.3995,-3.2265 3.06225,-3.1725c12.2715,0.4005 16.06275,6.291 16.06275,6.291z" fill="#78a2d2"></path><path d="M96.34275,171c-1.0305,0 -2.00925,-0.40275 -2.772,-1.14075c-0.83925,-0.81225 -1.32075,-1.962 -1.32075,-3.15675v-9.405c0,-1.19475 0.4815,-2.3445 1.32075,-3.15675c0.7965,-0.7695 1.79775,-1.15875 2.90475,-1.1385c12.7125,0.414 16.803,6.543 16.9695,6.804c0.117,0.18225 0.18,0.39375 0.18,0.60975v3.168c0,0.216 -0.063,0.42525 -0.18,0.60975c-0.16875,0.261 -4.257,6.39225 -16.97175,6.804c-0.04275,0 -0.0855,0.00225 -0.1305,0.00225zM96.34725,155.25c-0.44325,0 -0.873,0.18 -1.21275,0.5085c-0.40275,0.38925 -0.6345,0.9495 -0.6345,1.539v9.405c0,0.5895 0.23175,1.14975 0.6345,1.54125c0.35325,0.33975 0.79425,0.5535 1.26675,0.50625c10.0395,-0.32625 14.1075,-4.49325 14.97375,-5.54175v-2.412c-0.85725,-1.0395 -4.923,-5.2155 -14.97375,-5.54175c-0.018,-0.0045 -0.036,-0.0045 -0.054,-0.0045z" fill="#1f212b"></path><path d="M112.5,163.584c0,0 3.79125,5.8905 16.06275,6.28875c1.66275,0.054 3.06225,-1.37925 3.06225,-3.1725v-9.40275c0,-1.79325 -1.3995,-3.2265 -3.06225,-3.1725c-12.26925,0.4005 -16.06275,6.291 -16.06275,6.291z" fill="#78a2d2"></path><path d="M128.655,171c-0.04275,0 -0.08775,-0.00225 -0.1305,-0.00225c-12.7125,-0.414 -16.803,-6.543 -16.9695,-6.804c-0.117,-0.18 -0.18,-0.39375 -0.18,-0.60975v-3.168c0,-0.216 0.063,-0.4275 0.18,-0.60975c0.16875,-0.261 4.25925,-6.39225 16.97175,-6.804c1.08225,0.02475 2.10825,0.36675 2.90475,1.1385c0.837,0.81225 1.3185,1.962 1.3185,3.15675v9.405c0,1.19475 -0.4815,2.3445 -1.32075,3.15675c-0.76275,0.738 -1.74375,1.14075 -2.77425,1.14075zM113.625,163.206c0.86625,1.0485 4.93425,5.2155 14.97375,5.54175c0.4725,0.06975 0.9135,-0.162 1.26675,-0.50625c0.40275,-0.38925 0.6345,-0.9495 0.6345,-1.539v-9.405c0,-0.5895 -0.23175,-1.14975 -0.6345,-1.54125c-0.35325,-0.33975 -0.79875,-0.57375 -1.26675,-0.50625c-10.13625,0.3285 -14.12775,4.4865 -14.97375,5.535z" fill="#1f212b"></path><path d="M113.625,167.625h-2.25c-2.48625,0 -4.5,-2.01375 -4.5,-4.5v-2.25c0,-2.48625 2.01375,-4.5 4.5,-4.5h2.25c2.48625,0 4.5,2.01375 4.5,4.5v2.25c0,2.48625 -2.01375,4.5 -4.5,4.5z" fill="#c7dff1"></path><path d="M113.625,168.75h-2.25c-3.1005,0 -5.625,-2.52225 -5.625,-5.625v-2.25c0,-3.10275 2.5245,-5.625 5.625,-5.625h2.25c3.1005,0 5.625,2.52225 5.625,5.625v2.25c0,3.10275 -2.5245,5.625 -5.625,5.625zM111.375,157.5c-1.86075,0 -3.375,1.51425 -3.375,3.375v2.25c0,1.86075 1.51425,3.375 3.375,3.375h2.25c1.86075,0 3.375,-1.51425 3.375,-3.375v-2.25c0,-1.86075 -1.51425,-3.375 -3.375,-3.375z" fill="#1f212b"></path><rect x="52" y="74.5" transform="scale(2.25,2.25)" width="1" height="9" fill="#1f212b"></rect><rect x="47" y="74.5" transform="scale(2.25,2.25)" width="1" height="9" fill="#1f212b"></rect><rect x="58.5" y="80.5" transform="scale(2.25,2.25)" width="8" height="3" fill="#78a2d2"></rect><path d="M149.625,189h-18c-0.621,0 -1.125,-0.504 -1.125,-1.125v-6.75c0,-0.621 0.504,-1.125 1.125,-1.125h18c0.621,0 1.125,0.504 1.125,1.125v6.75c0,0.621 -0.504,1.125 -1.125,1.125zM132.75,186.75h15.75v-4.5h-15.75z" fill="#1f212b"></path></g></g></svg> Administrador</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="#">Minha conta</a>
                                <a class="dropdown-item" href="sair.php">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>  
    
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </body>
